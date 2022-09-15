<?php
    class porcentaje{
        public $m;
        public $f;
        public $total;
        public $totalm;
        public $totalf;

        public function getM(){
            return $this->m;
        }

        public function getF(){
            return $this->f;
        }

        public function setM($m){
            $this->m = $m;
        }

        public function setF($f){
            $this->f = $f;
        }

        public function Proceso(){
            $this->total = $this->m + $this->f;
            $this->totalm = ($this->m/$this->total)*100;
            $this->totalf = ($this->f/$this->total)*100;
            return '
            <div class="card border-primary mb-3" style="max-width: 30rem;">
                <div class="card-header">Porcentaje de estudiantes </div>
                <div class="card-body text-primary">
                    <h5 class="card-title">Total de estudiates: '.$this->total.'</h5>
                    <h6 class="card-text">Porcentaje de estudiante masculinos: '.$this->totalm.'%  </h6>
                    <h6 class="card-text">Porcentaje de estudiante femeninas: '.$this->totalf.'% </h6>
                </div>
            </div>  ';
            
        }

    }
?>