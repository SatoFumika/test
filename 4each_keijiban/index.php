<!DOCTYPE html>
<html lang="ja">
    
<head>
<meta charset="utf-8">
    <title>4eachblog 掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    
    <?php
    
    mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
    $stmt = $pdo->query("select * from 4each_keijiban");
    
//     while ($row = $stmt->fetch()){
//        echo $row['handlename'];
//        echo $row['title'];
//        echo $row['comments'];
//    }
    ?>
    
  
    
<!--メニューバー-->
            <img src="4eachblog_logo.jpg">
    <header>
        <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
    </header>
            
<!------------->
         <main>
             <div class="main-container">
            
            <div class="left">
                <h1>プログラミングに役立つ掲示板</h1>

                <form method="post" action="insert.php">
                    <h4>入力フォーム</h4>
                    <div>
                        <label>ハンドルネーム</label>
                        <br>
                        <input type="text" class="text" size="35" name="handlename">
                    </div>

                    <div>
                        <label>タイトル</label>
                        <br>
                        <input type="text" class="text" size="35" name="title">
                    </div>

                    <div>
                        <label>コメント</label>
                        <br>
                        <textarea cols="35" rows="7" name="comments"></textarea>
                    </div>

                    <div>
                    <input type="submit" class="submit" value="投稿する">
                    </div>
                    
                 
                </form>
                
<!--
                <div class='kiji'>
                     <h3>タイトル</h3>
                        <div class='contents'>
                            記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>
                            記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>
                            記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>
                            <div class='handlename'>posted by通りすがり</div>
                        </div>
                    </div>
-->
                 <?php
                    
                 while ($row = $stmt->fetch()) {
                     
                    echo"<div class='kiji'>";
                    echo"<h3>".$row['title']."</h3>";
                    echo"<div class='comments'>";
                    echo $row['comments'];
                    echo"<div class='handlename'>posted by".$row['handlename']."</div>";
                    echo"</div>";
                    echo"</div>";
                 }
                     
                 ?>
            </div>
                 
                
                     
                 
                 <div class="right">
                    <h2>人気の記事</h2>
                    <ul>
                        <li>PHPオススメ本</li>
                        <li>PHP MyAdminの使い方</li>
                        <li>今人気のエディタ Top5</li>
                        <li>PHPオススメ本</li>
                    </ul>

                    <h2>オススメリンク</h2>
                    <ul>
                        <li>インターノウス株式会社</li>
                        <li>XAMPPのダウンロード</li>
                        <li>Eclipseのダウンロード</li>
                        <li>Bracketsのダウンロード</li>
                    </ul>

                    <h2>カテゴリ</h2>
                    <ul>
                        <li>HTML</li>
                        <li>PHP</li>
                        <li>MySQL</li>
                        <li>JavaScript</li>
                    </ul>
                </div>
             </div>
        </main>
    
         <footer>
        copyright(c) internous | 4each blog the which provides A to Z about programming.
        </footer>
        </body>
</html>