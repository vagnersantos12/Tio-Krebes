<?php

<<<<<<< HEAD
if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addslashes($_POST(['name']));
$sobrenome = addslashes($_POST(['sobrenome']));
$email = addslashes($_POST(['email']));
$telefone = addslashes($_POST(['telefone']));

$to = "vagner3762@gmail.com";
$subject = "Vagner Santos - Hakcer Ético";
$body = "Nome: ".$nome."\r\n"
"Sobrenome: ".$sobrenome."\r\n"
"email: ".$email."\r\n"
"telefone: ".$telefone."\r\n"
$header = "From:vagner3762@gmail.com"."\r\n"
."Reply-To".$email."\e\n"
."X=Mailer:php/".phpversion();
if(mail($to,$subject,$body,$header)){
  echo("Email enviado com sucesso");
}else{
  echo("O Email não pode ser enviado")";"


}
}
?>
=======
require __DIR__ . "/vendor/autoload.php";

use Twilio\Rest\Client;

$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();

$twilioSid    = getenv('TWILIO_SID');
$twilioToken  = getenv('TWILIO_TOKEN');

$twilio = new Client($twilioSid, $twilioToken);

$message = $twilio->messages
                 ->create(
                       "whatsapp:+558798133618",
                     array(
                              "body" => "Greetings from Twilio :-)",
                              "from" => "whatsapp:+558798133618"
                          )
                 );
<?;
>>>>>>> a8d143a7dbb2f8134dc45982c24b31dd9e0ed2ef
