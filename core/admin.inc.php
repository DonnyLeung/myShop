<?php
// 检查是否有该管理员
function checkAdmin($sql){
    return fetchOne($sql);
}
// 检查是否有登陆
function checkLogined(){
    if($_SEEEION['adminIdf']==""){
        alertMes("请先登录","login.php");
    }
}
// 退出登录
function loginOut(){
    $_SEEEION==arry();
    if(isset($_COOKIE[session_name()])){
        setcookie(session_name(),"",time()-1);
    }
    session_destroy();
    header("location:login.php");
}
