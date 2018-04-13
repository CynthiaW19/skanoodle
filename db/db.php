<?php
   $hostname = "localhost";
   $database = "stream";
   $username = "cynthia";
   $password = "whitehat";
  	function clean($input, $maxlength)
 	{
     $input = substr($input, 0, $maxlength);
    $input = EscapeShellCmd($input);
   return ($input);
  }
?>
