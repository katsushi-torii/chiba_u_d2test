<?php

    class Comparision {

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
            <body>
            ';
            return $htmlHead;
        }

        static function comparisionList(array $comparisionColors){
            $htmlList = '
            <main class="comparision">';
            $first = true;
            foreach($comparisionColors as $comparisionColor){
                if($first){
                    $htmlList .= self::comparisionRow($comparisionColor, true);
                }else{
                    $htmlList .= self::comparisionRow($comparisionColor, false);
                }
                $first = false;
            }
            foreach($comparisionColors as $comparisionColor){
                $htmlList .= self::comparisionRow($comparisionColor, false);
            }
            $htmlList .= 
                '<section>
                    <button onclick="finish()" class="finishButton">終了</button>
                    <form action="comparisionResult.php" method="POST" hidden>
                        <input type="hidden" name="ids" id="ids">
                        <input type="hidden" name="results" id="results">
                        <input type="hidden" name="numbers" id="numbers">
                    </form>
                </section>
            </main>';
            return $htmlList;
        }

        static function comparisionRow($comparisionColor, $first){
            if($first){
                $htmlRow = '<section class="'.$comparisionColor->id.' first">';
            }else{
                $htmlRow = '<section class="'.$comparisionColor->id.'">';
            }
            $htmlRow .= '
                <button class="check countA '.$comparisionColor->colorA.'">
                    <aside>
                        <h3>|</h3> <h3>|</h3>
                    </aside>
                    <h3>d</h3>
                    <aside>
                        <h3>|</h3> <h3>|</h3>
                    </aside>
                </button>
                <button class="check countB '.$comparisionColor->colorB.'">
                    <aside>
                        <h3>|</h3> <h3>|</h3>
                    </aside>
                    <h3>d</h3>
                    <aside>
                        <h3>|</h3> <h3>|</h3>
                    </aside>
                </button>
            </section>
            ';
            return $htmlRow;
        }

        static function script(){
            $htmlScript = '
            <script src="../../Components/js/comparision.js" defer></script>
            </hmtl>
            ';
            return $htmlScript;
        }
    }