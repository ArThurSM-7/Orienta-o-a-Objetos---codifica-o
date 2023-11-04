
<?php
class Adulto {
    private $peso;

    public function __construct($peso) {
        $this->peso = $peso;
    }

    public function engordar($quilos) {
        $this->peso += $quilos;
    }

    public function emagrecer($quilos) {
        $this->peso -= $quilos;
    }
}

class Televisao {
    private $status;
    private $canal;
    private $volume;

    public function __construct() {
        $this->status = false;
        $this->canal = 3;
        $this->volume = 10;
    }

    public function ligaDesliga() {
        $this->status = !$this->status;
    }

    public function aumentaCanal() {
        if ($this->status) {
            $this->canal++;
        }
    }

    public function diminuiCanal() {
        if ($this->status) {
            $this->canal--;
        }
    }

    public function aumentaVolume() {
        if ($this->status) {
            $this->volume++;
        }
    }

    public function diminuiVolume() {
        if ($this->status) {
            $this->volume--;
        }
    }

    public function mostraCanal() {
        return $this->canal;
    }

    public function mostraVolume() {
        return $this->volume;
    }
}

$tv = new Televisao();
$tv->ligaDesliga();
echo "Status da TV: " . ($tv->mostraCanal() ? "Ligada" : "Desligada") . PHP_EOL;
echo "Canal: " . $tv->mostraCanal() . PHP_EOL;
echo "Volume: " . $tv->mostraVolume() . PHP_EOL;

$tv->aumentaCanal();
$tv->aumentaVolume();
echo "Canal após aumentar: " . $tv->mostraCanal() . PHP_EOL;
echo "Volume após aumentar: " . $tv->mostraVolume() . PHP_EOL;
?>