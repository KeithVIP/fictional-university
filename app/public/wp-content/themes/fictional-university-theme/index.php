<!-- <?php
function greet($name, $color)
{
    echo "<p>Hi, my name is $name and my favorite color is $color.</p>";
}

greet('John', 'blue');
greet('James', 'green');
?>

<h1>
    <?php bloginfo('name'); ?>
</h1>
<p>
    <?php bloginfo('description'); ?>
</p>

<?php

$myName = "Keith";

?>

<p>Hi, my name is
    <?php echo $myName; ?>.
</p> -->

<?php

$names = array('Brad', 'John', 'Jane', 'Meowsalot');

$count = 0;

while ($count < count($names)) {
    echo "<li>Hi, my name is $names[$count] </li>";
    $count++;
}

?>