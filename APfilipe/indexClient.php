<?PHP
	$clientChk = true;
	require ('app-lib.php');
	build_header ($displayName);

?>

<?php
	build_ClientnavBlock();
?>
<div id="content" style="text-align: center; font-family: verdana; font-size: 300%; background: #eeeeee" >
	<h2>WELCOME <b><?PHP echo "</br>". $displayName ."</br>"; ?></b> to </h2> <h1 style="font-size: 250%" class="PageTitle"> LPA ecomms </h1>
</div>

<script>

</script>

<?PHP
	build_footer ();
?>