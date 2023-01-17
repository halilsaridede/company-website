<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;

class ManagerMessage extends Model
{
    
    public static function schema(Blueprint $table)
    {
        $table->text('tr_message');
        $table->text('en_message');
        $table->string('name');
    }

    protected $table = "manager_messages";

    protected $fillable = [
        'tr_message', 'en_message', 'name'
    ];

    public static function saveMessage($trMsg, $enMsg, $name)
    {
        $message = self::first();
        if (is_null($message))
            $message = new self();

        $message->tr_message = $trMsg;
        $message->en_message = $enMsg;
        $message->name = $name;
        $message->save();
        return $message;
    }
}
