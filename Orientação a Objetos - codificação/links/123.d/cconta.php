<?php
class Conta {
    private $numero;
    private $banco;
    private $saldo;

    public function __construct($numero, $banco, $saldo) {
        $this->numero = $numero;
        $this->banco = $banco;
        $this->saldo = $saldo;
    }

    public function depositar($valor) {
        if ($valor > 0) {
            $this->saldo += $valor;
        } else {
            echo "O valor do depósito deve ser maior que zero.";
        }
    }

    public function sacar($valor) {
        if ($valor > 0) {
            if ($valor <= $this->saldo) {
                $this->saldo -= $valor;
            } else {
                echo "Saldo insuficiente para saque.";
            }
        } else {
            echo "O valor do saque deve ser maior que zero.";
        }
    }
}

$conta = new Conta(123, 'Banco XYZ', 1000.0);
$conta->depositar(500.0);
$conta->sacar(200.0);
?>
