<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shop extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'shops';
    protected $fillable = [
        'user_id',
        'name',
        'owner_name',
        'description',
        'shop_image',
        'address',
        'mobile_number',
        'email',
        'items',
        'license_number',
        'type'
    ];
    protected $casts = [
        'items' => 'array'
    ];

    public function users(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
