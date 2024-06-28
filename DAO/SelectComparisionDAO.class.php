<?php

    class SelectComparisionDAO {

        private static $db;

        public static function startDb(){
            self::$db = new PDOAgent('ComparisionColors');
        }

        public static function getAllComparisionColors(){
            $sql = "SELECT * FROM `comparision`";
            
            self::$db->query($sql);

            self::$db->execute();

            return self::$db->resultSet();
        }
    }