<!DOCTYPE html>
<html>

<head>
<title>マスターテーブル</title>
<meta charset="UTF-8">
<link href="masterpage_style.css" media="all" rel="stylesheet">
<script></script>
</head>

<body>
<header>
<h1>マスターテーブル</h1>
</header>
<div>

<nav>
<p>
<a href="http://localhost/user_system/m_work_history.php">入社区分</a>
<a href="http://localhost/user_system/m_affiliation.php">所属会社</a>
<a href="http://localhost/user_system/m_prefectures.php">拠点</a>
<a href="http://localhost/user_system/m_department.php">部署</a>
<a href="http://localhost/user_system/m_occupation.php">職種</a>
<a href="http://localhost/user_system/m_position.php">役職</a>
</p>
</nav>

<main>
<section>
<?php
$db_dsn='mysql:host=localhost;dbname=login_system';
$db_user='root';
$db_password='';

try {
	$pdo = new PDO($db_dsn,$db_user,$db_password);
	$sql = "SELECT * FROM m_affiliation";
	$stmt = $pdo->query($sql);
	foreach( $stmt as $row ) {
		echo "$row[affiliation]<br>";
  }
} catch(PDOException $e) {
	echo $e->getMessage();
	die();
}
?>
</section>
 <button type=“button” onclick="location.href='http://localhost/user_system/masterpage_edit.php'">編集</button>
</main>
</div>
<footer></footer>
</body>
</html>
