<?php

class Zero {
  private array $properties = [];

  public function __get($name)
  {
    // echo "Access property $name" . PHP_EOL;
    // return "CONTOH";
    return $this->properties[$name];
  }

  public function __set($name, $value)
  {
    // echo "Set property $name with value $value" . PHP_EOL;
    $this->properties[$name] = $value;
  }

  public function __isset($name): bool
  {
    // echo "Isset $name";
    // return false;
    return isset($this->properties[$name]);
  }

  public function __unset($name)
  {
    // echo "Unset $name";
    unset($this->properties[$name]);
  }

  public function __call($name, $arguments)
  {
    $join = join(",", $arguments);
    echo "Call function $name with arguments $join" . PHP_EOL;
  }

  public static function __callStatic($name, $arguments)
  {
    $join = join(",", $arguments);
    echo "Call static function $name with arguments $join" . PHP_EOL;
  }
}

$zero = new Zero();
// get
// echo $zero->firstName . PHP_EOL;

// set
// echo $zero->firstName = "Chaerul";
$zero->firstName = "Chaerul";
$zero->middleName = "Marwan";
$zero->lastName = "Sayedeh";

echo "First Name : $zero->firstName" . PHP_EOL;
echo "Middle Name : $zero->middleName" . PHP_EOL;
echo "Last Name : $zero->lastName" . PHP_EOL;

// isset
// isset($zero->firstName);

// unset
// unset($zero->firstName);

$zero->sayHello("Chaerul", "Marwan");
Zero::sayHello("Chaerul", "Marwan");