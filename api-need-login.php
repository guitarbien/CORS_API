<?php
session_start();

header("Access-Control-Allow-Origin: http://domain-b.test");
header("Access-Control-Allow-Credentials: true");
header('Content-type: text/plain');                       // worked
// header('Content-type: application/json');                    // also worked
// header('Content-type: application/xml');                     // error : Document is empty
// header('Content-type: application/x-www-form-urlencoded');   // will download


if (isset($_POST['verify']) && $_POST['verify']  === 'true') {
    $_SESSION['login'] = true;
}

if (isset($_SESSION['login']) && $_SESSION['login'] === true) {
    echo json_encode(['code' => 200]);
    return;
}

echo json_encode(['code' => 500]);
