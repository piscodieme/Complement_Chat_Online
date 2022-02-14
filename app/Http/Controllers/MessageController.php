<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth')->except('message');
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
}
