<?php

$key = 'ma-cle-de-chiffrement-000000';

// L'e-mail à crypter
$email = 'me@gmail.com';

$iv = 'mon-iv-00000078';

$encrypted_email = openssl_encrypt($email, 'AES-256-CBC', $key, 0, $iv);

// Afficher e-mail crypté
echo "Voici email crypté: " . $encrypted_email;


//Decrypte l'e-mail crypté

$decrypted_email = openssl_decrypt($encrypted_email, 'AES-256-CBC', $key, 0, $iv);

// Affichage de l'e-mail décrypté
echo "Email décrypté: " . $decrypted_email;

?>
