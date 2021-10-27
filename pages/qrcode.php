<?php
$time = device_time('D M d H:i:s e Y');
$time2 = device_time('D M d H:i:s');
$text = "server login: $_SERVER[REMOTE_ADDR]
Password:
Welcome to Ubuntu 18.04.3 LTS (GNU/Linux 4.15.0-72-generic x86_64)

 * Documentation:  https://help.ubuntu.com
 * Management:     https://landscape.canonical.com
 * Support:        https://ubuntu.com/advantage

  System information as of $time

  System load:  0.04               Processes:             114
  Usage of /:   37.1% of 13.76GB   Users logged in:       1
  Memory usage: 71%                IP address for enp0s3: 192.168.1.2
  Swap usage:   14%

 * Overheard at KubeCon: \"microk8s.status just blew my mind\".

     https://microk8s.io/docs/commands#microk8s.status

 * Canonical Livepatch is available for installation.
   - Reduce system reboots and improve kernel security. Activate at:
     https://ubuntu.com/livepatch

0 packages can be updated.
0 updates are security updates.

Last login: $time2 from $_SERVER[REMOTE_ADDR]

$_SERVER[REMOTE_ADDR]@server:~$ ls
data

$_SERVER[REMOTE_ADDR]@server:~$ cat data
https://discord.gg/XmmMZrp

$_SERVER[REMOTE_ADDR]@server:~$ \xe2\x96\x88";
echo base64_encode(file_get_contents("https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=".urlencode($text)."&choe=UTF-8"));
?>