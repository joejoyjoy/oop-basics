<?php

/**** 

Animal (implements Alive Animal)
    Attributes:
        Age (int)
        Fur (boolean)
        Vertebrates (boolean)
        Type (string)
            Mammal
            Insect
            …
    Methods:
        Magic Methods:
            Construc
            Destruct
        Breath
        Move
        Sound

 ****/

class Animal
{
    public int $age;
    public bool $fur;
    public bool $vertebrates;
    public string $type;

    public function __construct($age, $fur, $vertebrates, $type)
    {
        $this->age = $age;
        $this->fur = $fur;
        $this->vertebrates = $vertebrates;
        $this->type = $type;
    }

    public function getBreath() {
        echo "This animal breaths fine with age " . $this->age . " and it's a " . $this->type;
    }

    public function getMove() {
        echo "This animal moves fine with age " . $this->age . " and it's a " . $this->type;
    }

    public function getSound() {
        echo "This animal makes sounds like a " . $this->type;
    }

    public function __destruct()
    {
        echo "This animal has a age of {$this->age} <br> Is the animal fur? Answer: ";
        var_export($this->fur);
        echo "<br>Is the animal vertebrates? Answer: ";
        var_export($this->vertebrates);
        echo "<br>The animal is a {$this->type}";
    }
}


$animal = new Animal(13, false, true, 'Mammal');