<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\DB;

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
    public function purchases() : BelongsToMany
    {
        return $this->belongsToMany(Product::class,"purchases");
    }
    public function scopeFilter($query, array $filters) 
    {
        $query->when($filters["gender"] ?? false, function ($query,$gender)  {
            $query->when($gender!=='all', function ($query) use($gender){
                $query->where("gender", $gender);
            });
        });
        $query->when($filters["priceMax"] ?? false, function ($query,$price)  {
            $query->where("price","<=",$price);
        });
        $query->when($filters["priceMin"] ?? false, function ($query,$price)  {
            $query->where("price",">=",$price);
        });
        $query->when($filters["search"] ?? false, function ($query,$search)  {
            $query->where("name","like","%$search%");
        });
        $query->when($filters["trending"] ?? false, function ($query,$time) {
            $query->when(($time === "trending") &&($time !== 'all'), function ($query) {
                $query->select("products.*",
                    DB::raw('COUNT(purchases.id) as purchase_count')
                )
                ->join('purchases', 'products.id', '=', 'purchases.product_id')
                ->groupBy('products.id')
                ->orderByDesc('purchase_count');
            });
            $query->when(($time === "unique") &&($time !== 'all'), function ($query) {
                $query->select("products.*",
                    DB::raw('COUNT(purchases.id) as purchase_count')
                )
                ->join('purchases', 'products.id', '=', 'purchases.product_id')
                ->groupBy('products.id')
                ->orderBy('purchase_count','asc');
                });
            });

    }
}
