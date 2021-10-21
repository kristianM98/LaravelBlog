<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;


    /**
     * The attributes that are mass assignable
     *
     * @var array
     */
    protected $fillable = [
        'tag'
    ];


    /*
     * A tag can belong to many posts
     */
    public function posts()
    {
        return $this->belongsToMany('App\Models\Post')->latest('created_at');
    }
}
