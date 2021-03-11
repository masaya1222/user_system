<!--htmlの指定-->
<!DOCTYPE html>
<html>
<head>
<!--タイトル-->
<title>マスターテーブル</title>
<!--文字コード-->
<meta charset="UTF-8">
<!--CSSファイル読み込み-->
<link href="masterpage_style.css" media="all" rel="stylesheet">
<!--使用言語-->
<script></script>
</head>
<body>

<!--ヘッダーの作成（任意）-->
<header>
<h1>マスターテーブル</h1>
</header>

<!--グループの作成（任意）-->
<div>
<!--ナビゲーション項目の作成-->
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

<!--メイン項目の作成（任意）-->
<main>
<!--セクション項目の作成（任意）-->
<section>

<p>↑表示する項目を選択してください</p>

</section>

 <button type=“button” onclick="location.href='http://localhost/user_system/masterpage_edit.php'">編集</button>
 

</div>

<!--フッターの作成（任意）-->
<footer>
</footer>

</body>
</html>
