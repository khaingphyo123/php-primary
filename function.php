<?php 
$title='Function';
include 'include/header.php' ?>
    <h1>Function</h1>
    <?php
    function message()
    {
        echo "hello<br/>";
    }
    message();
    function number($num1,$num2)
    {
        $num=$num1+$num2;
        echo "sum: $num<br/>";
    }
    number(1,2);
    number('2','2');
    function returnProduct($n1,$n2)
    {
        $n=$n1+$n2;
        return $n;
    }
    $p=returnProduct(3,3);
    echo $p;

    ?>
<?php require 'include/footer.php' ?>