<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'item_category_id',
        'item_condition_id',
        'name',
        'price',
        'description',
        'image',
        'bland'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(ItemCategory::class, 'item_category_id');
    }

    public function condition()
    {
        return $this->belongsTo(ItemCondition::class, 'item_condition_id');
    }

    public function comments()
    {
        return $this->hasMany(ItemComment::class);
    }

    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }

    public function mylists()
    {
        return $this->hasMany(Mylist::class);
    }
}
