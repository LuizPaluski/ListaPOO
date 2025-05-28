<?php
   class Biblioteca{
        public $id ;
        public $estoque = 2;
        public $autor = [
           
        ];
        public $numeropg;
        public $valor;

        public function livros(){
            $this->VerificarID();
            $this->AssociarId($this->id);
            $estoque = $this->estoque;
            $valor = $this->valor;
            $paginas = $this->numeropg;
            
            if($estoque > 0){
                $autor = $this->AssociarId($this->id);
                return "$autor, Total de paginas: $paginas, Valor: R$$valor, Estoque: $estoque\n";
            }else{
                return "Livro ID: $this->id, Valor: R$$valor, Fora de estoque!\n";
            }
        }
        private function VerificarID(){
            $this->id;
            if($this->id != $this->id){
                return "ID invalido";
            }else{
                return "ID valido";
                
            }
            
        }
        public function verificador(){
            $this->VerificarID();
            if($this->VerificarID() == "ID invalido"){
                return "Tente novamente\n";
            }else{
                return "ID valido\n";
            }

            if(isset($this->id)){
                unset($this->id);
            }
            return "ID removido com sucesso\n";
        }

        public function AssociarId($id){
            $this->id = $id;
            switch($this->id){
                case 1:
                    $this->autor = "Autor: Luiz";
                    break;
                case 2:
                    $this->autor = "Autor: George";
                    break;
                case 3:
                    $this->autor = "Autor: Isaac";
                    break;
                default:
                    return "ID invalido, tente novamente\n";
            }
            return $this->autor;
        }
   }

    class PessoaBiblio extends Biblioteca{
        public $nome;
        public $endereco;
        public $email;
        public $telefone;
        
        public function AlugouLivro(){
            $nome = $this->nome;
            $id = $this->id;
            $estoque = $this->estoque;
            if($estoque > 0){
                return "$nome alugou o livro ID: $id\n";
            }else{
                return "Livro ID: $id, Fora de estoque!\n";
            }
        }

        public function Registro(){
            $nome = $this->nome;
            $endereco = $this->endereco;
            $email = $this->email;
            $telefone = $this->telefone;


            echo "$nome registrado. \n";
            echo "Dados: Email:$email, telefone:$telefone, endereco:$endereco\n";
        }
}
function RegistrarPessoa(){
    $luiz = new PessoaBiblio;
    $luiz->nome = readline("Digite o nome: \n");
    $luiz->endereco = readline("Digite o endereco: \n");
    $luiz->email = readline("Digite o email: \n");
    $luiz->telefone = readline("Digite o telefone: \n");
    $luiz->AlugouLivro();
    echo $luiz->registro();
}
function RegistrarCompra(){
    $luiz = new Biblioteca;
    $luiz->id = readline("Digite o ID do livro: \n");
        switch($luiz->id){
        case 1:
            $luiz->valor = 22.00;
            break;
        case 2:
            $luiz->valor = 1.00;
            break;
        case 3:
            $luiz->valor = 97.00;
            break;
        default:
            echo "ID invalido, tente novamente\n";
            return registrarcompra();
    }
    $luiz->estoque = 2;
    switch($luiz->id){
        case 1:
            $luiz->numeropg = 10;
            break;
        case 2:
            $luiz->numeropg = 432;
            break;
        case 3:
            $luiz->numeropg = 7612;
            break;
    }
    echo $luiz->livros();
    echo $luiz->verificador();
    while(true){
        return RegistrarCompra();
    }
}

while(true){
    $opcao = readline("Digite 1 para registrar pessoa ou 2 para registrar compra: \n");
    if($opcao == 1){
        RegistrarPessoa();
    }elseif($opcao == 2){
        RegistrarCompra();
    }else{
        echo "Opcao invalida, tente novamente.\n";
    }
}
