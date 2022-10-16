<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait HasSlug
{
    public static function bootHasSlug(): void
    {
        static::creating(function (self $model) {
            $model->slug = $model->findSlug();
        });
    }

    /**
     * find a unique slug for model column
     */
    protected function findSlug(string $column = 'name'): string
    {
        $index = 2;

        $slugConst = Str::slug($this->{$column});
        $slug = $slugConst;

        while (self::where('slug', $slug)->exists()) {
            $slug = $slugConst . '-' . $index++;
        }

        return $slug;
    }
}
