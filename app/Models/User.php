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


    public function friends(){
        $allFriend = [];
        //the message that he sends
        $sender = Message::where(Message::SENDER,$this->id)
                         ->get(Message::RECEIVER);
        //the message that he receive another personne
        $receiver = Message::where(Message::RECEIVER,$this->id)
                           ->get(Message::SENDER);
        //the message that he is the sender or receiver
        foreach($sender as $send)
         {
            array_push($allFriend,$send->receiver);
         }
         foreach($receiver as $receiv)
         {

            array_push($allFriend,$receiv->sender);
         }
        return User::distinct()
                   ->whereIn(User::ID,$allFriend)->get();
    }

    /**
     * the people he never talked to
     */

     public function allUser(){

        return User::where(User::ID,'<>',$this->id)->get();
     }
}
