<?php

class ServiceController extends BaseController {

  function __construct() {
    $this->destinationPath = "~/user/nuttt/";
  }

  // Handle Incoming Request from native app
  public function predict() {

    $destinationPath = storage_path().'\uploads\\';
    $filename = time()."_".md5(rand());
    $filenamejpg = $filename.".jpg";
    // Input::file('picture')->move($destinationPath, $filename);
    if( Input::hasFile('uploaded_file') ) {
      Input::file('uploaded_file')->move($destinationPath, $filenamejpg);
    }
    else{
      return View::make('hello')->with('value',"Please Select Your Picture.");
    }
    $c = 'C:\xampp\htdocs\handserver\AI_Project.exe '.$filename;
    $output = array();
    exec($c,$output,$return_var);
    // return View::make('result')->with('value',$output[0].' '.$return_var);
    return $filename;
    // return Redirect::to('/result/'.$filename);
  }

  public function result($filename) {
    return View::make('result2',array('filename'=>$filename));
  }

}
