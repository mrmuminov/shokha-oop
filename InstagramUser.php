<?php

class InstagramProfile 
{
  public $fullName;
  public $userName;
  public $webSite = '';
  public $bio = '';
  public $email;
  public $phone;
  public $gender;
  public $isChainingEnabled = true;
  
  public function __constructor($fullName, $userName, $email, $website = '')
  {
    $this->fullName = "Bahriddin Mo'minov";
    $this->username = "mominovbahriddin";
    $this->webSite = "https://bahriddin.uz/";
    $this->email = "darkshadeuz@gmail.com";
  }
  
  public function getMyAbout()
  {
    return "My name is " . $me->fullName . PHP_EOL . 
           "My web site address " . $me->webSite . PHP_EOL;
  }
}

$me = new InstagramProfile("Bahriddin Mo'minov", "mominovbahriddin", "darkshadeuz@gmail.com", "https://bahriddin.uz/");

echo $me->getMyAbout();


/** Result:

My name is Bahriddin Mo'minov
My web site address https://bahriddin.uz/

*/
