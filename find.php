<?php
header("Content-type: text/html; charset=utf-8"); 
$m = new MongoClient();    // 连接到mongodb
$db = $m->test;            // 选择一个数据库
$collection = $db->runoob; // 选择集合

$cursor = $collection->find();
// 迭代显示文档标题
foreach ($cursor as $document) {
	foreach ($document as $key => $value) {
		echo $key."=>". $value."<br/>";
	}
	
}
?>