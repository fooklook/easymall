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
        //Log::info(json_encode($request));
        $server = $wechat->server;
        $server->setMessageHandler(function($message){
            return '欢迎使用fooklook回复助手，功能等待完善中。';
        });
        $server->serve()->send();
    }
}
