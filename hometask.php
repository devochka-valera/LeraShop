<?php
  abstract class Ship {
    public function sail(){
        echo "vrum vrum with " . $this->canvas() . ' canvas' . ' whith ' .$this->weapon();
    }

     public function canvas (){
        return "white";
    }
     public abstract function weapon ();

}
class PirateShip extends Ship{
    public function drinkRome () {
        echo ('йохохо и бутылка рома!');
    }
    public function canvas()
    {
        return 'black with skulls';
    }
    public function weapon () {
        return 'loaded weapon';
    }
}
class ShipFromTallin extends Ship  {
    public function speakOnShip () {
        echo ('slooooooow');
    }
    public function weapon(){
        return 'peaceful people';
    }

}
$pirate = new PirateShip();
$pirate->sail();
echo '<br/>';
$tallin = new ShipFromTallin();
$tallin->sail();

