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
            Log::info(json_encode($message));
            return '欢迎使用fooklook回复助手，功能等待完善中。';
        });
        $server->serve()->send();
    }

    //自定义菜单
    public function menu(Application $wechat){
        $menu = $wechat->menu;
        $buttons = [
            [
                "type" => "click",
                "name" => "今日歌曲",
                "key"  => "V1001_TODAY_MUSIC"
            ],
            [
                "name"       => "菜单",
                "sub_button" => [
                    [
                        "type" => "view",
                        "name" => "搜索",
                        "url"  => "http://www.soso.com/"
                    ],
                    [
                        "type" => "view",
                        "name" => "视频",
                        "url"  => "http://v.qq.com/"
                    ],
                    [
                        "type" => "click",
                        "name" => "赞一下我们",
                        "key" => "V1001_GOOD"
                    ],
                ],
            ]
        ];
        $matchRule = [
            "group_id"             => "2",
            "sex"                  => "1",
            "country"              => "中国",
            "province"             => "广东",
            "city"                 => "广州",
            "client_platform_type" => "2"
        ];
        $menu->add($buttons,$matchRule);
    }

    //微信分享
    public function share(Application $wechat){
        $jssdk = $wechat->js;
        return view('share', array('js'=>$jssdk));
    }
}
