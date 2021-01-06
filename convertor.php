
<?php 

if(isset($_POST['submit'])){
	
$amount = $_POST['amount'];
$cur = $_POST['cur'];
$cur1 = $_POST['cur1'];

}

//converter for EURO
if($cur == "IDR" ){ 
    echo "<h2>Exhange Rate is :</h2>";
    echo "<h2>"."<font color=blue>" . "Rp" ." " .$amount * 17.172,81 . " "."</h2>" ."</font>" ;


}else if ($cur =="AUD" ){
    echo "<h2>Exhange Rate is:</h2>";
    echo "<h2>"."<font color=blue>" ."$" ." " . $amount * 1.58 ." ". "(AUD)" ."</h3>" ."</font>";



}else if($cur=="USD"){
    echo "<h2>Exhange Rate is:</h2>";
    echo "<h2>"."<font color=blue>"  . " $ " ." " . $amount * 1.26 . " " ."</h2>"."</font>"; 

}else if($cur=="THB"){
    echo "<h2>Exhange Rate is</h2>";
    echo "<h2>"."<font color=blue>"  . $amount * 36,82 . " ". "THB" ."</h2>" ."</font>";

}




