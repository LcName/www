<?php
/**
 * Created by PhpStorm.
 * User: lc
 * Date: 2017/9/27
 * Time: 18:16
 */

?>




















<html>
<head>
    <style>
        *{
            margin:0px;
            padding:0px;
        }
        .div{
            height:300px;
            width:300px;
            border:1px solid aqua;
            margin:0px auto;
        }
        .zc{
            display: block;
            width:50px;
            height:25px;
            margin: 20px auto;
            background: #FFFFFF;
            border:none;
            color:#212121;
        }
        .input_text {
            width: 200px;
            height: 50px;
            margin: 15px auto;
            text-align: center;
        }
    </style>
</head>
    <body class="div">
        <form action="01.php" method="post">
            <div class="input_text">用户名：<input type="text" name="username" value=""></div>
            <div class="input_text">密 &nbsp;&nbsp;&nbsp;码：<input type="text" name="password" value=""></div>
            <input class="zc" type="submit" value="注 册">
        </form>
    </body>
</html>