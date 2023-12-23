<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    use HasFactory;

    static function boot()
    {
        parent::boot();

        static::creating(function($model) {
           $model->slug = str()->slug($model->name, '-');
        });
    }

    public function scopeFindBySlug($query, $slug)
    {
        return $query->where('slug', '=', $slug)->first();
    }

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }
}
