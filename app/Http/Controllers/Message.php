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

     /**
     *
     * @return Response $list
     */
    public function GetMessage()
    {
        $message = new mMessage;
        $items = $message->all();

        $list = [];

        foreach ($items as $item) {
            $tmp_arr["idx"] = $item->idx;
            $tmp_arr["name"] = $item->name;
            $tmp_arr["email"] = $item->email;
            $tmp_arr["memo"] = $item->memo;
            $tmp_arr["created_at"] = $item->created_at->toDateTimeString();

            array_push($list, $tmp_arr);
        }
        echo '<pre>';
        print_r($list);
    }
}
