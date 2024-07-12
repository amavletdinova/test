<?
$ret = $client->get_status(array("login"=>"alex", "psw"=>"123"));

if ($ret->balanceresult->balance)
    echo "Ошибка №".$ret->sendresult->error;
else
    echo $ret->balanceresult->balance, "\n";

?>
