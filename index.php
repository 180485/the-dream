<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="style.css" rel="stylesheet" />
    <title>Currency Converter</title>
</head>
<body>

<div class="container">
     <h1>Currency Converter</h1>
      <div class ="box">
   
      <!-- php calculation -->

<?php 

    if(isset($_POST['submit'])){
      $amount = $_POST['amount'];
      $cur = $_POST['cur'];
      $cur1 = $_POST['cur1'];
      
    }

//converter for EURO
  if($cur=="USD"){
    echo "<h2>"."Exhange Rate : "."$" . " " .$amount * 1.26 . " "." </h2>";
    echo "<p style='color:#163a0c;'>" . "1 EUR = 1.26 USD" ."</p>";
      

    }else if ($cur =="AUD" ){
      echo "<h2>"."Exhange Rate : "."$" . " "  .$amount * 1.58 . " " ." </h2>";
      echo "<p style='color:#163a0c;'>" . "1 EUR = 1.58 AUD" ."</p>";
       
    }else if($cur == "IDR" ){ 
      echo "<h2>"."Exhange Rate : " ."Rp". " " .$amount * 17.172 . " ". "IDR" ." </h2>";
      echo "<p style='color:#163a0c;'>" . "1 EUR =  Rp 17.172 IDR " ."</p>";
       
    }else if($cur=="THB"){
       echo "<h2>"."Exhange Rate : " . $amount * 36,82 . " ". "THB" ." </h2>";
       echo "<p style='color:#163a0c;'>" . "1 EUR = 36.82 Thai Baht" ."</p>";
    

    }else if($cur=="BRL"){
      echo "<h2>"."Exhange Rate : " . $amount * 6,55 . " ". "BRL" ." </h2>";
      echo "<p style='color:#163a0c;'>" . "1 EUR = 6,55 Brazilian Real " ."</p>";

    }

?>

  <form action="" method="post">

  <label name="amount">Amount</label>
   <input type="text" id="Camount" name="amount" placeholder="Amount">
    <select name='cur1'>
        <option value="EUR">🇪🇺 EUR (Euro)</option> 
    </select>
    <label for="country">Converted to</label>
    <select id="Currency" name="cur">
         <option value="BRL" 🇮> 🇧🇷 BRL (Brazilian Real) </option>
        <option value="USD" selected > 🇺🇸 USD (American  Dollar)</option>
        <option value="IDR" 🇮> 🇮🇩 IDR (Indonesian Rupiah) </option>
        <option value="AUD"> 🇦🇺 AUD (Australian Dollar)</option>
        <option value="THB"> 🇹🇭 THB (Thai baht)</option>
    </select>
  
    <input type="submit" name="submit" value="CONVERT">  
   
   
  </form>
  </div>  
</div>  
</body>
</html>