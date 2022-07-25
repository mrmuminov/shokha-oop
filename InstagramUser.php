<?php

class InstagramProfile 
{
  public $fullName;
  public $username;
  public $webSite = '';
  public $bio = '';
  public $email;
  public $phone;
  public $gender;
  public $isChainingEnabled = true;
}

$me = new InstagramProfile();

$me->fullName = "Bahriddin Mo'minov";
$me->username = "mominovbahriddin";
$me->webSite = "https://bahriddin.uz/";
$me->email = "darkshadeuz@gmail.com";

echo "My name is " . $me->fullName . PHP_EOL;
echo "My web site address " . $me->webSite . PHP_EOL;


/** Result:

My name is Bahriddin Mo'minov
My web site address https://bahriddin.uz/

*/
