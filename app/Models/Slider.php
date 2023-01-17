<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;

class Slider extends Model
{
    
    public static function schema(Blueprint $table)
    {
        $table->unsignedTinyInteger('location');
        $table->string('path');
        $table->string('tr_title')->nullable();
        $table->mediumText('tr_description')->nullable();
        $table->string('en_title')->nullable();
        $table->mediumText('en_description')->nullable();
    }

    protected $table = "sliders";

    protected $fillable = [
        'location',
        'path',
        'tr_title',
        'tr_description',
        'en_title',
        'en_description',
    ];

    public static function addSlider($location, $path, $trTitle, $trDescription, $enTitle, $enDescription)
    {
        $slider = self::where('location', $location)->first();
        if (is_null($slider))
            $slider = new self();

        $slider->location = $location;
        $slider->path = $path;
        $slider->tr_title = $trTitle;
        $slider->tr_description = $trDescription;
        $slider->en_title = $enTitle;
        $slider->en_description = $enDescription;
        $slider->save();
        return $slider;
    }
}
