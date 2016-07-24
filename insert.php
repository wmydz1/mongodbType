<?php
header("Content-type: text/html; charset=utf-8"); 
$m = new MongoClient();    // 连接到mongodb
$db = $m->test;            // 选择一个数据库
$collection = $db->runoob; // 选择集合
$document = array( 
	"title" => "MongoDB", 
	"description" => "database", 
	"likes" => 100,
	"url" => "http://www.runoob.com/mongodb/",
	"by", "菜鸟教程"
);
$collection->insert($document);
echo "数据插入成功";
?>