<!DOCTYPE html>
<html lang="ja" target="_blank">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <title>プログラミングラボ - CSS Lab - HELP</title>
        <link rel="stylesheet" type="text/css" href="./css/styles.css"/>
        <style>

        .help-section {
            background-color: #f5f5f5;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        
        .help-section h2 {
            color: #555;
            margin-top: 0;
        }
        
        .help-section ul {
            list-style-type: none;
            padding: 0;
        }
        
        .help-section li {
            margin-bottom: 5px;
        }
        
        .help-section a {
            color: #007bff;
            text-decoration: none;
        }
        
        .help-section a:hover {
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

        <main class="help-section">
        <h1>CSSのヘルプ</h1>
        
        <div class="section">
            <h2>オンラインリソース</h2>
            <p>以下のウェブサイトでは、CSSの解説やチュートリアル、トラブルシューティングのための情報が提供されています。</p>
            <ul>
                <li><a href="https://developer.mozilla.org/ja/docs/Web/CSS">MDN Web Docs - CSS</a></li>
                <li><a href="https://css-tricks.com/">CSS-Tricks</a></li>
            </ul>
        </div>
        
        <div class="section">
            <h2>ブラウザの開発者ツール</h2>
            <p>主要なウェブブラウザ（Chrome、Firefox、Safariなど）には、開発者ツールと呼ばれる機能が搭載されています。</p>
            <p>開発者ツールを使用して、特定の要素のスタイルを調査したり、スタイルをリアルタイムで変更したりすることができます。</p>
        </div>
        
        <div class="section">
            <h2>コミュニティとフォーラム</h2>
            <p>CSSに関する疑問や問題がある場合、開発者コミュニティやフォーラムで質問することができます。</p>
            <ul>
                <li><a href="https://stackoverflow.com/questions/tagged/css">Stack Overflow - CSS</a></li>
                <li><a href="https://www.reddit.com/r/webdev/">Reddit Web開発コミュニティ</a></li>
            </ul>
        </div>
        
        <div class="section">
            <h2>書籍やオンラインコース</h2>
            <p>CSSに関する書籍やオンラインコースも、学習や参考になる情報を提供しています。</p>
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
