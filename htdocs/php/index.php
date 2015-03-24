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
        ?><br><br>

        <?php
            // strrpos()を試してみる
            echo ('■strrpos()を試してみる');
            echo '<br>';
            $haystack = "abcdefgd";
            var_dump(strrpos($haystack, "d"));
            echo '<br>';
            var_dump(strrpos($haystack, "x"));
        ?><br><br>

        <?php
            // mb_strrpos()を試してみる
            echo ('■mb_strrpos()を試してみる');
            echo '<br>';
            $haystack = "日本語の文字列を検索。日本語検索。nihongokennsaku";
            var_dump(mb_strrpos($haystack, "文"));
            echo '<br>';
            var_dump(mb_strrpos($haystack, "検"));
            echo '<br>';
            var_dump(mb_strrpos($haystack, "国"));
            echo '<br>';
            var_dump(mb_strrpos($haystack, "k"));
        ?><br><br>

        <?php
            // 電話番号に文字があった場合に削除するロジック
            echo ('■電話番号に文字があった場合に削除するロジック');
            echo '<br>';
            $haystack = "0262467890:1";
            var_dump(mb_strrpos($haystack, ':'));
            echo '<br>';
            if (is_int(mb_strrpos($haystack, ':'))) {
                $haystack = substr($haystack, 0, mb_strrpos($haystack, ':'));
                var_dump('ifがtrue。ifで：を検知。');
                echo '<br>';
                var_dump($haystack);
                echo '<br>';
            } else {
                var_dump('ifがfalse。ifで：が無いと判断。');
                echo '<br>';
                    }
        ?><br><br>

        <?php
            // 電話番号に文字があった場合に抽出するロジック
            echo ('■電話番号に文字があった場合に抽出するロジック');
            echo '<br>';
            $haystack = "0262467890:1";
            var_dump($haystack);
            echo '<br>';
            $haystack = substr($haystack, mb_strrpos($haystack, ':'));
            var_dump($haystack);
        ?><br><br>

    </body>
</html>