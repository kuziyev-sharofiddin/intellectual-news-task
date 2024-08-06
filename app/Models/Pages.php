<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;

class Pages extends Model implements HasMedia
{
    use HasFactory,
        HasTranslations,
        InteractsWithMedia;

    /**
     * @var string[]
     */
    public $translatable = ['title', 'description'];

    /**
     * @var string[]
     */
    protected $fillable = [
        'title',
        'name',
        'description',
        'views_count',
    ];

    /**
     * @var string[]
     */
    protected $casts = [
        'title' => 'array',
        'description' => 'array',
    ];


    /**
     * @return mixed
     */
    public function getImageUrl()
    {
        $urlToFirstListImage = $this->getMedia("*");

        return isset($urlToFirstListImage[0]) ? $urlToFirstListImage[0]->getFullUrl() : '';
    }

    public function images():HasMany
    {
        return $this->hasMany(Image::class);
    }

    public function getCreatedAtFormattedAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->format('d F Y');
    }
}
