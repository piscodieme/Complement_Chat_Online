<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Contracts\Support\MessageBag;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Arr;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    const ID                  = "id";
    const FULLNAME            = "fullname";
    const EMAIL               = "email";
    const PHONE_NUMBER        = "phone_number";
    const PASSWORD            = "password";
    const ROLE                = "role";
    const ONLINE              = "online";
    const AVATAR              = "avatar";
    const REMEMBER_TOKEN      = "remember_token";
    const DELETED_AT          = "deleted_at";
    const AVATAR_DEFAULT      = "/img/user/default.png";
    const AVATAR_PATH         = "img/user";


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        self::FULLNAME,
        self::PASSWORD,
        self::EMAIL,
        self::PHONE_NUMBER,
        self::ROLE,
        self::ONLINE,
        self::AVATAR,
        self::REMEMBER_TOKEN,

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        self::PASSWORD,
        self::REMEMBER_TOKEN,
        self::DELETED_AT,
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /**
     * message
     */

     public function message(){
        return $this->hasMany(Message::class,Message::RECEIVER)->where(Message::ISREAD,0);
     }
    /**
     * the people he never talked to
     */

     public function allUser(){

        return User::with('message')
                   ->where(User::ID,'<>',$this->id)->get();
     }

     public function otherUser($id){
         return User::with('message')
                    ->where(User::ID,'<>',$this->id)
                    ->where(User::ID,'<>',$id)
                    ->get();
     }
}
