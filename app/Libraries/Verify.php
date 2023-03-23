<?php
namespace App\Libraries;
class Verify{
  public static function verify($pass1,$pass2){
    if(password_verify($pass1,$pass2)){
      return true;
    }else{
      return false;
    }
  }
}