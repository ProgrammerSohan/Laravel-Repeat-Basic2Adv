<?php

namespace App\Models;

use App\Models\Post;
use App\Models\MyPost;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $table = 'category';

    public function posts()
    {
        return $this->hasMany(MyPost::class);

    }

}
