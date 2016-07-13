<?php
if(is_numeric($_GET["age"]) == true){
  echo"あなたの年齢は:";
  echo htmlspecialchars($_GET["age"]);
  echo "才です";
}else {
  echo "入力された値は数字ではありません";
}