<?php

namespace App\Models;

use App\Models\posts;
use Database\Factories\CategoryFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class category extends Model
{
    use HasFactory;
    protected $table="categories";

    protected $fillable = [
        'title',
        'description',
    ];

        /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return CategoryFactory::new();
    }
    // public function posts(){
    //     return $this->hasMany(posts::class);
    // }
}
