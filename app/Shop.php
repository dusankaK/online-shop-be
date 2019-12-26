<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Manager;
use App\Comment;

class Shop extends Model
{   
    protected $guarded = ['id'];

    public function manager() 
    {
        return $this->belongsTo(Manager::class, 'manager_id');
    }

    public function comments() 
    {
        return $this->hasMany(Comment::class);
    }

    public static function search($searchTerm)
    {
        return Shop::where('name','LIKE', "%{$searchTerm}%")
                        ->orderBy('name')
                        ->get();
    }
}
