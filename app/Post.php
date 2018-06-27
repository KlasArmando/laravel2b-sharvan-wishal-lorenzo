<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = array('post');

public function post()
{
    return $this->belongsto('App\user');
}}
