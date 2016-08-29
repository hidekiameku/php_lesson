<?php
if(is_numeric($_GET["age"]) == false){
  echo "年齢は数字で教えてください！";
  exit();
}

$uranai_message = [
                    "ちょっとあなたの年齢は対象年齢に含まれていません。。。",
                    "10代のあなたには、PHPを御守り代わりに勉強するのがいいみたい",
                    "20代のあなたには、趣味でPHPを使うと良いみたい",
                    "30代のあなたには、ビジネススキルとしてPHPを勉強すると良いみたい",
                    "40代のあなたには、PHPは新たなフロンティアとなるでしょう",
                    ];

if ($_GET["age"] >= 50 || $_GET["age"] < 10 ) {
  $num = 0;
}else if ($_GET["age"] >= 40 ) {
  $num = 4;
}else if ($_GET["age"] >= 30 ) {
  $num = 3;
}else if ($_GET["age"] >= 20 ) {
  $num = 2;
}else {
  $num = 1;
}


echo "$uranai_message[$num]";
