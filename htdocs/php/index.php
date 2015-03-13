<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>
            phpのテストページ
        </title>
    </head>
    <body>
        <font size="5">phpのテストページ</font>　<a href="/">メニューページに戻る</a><br><br>

        <?php
            // 年月日の関数を使用するサンプル
            echo ('■年月日の関数を使用する');
            echo '<br>';
            echo date('Y');
            echo '<br>';
            echo ltrim(date('m'), '0');
            echo '<br>';
            echo ltrim(date('d'), '0');
        ?><br><br>

        <?php
            // var_dump()を試してみる
            echo ('■var_dump()を試してみる');
            echo '<br>';
            $a = array(1, 2, array("a", "b", "c"));
            var_dump($a);
        ?>
    </body>
</html>