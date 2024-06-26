<?php

namespace Somar\Translation\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Somar\Translation\Database\TranslatableModel;

class TranslationsLanguage extends TranslatableModel
{
    use HasFactory;

    protected $fillable= [
        'code'
    ];

    protected $translatable = [
        'title',
    ];
}
