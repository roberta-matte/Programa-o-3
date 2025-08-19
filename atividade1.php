<?php
class Funcionario {
    protected string $nome;
    protected float $salario;

    public function __construct(string $nome, float $salario) {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function addAumento(float $valor) {
        $this->salario += $valor;
    }

    public function ganhoAnual(): float {
        return $this->salario * 12;
    }

    public function exibeDados() {
        echo "Nome: {$this->nome}\n";
        echo "Salário: R$ " . number_format($this->salario, 2, ',', '.') . "\n";
        echo "Ganho Anual: R$ " . number_format($this->ganhoAnual(), 2, ',', '.') . "\n";
    }
}

class Assistente extends Funcionario {
    protected string $matricula;

    public function __construct(string $nome, float $salario, string $matricula) {
        parent::__construct($nome, $salario);
        $this->matricula = $matricula;
    }

    public function getMatricula(): string {
        return $this->matricula;
    }

    public function setMatricula(string $matricula) {
        $this->matricula = $matricula;
    }

    public function exibeDados() {
        parent::exibeDados();
        echo "Matrícula: {$this->matricula}\n";
    }
}

class Tecnico extends Assistente {
    private float $bonusSalarial;

    public function __construct(string $nome, float $salario, string $matricula, float $bonusSalarial) {
        parent::__construct($nome, $salario, $matricula);
        $this->bonusSalarial = $bonusSalarial;
    }

    public function ganhoAnual(): float {
        return ($this->salario + $this->bonusSalarial) * 12;
    }

    public function exibeDados() {
        parent::exibeDados();
        echo "Bônus Salarial: R$ " . number_format($this->bonusSalarial, 2, ',', '.') . "\n";
    }
}

class Administrativo extends Assistente {
    private string $turno; 
    private float $adicionalNoturno;

    public function __construct(string $nome, float $salario, string $matricula, string $turno, float $adicionalNoturno = 0) {
        parent::__construct($nome, $salario, $matricula);
        $this->turno = strtolower($turno);
        $this->adicionalNoturno = ($this->turno === 'noite') ? $adicionalNoturno : 0;
    }

    public function ganhoAnual(): float {
        return ($this->salario + $this->adicionalNoturno) * 12;
    }

    public function exibeDados() {
        parent::exibeDados();
        echo "Turno: {$this->turno}\n";
        if ($this->turno === 'noite') {
            echo "Adicional Noturno: R$ " . number_format($this->adicionalNoturno, 2, ',', '.') . "\n";
        }
    }
}


echo " FUNCIONÁRIO TÉCNICO \n";
$tecnico = new Tecnico("Roberta Matte", 4500, "T310", 500);
$tecnico->exibeDados();

echo "\n FUNCIONÁRIO ADMINISTRATIVO (NOITE) \n";
$admNoite = new Administrativo("Ana", 1800, "A303", "noite", 300);
$admNoite->exibeDados();

echo "\n FUNCIONÁRIO ADMINISTRATIVO (DIA) \n";
$admDia = new Administrativo("Paulo", 3000, "A401", "dia");
$admDia->exibeDados();

?>

