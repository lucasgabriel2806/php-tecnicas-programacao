<?php

// Classe Telefone
class Telefone {
    private int $ddd;
    private string $numero;

    public function __construct(int $ddd, string $numero) {
        $this->ddd = $ddd;
        $this->numero = $numero;
    }

    public function getDdd() {
        return $this->ddd;
    }

    public function setDdd(int $ddd) {
        $this->ddd = $ddd;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero(string $numero) {
        $this->numero = $numero;
    }

    public function __toString() {
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

    public function getNome() {
        return $this->nome;
    }

    public function setNome(string $nome) {
        $this->nome = $nome;
    }

    public function addTelefone(Telefone $telefone) {
        $this->telefones[] = $telefone;
    }

    public function getTelefones() {
        return $this->telefones;
    }
}

// Classe Cliente (herda de Pessoa)
class Cliente extends Pessoa {
    private string $cpf;

    public function __construct(string $nome, string $cpf) {
        parent::__construct($nome);
        $this->cpf = $cpf;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function setCpf(string $cpf) {
        $this->cpf = $cpf;
    }
}

// Classe Contratado (herda de Pessoa)
class Contratado extends Pessoa {
    private string $cnpj;

    public function __construct(string $nome, string $cnpj) {
        parent::__construct($nome);
        $this->cnpj = $cnpj;
    }

    public function getCnpj() {
        return $this->cnpj;
    }

    public function setCnpj(string $cnpj) {
        $this->cnpj = $cnpj;
    }
}

// Classe Decoracao
class Decoracao {
    private string $descritivo;

    public function __construct(string $descritivo) {
        $this->descritivo = $descritivo;
    }

    public function getDescritivo() {
        return $this->descritivo;
    }

    public function setDescritivo(string $descritivo) {
        $this->descritivo = $descritivo;
    }
}

// Classe Festa
class Festa {
    private string $data_contrato;
    private string $data_festa;
    private float $valor;

    private Cliente $cliente;
    private Contratado $contratado;
    private array $decoracoes = [];

    public function __construct(string $data_contrato, string $data_festa, float $valor, Cliente $cliente, Contratado $contratado) {
        $this->data_contrato = $data_contrato;
        $this->data_festa = $data_festa;
        $this->valor = $valor;
        $this->cliente = $cliente;
        $this->contratado = $contratado;
    }

    public function addDecoracao(Decoracao $decoracao) {
        $this->decoracoes[] = $decoracao;
    }

    public function mostrarDados() {
        echo "<h2>Dados da Festa</h2>";
        echo "<p><b>Data do Contrato:</b> {$this->data_contrato}</p>";
        echo "<p><b>Data da Festa:</b> {$this->data_festa}</p>";
        echo "<p><b>Valor:</b> R$ {$this->valor}</p>";

        echo "<h3>Cliente</h3>";
        echo "<p>Nome: {$this->cliente->getNome()}</p>";
        echo "<p>CPF: {$this->cliente->getCpf()}</p>";

        echo "<h3>Contratado</h3>";
        echo "<p>Nome: {$this->contratado->getNome()}</p>";
        echo "<p>CNPJ: {$this->contratado->getCnpj()}</p>";

        echo "<h3>Telefones do Cliente</h3>";
        foreach ($this->cliente->getTelefones() as $tel) {
            echo "<p>{$tel}</p>";
        }

        echo "<h3>🎈 Decorações</h3>";
        foreach ($this->decoracoes as $decor) {
            echo "<p>{$decor->getDescritivo()}</p>";
        }
    }
}

// ========== Instanciando objetos ==========
$telefone1 = new Telefone(14, "99999-9999");
$telefone2 = new Telefone(14, "98888-8888");

$cliente = new Cliente("Maria Silva", "123.456.789-00");
$cliente->addTelefone($telefone1);
$cliente->addTelefone($telefone2);

$contratado = new Contratado("Festas & Cia", "12.345.678/0001-99");

$decoracao1 = new Decoracao("Decoração com balões vermelhos e dourados");
$decoracao2 = new Decoracao("Mesa temática infantil");

$festa = new Festa("2025-10-01", "2025-12-20", 2500.00, $cliente, $contratado);
$festa->addDecoracao($decoracao1);
$festa->addDecoracao($decoracao2);

$festa->mostrarDados();

?>