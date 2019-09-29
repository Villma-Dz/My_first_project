<?php


//print_r($_POST);
$klientoVardas = $_POST['vardas'];
$klientoKlausimas = $_POST['klausimas'];
$klientoPastas = $_POST['pastas'];
// echo "  $klientoVardas  $klientoPavarde  <hr /> ";
// echo "  $klientoAntraste  <hr /> $klientoKlausimas   ";
// echo "  <hr /> $klientoPastas   ";

require_once ("libs/PHPMailer-master/PHPMailerAutoload.php");
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    // papildomi PhpMailer nustatymai, jeigu neveikia su standartiniais
    $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
    );
    $mail->Host = 'tls://smtp.gmail.com:587';
    $mail->SMTPSecure = 'ssl';                              // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                      // TCP port to connect to
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'rmp.parduotuve@gmail.com';                 // SMTP username
    $mail->Password = 'miglute123';                          // SMTP username
    //Recipients
    $mail->setFrom( 'rmp.parduotuve@gmail.com' ,  $klientoVardas);
    $mail->addReplyTo( $klientoPastas, $klientoVardas);     // Add a recipient
    $mail->addAddress( 'rmp.parduotuve@gmail.com', 'Pardavėjui');
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Klausimas';
    $mail->Body    = " <b>Klienatas klausia:</b>   $klientoKlausimas" ;
    $mail->AltBody = " Klientas klausia: $klientoKlausimas";
    $mail->send();


    echo '<script>alert("Laiškas sėkmingai išsiųstas!")</script>';

} catch (Exception $e) {
    echo '<script>alert("Laiškas neišsisiuntė!")</script>' . $mail->ErrorInfo;
}
// header('Location: index.php');
?>
