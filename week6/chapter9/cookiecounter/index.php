<?php
//If cookie doesn't exisist sets to 0
if (!isset($_COOKIE['visits']))
{
  $_COOKIE['visits'] = 0;
}
//sets time for how long you want the cookie to be there.
$visits = $_COOKIE['visits'] + 1;
setcookie('visits', $visits, time() + 3600 * 24 * 365);

include 'welcome.html.php';
