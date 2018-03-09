<?php 
echo $time = time();
echo $datatime = data('Y-m-d H:i:s',$time);
echo $datatime;

echo strtotime($datatime);




echo $newtime=strtotime('last Saturday');
echo date('Y-m-d H:i:s',$newtime);

 ?>


 select inet_aton ('192.168.209.128');