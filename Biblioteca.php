<?php
   class Biblioteca{

        public $id;
        public $autor = [];
        public $numeropg;
        public $valor;

        public $estoque = 1;

        private function VerificarEstoque(){
            global $estoque;
            if($estoque <= 0){
                return false;
            }else{
                $estoque--;
                return true;
            }
        }
        public function livros(){
            $this->VerificarID();
            $this->IdDisponivel();
            if(!$this->VerificarEstoque()){
                return "Livro ID: $this->id, Fora de estoque!\n";
            }else{
                $valor = $this->valor;
                $paginas = $this->numeropg;
                $autor = $this->AssociarId($this->id);
                $estoque = $this->VerificarEstoque() ?: "Disponivel";
                return "$autor, Total de paginas: $paginas, Valor: R$$valor, Estoque: $estoque \n";
            }
            
        }
        private function VerificarID(){
            $id = $this->id;
              $id = [
                1 => "ID: 1",
                2 => "ID: 2",
                3 => "ID: 3"
            ];
            if(isset($id[$this->id])){
                return "Esse ID existe: " . $id[$this->id];
            }else{
                return "ID invalido";
            }
        }
        private function IdDisponivel(){
            $id = $this->id;
            if($id == 1 || $id == 2 || $id == 3){
                return "ID disponivel";
            }else{
                return "ID nao disponivel";
            }
        }
        public function AssociarId(&$id){
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

        public function Registro(){
            $nome = $this->nome;
            $endereco = $this->endereco;
            $email = $this->email;
            $telefone = $this->telefone;


            echo "$nome registrado. \n";
            echo "Dados: Email:$email, telefone:$telefone, endereco:$endereco\n";
        }
}

class RegistarLivro extends Biblioteca{
    public $nome;
    public $id;
    public $valor;
    public $numeropg;

    public function RegistrarLivro(){
        $this->nome = readline("Digite o nome do livro: \n");
        $this->id = (int)readline("Digite o ID do livro: \n");
        $this->valor = (float)readline("Digite o valor do livro: \n");
        $this->numeropg = (int)readline("Digite o numero de paginas do livro: \n");
        echo "Livro registrado: $this->nome, ID: $this->id, Valor: R$$this->valor, Paginas: $this->numeropg\n";
    }
}
function RegistrarPessoa(){
    $luiz = new PessoaBiblio;
    $luiz->nome = readline("Digite o nome: \n");
    $luiz->endereco = readline("Digite o endereco: \n");
    $luiz->email = readline("Digite o email: \n");
    $luiz->telefone = readline("Digite o telefone: \n");
    echo $luiz->registro();
}
function RegistrarCompra(){
    $luiz = new Biblioteca;
    $luiz->id = (int)readline("Digite o ID do livro: \n");
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
            return 0;
    }
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
    while(true){
        RegistrarCompra();
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



