<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth')->except('message','otherUsers','sendMessage');
    }

    public function index(Request $request,User $user){

        return $user->allUser();
    }

    public function message(Request $request,$sender,$receiver){

         $sender = User::where(User::ID,$sender)->firstOrFail();
         $receiver = User::where(User::ID,$receiver)->firstOrFail();
        try {
            $messages = Message::with('receiver','sender')
                            ->where([[Message::SENDER,'=',$sender->id],
                                     [Message::RECEIVER,'=',$receiver->id]])
                            ->orWhere([[Message::RECEIVER,'=',$sender->id],
                                       [Message::SENDER,'=',$receiver->id]])
                            ->get();
            return response()->json([
                'message' => $messages,
                'status'  => 200,
            ]);
        } catch (\Throwable $th) {
            return response('erro',204);
        }
    }

    /** this is the the user to other */

    public function otherUsers(Request $request,$currentUser,$discute){
        $user = User::find($currentUser);
        try {
            return response()->json([
                'others' => $user->otherUser($discute),
                'status'  => 200,
            ]);
        } catch (\Throwable $th) {
            return response('erro',204);
        }
    }

    public function sendMessage(Request $request,$sender,$receiver){
        $message = new Message();
        $message->sender = $sender;
        $message->receiver = $receiver;
        $message->message =  $request->input('message');
        $message->is_read = 0;
        $message->save();

        try {
            return response()->json([
                'sended' => 'ok',
                'status'  => 200,
            ]);
        } catch (\Throwable $th) {
            return response('erro',204);
        }
    }
}
