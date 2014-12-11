<?php

class ServiceController extends BaseController {

  function __construct() {
    $this->destinationPath = "~/user/nuttt/";
  }

  // Handle Incoming Request from native app
  public function predict() {

    $destinationPath = storage_path().'/uploads';
    $filename = time()."_".md5(rand());

    if( Input::hasFile('image') ) {
      Input::file('photo')->move($destinationPath, $filename);
    }

    return $filename;
  }

  public function result() {

  }

}
