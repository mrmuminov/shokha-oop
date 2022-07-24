<?php

class InstagramProfile 
{
  public $full_name;
  public $username;
  public $web_site = '';
  public $bio = '';
  public $email;
  public $phone;
  public $gender;
  public $isChainingEnabled = true;
}

$me = new InstagramProfile();

$me->full_name = "Bahriddin Mo'minov";
$me->username = "mominovbahriddin";
$me->web_site = "https://bahriddin.uz/";
$me->email = "darkshadeuz@gmail.com";

echo "My name is " . $me->full_name . PHP_EOL;
echo "My web site address " . $me->web_site . PHP_EOL;


/** Result:

My name is Bahriddin Mo'minov
My web site address https://bahriddin.uz/

*/
