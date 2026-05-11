if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    $to = "kontakt@budmar.pl";

    $subject = "Nowa wiadomość ze strony BUD MAR";

    $body = "
    Imię: $name\n
    Email: $email\n
    Telefon: $phone\n
    Wiadomość:\n$message
    ";

    $headers = "From: $email";

    if(mail($to, $subject, $body, $headers)) {
        echo "Wiadomość została wysłana.";
    } else {
        echo "Błąd podczas wysyłania wiadomości.";
    }
}

?>