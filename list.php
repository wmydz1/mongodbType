<?php
header("Content-type: text/html; charset=utf-8");    
$m = new MongoClient(); // 连接
$db = $m->test; // 获取名称为 "test" 的数据库
$collection = $db->createCollection("runoob");
echo "集合创建成功";
?>