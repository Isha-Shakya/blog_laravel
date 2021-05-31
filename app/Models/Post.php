<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'blog_title',
        'blog_desc',
        'image',
    ];
    protected $attributes = [
        'image' => '',
    ];
    protected $with = ['category']; 
    public function category(){
        return $this ->belongsTo(category::class,'category_id');
    }
}
