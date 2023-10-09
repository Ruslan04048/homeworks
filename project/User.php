<?php class User {
    private $name;
    private $surname;
    private $password;
    private $age;
    private $adress;
    function __construct($name,$surname,$password,$age,$adress) {
        $this->name = $name;
        $this->surname = $surname;
        $this->password = $password;
        $this->age = $age;
        $this->adress =  $adress;
    }
    function getName() {return $this->name;}
    function getSurname() {return $this->surname;}
    function getPassword() {return $this->password;}
    function getAge() {return $this->age;}
    function getAdress() {return $this->adress;}
}
?>