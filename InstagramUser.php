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
  
  public function __construct($fullName, $userName, $email, $website = '')
  {
    $this->fullName = $fullName;
    $this->username = $userName;
    $this->email = $email;
    $this->webSite = $website;
  }
  
  public function getMyAbout()
  {
    return "My name is " . $this->fullName . PHP_EOL . 
           "My web site address " . $this->webSite . PHP_EOL;
  }
  
}

$me = new InstagramProfile("Bahriddin Mo'minov", "mominovbahriddin", "darkshadeuz@gmail.com", "https://bahriddin.uz/");

echo $me->getMyAbout();

/** Result:
My name is Bahriddin Mo'minov
My web site address https://bahriddin.uz/
*/
