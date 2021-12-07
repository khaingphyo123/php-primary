<?php 
$title='Arrays';
include 'include/header.php' ?>
    <h1><?php echo $title ?></h1>
    <?php
    $numbers=array(1,2,3,4,5,6,7,8,9,10,123,445,33,4,5,44,55,66,675);
    echo "<p>$numbers[5]</p>";
    $size=count($numbers);
    echo "<p>Arrays count:$size</p>";
    for($count=0;$count<$size;$count++)
    {
        echo "<p>$numbers[$count]</p>";
    }
    ?>
<?php require 'include/footer.php' ?>