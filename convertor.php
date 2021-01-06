<?php 


if(isset($_POST['submit'])){
	
$amount = $_POST['amount'];
$cur = $_POST['cur'];
$cur1 = $_POST['cur1'];

}

if($cur == "IDR"){ 
    echo "Your Converted Amount is: <br />";
    echo $amount*17.173 . " ". "IDR" ;


}else if ($cur =="AUD"){
    echo "Your Converted Amount is: <br />";
    echo $amount*1.58 . " ". "AUD" ;



}else if($cur=="USD"){
    echo "Your Converted Amount is: <br />";
    echo $amount*1.26 . " ". "USD" ;
}



?>