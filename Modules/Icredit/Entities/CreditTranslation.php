<?php

namespace Modules\Icredit\Entities;

use Illuminate\Database\Eloquent\Model;

class CreditTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'icredit__credit_translations';
}
