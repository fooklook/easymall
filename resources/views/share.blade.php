<!DOCTYPE html>
<html>
<head>
    <title>微信分享测试</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="title">Laravel 5</div>
    </div>
</div>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
    wx.config(<?php echo $jssdk->config(array('onMenuShareQQ', 'onMenuShareTimeline', 'onMenuShareAppMessage', 'onMenuShareQZone'), false, false) ?>);
    var shareTitle = '微信分享测试';
    var descContent = '微信分享内容测试';
    var imgUrl = "http://7xo7bi.com1.z0.glb.clouddn.com/note-easybuild.jpg";
    var lineLink = window.location.href;
    wx.ready(function(){
        //分享到朋友圈
        wx.onMenuShareTimeline({
            title: shareTitle,
            link: lineLink,
            imgUrl: imgUrl,
            success: function () {

            },
            cancel: function () {

            }
        });

        //分享给好友
        wx.onMenuShareAppMessage({
            title: shareTitle,
            desc: descContent,
            link: lineLink,
            imgUrl: imgUrl,
            type: '', // 分享类型,music、video或link，不填默认为link
            dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
            success: function () {

            },
            cancel: function () {

            }
        });
        //分享到QQ
        wx.onMenuShareQQ({
            title: shareTitle,
            desc: descContent,
            link: lineLink,
            imgUrl: imgUrl,
            success: function () {
            },
            cancel: function () {
            }
        });
        //分享到qq空间
        wx.onMenuShareQZone({
            title: shareTitle,
            desc: descContent,
            link: lineLink,
            imgUrl: imgUrl,
            success: function () {
            },
            cancel: function () {
            }
        });
    });


</script>
</body>
</html>
