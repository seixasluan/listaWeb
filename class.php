<?php
    # EXERCICIO 1
    Class Funcionario  {
        private $salarioBruto;
        private $salarioLiquido;
        private $valorHoraExtra;
        private $qtdHoraExtra;
        private $INSS;
        public function toString() {
            echo "SALARIO BRUTO             = ".$this->salarioBruto."<br>";
            echo "QUANTIDADE HORAS EXTRAS   = ".$this->qtdHoraExtra."<br>";
            echo "VALOR HORA EXTRA          = ".$this->valorHoraExtra."<br>";
            echo "INSS                      = ".$this->INSS."<br>";
            echo "SALARIO LIQUIDO           = ".$this->salarioLiquido."<br>";
        }
        public function calcularSalarioLiquido() {
            $n4 = $this->qtdHoraExtra * $this->valorHoraExtra;
            $x = $this->salarioBruto + $n4;
            $y = $x * $this->INSS;
            $tempSalario = $x - $y;
            $this->salarioLiquido = $tempSalario;
            return $tempSalario;
        }
        public function setSalarioBruto($value) {
            $this->salarioBruto = $value;
        }
        public function setQtdHoraExtra($value) {
            $this->qtdHoraExtra = $value;
        }
        public function setValorHoraExtra($value) {
            $this->valorHoraExtra = $value;
        }
        public function setINSS($value) {
            $this->INSS = $value;
        }
    }
    # EXERCICIO 2
    class Carro {
        private $custoFab;
        private $custoFinal;
    
        public function setCustoFab($value) {
            $this->custoFab = $value;
        }
        public function calculo() {
            $x = ($this->custoFab * 0.45) + ($this->custoFab * 0.28);
            $cf = $this->custoFab + $x;
            $this->custoFinal = $cf;
            return $cf;
        }
        public function retorno() {
            echo "Custo final = R$".$this->custoFinal;
        }
        
    } 
    # EXERCICIO 3
    class Calculadora {
        private $n1;
        private $n2;
        private $result;
        private $cboOP;
    
        public function setN1($value) {
            $this->n1 = $value;
        }
        public function setN2($value) {
            $this->n2 = $value;
        }
        public function setCboOP ($value) {
            $this->cboOP = $value;
        }
        public function calculo() {
            $r = 0;
            if ($this->cboOP == 1) {
                $r = $this->n1 + $this->n2;
            }elseif ($this->cboOP == 2) {
                $r = $this->n1 - $this->n2;
            }elseif ($this->cboOP == 3) {
                $r = $this->n1 * $this->n2;
            }else{
                $r = $this->n1 / $this->n2;
            }
            $this->result = $r;
            return $r;
            
        }
        public function retorno() {
            echo "Resultado = ".round($this->result, 2);
        }
    }
    # EXERCICIO 4
    class conceito {
        private $nota;
        private $conceito;
    
        public function setNota($valor) {
            $this->nota = $valor;
        }
        public function verConceito() {
           $nn = $this->nota;
            if ($nn > 10) {
                echo "Nota inválida";
            }elseif (($nn >= 10) || ($nn >= 9)) {
                echo "Conceito A";
            }elseif (($nn >= 8) || ($nn >= 7)) {
                echo "Conceito B";
            }elseif (($nn >= 6) || ($nn >= 5)) {
                echo "Conceito C";
            }else {
                echo "Conceito D";
            }
        }
    
    }
    # EXERCICIO 5
    class parImpar {
        private $num;
        private $resp;
    
        public function setNum($value) {
            $this->num = $value;
        }
        public function retorno() {
            if ($this->num < 0 ) {
               echo "Este número não é positivo";
            }elseif ($this->num % 2 != 0) {
               echo "Numero ímpar"; 
            }else{
                echo "Numero par";
            }
        }
    }
    # EXERCICIO 6
    class equacao {
        private $a;
        private $b;
        private $c;
    
        public function setA ($valor) {
            $this->a = $valor;
        }
        public function setB ($valor) {
            $this->b = $valor;
        }
        public function setC ($valor) {
            $this->c = $valor;
        }
        public function calculo () {
            $d = pow($this->b, 2) - 4 * $this->a * $this->c;
            if ($d < 0) {
                echo "delta negativo, logo, conjunto solucao é vazio";
            }else {
                $x1 = (((-$this->b) + sqrt($d)) / (2 * $this->a));
                $x2 = (((-$this->b) - sqrt($d)) / (2 * $this->a));
                echo "x1 = ".round($x1, 2),"    x2 = ".round($x2, 2);
            }
        }
    }
    # EXERCICIO 7
    class imc {
        private $peso;
        private $altura;
        private $imcc;
        private $pih;
        private $pim;

        public function setPeso($p) {
            $this->peso = $p;
        }
        public function setAltura ($a) {
            $this->altura = $a;
        }
        public function calcular() {
            $tempImc = $this->peso / pow($this->altura, 2);
            $this->imcc = $tempImc;
            $this->pih = (72.2 * $this->altura) - 58;
            $this->pim = (62.1 * $this->altura) - 44.7;
            return $tempImc;
        }
        public function retorno() {
            if ($this->imcc < 20) {
                echo "IMC = ".round($this->imcc, 2)," Abaixo do Peso, Peso ideal homem: ".round($this->pih, 2)," Kg peso ideal mulher".round($this->pim, 2)," Kg";
            }elseif (($this->imcc >= 20) && ($this->imcc <= 25)) {
                echo "IMC = ".round($this->imcc, 2)," Peso Normal, Peso ideal homem: ".round($this->pih, 2)," Kg peso ideal mulher".round($this->pim, 2)," Kg";
            }elseif (($this->imcc >= 25) && ($this->imcc <= 30)) {
                echo "IMC = ".round($this->imcc, 2)," Sobre Peso, Peso ideal homem: ".round($this->pih, 2)," Kg peso ideal mulher".round($this->pim, 2)," Kg";
            }elseif (($this->imcc >= 30) && ($this->imcc <= 40)) {
                echo "IMC = ".round($this->imcc, 2)," Obeso, Peso ideal homem: ".round($this->pih, 2)," Kg peso ideal mulher".round($this->pim, 2)," Kg";
            }else {
                echo "IMC = ".round($this->imcc, 2)," Obeso Mórbido, Peso ideal homem: ".round($this->pih, 2)," Kg peso ideal mulher".round($this->pim, 2)," Kg";
            }
        }
    }
    # EXERCICIO 9
    class fatorial {
        private $num;
        private $fat;

        public function setNum($valor) {
            $this->num = $valor;
        }
        public function calcFat() {
            $tempFat = 1;
            for ($i=1;$i<=$this->num;$i++) {
                $tempFat = $tempFat * $i;
            }
            $this->fat = $tempFat;
            return $tempFat;
        }
        public function retorno () {
            if ($this->num == 0) {
                echo "fatorial = 1";
            }elseif ($this->num < 0) {
                echo "Esse num é negativo";
            }else {
                echo "fatorial = ".$this->fat;
            }
        }
    }
?>
