<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
  
    <link href="style.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body>
<header>
 <h1>Currency Converter</h1>
</header>

<div class ="box">
<?php 

    if(isset($_POST['submit'])){
	
      $amount = $_POST['amount'];
      $cur = $_POST['cur'];
      $cur1 = $_POST['cur1'];

    }

//converter for EURO

  if($cur == "IDR" ){ 
    echo "<h2>Exhange Rate  :</h2>";
    echo "<h2>" . "Rp" ." " .$amount * 17.172,81 . " "."</h2>";


  }else if ($cur =="AUD" ){
    echo "<h2>Exhange Rate :</h2>";
    echo "<h2>"."$" ." " . $amount * 1.58 ." ". "(AUD)" ."</h3>" ;



  }else if($cur=="USD"){
    echo "<h2>Exhange Rate :</h2>";
    echo "<h2>". " $ " ." " . $amount * 1.26 . " " ."</h2>"; 

  }else if($cur=="THB"){
    echo "<h2>Exhange Rate :</h2>";
    echo "<h2>". $amount * 36,82 . " ". "THB" ."</h2>";

  }

?>

  <form action="" method="post">

    <label name="amount">Amount</label>
    <input type="text" id="Camount" name="amount" placeholder="Amount">
    
    <select name='cur1'>
        <option value="EUR">EUR</option>
        <option value="USD">USD</option>
        </select>

    <label for="country">Currency</label>
    <select id="Currency" name="cur">
        <option value="IDR" selected >IDR (Indonesian Rupiah) </option>
        <option value="AUD">AUD (Australian Dollar)</option>
        <option value="USD">USD (American  Dollar)</option>
        <option value="THB">THB (Thai baht)</option>
    </select>
  
    <input type="submit" name="submit" value="Convert">  
  </form>
</div>  
</body>
</html>