<?php
require_once('Animals.php');

class Martes extends Animals {
    
    use Message;

    public function Speak()
    {
        echo "I`m Martes, my name is ". $this->getName().", and my color is ".$this->getColor()."!It is found in the forests of the Carpathian region, Polissia and Forest Steppe, but the species is more common in the west and north of the country."."<br>";
    }
}

$Martes1 = new Martes("Coli", "Brown");
$Martes1->Speak();
$Martes2 = new Martes("Coli", "Brown");
$Martes2->Speak();

?>