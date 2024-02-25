<!DOCTYPE html>
<html lang="ja" target="_blank">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <title>プログラミングラボ - CSS Lab</title>
        <link rel="stylesheet" type="text/css" href="./css/styles.css"/>
    
        <style>
        /* タグ名に基づくセレクタ */
        #test {
            color: blue;
        }
        
        /* クラスに基づくセレクタ */
        .highlight {
            background-color: yellow;
        }
        
        /* IDに基づくセレクタ */
        #header {
            font-size: 24px;
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
        <main>
        <h1>プログラミングラボ - CSS Lab</h1>
    <ul>
        <li><a href="reference">リファレンス（reference）</a></li>
        <li><a href="help">ヘルプ（HELP）</a></li>
        <!-- 他のページを追加する場合はここにリンクを追加してください -->
    </ul>
    <hr style="both:clear;width:100%;">

    <section style="padding:20px;">
    <h2>CSSについて</h2>
    <p>CSS（Cascading Style Sheets）は、ウェブページのスタイルやレイアウトを設定するためのスタイルシート言語です。HTMLがウェブページの構造を定義するのに対し、CSSはそれらの要素の見た目や装飾を指定します。以下に、CSSの基本的な機能や使い方について説明します。</p>
    <p>主な特徴や用途は次のとおりです：</p>
    <ol>
        <li><strong>セレクタ</strong>：CSSでは、スタイルを適用するHTML要素を選択するためにセレクタが使用されます。セレクタは要素の種類やクラス、IDなどに基づいて指定します。</li>
        <li><strong>プロパティと値</strong>：CSSルールはプロパティと値のペアで構成されます。プロパティは要素の特定のスタイル属性を表し、値はそのプロパティに適用される具体的な値です。</li>
        <li><strong>カスケーディング</strong>：CSSの"C"は"カスケード"を表します。これは、異なるソース（ユーザーエージェントスタイルシート、外部スタイルシート、内部スタイルシート、インラインスタイル）からのスタイルが重なった場合、一連の優先順位ルールに基づいてどのスタイルが適用されるかを決定するプロセスを指します。</li>
        <li><strong>レイアウト</strong>：CSSは要素のレイアウトも制御します。これには、要素の位置、サイズ、表示方法などが含まれます。FlexboxやGridなどの新しいレイアウトモジュールも導入され、柔軟なレイアウトを作成することができます。</li>
        <li><strong>メディアクエリ</strong>：メディアクエリは、デバイスの種類や画面サイズなどの条件に基づいてスタイルを適用する方法を指定します。これにより、レスポンシブなデザインを実装できます。</li>
    </ol>

    <hr style="both:clear;width:100%;">

    <p>CSSはウェブデザインの基本的な要素であり、HTMLと組み合わせて使うことで魅力的で使いやすいウェブページを作成することができます。</p>

            </section>

            <section id="test" style="clear:both;text-align:left;">
    <p>CSSはウェブページのスタイルやレイアウトを設定する言語です。</p>
    <p class="highlight">このテキストはハイライトされます。</p>
    <div id="header">これはヘッダーです。</div>
            </section>
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
