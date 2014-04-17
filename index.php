<!doctype html>
<html lang="us">
<head>
        <meta charset="utf-8">
        <title>Rodrimar - Remote restart service</title>
        <link href="css/ui-lightness/jquery-ui-1.10.4.css" rel="stylesheet">
        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/jquery-ui-1.10.4.js"></script>
	<script>
		$(function(){
			$('#restartOK').button().click(function(){
				$("#textResult").html("<img src='img/loading.gif' style='left: 40%; top: 40%; position: absolute;'>");
				$.ajax({
					type: "GET",
					url: "ssh_remote.php",
					async: false,
					success: function(data) {
						$("#textResult").html(data);
					}
				});
			});
		});
	</script>
</head>
<body style='background-color: #F5F5F5'>
	<table id='serverbox' border='1' style='top: 5%; left: 5%; position: relative;'>
		<tr style='background-color: #000066; color: white;' align='center'>
			<td> Server </td>
			<td> IP Address </td>
			<td> Exec Command? </td>
		</tr>
		<tr>
			<td> server.domain.com </td>
			<td> xxx.xxx.xxx.xxx </td>
			<td align='center'> <input type='button'id='restartOK' value='OK'> </td>
		</tr>
	</table>
	<br>
	<div id='textResult' style='width: 300px; height: 100px; position: relative; left: 5%; background-color: white; border-color: gray;' contentEditable="true" >
	</div>
</BODY>
</HTML>
