<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    static public function boot()
    {
        parent::boot();

        static::creating(function(Model $model) {
            $model->slug = str()->slug($model->title, '-');
        });
    }

    public function attributes(): HasMany
    {
        return $this->hasMany(AttributeOption::class);
    }

    public function categories(): HasMany
    {
        return $this->hasMany(Category::class);
    }
}
