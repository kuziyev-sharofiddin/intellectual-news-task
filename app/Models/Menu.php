<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Menu extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = ['name'];
    protected $fillable = [
        'title',
        'name',
        'url_type',
        'url_value',
        'parent_id',
    ];

    /**
     * @param $id
     * @return mixed
     */
    public function subMenus($id)
    {
        return self::where('parent_id', $id)->get();
    }

    public function parent($id) {
        return self::query()->whereNull('parent_id')->findOrFail($id);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function subMenuItems($id)
    {
        return self::where('parent_id', $id)->get();
    }

    /**
     * @return string|null
     */
    public function getUrl()
    {
        if ($this->url_type === 'center_news') return route('center-news', $this->url_value);
        if ($this->url_type === 'history') return route('about-center.history', $this->url_value);
        if ($this->url_type === 'structure') return route('about-center.structure', $this->url_value);
        if ($this->url_type === 'leaderships') return route('leaderships', $this->url_value);
        if ($this->url_type === 'main_activity') return route('main-activity', $this->url_value);
        if ($this->url_type === 'documents') return route('documents', $this->url_value);
        if ($this->url_type === 'cooperation') return route('cooperation', $this->url_value);
        if ($this->url_type === 'mediateka') return route('mediateka', $this->url_value);
        if ($this->url_type === 'press') return route('press', $this->url_value);
        if ($this->url_type === 'interactive') return route('interactive', $this->url_value);
        if ($this->url_type === 'many_questions') return route('connection.many-questions');
        if ($this->url_type === 'open_data') return route('open-data', $this->url_value);
        return null;
    }
}
