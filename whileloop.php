<?php 
$title='While loop';
include 'include/header.php' ?>
    <h1>While loop</h1>
    <?php
    $grade=0;
    /*infinite loop
    while($grade<10)
    {
        echo '<p>hello</p>';
    }*/
    while($grade<10)
    {
        echo '<p>hello</p>';
        $grade++;
    }
    echo 'exit loop';
    ?>
    <h1>Do while loop</h1>
    <?php
    $grade=0;
    do{
        echo '<p>world</p>';
        $grade++;
    }while($grade<10);
    echo 'exit loop';
    ?>
<?php require 'include/footer.php' ?>