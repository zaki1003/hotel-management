<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Page extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pages';

    protected $fillable = ['title', 'url_title', 'description', 'rank', 'status'];

    /**
     * Set the user's first name.
     *
     * @param  string  $value
     * @return void
     */
    public function setUrlTitleAttribute()
    {
        $this->attributes['url_title'] = Str::slug($this->title);
    }
}
