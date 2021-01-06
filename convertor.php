
<?php 

if(isset($_POST['submit'])){
	
$amount = $_POST['amount'];
$cur = $_POST['cur'];
$cur1 = $_POST['cur1'];

}

//converter for EURO
if($cur == "IDR" ){ 
    echo "<h2>Your Converted Amount is:</h2>";
    echo "<h3>" .$amount * 17.172,81 . " ". "IDR"."</h3>" ;


}else if ($cur =="AUD" ){
    echo "<h2>Your Converted Amount is:</h2>";
    echo "<h3>". $amount * 1.58 ." ". "AUD" ."</h3>" ;



}else if($cur=="USD"){
    echo "<h2>Your Converted Amount is:</h2>";
    echo "<h3>" . $amount * 1.26 . " ". "USD" ."</h3>" ; ; 

}else if($cur=="THB"){
    echo "<h2>Your Converted Amount is:</h2>";
    echo "<h3>" . $amount * 36,82 . " ". "THB" ."</h3>" ;;

}



