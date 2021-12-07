<?php 
$title='index';
include 'include/header.php' ?>
    
    <?php
    echo 'hello';
    echo '<br/>';
    ?>
    <?php
    $name='khaingphyo';
    $age = 14;
    echo '<h1>My name is: '.$name.'</h1>';
    echo '<h1>My age is: '.$age.'</h1>';
    echo "<h1>My name is: $name </h1>";
    ?>
    <?php require 'include/footer.php' ?>
    