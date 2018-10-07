<?php
//Class is
    class Person{
        // the different properties
        // Can set access prefixes
       private $name;
       private $email;
        //De-constructor
       /*public function __destruct(){
            echo __CLASS__.'destroyed<br>;
       */
      //constructor
        public function __construct($name, $email){
        $this->name = $name;
        $this->email = $email;
        echo __CLASS__.' created<br>';
       }
        //set function to protect the class
        public function setName($name){
            $this->name = $name;
        }
        //get function to access the class
       public function getName(){
           return $this->name.'<br>';
       }
         //set function to protect the class
         public function setEmail($email){
             $this->email = $email;
         }
         //get function to access the class
        public function getEmail(){
            return $this->email.'<br>';
    }
    }

$person1 = new Person('John Doe','test@test.com');
echo $person1->getName();
//$person->name='John Doe';

//echo $person1->name;
//$person1->setName('John Doe');

//echo $person1->getName();
























