<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    /**
     * the message
     * @id int
     * @sender user
     * @receiver user
     * @message  string
     * @isRead   boolean
     * @created_at datetime
     * @updated_at datetime
     * @deleted_at datetime
     */

     const  ID                   = 'id';
     const  SENDER               = 'sender';
     const  RECEIVER             = 'receiver';
     const  MESSAGE              = 'message';
     const  ISREAD               = 'is_read';
     const  CREATED_AT           = 'created_at';
     const  UPDATED_AT           =  'updated_at';
     const  DELETED_AT           = 'deleted_at';

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        self::ID,
        self::SENDER,
        self::RECEIVER,
        self::MESSAGE,
        self::ISREAD,
    ];
    /**
     * The attributes that are the date.
     *
     * @var array<datetime, string>
     */
    protected $dates = [
        self::CREATED_AT,
        self::UPDATED_AT,
        self::DELETED_AT
    ];

    /**
     * @receiver  user
     * the user that receive the message
     */
    public function receiver(){
        return $this->hasOne(User::class,User::ID,Message::RECEIVER);
    }
    /**
     * @sender   user
     * the user that send the message
     */
    public function sender(){
        return  $this->hasOne(User::class,User::ID,Message::SENDER);
    }

}
