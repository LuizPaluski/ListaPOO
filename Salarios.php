<?php

    class Funcionarios{
        public $id;
        public $nome;
        public $salario;
        public $cargo;

        public function Cargos(){
            $this->salario;
            $this->id;
            $this->cargo = readline("Informe seu cargo:\n");
            $this->nome;
            switch ($this->cargo) {
                case "Aprendiz":
                    echo "Aprendiz:$this->nome Salario de: ". $this->salario = "1500 ID: $this->id \n";
                break;
                case "Junior":
                    echo "Junior:$this->nome Salario de: ". $this->salario = "2500 ID: $this->id \n";
                break;
                case "Pleno": 
                    echo "Pleno:$this->nome Salario de: ". $this->salario = "4500 ID: $this->id \n";
                break;
                case "Senior":
                    echo "Senior:$this->nome Salario de: ". $this->salario = "7500 ID: $this->id \n";
                case "Gerente":
                    echo "Gerente:$this->nome Salario de: ". $this->salario = "19000 ID: $this->id \n";
                    break;
                default:
                    echo "Cargo nao existe \n";
                    return 0;       
        }
    }

}
    class Gerente extends Funcionarios{
        public $quantidadeFuncionarios;
        public $id;
        public function Gerenciar(){
            $this->quantidadeFuncionarios = (int)readline("Informe a quantidade de funcionarios: \n");
            echo "Gerenciando $this->quantidadeFuncionarios funcionarios\n";
        }

        public function Cargos(){
            parent::Cargos();
        }
    }


    function funcionario(){
        $Funci = new Funcionarios();
        $Funci->nome = readline("Digite o nome do funcionario: \n");
        $Funci->id = 1;
        $Funci->cargos();
    }

    function gerentes(){
        $Gerent = new Gerente();
        $Gerent->nome = readline("Digite o nome do gerente: \n");
        $Gerent->id = 2;
        $Gerent->Gerenciar();
        $Gerent->cargos();
}

while(true){
    $opcao = readline("Voce deseja cadastrar gerente ou funcionario?: \n");
    if($opcao == "gerente"){
        gerentes();
    } elseif($opcao == "funcionario") {
        funcionario();
    } else {
        echo "Opcao invalida, tente novamente.\n";
    }
}