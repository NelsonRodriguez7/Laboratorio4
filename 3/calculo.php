<?php
    class calculo{
        public $po;
        public $da;
        public $vd;
        public $i;
        public $resul;
        public $resul2;

        public function getPo(){
            return $this->po;
        }

        public function getVd(){
            return $this->vd;
        }

        public function setPo($po){
            $this->po=$po;
        }

        public function setVd($vd){
            $this->vd=$vd;
        }

        public function Proceso(){
               $this->da = $this->po / $this->vd;
               $this->resul = $this->po;
               $this->resul2 = 0;
               for ($this->i=0;$this->i<=$this->vd;$this->i++){
                    echo '
                    <tr>
                        <td scope="row"><center>'.$this->i.'</center></td>
                        <td><center>'.$this->resul.'</center></td>
                        <td><center>'.$this->resul2.'</center></td>
                    </tr>
                    ';
                    $this->resul = $this->resul-$this->da;
                    $this->resul2 = $this->resul2+$this->da;
               }
               
        }

    }
?>