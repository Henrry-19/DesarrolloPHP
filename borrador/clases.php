<?php

declare(strict_types=1); // PHP 8.0
class SuperHero {
   // Promoted properties --> PHP 8.0
   public function __construct(
    private string $name,
    private array $powers,
    private string $planet
    ){
   }

   public function attack(){
     return $this->name . " atacó con " . $this->powers;
   }

   public function description(){
    $powers = implode(", ", $this->powers);
     return $this->name . " es un superhéroe que viene de " . $this->planet . " y tiene el poder de " . $this->powers;


    }
public static function random(): SuperHero{
        $heroes = [
            "Spiderman" => ["web", "armadura", "agua"],
            "Iron Man" => ["armadura", "agua", "poder"],
            "Hulk" => ["agua", "poder", "poder"],
            "Thor" => ["agua", "poder", "poder"],
            "Black Widow" => ["agua", "poder", "poder"],
            "Captain America" => ["agua", "poder", "poder"],
        ];
        $hero = array_rand($heroes);
        return new SuperHero($hero, $heroes[$hero], "Earth");
    }
}

SuperHero::random();

//hero = new  superHero("Spiderman", ["web", "armadura", "agua"], "Earth");


