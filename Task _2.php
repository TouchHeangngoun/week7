<html>
<body>
<?php
function even($var)
{
    return !($var & 1);
}
$array2 = [2, 3, 4, 6, 7, 9, 11, 20];
echo "Even:\n";
print_r(array_filter($array2, "even"));
?>
</body>
</html>