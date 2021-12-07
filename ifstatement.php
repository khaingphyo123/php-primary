<?php 
$title='IF';
include 'include/header.php' ?>
    <?php
    echo '<h2>If statements</h2>';
    $grade=80;
    if($grade>=50)
    {
        echo '<h3 style="color: green">You passed</h3>';
    }else
    {
        echo '<h3 style="color: red">You failed</h3>';
    }
    $grade='A';
    if($grade=='A')
    {
        echo '<h2 style="color: green">You are super</h2>';
    }
    elseif($grade=='B')
    {
        echo '<h2>You did well</h2>';
    }
    else{
        echo '<h2 style="color: red">You failed....</h2>';
    }
    ?>
<?php require 'include/footer.php' ?>