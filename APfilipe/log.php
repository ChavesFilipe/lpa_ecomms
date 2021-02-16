<?PHP 
  require('app-lib.php');
  build_header();
?>
  <?PHP build_navBlock(); ?>
<?php
$myfile = fopen("log/lpalog.log", "r") or die("Unable to open file!");
echo fread($myfile,filesize("log/lpalog.log"));
fclose($myfile);
?>
<?PHP
build_footer();
?>