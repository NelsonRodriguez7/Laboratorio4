<?php
    class cifrado{
        public $cifrar;
        public $salt;
        public $ci;
        public $ci2;
        public $ci3;
        public $ci4;
        public $ci5;
        public $ci6;
        public $ci7;
        public $ci8;
        public $ci9;
        public $ci10;
        public $ci11;

        public function getCifrar(){
            return $this->cifrar;
        }

         public function getSalt(){
            return $this->salt;
        }

        public function setCifrar($cifrar){
            $this->cifrar=$cifrar;
        }

        public function setSalt($salt){
            $this->salt=$salt;
        }

        public function Mostrar(){
            $this->ci = base64_encode($this->salt.$this->cifrar);
            return '
            <tr>
                <td scope="row">Base64</td>
                <td>'.$this->ci.'</td>
            </tr>
            ';
        }

        public function Mostrar2(){
            $this->ci2 = md5($this->salt.$this->cifrar);
            return '
            <tr>
                <td scope="row">md5</td>
                <td>'.$this->ci2.'</td>
            </tr>
            ';
        }

        public function Mostrar3(){
            $this->ci3 = sha1($this->salt.$this->cifrar);
            return '
            <tr>
                <td scope="row">sha1</td>
                <td>'.$this->ci3.'</td>
            </tr>
            ';
        }

        public function Mostrar4(){
            $this->ci4 = crc32($this->salt.$this->cifrar);
            return '
            <tr>
                <td scope="row">crc32</td>
                <td>'.$this->ci4.'</td>
            </tr>
            ';
        }

        public function Mostrar5(){
            $this->ci5 = crypt($this->salt,$this->cifrar);
            return '
            <tr>
                <td scope="row">crypt</td>
                <td>'.$this->ci5.'</td>
            </tr>
            ';
        }

        public function Mostrar6(){
            $this->ci6 = hash('sha224',$this->salt.$this->cifrar);
            return '
            <tr>
                <td scope="row">hash-sha224</td>
                <td>'.$this->ci6.'</td>
            </tr>
            ';
        }

        public function Mostrar7(){
            $this->ci7 = hash('sha512',$this->salt.$this->cifrar);
            return '
            <tr>
                <td scope="row">hash-sha512</td>
                <td>'.$this->ci7.'</td>
            </tr>
            ';
        }

        public function Mostrar8(){
            $this->ci8 = hash('whirlpool',$this->salt.$this->cifrar);
            return '
            <tr>
                <td scope="row">hash-whirlpool</td>
                <td>'.$this->ci8.'</td>
            </tr>
            ';
        }

        public function Mostrar9(){
            $this->ci9 = hash('snefru',$this->salt.$this->cifrar);
            return '
            <tr>
                <td scope="row">hash-snefru</td>
                <td>'.$this->ci9.'</td>
            </tr>
            ';
        }

        public function Mostrar10(){
            $this->ci10 = hash('haval128,3',$this->salt.$this->cifrar);
            return '
            <tr>
                <td scope="row">hash-haval128,3</td>
                <td>'.$this->ci10.'</td>
            </tr>
            ';
        }

        public function Mostrar11(){
            $this->ci11 = hash('haval128,5',$this->salt.$this->cifrar);
            return '
            <tr>
                <td scope="row">hash-haval128,5</td>
                <td>'.$this->ci11.'</td>
            </tr>
            ';
        }

    }
?>