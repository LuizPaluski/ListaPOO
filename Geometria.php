<?php

    class Objeto{
        public $largura;
        public $altura;

        private function calcularArea(){
            return $this->largura * $this->altura;
        }
        public function getArea(){
            return $this->calcularArea();
        }
    }

    class Triangulo extends Objeto{

        public function tipoTriangulo(){
            if($this->largura == $this->altura){
                echo "Triangulo Equilatero";
            } elseif ($this->largura != $this->altura) {
                echo "Triangulo Isosceles";
            } else {
                echo "Triangulo Escaleno";
            }
        }
        public function getArea(){
            return parent::getArea() / 2;
        }
    }

    class Retangulo extends Objeto{

        public function eumquadrado(){
            if($this->largura == $this->altura){
                return "Quadrado";
            } else {
                return "Retangulo";
            }
        }
        public function getArea(){
            parent::getArea();
        }
    }

$foma = new Objeto();
$foma->largura = readline("Informe a largura: ");
$foma->altura = readline("Informe a altura: ");
$forma->tipoTriangulo();
