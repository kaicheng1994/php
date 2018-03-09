<?php 
//多个memcached
$mem=new Memcache();
$mem->addServer('192.168.209.128',11212);
$mem->add('name3','ccccc',0,0);

var_dump($mem->get('name3'));
 ?>