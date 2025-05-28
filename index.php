<?php
   class Biblioteca{
        public $id = 1;
        public $estoque = 2;
        public $autor = [
           
        ];
        public $numeropg;
        public $valor;

        public function livros(){
            $this->VerificarID($this->id);
            $estoque = $this->estoque;
            $valor = $this->valor;
            if($estoque > 0){
                return "Livro ID: $this->id, Valor: R$$valor, Estoque: $estoque\n";
                ;
            }else{
                return "Livro ID: $this->id, Valor: R$$valor, Fora de estoque!\n";
            }
        }
     
            
        
        private function VerificarID(){
            if($this->id > 0){
                return "ID invalido";
            }else{
                return "ID valido";
                
            }
            
        }

        public function verificador(){
            $this->id;
            $estoque = $this->estoque;
            $novoestoque = $estoque - 1;
            if($novoestoque <= 0 ){
                return "Fora de estoque!\n";
            }else{
                return "estoque disponivel\n";
            }
        }
   }

    class PessoaBiblio extends Biblioteca{
        public $nome;
        public $endereco;
        public $email;
        public $telefone;

        public function Registro(){
            $nome = $this->nome;
            $endereco = $this->endereco;
            $email = $this->email;
            $telefone = $this->telefone;


            echo "$nome registrado. \n";
            echo "Dados: Email:$email, telefone:$telefone, endereco:$endereco\n";
        }

       

}

function registrarpessoa(){
    $luiz = new PessoaBiblio;
    $luiz->nome = readline("Digite o nome: \n");
    $luiz->endereco = readline("Digite o endereco: \n");
    $luiz->email = readline("Digite o email: \n");
    $luiz->telefone = readline("Digite o telefone: \n");

    echo $luiz->registro();
    return registrarcompra();
}

return registrarpessoa();

function registrarcompra(){    

    $Sebo = new Biblioteca;
    $Sebo->id = readline("Digite o ID do livro: \n");
    $Sebo->id++;
    if($Sebo->id < $Sebo->id){
        echo "ID ja esta sendo usado\n";
        return registrarcompra();
    }
    $Sebo->valor = readline("Digite o valor:\n");
    $Sebo->estoque = 2;
    echo $Sebo->livros();
    echo $Sebo->verificador();
    while(true){
    return registrarcompra();
}
    }

