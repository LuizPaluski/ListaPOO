<?php

    class Objeto{
        public $largura;
        public $altura;

        public function calcularArea(){
            return $this->largura * $this->altura;
        }
        public function getArea(){
            return $this->calcularArea();
        }
    }

    class Triangulo extends Objeto{

        public function tipoTriangulo(){
            if($this->largura == $this->altura){
                return "Triangulo Equilatero";
            } elseif ($this->largura != $this->altura) {
                return "Triangulo Isosceles";
            } else {
                return "Triangulo Escaleno";
            }
        }
        public function getAreaT(){
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
        public function getAreaQ(){
            parent::getArea();
        }
    }

while(true){
    echo "1. Verificar Area e tipo do triangulo. \n";
    echo "2. Verificar Area e se e quadrado.\n";
    $opcao = readline("Digite Sua Opcao: 1 ou 2\n");
    switch($opcao){
        case 1:
            return TrianguloCaculo();
        case 2:
            return QuadradoCalculo();
        default:
            return "Comando invalido.\n";
            
}
}

function QuadradoCalculo(){
    $forma = new Retangulo();
    $forma->largura = readline("Digite a largura: \n");
    $forma->altura = readline("Digite a altura: \n");
    echo "Ele e um:". $forma->eumquadrado();
    echo  "A area do objeto e:". $forma->getAreaQ();
}

function TrianguloCaculo(){
$forma = new Triangulo();
$forma->largura = readline("Digite a largura: \n");
$forma->altura = readline("Digite a altura: \n");
echo "A area do objeto e: " . $forma->getAreaT() . "\n";
echo "O tipo do triangulo e: " . $forma->tipoTriangulo() . "\n";
}

