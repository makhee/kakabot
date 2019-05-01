<?php

namespace App\Http\Controllers;

use App\Message as mMessage;
use Illuminate\Http\Request;
// use Illuminate\Contracts\Validation\Validator;
use \Validator;
use \ResponseFactory;

class Message extends Controller
{

    /**
     * Create a new message instance.
     *
     * @param  Request  $request
     * @return Response
     */
    public function InsertMessage(Request $request)
    {
        $input = [
            'name' => $request->name,
            'email' => $request->email,
            'memo' => $request->message
        ];

        $rule = [
            'name' => 'required',
            'email' => 'required|email',
            'memo' => 'required'
        ];

        $messages = [
            'name.required' => '0',
            'email.required' => '1',
            'email.email' => '2',
            'memo.required' => '3'
        ];

        $validator = Validator::make($input, $rule, $messages);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $message = new mMessage;

        $message->name = $request->name;
        $message->email = $request->email;
        $message->memo = $request->message;

        $message->save();
        return redirect()->back()->withSuccess('메모를 전달하였습니다.');
    }
}
