<?php
header("Content-type: text/html; charset=utf-8"); 
$m = new MongoClient();    // 连接到mongodb
$db = $m->test;            // 选择一个数据库
$collection = $db->runoob; // 选择集合
   
// 移除文档
$collection->remove(array("title"=>"MongoDB 教程"), array("justOne" => true));

// 显示可用文档数据
$cursor = $collection->find();
foreach ($cursor as $document) {
	foreach ($document as $key => $value) {
		echo $key."=>". $value."<br/>";
	}
?>