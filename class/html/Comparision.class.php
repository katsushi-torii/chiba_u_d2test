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

        static function comparisionList(){
            $htmlList = '
            <main class="comparision">';
            for($i = 0; $i <= 10; $i++){
                $htmlList .= self::comparisionRow();
            }
            $htmlList .= '</main>';
            return $htmlList;
        }

        static function comparisionRow(){
            $htmlRow = '
            <section>
                <button class="check color1">
                    <aside>
                        <section>
                            <h3>|</h3> <h3>|</h3>
                        </section>
                        <h3>d</h3>
                        <section>
                            <h3>|</h3> <h3>|</h3>
                        </section>
                    </aside>
                    <span>/</span>
                </button>
                <button class="check color2">
                    <aside>
                        <section>
                            <h3>|</h3> <h3>|</h3>
                        </section>
                        <h3>d</h3>
                        <section>
                            <h3>|</h3> <h3>|</h3>
                        </section>
                    </aside>
                    <span>/</span>
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