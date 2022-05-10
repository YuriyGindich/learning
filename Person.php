<?php
class Person
{
  private $name;
  private $lastname;
  private $age;
  private $hp;
  private $mother;
  private $father;

  function __construct($name, $lastname, $age, $mother = null, $father = null)
  {
    $this->name = $name;
    $this->lastname = $lastname;
    $this->age = $age;
    $this->mother = $mother;
    $this->father = $father;
    $this->hp = 100;
  }
  function sayHi($name)
  {
    return "Hi $name, I`m " . $this->name;
  }
  function setHp($hp)
  {
    if ($this->hp + $hp >= 100) $this->hp = 100;
    else $this->hp = $this->hp + $hp;
  }
  function getHp()
  {
    return $this->hp;
  }
  function getName()
  {
    return $this->name;
  }
  function getLastname()
  {
    return $this->lastname;
  }
  function getMother()
  {
    return $this->mother;
  }
  function getFather()
  {
    return $this->father;
  }
  function getInfo()
  {
    return "
    <h3>A few words about myself.</h3><br>" . "My name is: " . $this->getName() . "<br> my lastname is: " . $this->getLastname() . "<br> my father is: " . $this->getFather()->getName() . "<br> my mother is: " . $this->getMother()->getName() . "<br> last name and first name of my grandmother on my father`s side: " . $this->getFather()->getMother()->getName() . "&nbsp;" . $this->getFather()->getMother()->getLastname() . "<br> last name and first name of my grandfather on my father`s side: " . $this->getFather()->getFather()->getName() . "&nbsp;" . $this->getFather()->getFather()->getLastname() . "<br> last name and first name of my grandmother on my mother`s side: " . $this->getMother()->getMother()->getName() . "&nbsp;" . $this->getMother()->getMother()->getLastname() . "<br> last name and first name of my grandfather on my mother`s side: " . $this->getMother()->getFather()->getName() . "&nbsp;" . $this->getMother()->getFather()->getLastname();
  }
}
$sergey = new Person("Sergey", "Ivanov", 70);
$anastasia = new Person("Anastasia", "Ivanova", 69);
$irina = new Person("Irina", "Petrova", 67);
$igor = new Person("Igor", "Petrov", 68);
$alex = new Person("Alex", "Ivanov", 42, $anastasia, $sergey);
$olga = new Person("Olga", "Ivanova", 42, $irina, $igor);
$valera = new Person("Valera", "Ivanov", 15, $olga, $alex);

// echo $valera->getName() . "<br>";
// // echo $valera->mother->getName(); Работать не будет
// echo $valera->getMother()->getName() . "<br>";
// echo $valera->getMother()->getFather()->getName();//получаем дедушку

echo $valera->getInfo();



// $medKit = 50;

// $alex->setHp(-30);
// echo $alex->getHp() . "<br>";
// $alex->setHp($medKit);
// echo $alex->getHp(); 
// echo $alex->sayHI($igor->name);
// $alex->name = "Alex";
// echo $alex->name;
