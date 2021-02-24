<?php
if (!empty($_POST)) {
    _d($_POST);
    // die('POSTINU');
    // atlikti veiksmus ir isaugoti info is posto
    header('Location: http://www.localhost/php-web-mechanic'); // rezultatai yra cia
    header('Bla: bla bla');
    die; // nera daugiau info
}
?>

<a href="?kabinetas=nr51&valdininkas=Antanas">Kitur</a>
<a href="?kabinetas=nr52&valdininkas=Petras">Buhalterija</a>
<a href="?kabinetas=nr53&valdininkas=Jonas">Finansistai</a>
<a href="?kabinetas=nr25&valdininkas=Juozas">Direktoriai</a>

<?php
_d($_GET);
_D($_POST);
if (isset($_GET['kabinetas']) && isset($_GET['valdininkas'])) {
    if ($_GET['kabinetas'] == 'nr52') {
        echo '<h1>Buhalterija</h1>';
        echo '<p>darbuotojas:' . $_GET['valdininkas'] . '</p>';
    }
    elseif ($_GET['kabinetas'] == 'nr53') {
        echo '<h1>Finansistai</h1>';
        echo '<p>darbuotojas:' . $_GET['valdininkas'] . '</p>';
    }
    elseif ($_GET['kabinetas'] == 'nr25') {
        echo '<h1>Direktoriai</h1>';
        echo '<p>darbuotojas:' . $_GET['valdininkas'] . '</p>';
    }
    else {
        echo '<h1>Kitur</h1>';
        echo '<p>darbuotojas:' . $_GET['valdininkas'] . '</p>';
    }
}
else {
    echo '<h1>Niekur</h1>';
}
?>
<form action="" method="get">
    <input type="text" name="kabinetas">
    <input type="text" name="valdininkas">
    <button type="submit">GET!</button>
</form>
<form action="" method="post">
    <input type="text" name="kabinetas">
    <input type="text" name="valdininkas">
    <button type="submit">POST!</button>
</form>