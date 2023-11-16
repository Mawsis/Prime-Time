<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;
    public function buyers() : BelongsToMany
    {
        return $this->belongsToMany(User::class,"purchases");
    }
    public function color() : HasOne
    {
        return $this->hasOne(Color::class);
    }
    public function scopeFilter($query, array $filters) 
    {
        $query->when($filters["gender"] ?? false, function ($query,$gender)  {
            $query->where("gender", $gender);
        });
    }
}
