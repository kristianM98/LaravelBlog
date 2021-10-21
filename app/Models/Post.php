<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'title',
        'text',
        'slug',
    ];

    protected $appends = [
        'teaser',
        'datetime',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function getDateTimeAttribute($value)
    {
        return date('Y-m-d', strtotime($this->created_at));
    }

    public function getCreatedAtAttribute($value)
    {
        return date('j M Y, G:i', strtotime($value));
    }

    public function setFirstNameAttribute($value)
    {
        $this->attributes['first_name'] = ucfirst($value);
    }

    public function getTeaserAttribute()
    {
        return word_limiter( $this->text, 60 );
    }

    public function getRichTextAttribute()
    {
        return add_paragraphs( filter_url( e( $this->text ) ));
    }

    /*
     * A post can belong to many tags
     */
    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag');
    }

    /*
     * Create slug from title before storing to DB
     *
     * @param $value
     */
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug( $value );
    }
}
