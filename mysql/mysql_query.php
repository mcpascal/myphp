<?php
/**
 * Created by PhpStorm.
 * User: Pascal
 * Date: 2017/2/18
 * Time: 下午5:27
 */

require_once('mysql_connect.php');

/*$create_table_sql = "CREATE TABLE `user`(`id` int auto_increment not null primary key,`name` varchar(50))";
$res = mysql_query($create_table_sql)
if(!$res){
    return "创建表失败";
}else{
    return '表创建成功';
}*/


$insert_sql = "INSERT INTO `user`(`name`) VALUES（'admin'）";
echo $insert_sql;
$res = mysql_query($insert_sql);
if($res){
    echo "插入数据成功";
}else{
    echo "插入数据失败".mysql_error();
}