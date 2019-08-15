<?php
include_once 'LinkList.php';

$linkList = new LinkList();
$linkList->insertFirst(11);
$linkList->insertFirst(22);
$linkList->insertLast(33);
$linkList->insertLast(44);
$linkList->insertLast(55);
$linkData = $linkList->readList();

echo 'Total Links: ' . $linkList->totalNode() . '<br>';
echo implode('-',$linkData);