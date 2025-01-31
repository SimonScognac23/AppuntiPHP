<?php


$person1 = [
    'name' => 'Simone',
    'surname' => 'Scognamiglio',
    'age' => 35,
];

$person2 = [
    'name' => 'Gianluca',
    'surname' => 'Scognamiglio',
    'age' => 32,
];

$person3 = [
    'name' => 'Ciro',
    'surname' => 'Scognamiglio',
    'age' => 62,
];















function printData($person){    // per ogni person fai qualcosa...

    foreach ($person as $key => $value){         // foreach per l'array chiave valore e gli chiedo di stampare la chiave e il valore

        echo $key . " => " . $value . "\n";  // cosi mi stampera tutte le chiavi e tutti i valori della persona che sto passando
    }             

}

printData($person1);  // Gli passiamo person1









//Come scrivere una classe

class Person {             // per dichiarare una classe bisogna scriverla in inglese con la prima lettera maiuscola

    public $name;          // dichiarazione  di un attributo
    public $surname;
    public $age;   

    public static $counter = 0;       // dichiaro il contatore che tiene conto delle istanze dell'oggetto e lo inizializzo a 0




      // Magic Method
    public function __construct($name, $surname, $age){   // ** metodo per costruire un oggetto  e gli passiamo tre parametri che sono diversi da quelli elencati sopra. questi qui sono solo dei placeholder ossia dei segnaposto

                 //valorizzare gli attributi dell'oggetto

                 $this->name = $name;  // this -> quando costruisco l'oggetto questo specifico oggetto che sto costruendo dovro identificarlo con la keyword $this
                 $this->surname = $surname;
                 $this->age = $age;  // QUESTI SONO QUELLI ELENCATI SOPRA **   OSSIA QUELLI CHE GLI PASSIAMO COME PARAMETRI



                 // scope resolution operator  --> ( :: operatore statico )
                 Person::$counter++; // tramite il :: io posso accedere ad attributi e metodi statici della classe (fa riferimento alla classe)  



    }  // con il this io chiedo al mio costruttore  (quando viene creato un nuovo oggetto) di andare a valorizzare i campi public name,surname,age ma specidici del suo  oggetto






    public function introduceYou(){   // Qui abbiamo definito un metodo

        echo "Ciao mi chiamo " . $this->name . " $this->surname, ho $this->age anni\n"; // uso il this perchè fa riferimento allo specifico oggetto dello scope sopra, è come se il this mi desse la possibilità di rendere un attributo  accessibile in maniera della mia classe, solo all'interno della mia classe

    }


    public static function howManyPeople(){

        echo Person::$counter . "\n";

    }


}     





echo Person::$counter . "\n"; // qui non incrementa perche non crea oggetti di classe person



// Creazione di un istanza (creazione di un oggetto)
$person1 = new Person('Riccardo', 'Rossi', 45);   // new ==> creami un nuovo oggetto di classe person, dove qui si aspetta tre argomenti che sono rispettivamente nome cognome ed età
$person2 = new Person('Edoardo', 'Blu', 45);   // quando faccio new Person sto richiedendo un oggetto di classe Person





var_dump($person1);
var_dump($person2);




$person1->introduceYou();  // Questo serve per richiamare un metodo all' interno di un oggetto (creato all'interno della classe, in questo caso $person1 è l'oggetto reale della classe), in questo caso invoco il metodo introduceYou che appartiene all'oggetto $person1
$person2->introduceYou();




echo Person::$counter; // qui si perche ho dichiarato 2 oggetti di classe persona e mi stampa 2

Person::howManyPeople();  // con il :: posso accedere ad attributi e metodi statici 






// ----------------------------------------------------------------------------------------------------------









?>