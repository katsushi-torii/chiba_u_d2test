<?php

    class FunctionComparisionDAO {

        private static $db;

        public static function startDb(){
            self::$db = new PDOAgent('ComparisionColors');
        }

        public static function updateComparisionColors($id, $selectedNumber){
            $sql = "UPDATE `comparision` SET $selectedNumber = $selectedNumber + 2 WHERE `id` = :id";
            
            self::$db->query($sql);
            
            self::$db->bind(":id", $id);
            // self::$db->bind(":selectNumber", $selectedNumber);
            //なぜかselectedNumberだけbindできない

            self::$db->execute();

            return self::$db->lastInsertId();
        }
    }