<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;

class SectionItem extends Model
{
    
    public static function schema(Blueprint $table)
    {
        $table->unsignedInteger('type');
        $table->string('tr_text');
        $table->string('en_text');
    }

    const TYPE_PROJECT = 1;
    const TYPE_EDUCATION = 2;
    const TYPE_MANAGEMENT = 3;
    const TYPE_AUDIT = 4;
    const TYPE_ARGE = 5;
    const TYPE_ORGANISATION = 6;


    protected $table = "section_items";

    protected $fillable = [
        'type', 'tr_text', 'en_text'
    ];

    public static function addSectionItem($type , $trText , $enText)
    {
        if(empty($trText) || empty($enText))
            return null;

        $section = new self();
        $section->type = $type;
        $section->tr_text = $trText;
        $section->en_text = $enText;
        $section->save();
        return $section;
    }

    public static function getByType($type)
    {
        return self::where('type' , $type)->get();
    }

    public static function removeSectionsByType($type)
    {
        self::where('type' , $type)->delete();
        return true;
    }
}
