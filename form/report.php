<?php
    $when_it_happend = $_POST['whenithappend'];
    $how_long = $_POST['howlong'];
    $alien_description = $_POST['description'];
    $fang_spoted = $_POST['fangspotted'];
    $email = $_POST['email'];

    echo 'Thanks for submtting the form. <br/>';
    echo 'You were abducted '. $when_it_happend;
    echo ' and were gone for ' . $how_long . '<br/>';
    echo 'Describe them: ' . $alien_description . '<br/>';
    echo 'Was fang there ? ' . $fang_spoted . '<br/>';
    echo 'Your email adress is ' . $email;
?>