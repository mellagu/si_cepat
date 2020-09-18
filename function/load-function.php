<?php
require 'f-login.php';

function notif($pesan, $jenis)
{
   if ($jenis == 1) {
      $_SESSION['notif'] = "<div class='alert alert-success'>$pesan</div>";
   } elseif ($jenis == 2) {
      $_SESSION['notif'] = "<div class='alert alert-warning'>$pesan</div>";
   } else {
      $_SESSION['notif'] = "<div class='alert alert-danger'>$pesan</div>";
   }
}

function time_elapsed($datetime, $full = false)
{
   $now = new DateTime;
   $ago = new DateTime($datetime);
   $diff = $now->diff($ago);

   $diff->w = floor($diff->d / 7);
   $diff->d -= $diff->w * 7;

   $string = array(
      'y' => 'year',
      'm' => 'month',
      'w' => 'week',
      'd' => 'day',
      'h' => 'hour',
      'i' => 'minute',
      's' => 'second',
   );
   foreach ($string as $k => &$v) {
      if ($diff->$k) {
         $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
      } else {
         unset($string[$k]);
      }
   }

   if (!$full) $string = array_slice($string, 0, 1);
   return $string ? implode(', ', $string) . ' ago' : 'never';
}


function noResi($length = 8)
{
   $genid = "";
   $possible = "RES1234567890";
   $i = 0;
   while ($i < $length) {
      $char = substr($possible, mt_rand(0, strlen($possible) - 1), 1);
      if (!strstr($genid, $char)) {
         $genid .= $char;
         $i++;
      }
   }
   return $genid;
}