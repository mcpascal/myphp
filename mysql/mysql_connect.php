<?php
/**
 * Created by PhpStorm.
 * User: Pascal
 * Date: 2017/2/18
 * Time: 下午5:04
 */

//连接数据库
$conn = mysql_connect('localhost','root','root');
print_r($conn);
die();
if(!$conn){
    die('数据库连接失败！'.mysql_error());
}else {
    echo '连接成功';
}

//选择数据库

$select_db = mysql_select_db('myphp');

if(!$select_db){
    die('数据库选择失败！'.mysql_error());
}else{
    echo '选择数据库失败';
}

mysql_query('set names utf-8');
