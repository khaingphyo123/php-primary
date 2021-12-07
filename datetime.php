<?php 
$title='Date and Time';
include 'include/header.php' ?>
    <h1>Date and Time manipulation</h1>
    <?php
    $datenow=getdate();
    echo 'Today date: '.$datenow['mday'].'/'.$datenow['mon'].'/'.$datenow['year'].'<br/>';
    echo time().'<br/>';
    print date("m/d/y G.i:s",time()).'<br/>';
    print 'Today is: ';
    print date("j of F Y, a\t\\ g.i a",time());
    ?>
<?php require 'include/footer.php' ?>