<?php

class Livro {
  private $titulo;
  private $autor;
  private $anoPublicacao;
  private $disponivel;
  protected $leitorAtual; 

  public function __construct($titulo, $autor, $anoPublicacao) {
    $this->titulo = $titulo;
    $this->autor = $autor;
    $this->anoPublicacao = $anoPublicacao;
    $this->disponivel = true; // o livro está disponível
    $this->leitorAtual = null; // nenhum leitor pegou o livro
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

  
  public function emprestar($nomeLeitor) { 
    if ($this->disponivel) {
      $this->disponivel = false;
      $this->leitorAtual = $nomeLeitor; 
      echo nl2br ("Livro '" . $this->titulo . "' emprestado para " . $nomeLeitor . " com sucesso.\n");
    } else {
      echo nl2br ("Livro '" . $this->titulo . "' já está emprestado.\n");
    }
  }

  public function devolver() {
    if (!$this->disponivel) {
      $this->disponivel = true;
      $this->leitorAtual = null; 
      echo nl2br ("Livro '" . $this->titulo . "' devolvido com sucesso.\n");
    } else {
      echo nl2br ("Livro '" . $this->titulo . "' já está disponível.\n");
    }
  }

  public function estaDisponivel() {
    if ($this->disponivel) {
      return "O livro '" . $this->titulo . "' está disponível para empréstimo.\n";
    } else {
      return "O livro '" . $this->titulo . "' não está disponível para empréstimo.\n";
    }
  }

  public function quemPegou() { 
    if ($this->leitorAtual) {
      return "O livro '" . $this->titulo . "' está emprestado para " . $this->leitorAtual . ".\n";
    } else {
      return "O livro '" . $this->titulo . "' não está emprestado para ninguém no momento.\n";
    }
  }

  
  public function exibirInformacoes() {
    echo nl2br ("Título: " . $this->titulo . "\n");
    echo nl2br ("Autor: " . $this->autor . "\n");
    echo nl2br ("Ano de Publicação: " . $this->anoPublicacao . "\n");
    echo nl2br ("Disponível: " . ($this->disponivel ? "Sim" : "Não") . "\n");
    if ($this->leitorAtual) {
      echo nl2br ("Emprestado para: " . $this->leitorAtual . "\n");
    }
  }
}


$livro1 = new Livro("Academia dos Casos Arquivados", "Jennifer Lynn Barnes", 2024);

echo nl2br($livro1->estaDisponivel()); // O livro 'Academia dos Casos Arquivados' está disponível para empréstimo.
echo nl2br($livro1->quemPegou()); // O livro 'Academia dos Casos Arquivados' não está emprestado para ninguém no momento.
$livro1->emprestar("Roberta"); // Livro 'Academia dos Casos Arquivados' emprestado para Roberta com sucesso.
echo nl2br($livro1->estaDisponivel()); // O livro 'Academia dos Casos Arquivados' não está disponível para empréstimo.
echo nl2br($livro1->quemPegou()); // O livro 'Academia dos Casos Arquivados' está emprestado para Roberta.
$livro1->devolver(); // Livro 'Academia dos Casos Arquivados' devolvido com sucesso.
echo nl2br($livro1->estaDisponivel()); // O livro 'Academia dos Casos Arquivados' está disponível para empréstimo.
echo nl2br($livro1->quemPegou()); // O livro 'Academia dos Casos Arquivados' não está emprestado para ninguém no momento.

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Livros</title>
  


    
</head>
<body>