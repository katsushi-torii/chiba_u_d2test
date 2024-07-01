<?php

    class Header {

        static function header(){
            $htmlHeader = '
            <header>
                <a href="./home.php">ホーム</a>
                <a href="./sample.php">輝度計</a>
                <a href="./comparision.php">比較</a>
                <a href="./d2.php">d2</a>
                <a href="./d2White.php">d2白</a>
            </header>
            ';
            return $htmlHeader;
        }
    }