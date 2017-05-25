<?php 
$urlSplit = explode("/", $_SERVER['REQUEST_URI']);
$page = $urlSplit[count($urlSplit)-1];

echo '<Title>Backlund.dk ' . $page . ' - Ekspert i kildesorterende toiletter og miljørigtige spildevandsløsninger</Title>';


?>