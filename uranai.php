<?php
$uranai = [ "運気はいい感じ",
            "運気はまぁまぁ",
            "運気はイマイチ",
            "運気はダメ",
            "本日最高の日", 
            ];
$num = count($uranai)-1;
$unki_rand = rand(0,$num);
echo "$uranai[$unki_rand]";