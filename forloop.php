<?php 
$title='ForLoop';
include 'include/header.php' ?>
    <h1>for loop</h1>
    <?php
    for($count=0;$count<10;$count++)
    {
        echo '<p>Hello bro</p>';
    }
    for($count=0;$count<10;$count++)
    {
        echo '<p>Countdown:'.$count.'</p>';
    }
    
    ?>
<?php require 'include/footer.php' ?>