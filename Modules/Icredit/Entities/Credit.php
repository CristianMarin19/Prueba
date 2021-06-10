<?php

namespace Modules\Icredit\Entities;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{
    use Translatable;

    protected $table = 'icredit__credits';
    public $translatedAttributes = [];
    protected $fillable = [];
}
