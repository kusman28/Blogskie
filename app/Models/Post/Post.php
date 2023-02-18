<?php

namespace App\Models\Post;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $guarded = [];

    public $with = ['user'];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getTitleAttribute($title)
    {
        return ucfirst($title);
    }

    public function getBodyAttribute($body)
    {
        return ucfirst($body);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
