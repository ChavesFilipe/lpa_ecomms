<?PHP 
	$authChk = true; 
	require('app-lib.php'); 
	build_header($displayName);
?>

<?PHP build_navBlock(); ?> 
<div id="content"> This is the <b><?PHP echo basename($_SERVER['PHP_SELF']); ?></b> 
page and still under construction.</div> 
<?PHP build_footer(); ?>