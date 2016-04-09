<!DOCTYPE html>
<html>
<head>
    <title>΢�ŷ���</title>

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
    wx.config(<?php echo $jssdk->config(array('onMenuShareQQ', 'onMenuShareTimeline', 'onMenuShareAppMessage', 'onMenuShareWeibo', 'onMenuShareQZone'), true, true) ?>);
    var imgUrl = "http://7xo7bi.com1.z0.glb.clouddn.com/note-easybuild.jpg";
    var lineLink = window.location.href;
    var descContent = '�������';
    var shareTitle = '�������';
    wx.read(function(){
        //���������
        wx.onMenuShareTimeline({
            title: shareTitle, // �������
            link: lineLink, // ��������
            imgUrl: imgUrl, // ����ͼ��
            success: function () {
                // �û�ȷ�Ϸ����ִ�еĻص�����
            },
            cancel: function () {
                // �û�ȡ�������ִ�еĻص�����
            }
        });

        //��������Ȧ
        wx.onMenuShareAppMessage({
            title: shareTitle, // �������
            desc: descContent, // ��������
            link: lineLink, // ��������
            imgUrl: imgUrl, // ����ͼ��
            type: '', // ��������,music��video��link������Ĭ��Ϊlink
            dataUrl: '', // ���type��music��video����Ҫ�ṩ�������ӣ�Ĭ��Ϊ��
            success: function () {
                // �û�ȷ�Ϸ����ִ�еĻص�����
            },
            cancel: function () {
                // �û�ȡ�������ִ�еĻص�����
            }
        });
        //����QQ
        wx.onMenuShareQQ({
            title: shareTitle, // �������
            desc: descContent, // ��������
            link: lineLink, // ��������
            imgUrl: imgUrl, // ����ͼ��
            success: function () {
                // �û�ȷ�Ϸ����ִ�еĻص�����
            },
            cancel: function () {
                // �û�ȡ�������ִ�еĻص�����
            }
        });
        //����QQ�ռ�
        wx.onMenuShareQZone({
            title: shareTitle, // �������
            desc: descContent, // ��������
            link: lineLink, // ��������
            imgUrl: imgUrl, // ����ͼ��
            success: function () {
                // �û�ȷ�Ϸ����ִ�еĻص�����
            },
            cancel: function () {
                // �û�ȡ�������ִ�еĻص�����
            }
        });
    });
</script>
</body>
</html>
