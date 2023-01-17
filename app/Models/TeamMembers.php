<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;

class TeamMembers extends Model
{
    
    public static function schema(Blueprint $table)
    {
        // $table->string('path')->nullable();
        $table->string('path');
        $table->text('name_surname');
        $table->text('en_task');
        $table->text('tr_task');
        $table->string('facebook');
        $table->string('twitter');
        $table->string('linkedin');
    }

    protected $table = "team_members";

    protected $fillable = [
        'path', 
        'name_surname', 
        'en_task', 
        'tr_task',
        'facebook',
        'twitter',
        'linkedin'
    ];

    public static function addTeamMembers($path, $nameSurname, $enTask, $trTask, $facebook, $twitter, $linkedin)
    {
        $member = new self();
        $member->path = $path;
        $member->name_surname= $nameSurname;
        $member->en_task= $enTask;
        $member->tr_task= $trTask;
        $member->facebook= $facebook;
        $member->twitter= $twitter;
        $member->linkedin= $linkedin;
        $member->save();
        return $member;
    }

    public static function removeTeamMembersById($id)
    {
        self::all()->delete();
        return true;
    }

    public static function deleteTeamMember($id)
    {
        $member = self::find($id);

        if (is_null($member))
            return false;

        $member->delete();
        return true;
    }
}
