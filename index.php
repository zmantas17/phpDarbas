<?php
require "vendor/autoload.php";
require "view/index.view.php";

// ---------------------------------------------------------------------------------------------------------
/* // class User{

    //     private $name;
    //     private $email;
    //     private $location;
    //     private $role;
    //     private $number;

    //     public function __construct($name, $email){ // konstruktorius
    //         $this->name = $name;
    //         $this->email = $email;
    //     }

    //     public function addLocation($location){ // setteris
    //         $this->location = $location;
    //     }

    //     public function addRole($role){ // setteris
    //         $this->role = $role;
    //     }

    //     public function getInfo(){ // geteris
    //         return [
    //             $this->name,
    //             $this->email,
    //             $this->location,
    //             $this->role,
    //             $this->number
    //         ];
    //     }
    //     public function __toString(){ // leidzia isvesti objekta ir grazina varda
    //         return 
    //             $this->name;
    //     }
    // }

    // $user = new User('Jonas', 'jonas@one.lt'); // sukuriamas naujas objektas
    // $user->addLocation('Kaunas');
    // $user->addRole('Admin');
    // var_dump($user->getInfo()); // isvedame informacija apie objekta


    // $user = new User();
    // $user->name = "Petras";
    // $user->email = "petras@stud.kitm.lt";
    // $user->location = "Klaipeda";
    // $user->role = "Žurnalistas";
    // $user->number = "+37067521345";
    // var_dump($user->getInfo());
    // echo "<br><br>";

    // $user1 = new User();
    // $user1->name = "Kazimieras";
    // $user1->email = "kazys@one.lt";
    // $user1->location = "Palanga";
    // $user1->role = "Apsauga";
    // $user1->number = "+37068566447";
    // var_dump($user1->getInfo());
    // echo "<br><br>";
    
    // $user2 = new User();
    // $user2->name = "Ieva";
    // $user2->email = "ieva@gmail.lt";
    // $user2->location = "Vilnius";
    // $user2->role = "Kirpėja";
    // $user2->number = "+37067622355";
    // var_dump($user2->getInfo());
    // echo "<br><br>";
    
    // $user3 = new User();
    // $user3->name = "Onute";
    // $user3->email = "ona@one.lt";
    // $user3->location = "Marijampole";
    // $user3->role = "Valytoja";
    // $user3->number = "+37067825345";
    // var_dump($user3->getInfo());
    // echo "<br><br>";
    
    // $user4 = new User();
    // $user4->name = "Aldona";
    // $user4->email = "alde@gmail.lt";
    // $user4->location = "Kaunas";
    // $user4->role = "Skalbėja";
    // $user4->number = "+37067521345";
    // var_dump($user4->getInfo());

    // echo "<br><br>";
    // echo $user;
    // echo "<br><br>";
    // echo $user1;
    // echo "<br><br>";
    // echo $user2;
    // echo "<br><br>";
    // echo $user3;
    // echo "<br><br>";
    // echo $user4; */
   