<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,'root','');

// 查詢資料表
// $sql="select * from students";
// $rows=$pdo->query($sql)->fetchAll();

// 新增欄位
// $sql="insert into `dept`(`code`,`name`)
// values('801','汽修科');";
// $pdo->query($sql);

// $sql="update `dept` set `code`='801',`name`='演藝科' where `id`='8'";
// $pdo->query($sql);

// 刪除欄位
// $sql="delete from `dept` where `id`='8'";
// $pdo->query($sql);

// $sql="delete from `dept` where `id`='7'";
// $pdo->query($sql);

// exec 和 query 一樣可以顯示執行結果
// $sql="delete from `dept` where `id`='7'";
// echo $pdo->exec($sql);


// $sql="insert into `dept`(`code`,`name`)values('701','演藝科');";
// echo $pdo->exec($sql);

$sql="insert into `dept`(`code`,`name`)values('801','汽修科');";
echo $pdo->exec($sql);