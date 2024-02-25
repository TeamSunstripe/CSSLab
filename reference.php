<!DOCTYPE html>
<html lang="ja" target="_blank">
    <head>
        <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <title>プログラミングラボ - CSS Lab - Reference</title>
        <link rel="stylesheet" type="text/css" href="./css/styles.css"/>
        <style>
        
        .reference {
            background-color: #f5f5f5;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        
        .reference h2 {
            color: #555;
            margin-top: 0;
        }
        
        .reference ul {
            list-style-type: none;
            padding: 0;
        }
        
        .reference li {
            margin-bottom: 5px;
        }
        
        .reference a {
            color: #007bff;
            text-decoration: none;
        }
        
        .reference a:hover {
            text-decoration: underline;
        }
    </style>
    </head>
    <body>
        <header>
        <?php
                include 'class/MainMenu.php'; // クラスが定義されているPHPファイルをインクルードする
                $mainMenu = new MainMenu();
                echo $mainMenu->generateMainMenuList();
        ?>
        </header>
        
    <main class="reference">
        <h1>CSSリファレンス</h1>
        
        <div class="section">
            <h2>公式ドキュメント</h2>
            <p>W3Cの公式サイトから最新のCSS仕様を参照できます。以下のリンクからアクセスしてください。</p>
            <ul>
                <li><a href="https://www.w3.org/Style/CSS/">W3C CSS仕様</a></li>
            </ul>
        </div>
        
        <div class="section">
            <h2>MDN Web Docs</h2>
            <p>MDN Web Docsでは、CSSに関する包括的な情報が提供されています。</p>
            <ul>
                <li><a href="https://developer.mozilla.org/ja/docs/Web/CSS">MDN CSSドキュメント</a></li>
            </ul>
        </div>
        
        <div class="section">
            <h2>CSSリファレンスサイト</h2>
            <p>さまざまなCSSリファレンスサイトがインターネット上で利用可能です。</p>
            <ul>
                <li><a href="https://css-tricks.com/almanac/">CSS-Tricks Almanac</a></li>
                <li><a href="https://cssreference.io/">CSS Reference</a></li>
            </ul>
        </div>
        
        <div class="section">
            <h2>オンラインコミュニティとフォーラム</h2>
            <p>Stack OverflowやRedditのWeb開発コミュニティなどが、CSSに関する情報を提供しています。</p>
            <ul>
                <li><a href="https://stackoverflow.com/questions/tagged/css">Stack Overflow CSS</a></li>
                <li><a href="https://www.reddit.com/r/webdev/">Reddit Web開発コミュニティ</a></li>
            </ul>
        </div>
</main>
        <footer>

        <section style="clear:both;text-align:left;">
            <?php
                include 'class/WebNavigation.php'; // クラスが定義されているPHPファイルをインクルードする
                $webNavigation = new WebNavigation();
                echo $webNavigation->generateNavigationList();
            ?>
            </section>
            <section style="clear:both;text-align:center;">
                
                &copy; 2011 - <script>
                    var newDate = new Date();
                    //年・月・日・曜日を取得する
                    var year = newDate.getFullYear();
                    document.write(year);
                    </script> プログラミングラボ
            </section>
        </footer>
    </body>
</html>
