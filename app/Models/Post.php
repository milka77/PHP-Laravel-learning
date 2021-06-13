<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    // Need to define the table name if its different from the class name
    // protected $table = 'posts';

    // To allow mass assaign data for create method need specify what is columns are 
    // allowed, safe to do so. 

    protected $dates = ['deleted_at'];
    

    protected $fillable = [
        'title',
        'body'
    ];

    public function user() {
        
        return $this->belongsTo('App\Models\User');
    }

    public function photos() {

        return $this->morphMany('App\Models\Photo', 'imageable');

    }

    public function tags() {

        return $this->morphToMany('App\Models\Tag', 'taggable');

    }

}
