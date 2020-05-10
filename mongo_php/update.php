<?php 

$manager=new \MongoDB\Driver\Manager("mongodb://localhost:27017");

$up=new \MongoDB\Driver\BulkWrite;

//$up->update(['nome'=>'Rafael'],['nome'=>'Rafael','idade'=>20]);
$up->update(['nome'=>'Rafael'],['$set'=>['nome'=>'Rafael Fernandes']]);

$manager->executeBulkWrite('raiz.academicos',$up);