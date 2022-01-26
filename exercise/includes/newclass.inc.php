<?php 
echo "<pre>";
class Pets {

    protected string $name;
    protected int $age;
    protected string $breed;
    protected bool $fur;
    protected int $price;

    public function __construct(string $name, int $age, string $breed, bool $fur, int $price) {
        $this->name = $name;
        $this->age = $age;
        $this->breed = $breed;
        $this->fur = $fur;
        $this->price = $price;
    }

    public function getName() {
        
        return $this->name;
    }

    public function getAge() {
        return $this->age;
        }

    public function getBreed() {
        return $this->breed;
        }
    
    public function getFur() {
        return $this->fur;
        }
    
    public function getPrice() {
        return $this->price;
        }
    
   public function __destruct() {
        echo $this->name . " is gone!";
        echo "<br>";
   }
    
   public function speak() {
}
}


$pets = new Pets("Lola", 4, "Fnnnnnnnnnnnnlenchie", 0, 2000);

// echo $pets->getName();

class Dog extends Pets {
    public $pedigree;
    public $restrictedBreed;
    public function __construct(string $name, int $age, string $breed, bool $fur, int $price, bool $pedigree, bool $restrictedBreed ) 
    {
        parent::__construct($name, $age, $breed, $fur, $price);
        $this->pedigree = $pedigree;
        $this->restrictedBreed = $restrictedBreed;
    }

    public function speak() {
        echo $this->name . " barks.";
    }
}


$dog1 = new Dog("Titi", 2, "Collie", 1, 1000, 1, 0);
$dog1->speak();