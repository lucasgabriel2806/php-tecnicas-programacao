<?php

// Classe Telefone
class Telefone {
    private int $ddd;
    private string $numero;

    public function __construct(int $ddd, string $numero) {
        $this->ddd = $ddd;
        $this->numero = $numero;
    }

    public function getDdd(): int {
        return $this->ddd;
    }

    public function getNumero(): string {
        return $this->numero;
    }

    public function __toString(): string {
        return "($this->ddd) $this->numero";
    }
}

// Classe Pessoa
class Pessoa {
    protected string $nome;
    protected array $telefones = []; // Uma pessoa pode ter vários telefones

    public function __construct(string $nome) {
        $this->nome = $nome;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function addTelefone(Telefone $telefone): void {
        $this->telefones[] = $telefone;
    }

    public function getTelefones(): array {
        return $this->telefones;
    }

    public function mostrarTelefones(): string {
        $resultado = "";
        foreach ($this->telefones as $tel) {
            $resultado .= $tel . " ";
        }
        return trim($resultado);
    }
}

// Classe Chef
class Chef extends Pessoa {
    private string $especialidade;
    private array $receitas = [];

    public function __construct(string $nome, string $especialidade) {
        parent::__construct($nome);
        $this->especialidade = $especialidade;
    }

    public function getEspecialidade(): string {
        return $this->especialidade;
    }

    public function addReceita(Receita $receita): void {
        $this->receitas[] = $receita;
    }

    public function getReceitas(): array {
        return $this->receitas;
    }
}

// Classe Avaliador
class Avaliador extends Pessoa {
    private string $cpf;

    public function __construct(string $nome, string $cpf) {
        parent::__construct($nome);
        $this->cpf = $cpf;
    }

    public function getCpf(): string {
        return $this->cpf;
    }
}

// Classe Receita
class Receita {
    private string $nome;
    private string $ingredientes;
    private Chef $chef;
    private array $avaliacoes = [];

    public function __construct(string $nome, string $ingredientes, Chef $chef) {
        $this->nome = $nome;
        $this->ingredientes = $ingredientes;
        $this->chef = $chef;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getIngredientes(): string {
        return $this->ingredientes;
    }

    public function getChef(): Chef {
        return $this->chef;
    }

    public function addAvaliacao(Avaliacao $avaliacao): void {
        $this->avaliacoes[] = $avaliacao;
    }

    public function getAvaliacoes(): array {
        return $this->avaliacoes;
    }
}

// Classe Avaliacao
class Avaliacao {
    private float $nota;
    private Avaliador $avaliador;
    private Receita $receita;

    public function __construct(float $nota, Avaliador $avaliador, Receita $receita) {
        $this->nota = $nota;
        $this->avaliador = $avaliador;
        $this->receita = $receita;
    }

    public function getNota(): float {
        return $this->nota;
    }

    public function getAvaliador(): Avaliador {
        return $this->avaliador;
    }

    public function getReceita(): Receita {
        return $this->receita;
    }

    public function __toString(): string {
        return "Avaliação:
Nota: {$this->nota}
Avaliador: {$this->avaliador->getNome()} (CPF: {$this->avaliador->getCpf()})
Receita: {$this->receita->getNome()}
Chef: {$this->receita->getChef()->getNome()} ({$this->receita->getChef()->getEspecialidade()})
Ingredientes: {$this->receita->getIngredientes()}
Telefones do Avaliador: {$this->avaliador->mostrarTelefones()}";
    }
}

// ============= Instanciação dos Objetos =============

// Telefones
$tel1 = new Telefone(11, "91234-5678");
$tel2 = new Telefone(21, "99876-5432");

// Chef
$chef = new Chef("Carlos Silva", "Culinária Italiana");

// Receita
$receita = new Receita("Lasanha Bolonhesa", "Massa, carne, queijo, molho de tomate", $chef);
$chef->addReceita($receita);

// Avaliador
$avaliador = new Avaliador("Ana Souza", "123.456.789-00");
$avaliador->addTelefone($tel1);
$avaliador->addTelefone($tel2);

// Avaliação
$avaliacao = new Avaliacao(9.5, $avaliador, $receita);

// Mostrar dados da Avaliação
echo $avaliacao;
?>
