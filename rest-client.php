<?php

if (isset($_GET["action"]) && isset($_GET["id"]) && isset($_GET["action"]) == "get_info") {
	$info = file_get_contents('http://localhost/rest-api.php?action=get_info&id=' . $_GET["id"]);
	echo $info;
	echo '<br />';
	echo '<br />';
	$info = json_decode($info,true);
#	echo $info;
}

?>

<table>
<tr> 
	<td> No_kamar </td>
	<td> <?php echo $info["No_kamar"] ?> </td>
</tr>
<tr> 
	<td> id </td>
	<td> <?php echo $info["id"] ?> </td>
</tr>
</table>
