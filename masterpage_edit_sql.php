<?php
//DB設定情報
$db_dsn='mysql:host=localhost;dbname=login_system';
$db_user='root';
$db_password='';

//入力ページから値の受け取り
$sql_type = $_POST["sql_type"];
$table = $_POST["table"];
$before_date = $_POST["before_date"];
$after_date = $_POST["after_date"];

//テーブルに対応したカラムを取得
switch ($table) {
  case "m_affiliation":
  $column = "affiliation";
  break;
  case "m_department":
  $column = "department";
  break;
  case "m_occupation":
  $column = "occupation";
  break;
  case "m_position":
  $column = "position";
  break;
  case "m_prefectures":
  $column = "base";
  break;
  case "m_work_history":
  $column = "join_category";
  break;
  default:
  echo 'Error';
  }

if($sql_type == "update") {
  try {
    $pdo = new PDO($db_dsn,$db_user,$db_password);
    $sql = "UPDATE $table SET $column = '$after_date' WHERE $column = '$before_date'";
    $stmt = $pdo->query($sql);
    $stmt->execute();

    }catch (PDOException $e){
      echo 'Error:'.$e->getMessage();
    }
}elseif($sql_type == "insert") {
  try {
    $pdo = new PDO($db_dsn,$db_user,$db_password);
    $sql = "INSERT INTO $table ($column) VALUES ('$after_date')";
    $stmt = $pdo->query($sql);
    $stmt->execute();
  } catch (PDOException $e) {
    echo 'Error:'.$e->getMessage();
  }
} elseif ($sql_type == "delete") {
  try {
    $pdo = new PDO($db_dsn,$db_user,$db_password);
    $sql = "UPDATE $table SET del = 1 WHERE $column = '$before_date'";
    $stmt = $pdo->query($sql);
    $stmt->execute();
  } catch (PDOException $e){
    echo 'Error:'.$e->getMessage();
  }
} else {
  echo 'Error';
}

?>
