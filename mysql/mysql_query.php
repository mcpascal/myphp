<?php
/**
 * Created by PhpStorm.
 * User: Pascal
 * Date: 2017/2/18
 * Time: 下午5:27
 */

require_once('mysql_connect.php');

$create_table_sql = 'CREATE TABLE user(`id` int,`name` varchar(50))';

if(!mysql_query($create_table_sql)){
    return "创建表失败";
}else{
    return '表创建成功';
}
