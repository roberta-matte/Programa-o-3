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
    
    public function exibirInformacoes() {
        echo "Título: " . $this->titulo . "<br>";
        echo "Autor: " . $this->autor . "<br>";
        echo "Ano de Publicação: " . $this->anoPublicacao . "<br>";
        echo "Disponível: " . ($this->disponivel ? "Sim" : "Não") . "<br>";
    }
}

$meuLivro = new Livro("Academia dos Casos Arquivados", "Jennifer Lynn Barnes", 2024, true);

echo "</b>Informações do Livro:</b> Lançado no dia 29 de fevereiro de 2024 .....<br>";
$meuLivro->exibirInformacoes();
echo"<br>";
echo "</b>Alterando o status de disponibilidade...</b><br>";
$meuLivro->setDisponivel(false);
echo "</b>Informações do Livro após alteração:</b><br>";
$meuLivro->exibirInformacoes();
?>








?>