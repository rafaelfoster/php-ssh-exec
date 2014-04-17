<?php

	require("config.php");
	require("Net/SSH2.php");

	$ssh = new Net_SSH2($remotehost);
	if (!$ssh->login($username, $password)) {
	    exit('Login Failed');
	}

	$sshCMDOut = $ssh->exec('sudo /etc/init.d/network restart');
//	print $sshCMDOut;
	print preg_replace("/\n/","<br>",$sshCMDOut);
