<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'body',
        'published_at',
        'user_id'
    ];

    /**
     * Additional fields to be treated as Carbon instances.
     */
    protected $dates = ['published_at'];

    /**
     * Scope queries to Articles that have been published.
     */
    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now());
    }

    public function scopeUnpublished($query)
    {
        $query->where('published_at', '>', Carbon::now());
    }

    /**
     * Set the published_at attribute
     */
    public function setPublishedAtAttribute($date)
    {
        if (Input::get('published_at') >= Carbon::now()) {
            $this->attributes['published_at'] = Carbon::parse($date);
        } else {
            $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d',$date);
        }
    }

    /**
     * An Article is owned by a user.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
