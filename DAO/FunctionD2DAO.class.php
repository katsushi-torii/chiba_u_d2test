<?php

    class FunctionD2DAO {

        private static $db;

        public static function startDb(){
            self::$db = new PDOAgent('ComparisionColors');
            //ここはcomparisioncolorでやってしまっているため後で修正
        }

        public static function updateColors($colors){
            //最初の0はidの分
            $sql = "INSERT INTO `d2` VALUES (0, $colors)";
            self::$db->query($sql);
            
            // echo $sql;

            self::$db->execute();
            return self::$db->lastInsertId();
        }
    }