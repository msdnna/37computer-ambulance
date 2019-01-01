<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Reconstruction</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto:100,300');
        * {
            padding: 0;
            margin: 0;
        }
        body {
            background-image: url('img/wallpaper.jpg');
            background-size: cover;
            background-color: #fff;
            color: #fafafa;
            font-family: 'Roboto', sans-serif;
            font-weight: 100;
            text-transform: uppercase;
        }
        html, body, .container {
            height: 100%;
        }
        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-flow: row wrap;
        }
        .osx-window {
            background: #111;
            width: 545px;
            height: 50%;
            border-radius: 5px;
            box-shadow: 0 0 30px rgba(0,0,0,0.5);
            overflow: hidden;
        }
        .osx-window-btn {
            margin: 15px;
            display: flex;
            width: 100%;
            height: 10px;
        }
        .osx-window-btn-close {
            width: 10px;
            height: 100%;
            border: 1px solid rgb(200,20,20);
            border-radius: 100%;
            background: rgb(220,40,40);
        }
        .osx-window-btn-maximize {
            margin: 0 5px;
            width: 10px;
            height: 100%;
            border-radius: 100%;
            border: 1px solid rgb(200,120,20);
            background: rgb(220,140,40);
        }
        .osx-window-btn-minimize {
            width: 10px;
            height: 100%;
            border: 1px solid rgb(0,180,0);
            border-radius: 100%;
            background: rgb(20,200,20);
        }
        .osx-window-content {
            white-space: nowrap;
            margin: 0;
        }
        .osx-window-text-first {
            font-size: 60px;
            margin-left: 600px;
            animation: transform-text-first 15s linear infinite;
        }
        .osx-window-text-second {
            font-size: 40px;
            margin-left: 600px;
            animation: transform-text-second 20s linear infinite;
        }
        .osx-window-text-third {
            font-size: 50px;
            margin-left: 600px;
            animation: transform-text-third 20s linear infinite;
        }
        .osx-window-text-four {
            font-size: 30px;
            margin-left: 600px;
            animation: transform-text-four 15s linear infinite;
        }
        .osx-window-text-five {
            font-size: 40px;
            margin-left: 600px;
            animation: transform-text-five 20s linear infinite;
        }
        @keyframes transform-text-first {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-2200px);
            }
        }
        @keyframes transform-text-second {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-1800px);
            }
        }
        @keyframes transform-text-third {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-1600px);
            }
        }
        @keyframes transform-text-four {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-1400px);
            }
        }
        @keyframes transform-text-five {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-1900px);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="osx-window">
            <div class="osx-window-btn">
                <div class="osx-window-btn-close"></div>
                <div class="osx-window-btn-maximize"></div>
                <div class="osx-window-btn-minimize"></div>
            </div>
            <div class="osx-window-content">
                <div class="osx-window-text-first">Сайт находится на техническом обслуживании</div>
                <div class="osx-window-text-second">Возможно произошла какая-то системная неполадка</div>
                <div class="osx-window-text-third">И сейчас его уже восстанавливают</div>
                <div class="osx-window-text-four">Зайдите на него чуть-чуть попозже</div>
                <div class="osx-window-text-five">Приносим свои извинения за доставленные неудобства</div>
            </div>
        </div>
        {{--<div class="up-block">--}}
            {{--Привет--}}
        {{--</div>--}}
        {{--<div class="up-block"></div>--}}
        {{--<div class="up-block"></div>--}}
        {{--<div class="wide-block">--}}
            {{--Этот сайт на реконструкции--}}
        {{--</div>--}}
        {{--<div class="down-block"></div>--}}
        {{--<div class="down-block"></div>--}}
        {{--<div class="down-block">--}}
            {{--Просим зайти чуть позднее--}}
        {{--</div>--}}
    </div>
</body>
</html>
