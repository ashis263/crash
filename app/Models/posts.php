<?php

namespace App\Models;

use App\Models\category;
use Database\Factories\PostFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class posts extends Model
{
    use HasFactory;

    protected $table="posts";

    protected $fillable = [
        'title',
        'description',
    ];

    protected static function newFactory()
    {
        return PostFactory::new();
    }
    // public function category() {
        
    //     return $this->belongsTo(category::class);
    // }
}
