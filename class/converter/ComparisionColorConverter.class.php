<?php

    class ComparisionColorConverter {

        public static function convertComparisionColor($newComparisionColor){

            if ( ! is_array( $newComparisionColor ) ) {
                $stdObj = new stdClass;
    
                $stdObj->id = $newComparisionColor->getId();
                $stdObj->colorA = $newComparisionColor->getColorA();
                $stdObj->colorB = $newComparisionColor->getColorB();
                $stdObj->countA = $newComparisionColor->getCountA();
                $stdObj->countB = $newComparisionColor->getCountB();
    
                return $stdObj;
            } else {
                $objList = [];
                for($i = 0; $i < count($newComparisionColor); $i++){
                    $stdObj = new stdClass;
    
                    $stdObj->id = $newComparisionColor[$i]->getId();
                    $stdObj->colorA = $newComparisionColor[$i]->getColorA();
                    $stdObj->colorB = $newComparisionColor[$i]->getColorB();
                    $stdObj->countA = $newComparisionColor[$i]->getCountA();
                    $stdObj->countB = $newComparisionColor[$i]->getCountB();
                    
                    $objList[] = $stdObj;
                }
    
                return $objList;
            }

        }
    }