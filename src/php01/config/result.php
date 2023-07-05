<?php
$yourname = htmlspecialchars($_POST['yourname'], ENT_QUOTES);
$set = htmlspecialchars($_POST['set'], ENT_QUOTES);
$number = htmlspecialchars($_POST['number'], ENT_QUOTES);

print "私の名前は、" . $yourname . "<br />";
print "ご注文の商品は、" . $set . "<br />";
print "注文数は、" . $number;