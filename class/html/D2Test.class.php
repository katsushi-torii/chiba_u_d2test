<?php

    class D2Test {

        static function pageHead(){
            $htmlHead = '            
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Home</title>
                <link rel="stylesheet" href="../../css/style.css">
                <script src="https://code.jquery.com/jquery-3.7.1.js"
                integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
                crossorigin="anonymous"></script>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
            </head>
            <body>';
            return $htmlHead;
        }

        static function d2List(){
            $d2List = '
            <main class="d2">';
            //列の数調整
            for($i = 0; $i < 30; $i++){
                $d2List .= self::d2Row($i);
            }
            return $d2List;
        }

        static function d2Row($i){
            $d2Row = '<section class=row'.$i.'>';
            for($j = 0; $j < 10; $j++){
                $d2Row .= self::d2Button($j);
            }
            $d2Row .= '</section>';
            return $d2Row;
        }

        static function d2Button($j){
            $d2Button = '
            <button class="check">
                <aside>
                    <section>
                        <h3>|</h3> <h3>|</h3>
                    </section>
                    <h3>d</h3>
                    <section>
                        <h3>|</h3> <h3>|</h3>
                    </section>
                </aside>
                <span class="d">/</span>
            </button>';
            return $d2Button;
        }

        static function script(){
            $htmlScript = '
                    <button class="finish" onclick="finish()">Next</button>
                    <form action="d2.php" method="POST" hidden>
                            <input type="hidden" name="colors" id="colors">
                    </form>
                </main>
            </body>
            <script src="../../Components/js/d2.js" defer></script>
            </hmtl>';
            return $htmlScript;
        }

        static function scriptWhite(){
            $htmlScript = '
                    <button class="finish" onclick="finish()">Finish</button>
                    <form action="d2.php" method="POST" hidden>
                            <input type="hidden" name="colors" id="colors">
                    </form>
                </main>
            </body>
            <script src="../../Components/js/d2White.js" defer></script>
            </hmtl>';
            return $htmlScript;
        }
    }