<?php
/**
 * Created by PhpStorm.
 * User: Pascal
 * Date: 2017/2/18
 * Time: 下午5:04
 */

//连接数据库
$conn = mysql_connect('localhost','root','root') or die('数据库连接失败');
//print_r($conn);

//数据库连接失败的时候返回值验证 false
//$link = mysql_connect('localhost','root','');
//echo $link;
//die();

//if(!$conn){
//    die('数据库连接失败！'.mysql_error());
//}else {
//    echo '连接成功';
//}

//选择数据库

mysql_select_db('myphp') or die('数据库选择失败！'.mysql_error());

mysql_query('set names utf-8');

