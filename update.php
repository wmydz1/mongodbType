<?php
header("Content-type: text/html; charset=utf-8"); 
$m = new MongoClient();    // 连接到mongodb
$db = $m->test;            // 选择一个数据库
$collection = $db->runoob; // 选择集合
// 更新文档
$collection->update(array("title"=>"MongoDB"), array('$set'=>array("title"=>"MongoDB 教程")));
// 显示更新后的文档
$cursor = $collection->find();
// 循环显示文档标题
foreach ($cursor as $document) {
	echo $document["title"] . "\n";
}
?>