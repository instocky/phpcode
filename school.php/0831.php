<!-- вывод правильного года создания сайта
https://github.com/tarik817/tricks/blob/master/footer.php -->
<footer>
    <?php
    $text = 'Kostiuk Taras';
    $startYear = '2010';
    $thisYear = date('Y');
    if ($startYear == $thisYear) {
        echo "<p>&copy;  $thisYear $text</p>";
    } else {
        echo "<p>&copy; $startYear &#8211; $thisYear $text</p>";
    }
    ?>
</footer>
