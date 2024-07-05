<html>
<body>
<?php
$greet="Hello world!";
function test()
{
    global $greet;
    echo $greet;
}
test();
echo "<br/>";
echo $greet;
echo "<br/>";
$greet ="goodbye";
test();
echo "<br/>";
echo $greet;
?>
</body>
</html>