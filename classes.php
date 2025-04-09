<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Pessoa{
            private $nome;
            private $idade;

            function __construct($nome="", $idad=0){
                $this->nome = $nome;
                $this->idade = $idade;
            }

            function envelhecer($anos){
                if($anos>0){
                    $this->idade += $anos;
                }
            }

            function getNome(){
                return $this->nome;
            }
            function getIdade(){
                return $this->idade;
            }
        }

        $pessoa1 = new Pessoa("Guilherme", 24);
        

        echo "A idade de ". $pessoa1->getNome() . " é ". $pessoa1->getIdade() . "<br>" . "<br>";

        $pessoa2 = new Pessoa("Edson", 25);


        $pessoas = [$pessoa1, $pessoa2];
        
        foreach($pessoas as $elementos){
            echo "A idade de ". $elementos->getNome() . " é ". $elementos->getIdade() . "<br>" . "<br>";
        }

        $pessoa1->envelhecer(2);
            echo "A idade de ". $pessoa1->getNome(). " é ". $pessoa1->getIdade() . "<br>";

        
        //sla
    ?>
</body>
</html>