<?php
include 'connectDb.php';
session_start();
if (!isset($_SESSION['loginLp'])) {
    header("Location: loginLp.php");
}

if(isset($_POST['submit'])){
    $nama=$_POST['nama'];
    $email=$_POST['email'];
    $judul=$_POST['judul'];
    $kategori=$_POST['kategori'];
    $surat=$_FILES['surat']['name'];
    $surat_tmp=$_FILES['surat']['tmp_name'];
    move_uploaded_file($surat_tmp,'filesurat/'.$surat);
    $sql="insert into `surattugas` (nama,email,judul,surat,kategori) values ('$nama','$email','$judul','$surat','$kategori')";
    $result=mysqli_query($conn,$sql);
    if(!$result){
        die(mysqli_error($conn));
    }
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

require 'vendor/autoload.php';
if(isset($_POST['submit']))
{
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
$email=$_POST['email'];
$judul=$_POST['judul'];
$surat=$_FILES['surat']['name'];
$surat_tmp=$_FILES['surat']['tmp_name'];
    $kategori=$_POST['kategori'];

    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'azizfrachman@gmail.com';                     //SMTP username
    $mail->Password   = 'khjcuocexrktmqkf';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('azizfrachman@gmail.com', 'horizonJournalSystems');
    $mail->addAddress($email, 'Lembaga peneliti');     //Add a recipien   //Name is optional
    $mail->addReplyTo('azizfrachman@gmail.com', 'horizonJournalSystems');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');
    
    //Attachments
    $mail->addAttachment('filesurat/'.$surat);         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Konfirmasi surat tugas';
    $mail->Body    = 'Judul: '.$judul.'<br><br>Kategori: '.$kategori.'';

    if($mail->send()){
        echo"<script> alert('Surat Tugas Anda Telah Di Kirim')</script>";
    }else{
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}else{
    echo'Segera tekan tombol kirim';
}
?>