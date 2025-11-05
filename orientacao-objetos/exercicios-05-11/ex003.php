<?php

// ===================== Classe Pessoa =====================
class Pessoa {
    protected string $nome;
    protected string $celular;

    public function __construct(string $nome, string $celular) {
        $this->nome = $nome;
        $this->celular = $celular;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function getCelular(): string {
        return $this->celular;
    }

    public function setCelular(string $celular): void {
        $this->celular = $celular;
    }
}

// ===================== Classe Cliente =====================
class Cliente extends Pessoa {
    private string $cpf;

    public function __construct(string $nome, string $celular, string $cpf) {
        parent::__construct($nome, $celular);
        $this->cpf = $cpf;
    }

    public function getCpf(): string {
        return $this->cpf;
    }

    public function setCpf(string $cpf): void {
        $this->cpf = $cpf;
    }
}

// ===================== Classe Prestador =====================
class Prestador extends Pessoa {
    private string $especialidade;

    public function __construct(string $nome, string $celular, string $especialidade) {
        parent::__construct($nome, $celular);
        $this->especialidade = $especialidade;
    }

    public function getEspecialidade(): string {
        return $this->especialidade;
    }

    public function setEspecialidade(string $especialidade): void {
        $this->especialidade = $especialidade;
    }
}

// ===================== Classe Servico =====================
class Servico {
    private string $descritivo;
    private float $preco;

    public function __construct(string $descritivo, float $preco) {
        $this->descritivo = $descritivo;
        $this->preco = $preco;
    }

    public function getDescritivo(): string {
        return $this->descritivo;
    }

    public function setDescritivo(string $descritivo): void {
        $this->descritivo = $descritivo;
    }

    public function getPreco(): float {
        return $this->preco;
    }

    public function setPreco(float $preco): void {
        $this->preco = $preco;
    }
}

// ===================== Classe Itens =====================
class Itens {
    private string $horario;
    private string $status;
    private Servico $servico;
    private Prestador $prestador;

    public function __construct(string $horario, string $status, Servico $servico, Prestador $prestador) {
        $this->horario = $horario;
        $this->status = $status;
        $this->servico = $servico;
        $this->prestador = $prestador;
    }

    public function getHorario(): string {
        return $this->horario;
    }

    public function setHorario(string $horario): void {
        $this->horario = $horario;
    }

    public function getStatus(): string {
        return $this->status;
    }

    public function setStatus(string $status): void {
        $this->status = $status;
    }

    public function getServico(): Servico {
        return $this->servico;
    }

    public function getPrestador(): Prestador {
        return $this->prestador;
    }
}

// ===================== Classe Agenda =====================
class Agenda {
    private string $data;
    private Cliente $cliente;
    private array $itens = [];

    public function __construct(string $data, Cliente $cliente) {
        $this->data = $data;
        $this->cliente = $cliente;
    }

    public function getData(): string {
        return $this->data;
    }

    public function getCliente(): Cliente {
        return $this->cliente;
    }

    public function addItem(Itens $item): void {
        $this->itens[] = $item;
    }

    public function getItens(): array {
        return $this->itens;
    }

    public function __toString(): string {
        $saida = "===== AGENDA =====\n";
        $saida .= "Data: {$this->data}\n";
        $saida .= "Cliente: {$this->cliente->getNome()} (CPF: {$this->cliente->getCpf()})\n";
        $saida .= "Celular: {$this->cliente->getCelular()}\n";
        $saida .= "----------------------\n";

        foreach ($this->itens as $i => $item) {
            $saida .= "Item " . ($i+1) . ":\n";
            $saida .= "  Horário: {$item->getHorario()}\n";
            $saida .= "  Status: {$item->getStatus()}\n";
            $saida .= "  Serviço: {$item->getServico()->getDescritivo()} - R$ {$item->getServico()->getPreco()}\n";
            $saida .= "  Prestador: {$item->getPrestador()->getNome()} ({$item->getPrestador()->getEspecialidade()})\n";
            $saida .= "----------------------\n";
        }

        return $saida;
    }
}

// ===================== Instanciação =====================

// Cliente
$cliente = new Cliente("Ana Souza", "1198765-4321", "123.456.789-00");

// Prestadores
$prestador1 = new Prestador("Carlos Lima", "1198877-6655", "Cabeleireiro");
$prestador2 = new Prestador("Marcos Silva", "1199988-7766", "Barbeiro");

// Serviços
$servico1 = new Servico("Corte de cabelo feminino", 70.00);
$servico2 = new Servico("Barba completa", 50.00);

// Itens
$item1 = new Itens("10:00", "Ativo", $servico1, $prestador1);
$item2 = new Itens("11:00", "Cancelado", $servico2, $prestador2);

// Agenda
$agenda = new Agenda("05/11/2025", $cliente);
$agenda->addItem($item1);
$agenda->addItem($item2);

// Exibir todos os dados da Agenda
echo $agenda;

?>
