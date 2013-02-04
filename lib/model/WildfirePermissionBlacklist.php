<?php
class WildfirePermissionBlacklist extends WaxModel{
  public $identifier = "operation";
  public function setup(){
    parent::setup();
    $this->define("user", "ForeignKey", array('target_model' => 'WildfireUser'));
    $this->define("class", "CharField");
    $this->define("operation", "CharField");
    $this->define("value", "CharField");
  }
}

?>
