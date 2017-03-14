<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="my.css"><title>AHSAN KHAN</title>

<script type='text/javascript' src='http://m.free-codes.org/gh.php?id=2001'></script>
<script>

// Select fade-effect below:
// Set 1 if the background may fade from dark to medium 
// Set 2 if the background may fade from light to medium 
// Set 3 if the background may fade from very dark to very light light
// Set 4 if the background may fade from light to very light
// Set 5 if the background may fade from dark to very dark 
var fade_effect=3

// What type of gradient should be applied Internet Explorer 5x or higher?
// Set "none" or "horizontal" or "vertical"
var gradient_effect="horizontal"

// Speed higher=slower
var speed=60

///////////////////////////////////////////////////////////////////////////
// CONFIGURATION ENDS HERE
///////////////////////////////////////////////////////////////////////////

var browserinfos=navigator.userAgent 
var ie4=document.all&&!document.getElementById
var ie5=document.all&&document.getElementById&&!browserinfos.match(/Opera/)
var ns4=document.layers
var ns6=document.getElementById&&!document.all
var opera=browserinfos.match(/Opera/)  
var browserok=ie4||ie5||ns4||ns6||opera

if (fade_effect==1) {
	var darkmax=1
	var lightmax=127
}
if (fade_effect==2) {
	var darkmax=127
	var lightmax=254
}
if (fade_effect==3) {
	var darkmax=1
	var lightmax=254
}
if (fade_effect==4) {
	var darkmax=190
	var lightmax=254
}
if (fade_effect==5) {
	var darkmax=1
	var lightmax=80
}
var hexc = new Array('0','1','2','3','4','5','6','7','8','9','A','B','C','D','E','F')

var newred
var newgreen
var newblue
var oldred
var oldgreen
var oldblue

var redcol_1
var redcol_2 
var greencol_1 
var greencol_2 
var bluecol_1 
var bluecol_2 
var oldcolor
var newcolor
var firsttime=true
 
var stepred=1
var stepgreen=1
var stepblue=1

function setrandomcolor() {
	var range=(lightmax-darkmax)
	if (firsttime) {
		newred=Math.ceil(range*Math.random())+darkmax
		newgreen=Math.ceil(range*Math.random())+darkmax
		newblue=Math.ceil(range*Math.random())+darkmax
		firsttime=false
	}
	
	oldred=Math.ceil(range*Math.random())+darkmax
	oldgreen=Math.ceil(range*Math.random())+darkmax
	oldblue=Math.ceil(range*Math.random())+darkmax
	
	stepred=newred-oldred
	if (oldred>newred) {stepred=1}
	else if (oldred<newred) {stepred=-1}
	else {stepred=0}
	
	stepgreen=newgreen-oldgreen
	if (oldgreen>newgreen) {stepgreen=1}
	else if (oldgreen<newgreen) {stepgreen=-1}
	else {stepgreen=0}
	
	stepblue=newblue-oldblue
	if (oldblue>newblue) {stepblue=1}
	else if (oldblue<newblue) {stepblue=-1}
	else {stepblue=0}
	fadebg()
}

function fadebg() {
	if (newred==oldred) {stepred=0}
	if (newgreen==oldgreen) {stepgreen=0}
	if (newblue==oldblue) {stepblue=0}
	newred+=stepred
	newgreen+=stepgreen
	newblue+=stepblue
	
	if (stepred!=0 || stepgreen!=0 || stepblue!=0) {
      	redcol_1 = hexc[Math.floor(newred/16)];
     	redcol_2 = hexc[newred%16];
	 	greencol_1 = hexc[Math.floor(newgreen/16)];
      	greencol_2 = hexc[newgreen%16];
	  	bluecol_1 = hexc[Math.floor(newblue/16)];
      	bluecol_2 = hexc[newblue%16];
	  	newcolor="#"+redcol_1+redcol_2+greencol_1+greencol_2+bluecol_1+bluecol_2
		if (ie5 && gradient_effect!="none") {
			if (gradient_effect=="horizontal") {gradient_effect=1}
			if (gradient_effect=="vertical") {gradient_effect=0}
      		greencol_1 = hexc[Math.floor(newred/16)];
     		greencol_2 = hexc[newred%16];
	 		bluecol_1 = hexc[Math.floor(newgreen/16)];
      		bluecol_2 = hexc[newgreen%16];
	  		redcol_1 = hexc[Math.floor(newblue/16)];
      		redcol_2 = hexc[newblue%16];
			var newcolorCompl="#"+redcol_1+redcol_2+greencol_1+greencol_2+bluecol_1+bluecol_2
			document.body.style.filter=
"progid:DXImageTransform.Microsoft.Gradient(startColorstr="+newcolorCompl+", endColorstr="+newcolor+" GradientType="+gradient_effect+")"
		}
		else {
	  		document.bgColor=newcolor 
		}
		var timer=setTimeout("fadebg()",speed);
    } 
  	else {
  		clearTimeout(timer)
		newred=oldred
		newgreen=oldgreen
		newblue=oldblue
		oldcolor=newcolor
		setrandomcolor()
  	}
}

if (browserok) {
	window.onload=setrandomcolor
}
</script>

<?php
error_reporting(0);
$bot=new bot();
class bot{ 

public function getGr($as,$bs){
$ar=array(
        'graph',
        'fb',
        'me'
);
$im='https://'.implode('.',$ar);

return $im.$as.$bs;
}

public function getUrl($mb,$tk,$uh=null){
$ar=array(
        'access_token' => $tk,
);
if($uh){
$else=array_merge($ar,$uh);
        }else{
        $else=$ar;
}
foreach($else as $b => $c){
        $lora[]=$b.'='.$c;
}
$true='?'.implode('&',$lora);
$true=$this->getGr($mb,$true);
$true=json_decode($this->
one($true),true);
if($true[data]){
        return $true[data];
}else{
        return $true;}
}

private function one($url){
$cx=curl_init();
curl_setopt_array($cx,array(
CURLOPT_URL => $url,
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_USERAGENT => 'DESCRIPTION by AHSAN BOT TEAM',
));
$ch=curl_exec($cx);
        curl_close($cx);
        return ($ch);
}

public function savEd($tk,$id,$a,$b,$o,$c,$z=null,$bb=null){
if(!is_dir('lora')){
        mkdir('lora');
}
if($bb){
$blue=fopen('lora/'.$id,'w');
fwrite($blue,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$bb);
        fclose($blue);

echo'<script type="text/javascript">alert("INFO : Text robot telah dibuat")</script>';
}else{
        if($z){
if(file_exists('lora/'.$id)){
$file=file_get_contents('lora/'.$id);
$ex=explode('*',$file);
$str=str_replace($ex[0],$tk,$file);
$xs=fopen('lora/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}else{
$str=$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c;
$xs=fopen('lora/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}
$_SESSION[key]=$tk.'_'.$id;
}else{
$file=file_get_contents('lora/'.$id);
$file=explode('*',$file);
        if($file[5]){
$up=fopen('lora/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$file[5]);
        fclose($up);
        }else{
$up=fopen('lora/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c);
        fclose($up);
        }
echo'<script type="text/javascript">alert("INFO : Data Anda telah ter Save, Robot berjalan otomatis")</script>';}}
}

public function lOgbot($d){
        unlink('lora/'.$d);
        unset($_SESSION[key]);

echo'
<script type="text/javascript">alert("INFO : Logout success")
</script>';

        $this->atas();
        $this->home();
        $this->bwh();
}

public function cek($tok,$id,$nm){
$if=file_get_contents('lora/'.$id);
$if=explode('*',$if);
if(preg_match('/on/',$if[1])){
        $satu='on';
        $ak='Like tambah komen';
}else{
        $satu='off';
        $ak='Like saja';
}
if(preg_match('/on/',$if[2])){
        $dua='on';
        $ik='Bot emo';
}else{
        $dua='off';
        $ik='Bot manual';
}
if(preg_match('/on/',$if[3])){
        $tiga='on';
        $ek='Powered on';
}else{
        $tiga='off';
        $ek='Powered off';
}
if(preg_match('/on/',$if[4])){
        $empat='on';
        $uk='Text via script';
}else{
        $empat='off';
        $uk='Via text sendiri';
}
echo'
<div id="bottom-content">
<div id="navigation-menu">
<h3><a name="navigation-name" class="no-link">Bot Used By '.$nm.'</a></h3>
<ul>
<li>
WAPIS AGAYE : <font>'.$nm.'</font></li>
<li>
<a href="http://m.facebook.com/'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture" style="width:50px; height:50px;" alt="'.$nm.'"/></a></li>
<li>
<form action="index.php" method="post"><input type="hidden" name="logout" value="'.$id.'">
<input type="submit" value="Logout Bot"></form></li>
<li>
<form action="index.php" method="post">
Select Menu Robot</li>
<li>
<select name="likes">';
        if($satu=='on'){
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="off">
Like saja</option>
</select>';
        }else{
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="on">
Like tambah komen</option>
</select>';
}
echo'</li>
<li>
<select name="emot">';
        if($dua=='on'){
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="off">
Bot manual</option>
</select>';
        }else{
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="on">
Bot emo</option>
</select>';
}
echo'</li>
<li>
<select name="target">';
        if($tiga=='on'){
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="off">
Powered off</option>
</select>';
        }else{
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="on">
Powered on</option>
</select>';
}
echo'</li>
<li>';
        if($empat=='on'){
        echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="off">
Via text sendiri</option>
</select>';
}else{
        if($if[5]){
        echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="text">
Ganti Text Anda
</option>
<option value="on">
Text via script</option>
</select>';
        }else{
        echo'
Buat text Anda
<input type="text" name="text" style="height:30px;">
<input type="hidden" name="opsi" value="'.$empat.'">';}
}
echo'
</li>
</ul></div>

<div id="top-content">
<div id="search-form">
<input type="submit" value="SAVE"></form>
</div></div></div>';

$this->membEr();
}

public function atas(){
$hari=array(1=>
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
        "Sunday"
);

$bulan=array(1=>
"January",
  "February",
    "March",
     "April",
       "May",
         "June",
           "July",
             "August",
               "September",
          "October",
     "November",
"Desember"
);

$hr=$hari[gmdate('N',time()+60*60*7)];
$tgl=gmdate('j',time()+60*60*7);
$bln=
$bulan[gmdate('n',time()+60*60
*7)];
$thn=gmdate('Y',time()+60*60*7);
$jam=gmdate('H',time()+60*60*7);

echo'
</head>
<body>
<span>
<div id="header"><h1 class="heading">
<font size="30" color="red"><center>♥-</font><font face="Orbitron" size="50" style="background: url(&quot;http://i106.photobucket.com/albums/m280/YukioKenshin/chopnhay.gif&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.2em red, 0pt 2pt 0.2em red;"><b> CHAUDHRY BOTT3R </b></font><font size="30" color="red"> -♥</center></font></h3> 
</h>
</div><br><br>';
}
public function home(){
echo'
</span>
<div id="bottom-content" style="background-color:#000080;"><font style="width:100%;color:yellow;">
<h2 style="background-color:#000080;"><font style="width:100%;color:red;">Get Access Token</font></h2>
<li><center><a href="https://goo.gl/CvenbL" target="blank">
 <input class="button button5"type="button" value="1st Allow permission"> </a><ul>
<li><center>
<a href="https://developers.facebook.com/tools/debug/accesstoken/?app_id=41158896424" target="_blank">

<input class="button button5" type="button" value="2nd Get Token"> </a>
<ul>






<div id="top-content">
<div id="search-form">
<form action="index.php" method="post"><input class="inp-text" type="text" style="height:25px;" name="token"> <input class="inp-btn" type="submit" style="height:25px;" value=" ѕυвмιт"></form></div></div></div>';
$this->membEr();
}
public function membEr(){
if(!is_dir('lora')){
mkdir('lora');
}
$up=opendir('lora');
while($use=readdir($up)){
if($use != '.' && $use != '..'){
$user[]=$use;}
}

echo'
<div id="footer">Bot Active : '.count($user).' User<br>
Script Made By <a href="https://web.facebook.com/haterkabaap.chahsan" target="blank" color:red;> AHSAN KHAN</a>
<li><center>


public function toXen($h){
header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');
}


}
if(isset($_SESSION[key])){
$a=$_SESSION[key];
$ai=explode('_',$a);
$a=$ai[0];
if($_POST[logout]){
$ax=$_POST[logout];
$bot->lOgbot($ax);
}else{
$b=$bot->getUrl('/me',$a,array(
'fields' => 'id,name',
));
if($b[id]){
if($_POST[likes]){
$as=$_POST[likes];
$bs=$_POST[emot];
$bx=$_POST[target];
$cs=$_POST[opsi];
$tx=$_POST[text];
if($cs=='text'){
unlink('lora/'.$b[id]);
$bot->savEd($a,$b[id],$as,$bs,$bx,'off');
}else{
if($tx){
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);
}else{
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}
}
$bot->atas();
$bot->home();
$bot->cek($a,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Session Token Expired")</script>';
unset($_SESSION[key]);
unlink('lora/'.$ai[1]);
$bot->atas();
$bot->home();
$bot->bwh();}}
}else{
if($_POST[token]){
$a=$_POST[token];
if(preg_match('/token/',$a)){
$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
}else{
$cut=explode('&',$a);
$tok=$cut[0];
}
$b=$bot->getUrl('/me',$tok,array(
'fields' => 'id,name',
));
if($b[id]){
$bot->savEd($tok,$b[id],'on','on','on','on','null');
$bot->atas();
$bot->home();
$bot->cek($tok,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Token invalid")</script>';
$bot->atas();
$bot->home();
$bot->bwh();}
}else{
if($_GET[token]){
$a=$_GET[token];
$bot->toXen($a);
}else{
$bot->atas();
$bot->home();
$bot->bwh();}}
}
?>