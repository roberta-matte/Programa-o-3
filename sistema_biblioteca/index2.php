<?php

class Livro {
    private $titulo;
    private $autor;
    private $anoPublicacao;
    private $disponivel;

    public function __construct($titulo, $autor, $anoPublicacao, $disponivel) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anoPublicacao = $anoPublicacao;
        $this->disponivel = $disponivel;
    }
    public function getTitulo() {
        return $this->titulo;
    }
    public function getAutor() {
        return $this->autor;
    }
    public function getAnoPublicacao() {
        return $this->anoPublicacao;
    }
    public function getDisponivel() {
        return $this->disponivel;
    }
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }
    public function setAutor($autor) {
        $this->autor = $autor;
    }
    public function setAnoPublicacao($anoPublicacao) {
        $this->anoPublicacao = $anoPublicacao;
    }
    public function setDisponivel($disponivel) {
        $this->disponivel = $disponivel;
    }
        public function emprestar() {
        if ($this->disponivel) {
            $this->disponivel = false;
            echo "Livro '" . $this->titulo . "' emprestado com sucesso.<br>";
        } else {
            echo "Livro '" . $this->titulo . "' já está emprestado.<br>";
        }
    }
    public function exibirInformacoes() {
        echo "Título: " . $this->titulo . "<br>";
        echo "Autor: " . $this->autor . "<br>";
        echo "Ano de Publicação: " . $this->anoPublicacao . "<br>";
        echo "Disponível: " . ($this->disponivel ? "Sim" : "Não") . "<br>";
    }
    public function devolver() {
        $this->disponivel = true;
        echo "Livro '" . $this->titulo . "' devolvido com sucesso.<br>";
    }

    public function estaDisponivel() {
        if ($this->disponivel) {
            return "O livro '" . $this->titulo . "' está disponível para empréstimo.<br>";
        } else {
            return "O livro '" . $this->titulo . "' não está disponível para empréstimo.<br>";
        }
    }
}
   


$meuLivro = new Livro("Academia dos Casos Arquivados", "Jennifer Lynn Barnes", 2024, true);

echo "</b>Informações do Livro:</b><br>";
$meuLivro->exibirInformacoes();
echo"<br>";
echo "</b>Alterando o status de disponibilidade...</b><br>";
$meuLivro->setDisponivel(false);
echo "</b>Informações do Livro após alteração:</b><br>";
$meuLivro->exibirInformacoes();

echo"<br>";
$livro1 = new Livro("Harry Potter e a Pedra Filosofal", "J. K. Rowling", 1998, true);
$livro2 = new Livro("Lendários", "Tracy Deonn", 2021, false);

echo $livro1->estaDisponivel(); 
echo $livro2->estaDisponivel(); 

$livro1->emprestar(); 
echo $livro1->estaDisponivel(); 

$livro2->emprestar(); 

$livro1->devolver(); 
echo $livro1->estaDisponivel(); 
echo"<br>";
$livro1->exibirInformacoes();
$livro2->exibirInformacoes();

?>