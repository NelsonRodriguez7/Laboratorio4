<?php
    class salario{
        public $ht;
        public $pt;
        public $sb;
        public $ds;
        public $sn;

        public function getHt(){
            return $this->ht;
        }

        public function getPt(){
            return $this->pt;
        }

        public function setHt($ht){
            $this->ht=$ht;
        }

        public function setPt($pt){
            $this->pt=$pt;
        }

        public function Proceso(){
            $this->sb = $this->pt*$this->ht;
            $this->ds = 0.2 * $this->sb;
            $this->sn = $this->sb - $this->ds;
            return $this->sn;
        }
        }

?>