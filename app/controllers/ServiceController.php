<?php

class ServiceController extends BaseController {

  function __construct() {
    $this->destinationPath = "~/user/nuttt/";
  }

  // Handle Incoming Request from native app
  public function predict() {

    $destinationPath = storage_path().'\uploads\\';
    $filename = time()."_".md5(rand()).".jpg";
    // Input::file('picture')->move($destinationPath, $filename);
    if( Input::hasFile('picture') ) {
      Input::file('picture')->move($destinationPath, $filename);
    }
    else{
      return View::make('hello')->with('value',"Please Select Your Picture.");
    }
    $c = 'C:\xampp\htdocs\handserver\stub.exe '.$filename;
    $output = array();
    exec($c,$output,$return_var);
    // return View::make('result')->with('value',$output[0].' '.$return_var);
    return View::make('result',array('data'=>$output,'return'=>$return_var));
  }

  public function result() {

  }

}
