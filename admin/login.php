<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登陆</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="stylesheet" href="../pages/common/css/bootstrap.min.css">
    <link rel="stylesheet" href="../pages/common/css/style.css">
</head>
<body id="loginPage">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 vertical-center col-xs-10 col-xs-offset-1">
            <form action="">
                <div class="form-group">
                    <label for="inputUserName">请输入用户名</label>
                    <input type="text" class="form-control" id="inputUserName" placeholder="用户名">
                </div>
                <div class="form-group">
                    <label for="inputPassword">请输入密码</label>
                    <input type="password" class="form-control" id="inputPassword" placeholder="密码">
                </div>
                <div class="form-group">
                    <div class="col-md-4 form-group">
                        <input type="text" class="form-control" id="inputVerify" placeholder="验证码">
                    </div>
                    <img src="getVerify.php" alt="70x30">
                    <button>刷新</button>
                </div>
                <div class="form-group checkbox">
                    <div class="checkbox"><label for=""><input type="checkbox" class="checkbox">记住账号密码</label></div>
                    <button class="btn btn-default">登陆</button>
                </div>
                
            </form>
        </div>
    </div>

    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <script src="../pages/common/js/bootstrap.min.js"></script>
</body>
</html>