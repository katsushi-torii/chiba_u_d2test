<?php

    class ComparisionColors {
        private int $id;
        private string $colorA;
        private string $colorB;
        private int $countA;
        private int $countB;

        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
            return $this;
        }

        public function getColorA(){
            return $this->colorA;
        }

        public function setColorA($colorA){
            $this->colorA = $colorA;
            return $this;
        }

        public function getColorB(){
            return $this->colorB;
        }

        public function setColorB($colorB){
            $this->colorB = $colorB;
            return $this;
        }
        
        public function getCountA(){
            return $this->countA;
        }

        public function setCountA($countA){
            $this->countA = $countA;
            return $this;
        }
        public function getCountB(){
            return $this->countB;
        }

        public function setCountB($countB){
            $this->countB = $countB;
            return $this;
        }
    }