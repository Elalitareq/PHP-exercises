<?php
$name="tareq";
$position="potato seller";
$github="https://github.com/Elalitareq";
echo "Hello, my name is $name, I'm a $position, please check my github link $github.<br/>";
echo "Hello, my name is ".$name.", I'm a ".$position.", please check my github link ".$github.".<br/>";
echo 'Hello, my name is '.$name.', I\'m a '.$position.', please check my github link '.$github.'.<br/>';

// echo `Hello, my name is $name, I\'m a $position, please check my github link $github <br/>`;
$text=["Hello, my name is ", $name , ", I'm a " , $position , ", please check my github link " , $github,".<br/>"];


foreach($text as $s){
    echo $s;
}

?>