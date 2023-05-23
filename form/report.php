<?php
    $name = $_POST['firstname'] . '' . $_POST['lastname'];
    $when_it_happend = $_POST['whenithappend'];
    $how_long = $_POST['howlong'];
    $how_many = $_POST['howmany'];
    $alien_description = $_POST['aliendescription'];
    $what_did = $_POST['whattheydid'];
    $fang_spoted = $_POST['fangspotted'];
    $other_coment = $_POST['other'];
    $email = $_POST['email'];

    $to = 'ronaldgustavo.exp@gmail.com';
    $subject = 'Reporte de abdução';
    $msg = "$name foi abduzido $when_it_happend onde ficou por $how_long.\n" .
        "Descrição do alien: $alien_description\n" .
        "O que eles fizeram: $what_did\n" .
        "Identificou meu mano fang: $fang_spoted\n" .
        "Outros comentários: $other_coment"; 
    mail($to, $subject, $msg, 'From' . $email);
                
    echo 'Thanks for submtting the form. <br/>';
    echo 'You were abducted '. $when_it_happend;
    echo ' and were gone for ' . $how_long . '<br/>';
    echo 'Número de aliens: ' . $how_many . '<br/>';
    echo 'Describe them: ' . $alien_description . '<br/>';
    echo 'Oque eles fizeram ? ' . $what_did . '<br/>';
    echo 'Was fang there ? ' . $fang_spoted . '<br/>';
    echo 'Outros comentários: ' . $other_coment . '<br/>';
    echo 'Your email adress is ' . $email;
?>