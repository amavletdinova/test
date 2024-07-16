<?
if ($_POST["send"]) {
include_once "smsc_api.php";
$client = new SoapClient ("http://smsc.ru/sys/soap.php?wsdl");
$ret = $client->send_sms(array("login"=>"alex", "psw"=>"123", $_POST["phone"], $_POST["message"], 0, $_POST["sender"]));

if ($ret->sendresult->error)
    echo "Ошибка №".$ret->sendresult->error;
else 
    echo $ret->sendresult->id, "\n";
    echo $ret->sendresult->balance, "\n";
    echo $ret->sendresult->cost, "\n";
    echo $ret->sendresult->cnt, "\n";
}
?>
