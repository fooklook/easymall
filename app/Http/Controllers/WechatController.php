<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use EasyWeChat\Foundation\Application;
use App\Http\Requests;
use Illuminate\Support\Facades\Log;

class WechatController extends Controller
{
    //微信入口
    public function index(Application $wechat,Request $request){
        Log::info(json_encode($request));
        $wechat->server->serve()->send();
    }
}
