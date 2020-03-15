<?php
// FurryPets.php
class FurryPets {
  protected $sound;

  protected function fourLegs() {
    return "walk on all fours";
  }

  protected function makesSound($petNoise) {
    $this->sound = $petNoise;
    return $this->sound;
  }
}
?>
