<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ProductReview extends Model
{
    use HasFactory;

    protected $fillable = [
      'comment',
      'rating'
    ];

    protected $casts = [
        'rating' => 'float'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function product(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }



}
