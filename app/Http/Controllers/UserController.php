<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    function testData(Request $request)
    {
        $rules = array(
            "username"=> "required|min:5|max:20",
            "age"=> "required|integer|min:18|max:65"
            );
        $messages = array(
            "username.required" => "username"
        );
        $validator = Validator::make($request->all(),$rules, $messages);
        
        if($validator->fails())
        {
            return $validator->errors();
        }
        else
        {
        return $request->getContent();
        }
    }
}
