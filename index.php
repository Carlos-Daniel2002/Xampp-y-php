<?php
// declare(strict_types = 2);
class Movie {
    public  $Name;
    public  $Release;
    public $Type;
    public $Main_Character;  
      
    function setName(String $Name){
        $this->Name = $Name;
    }    
    function getName(){
        return $this->Name;
    }    
    function __construct(){
        $this->Type = 'action';    
    }   
    // function __construct()
    // {
    //     $this->Name = 'The maze Runner';    
    // }    
    function getMain_Characer(){
        $this->Main_Character ="Thomas";    
    }
}       
    class Correr_o_morir extends Movie {
        // secondary Properties
    public $Directed_by;
    public $Movie_time;
    public $language;
    public $Country; 
    function setDirected_by($Directed_by){
        $this->Directed_by = $Directed_by;
    }
    function __construct(){
        $this->Directed_by = 'Wess ball';
        $this->language = 'English/Spanish';
    }   
    function start() {
        return 'Your  movie is starting';
    }
}
$Name = 'The maze runner';
$Directed_by = 'Wess ball';
$movie = new Correr_o_morir();
$Main_Character = 'Thomas';
$Type= 'action';
$Country= 'United stated';
$movie->Release = "2014";
$movie->Movie_time = "113 minutes";
$movie->setName($Name);
$movie->setDirected_by($Directed_by);
echo $movie->start();
