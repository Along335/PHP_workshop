<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section>
        <p>
            This is result from php function:
        </p>
    </section>
    <footer>
        <section id="copyright">
            &copy This content is not copyrigth free<br>
            <?php
function currDateTime() {
    date_default_timezone_set('Europe/Riga');
    $currentTime = time();
    $formattedDateTime = date('d-m-Y H:i:s', $currentTime);
    return $formattedDateTime;
}

$date= currDateTime();
echo "Current Date and Time: $date";
?>
        </section>
    </footer>
</body>
</html>
