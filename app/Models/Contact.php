<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;

class Contact extends Model
{
    protected $table = "contact";
    protected $fillable = [
        'id',
        'name_surname',
        'email',
        // 'phone',
        'subject',
        'message',
    ];
    
    public static function schema(Blueprint $table)
    {
        $table->id();
        $table->string('name_surname');
        $table->string('email');
        $table->string('phone')->nullable();
        $table->unsignedSmallInteger('info');
        $table->mediumText('message');
    }


    public static function addMessage($name_surname, $email, $phone, $info, $message)
    {
        $contact = self::where('message', $message)->first();
        if (is_null($contact))

        $contact = new self();
        $contact->name_surname = $name_surname;
        $contact->email = $email;
        $contact->phone = $phone;
        $contact->info = $info;
        $contact->message = $message;
        $contact->save();
        return $contact;
    }

    public static function deleteMessage($id)
    {
        $contact = self::find($id);
        if (!is_null($contact))
            $contact->delete();
    }
}
