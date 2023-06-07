<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Stichoza\GoogleTranslate\GoogleTranslate;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Translator extends Model
{
    use HasFactory;

    public static function translator($text, $lang='bn')
    {
        $translator = new GoogleTranslate();
        $translateText = $translator->setSource('en')
                         ->setTarget($lang)
                         ->translate($text);
        return $translateText;
    }
}
