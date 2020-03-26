<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Example_bl
 *
 * @author Pabhoz
 */
class Patients_bl {

  public static function getLevels(){
      $levels = Level::toObject(Level::getAll());
      return $levels;
  }
  
  public static function getAll(){
      $patients = Patient::getAll();
      return $patients;
  }
  
  public static function create($data){
      if(!isset($data["id"])) { $data["id"] = null; }
      $patient = Patient::instanciate($data);
      $result = $patient->create();
      return $result;
  }

}
