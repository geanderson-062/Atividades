<?php 

//php == Personal home page 

//variáveis 
//variáveis de variável
//concatenar
//comparar valores
//>= <= == != 
//=== !== 
//looping 
//funções 
//classes

    $nome = 'geanderson'; //declarando variável

    $geanderson = 'geanderson ferreira';//variavel de variavel

    echo 'O meu nome é'.$nome;//escrevendo na tela com vareavel

    echo 'O meu nome é'.$$nome;//escrevendo na tela com vareavel da vareavel


    //=== identico ou igual 
    //!== diferente 
    
    //if else
     $idade = '20'; 

       if($idade == 20){
           echo 'verdadeiro'; 
       }
       else{
           echo'falso';
       }

    //for

    for($i = 0; $i < 10; $i++){
        echo $i;
        echo '<hr>';
    }

    //while

    $i = 0;
    while($i < 10){
        echo $i;
        echo'<br>';
        $i++;
    }

    //função

    printNumero(30);
    echo '<br>';
    printNumero(50);
    function printNumero($n){
        echo $n;
    }

    //objetos

    class pessoa{

        public $nome;
        public $idade; 

        public function __construct($nome,$idade){
            $this->nome = $nome;
            $this->idade = $idade;
        }
        
    public function printNomeEIdade(){

    echo $this->nome;
    echo '<br>';
    echo $this->idade;

    } 
} 

 $pessoa = new Pessoa('geanderson','20');

 $pessoa->printNomeEIdade();
 echo'<br>';
 $pessoa2 = new Pessoa('geanderson','19');

 $pessoa2->printNomeEIdade();

 //array

 $arr = ['geanderson','vivane','alessandro'];

 echo $arr [1];
?>