<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use EasyWeChat\Foundation\Application;
use App\Http\Requests;

class WechatController extends Controller
{
    //微信入口
    public function index(Application $wechat){
        dd($wechat);
    }
}
