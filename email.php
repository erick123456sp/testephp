<?php


if(isset( $_POST['email']) && !empty($_POST['email'])){
$nome= addslashes($_POST['name']);
$email= addslashes($_POST['email']);
$menssagem= addslashes($_POST['message']);

$to= "contato@programadorbr.com";
$subject= "Contato- Programador Br";
$body="Nome: ".$nome."'\r\n".
      "Email: ".$email."'\r\n".
      "Mensagem: ".$menssagem;
$header="From:erickrodrigo595@gmail.com."."\r\n".
            "Reply-to:".$email."\e\n".
            "X=Mailer:PHP".phpversion();
     if(mail($to,$subject,$body,$header)){

      echo("Email enviado com Sucesso");
        }else{
      echo("O Email não pode ser enviado ");
}


}
echo $nome . '<br>';
echo $email . '<br>';
echo $menssagem . '<br>';
	echo "Hello, World!"

?>