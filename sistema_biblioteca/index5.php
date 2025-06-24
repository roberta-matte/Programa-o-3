<?php
class Livro {
    private $titulo;
    private $autor;

    public function __construct($titulo, $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }
}

class Leitor {
    private $nome;
    private $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }
}

class Biblioteca {
    public $nomeBiblioteca;
    private $livros;
    private $leitores;

    public function __construct($nomeBiblioteca) {
        $this->nomeBiblioteca = $nomeBiblioteca;
        $this->livros = array();
        $this->leitores = array();
    }

    public function adicionarLivro(Livro $livro) {
        array_push($this->livros, $livro);
    }

    public function adicionarLeitor(Leitor $leitor) {
        array_push($this->leitores, $leitor);
    }

    public function listarLivros() {
        echo nl2br ("Livros da  " . $this->nomeBiblioteca . ":\n");
        foreach ($this->livros as $livro) {
            echo nl2br ("Título: " . $livro->getTitulo() . ", Autor: " . $livro->getAutor() . "\n");
        }
    }

    public function listarLeitores() {
        echo nl2br ("Leitores da  " . $this->nomeBiblioteca . ":\n");
        foreach ($this->leitores as $leitor) {
            echo nl2br ("Nome: " . $leitor->getNome() . ", Idade: " . $leitor->getIdade() . "\n");
        }
    }
}

// Cenário
$biblioteca = new Biblioteca("Biblioteca Matte");

$livro1 = new Livro("Harry Potter e a Pedra Filosofal", "J. K. Rowling");
$livro2 = new Livro("Lendários", "Tracy Deonn");
$livro3 = new Livro(" Olhos d'água", "Conceição Evaristo");

$leitor1 = new Leitor("Margarete", 32);
$leitor2 = new Leitor("Roberta", 17);

$biblioteca->adicionarLivro($livro1);
$biblioteca->adicionarLivro($livro2);
$biblioteca->adicionarLivro($livro3);

$biblioteca->adicionarLeitor($leitor1);
$biblioteca->adicionarLeitor($leitor2);

$biblioteca->listarLivros();
$biblioteca->listarLeitores();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Livros</title>
 
</head>
<body>