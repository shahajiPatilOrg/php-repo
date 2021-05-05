<?php
include('Net/SSH2.php');

$ssh = new Net_SSH2('www.domain.tld');
$ssh->login('username', 'password');

$ssh->read('[prompt]');
$ssh->write("sudo command\n");
$ssh->read('Password:');
$ssh->write("Password\n");
echo $ssh->read('[prompt]');
?>
