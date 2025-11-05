<?php
class Pessoa {
    protected string $nome;

    public function __construct(string $nome) {
        $this->nome = $nome;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }
}

class Proprietario extends Pessoa {
    private string $cpf;
    private array $lojas = [];

    public function __construct(string $nome, string $cpf) {
        parent::__construct($nome);
        $this->cpf = $cpf;
    }

    public function getCpf(): string {
        return $this->cpf;
    }

    public function setCpf(string $cpf): void {
        $this->cpf = $cpf;
    }

    public function adicionarLoja(Loja $loja): void {
        $this->lojas[] = $loja;
    }

    public function getLojas(): array {
        return $this->lojas;
    }
}

class Shopping extends Pessoa {
    private string $cnpj;
    private array $lojas = [];

    public function __construct(string $nome, string $cnpj) {
        parent::__construct($nome);
        $this->cnpj = $cnpj;
    }

    public function getCnpj(): string {
        return $this->cnpj;
    }

    public function setCnpj(string $cnpj): void {
        $this->cnpj = $cnpj;
    }

    public function adicionarLoja(Loja $loja): void {
        $this->lojas[] = $loja;
    }

    public function getLojas(): array {
        return $this->lojas;
    }
}

class Loja {
    private int $lotes;
    private string $numero;
    private Shopping $shopping;
    private Proprietario $proprietario;
    private ?Condominio $condominio = null;

    public function __construct(int $lotes, string $numero, Shopping $shopping, Proprietario $proprietario) {
        $this->lotes = $lotes;
        $this->numero = $numero;
        $this->shopping = $shopping;
        $this->proprietario = $proprietario;

        // Define relacionamentos bidirecionais
        $shopping->adicionarLoja($this);
        $proprietario->adicionarLoja($this);
    }

    public function getLotes(): int {
        return $this->lotes;
    }

    public function setLotes(int $lotes): void {
        $this->lotes = $lotes;
    }

    public function getNumero(): string {
        return $this->numero;
    }

    public function setNumero(string $numero): void {
        $this->numero = $numero;
    }

    public function getShopping(): Shopping {
        return $this->shopping;
    }

    public function getProprietario(): Proprietario {
        return $this->proprietario;
    }

    public function getCondominio(): ?Condominio {
        return $this->condominio;
    }

    public function setCondominio(Condominio $condominio): void {
        $this->condominio = $condominio;
    }
}

class Condominio {
    private string $dataGeracao;
    private float $valor;
    private string $dataPagamento;
    private Loja $loja;

    public function __construct(string $dataGeracao, float $valor, string $dataPagamento, Loja $loja) {
        $this->dataGeracao = $dataGeracao;
        $this->valor = $valor;
        $this->dataPagamento = $dataPagamento;
        $this->loja = $loja;

        // Liga o condomínio à loja
        $loja->setCondominio($this);
    }

    public function getDataGeracao(): string {
        return $this->dataGeracao;
    }

    public function setDataGeracao(string $dataGeracao): void {
        $this->dataGeracao = $dataGeracao;
    }

    public function getValor(): float {
        return $this->valor;
    }

    public function setValor(float $valor): void {
        $this->valor = $valor;
    }

    public function getDataPagamento(): string {
        return $this->dataPagamento;
    }

    public function setDataPagamento(string $dataPagamento): void {
        $this->dataPagamento = $dataPagamento;
    }

    public function getLoja(): Loja {
        return $this->loja;
    }

    // Método para exibir os dados
    public function exibirDados(): void {
        echo "=== Dados do Condomínio ===<br>";
        echo "Data de Geração: {$this->dataGeracao}<br>";
        echo "Valor: R$ " . number_format($this->valor, 2, ',', '.') . "<br>";
        echo "Data de Pagamento: {$this->dataPagamento}<br><br>";

        echo "--- Loja ---<br>";
        echo "Número: {$this->loja->getNumero()}<br>";
        echo "Lotes: {$this->loja->getLotes()}<br><br>";

        echo "--- Shopping ---<br>";
        echo "Nome: {$this->loja->getShopping()->getNome()}<br>";
        echo "CNPJ: {$this->loja->getShopping()->getCnpj()}<br><br>";

        echo "--- Proprietário ---<br>";
        echo "Nome: {$this->loja->getProprietario()->getNome()}<br>";
        echo "CPF: {$this->loja->getProprietario()->getCpf()}<br>";
    }
}

// ====================
// Exemplo de uso
// ====================

$shopping = new Shopping("Shopping Central", "12.345.678/0001-99");
$proprietario = new Proprietario("Carlos Silva", "123.456.789-00");
$loja = new Loja(3, "A101", $shopping, $proprietario);
$condominio = new Condominio("01/11/2025", 2500.00, "10/11/2025", $loja);

// Exibir todos os dados
$condominio->exibirDados();
?>
