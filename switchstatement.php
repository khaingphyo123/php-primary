<?php 
$title='Switch';
include 'include/header.php' ?>
    <h1>Switch statements</h1>
    <?php
    $grade='A';
    switch($grade)
    {
        case 'A':
            echo '<h2 style="color:green">You are super</h2>';
            break;
        case 'B':
            echo '<h2 style="color:blue">You did well</h2>';
        default:
            echo '<h2 style="color:red">You have failed</h2>';
    }

    ?>
<?php require 'include/footer.php' ?>