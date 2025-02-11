<!-- php tags seperation -->
<?php echo 'Ending tag excluded'; ?>

<?php echo 'Ending tag excluded'; ?>
<p>But html is still visible</p>

<?php echo 'a';
echo 'b';
echo 'c' ?>

<?="hello"?> jello

<!-- Escaping from HTML -->
<p>This is going to be ignored by PHP and displayed by the browser.</p>
<?php echo 'While this is going to be parsed.'; ?>
<p>This will also be ignored by PHP and displayed by the browser.</p>

<!-- Advanced escaping using conditions -->
<?php $expression = false;?>
<?php if ($expression == true): ?>
This will show if the expression is true.
<?php else: ?>
Otherwise this will show.
<?php endif;?>

<!-- some echo statements or types -->
<?php
echo 'This ', 'string ', 'is ', 'made ', 'with ', 'multiple parameters', "\n";
echo 'This ' . 'string ' . 'is ' . 'made with concatenation';
?>

<?php echo "This string spans
multiple lines. The newlines will be
output as well"; ?>

<?php echo "This string spans\nmultiple lines. The newlines will be\noutput as well."; ?>

<html>

<body>
    <?php $highlight = false;?>
    <p<?php if ($highlight): ?> class="highlight" <?php endif;?>>This is a paragraph.</p>
</body>

</html>

<!-- more Escaping from HTML in function -->
<?php for ($i = 0; $i < 3; $i++): ?>
Hello, world!!!
<?php endfor;?>


<!-- Integer overflow -->
<?php
$large_number = 50000000000000000000000000;
var_dump($large_number);
?>

<?php
$a = 1.23456789;
$b = 1.23456780;
$epsilon = 0.00001;

if (500 * ($a - $b) < $epsilon) {
    echo "true";
} else {
    echo "false";
}
?>