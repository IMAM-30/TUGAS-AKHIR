<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Post extends Model
{
    // ingin memilih table lain
    // protected $table = 'blog_posts';

    // ketika ingin merubah primary key nya
    // protected $primaryKey = 'post_id';

    // Untuk menambahkan database lewat terminal menggunakan tinker, mengisi formatnya terlebih dahulu
    protected $fillable = ['title','author','slug','body'];


}