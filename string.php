<?php 
$title='String';
include 'include/header.php' ?>
    <h1>String Manipulation</h1>
    <?php
    //concat
    $phrase1="students who came late";
    $phrase2="stand with rock";
    $name="khaing phyo zaw";
    echo $phrase1." ".$phrase2."<br/>";
    echo "<hr/>";
    //transform
    echo 'uppercase of first letter: '.ucfirst($name).'<br/>';
    echo 'uppercase of first letter of each words : '.ucwords($name).'<br/>';
    echo 'uppercase: '.strtoupper($name).'<br/>';
    echo 'lowercase: '.strtolower($name).'<br/>';
    echo '<hr/>';
    echo 'Repeat string: '.str_repeat('a',10).'<br/>';
    echo 'Repeat string-nested: '.strtoupper(str_repeat('a',10)).'<br/>';
    echo 'Get a substring: '.substr($name,3,7).'<br/>';
    echo 'Position: '.strpos($name,'g').'<br/>';
    echo '<hr/>';
    echo 'Find char s: '.strchr($name,'s').'<br/>';
    echo 'Find char p: '.strchr($name,'p').'<br/>';
    echo 'Find char a: '.strchr($name,'a').'<br/>';
    echo 'length: '.strlen($name).'<br/>';
    echo '<hr/>';
    echo 'without trim: '.'A'.' B C D '.'E'.'<br/>';
    echo 'trim both sides: '.'A'.trim(' B C D ').'E'.'<br/>';
    echo 'trim left sides: '.'A'.ltrim(' B C D ').'E'.'<br/>';
    echo 'trim right sides: '.'A'.rtrim(' B C D ').'E'.'<br/>';
    echo 'Replace with another: '.str_replace('phyo','yoon',$name).'<br/>';
    echo '<hr/>';

    ?>
<?php require 'include/footer.php' ?>