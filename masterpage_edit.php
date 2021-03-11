<!DOCTYPE html>
<html>
<head>
<title>マスターテーブル編集</title>
<meta charset="UTF-8">
<link href="masterpage_edit_style.css" media="all" rel="stylesheet">
<script></script>
</head>
<body>
<h1>マスターテーブル編集</h1>
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
<form action="masterpage_edit_sql.php" method="POST">
  <h2>編集内容を選んでください</h2>
<div>
　<input type="radio" name="sql_type" value="update">修正
　<input type="radio" name="sql_type" value="insert">追加
　<input type="radio" name="sql_type" value="delete">削除
  <br><br>
</div>

  <h2>項目を選んでください</h2>
  <select name ="table">
  <option value="default">※選択してください</oprion>
  <option value="m_work_history">入社区分</oprion>
  <option value="m_affiliation">所属会社</oprion>
  <option value="m_prefectures">拠点</oprion>
  <option value="m_department">部署</oprion>
  <option value="m_occupation">職種</oprion>
  <option value="m_position">役職</oprion>
  </select>

  <h2>修正前のデータor削除するデータを入力してください
    <br>（※追加を選択した場合入力は不要です）</h2>
  <input type=text name="before_date">

  <h2>修正後のデータor追加するデータを入力してください
    <br>（※削除を選択した場合入力は不要です）</h2>
  <input type=text name="after_date">
  <br><br>

  <input type=submit value="送信">
</main>
</form>

</body>
</html>
