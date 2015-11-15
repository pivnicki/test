<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
require 'core/init.php';

$topic=new Topic;
$template = new Template('templates/frontpage.php');

 $template->topics=$topic->getAll();

//echo '<pre>';
//var_dump($t);
//echo '</pre>';
 echo $template;



