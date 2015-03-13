<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>
            phpのテストページ
        </title>
    </head>
    <body>
        phpのテストページ<br><br>

        <?php
            // 年月日の関数を使用するサンプル
            echo date('年月日の関数を使用する');
            echo '<br>';
            echo date('Y');
            echo '<br>';
            echo ltrim(date('m'), '0');
            echo '<br>';
            echo ltrim(date('d'), '0');
        ?><br><br>

    </body>
</html>