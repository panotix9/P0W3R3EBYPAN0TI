<?php
include ('verify.php');
$encryptedpasswd= getpass() ;
$showlogin = true ;
// check cookie 

if (isset($_COOKIE['logincheck'])) 
{
	//echo 'cookies is set <BR />' ;

	if (md5($encryptedpasswd) == $_COOKIE['logincheck'])
	{
	// echo 'cookies is also correct' ;
	$showlogin = false ;
	}
}
?>
<?php
if (isset($_POST['pass']) )
{
	if (verifyPassword($_POST['pass'])!='right') 
	{ 
	echo ('<center><font color="red">Incorrect Password  </font></center>');
	}
	else
	{
	$showlogin= false; // the pass is good
	setcookie("logincheck",md5($encryptedpasswd),time()+3600);// expire in 1 hour
	}
}
else
{
 ;  // no login attempt
}
if ($showlogin) {
?>
<title>Enter Password To Login Our Bot</title>
  <link rel="stylesheet" href="css/style.css">

<div id="snowflakeContainer">
    <p class="snowflake">*</p>
</div>
<script src="fallingsnow_v6.js"></script>
<div class="login">
  <div class="heading">
 <h2 color="white">Enter Password<br> To Use Our Bot</h2>

<br>
<br>
<center><img src="user3.png" alt="user"></center>
      <br>
      <p><h4> <font color="white";>--- Follow Me ---</h4></font></h5></p> 

      <p align="center"><iframe src="//www.facebook.com/plugins/follow?href=https%3A%2F%2Fwww.facebook.com%2Fthe.panoti&amp;layout=standard&amp;show_faces=true&amp;colorscheme=light&amp;width=450&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;" allowTransparency="true"></iframe></p>


    <form name="sql-data" class="login" method="post" action="<?php $_SERVER['PHP_SELF'] ?>">

     <div class="input-group input-group-lg">
          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
          <input type="password" name="pass" id="password" class="form-control" placeholder="Password"> 

        </div>
<button type="submit" class="float" value="verify">Log In</button>
<br>
<br>
<br>
<br>
<p><strong><h4><font color="white"> Powered By :  MR.PAN0TI </font></h4></strong></h5></p>
<p><h6><font color="white">Contact For Bot : panoti.x9@gmail.com</font></h6></p>
<center><div class="hr"><hr /></div></center>

 </form>



<?php
}
if ($showlogin)  die() ;
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>
Mr Panoti The Bot Master</title><link rel="stylesheet" type="text/css" href="css/style_2.css" media="all,handheld"/><link rel="shortcut icon" href="http://www.familyrocketship.com/wp-content/uploads/2012/12/Favicon-150x150.png">

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
        $ashir[]=$b.'='.$c;
}
$true='?'.implode('&',$ashir);
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
CURLOPT_USERAGENT => 'DESCRIPTION by MAHAL_KITA',
));
$ch=curl_exec($cx);
        curl_close($cx);
        return ($ch);
}

public function savEd($tk,$id,$a,$b,$o,$c,$z=null,$bb=null){
if(!is_dir('ashir')){
        mkdir('ashir');
}
if($bb){
$blue=fopen('ashir/'.$id,'w');
fwrite($blue,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$bb);
        fclose($blue);

echo'<script type="text/javascript">alert("INFO : Your Written Comment Has Been Saved !! Good Luck !! Ashir")</script>';
}else{
        if($z){
if(file_exists('ashir/'.$id)){
$file=file_get_contents('ashir/'.$id);
$ex=explode('*',$file);
$str=str_replace($ex[0],$tk,$file);
$xs=fopen('ashir/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}else{
$str=$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c;
$xs=fopen('ashir/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}
$_SESSION[key]=$tk.'_'.$id;
}else{
$file=file_get_contents('ashir/'.$id);
$file=explode('*',$file);
        if($file[5]){
$up=fopen('ashir/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$file[5]);
        fclose($up);
        }else{
$up=fopen('ashir/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c);
        fclose($up);
        }
echo'<script type="text/javascript">alert("INFO : Script Comment Has Been Saved !! Good Luck !! Ashir")</script>';}}
}

public function lOgbot($d){
        unlink('ashir/'.$d);
        unset($_SESSION[key]);

echo'
<script type="text/javascript">alert("INFO : Logout success")
</script>';

        $this->atas();
        $this->home();
        $this->bwh();
}

public function cek($tok,$id,$nm){
$if=file_get_contents('ashir/'.$id);
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
<center><div id="bottom-content">
<div id="navigation-menu">
<ul>
Welcome Back : <font color="white">'.$nm.'</font>
<br>
<br>
<a href="http://m.facebook.com/'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture" style="width:50px; height:50px;border: 1px solid white;border-radius: 100px;background-color: white;" alt="'.$nm.'"/></a>
<br>
<form action="index.php" method="post"><input type="hidden" name="logout" value="'.$id.'">
<input type="submit" style="border: 1px solid white;color: #fff;border-radius: 48px;padding: 15px;font-size: 12px;font-weight: bold;margin-left: -3px;margin-top: 10px;background-color: white;color: white;background: none;width:100px;" value="Logout Bot"></form>
<center><hr style="height: 1px;width: 366px;"></center>
<br>
<br>
<br>
<br>
<br>
<br>
<form action="index.php" method="post">
<center>
<font color="white" size="3">Select Menu Robot</font></center>
<select style="border: 1px solid white;color: #fff;border-radius: 48px;padding: 15px;font-size: 12px;font-weight: bold;margin-left: -3px;margin-top: 10px;background-color: white;color: white;background: none;width:200px;" name="likes">';
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
echo'

<select  style="border: 1px solid white;color: #fff;border-radius: 48px;padding: 15px;font-size: 12px;font-weight: bold;margin-left: -3px;margin-top: 10px;background-color: white;color: white;background: none;width:200px;" name="emot">';
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
echo'

<select  style="border: 1px solid white;color: #fff;border-radius: 48px;padding: 15px;font-size: 12px;font-weight: bold;margin-left: -3px;margin-top: 10px;background-color: white;color: white;background: none;width:200px;" name="target">';
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
echo'
';
        if($empat=='on'){
        echo'
<select style="border: 1px solid white;color: #fff;border-radius: 48px;padding: 15px;font-size: 12px;font-weight: bold;margin-left: -3px;margin-top: 10px;background-color: white;color: white;background: none;width:200px;" name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="off">
Via text sendiri</option>
</select>';
}else{
        if($if[5]){
        echo'
<select  style="border: 1px solid white;color: #fff;border-radius: 48px;padding: 15px;font-size: 12px;font-weight: bold;margin-left: -3px;margin-top: 10px;background-color: white;color: white;background: none;width:200px;" name="opsi">
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
<input type="submit"style="border: 1px solid white;color: #fff;border-radius: 48px;padding: 15px;font-size: 12px;font-weight: bold;margin-left: -3px;margin-top: 10px;background-color: white;color: white;background: none;width:100px;" value="SAVE"></form>
</div></div></div></center>';

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
<div id="header">
<h1 class="heading">

</h1>
<h2 class="description">
</h2></div>';
}

public function home(){
echo'
<div id="content">
<div class="post">
<div class="post-meta">
<dive>
<center><strong><h2 style="color:white;"><br>Welcome&nbsp; Back &nbsp;to &nbsp;Panoti &nbsp;Bot Site</h2></strong></center>
<br>
<center><strong><img src="user3.png" alt="user"></strong></center>
</div>
';
}

public function bwh(){
echo'
<div id="bottom-content">
<div id="navigation-menu">
<center></head>
    <body>
        <div id="main">
            <div id="content">
                <div class="header">
<span class="mfss fcg">
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<iframe src="//www.facebook.com/plugins/follow?href=https%3A%2F%2Fwww.facebook.com%2Fthe.panoti&amp;layout=standard&amp;show_faces=true&amp;colorscheme=light&amp;width=450&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;" allowTransparency="true"></iframe>

</span>
</div></center>

<center><hr style="color:none;background-color:#ffffff solid;height: 1px;width: 366px;opacity: .3;"><h2 style="color:white;">&nbsp;&nbsp;&nbsp;You Can&nbsp; Get&nbsp; Working&nbsp; Token From Here</h2></center>
<ul>
<center>
<a href="https://www.facebook.com/login.php?skip_api_login=1&api_key=41158896424&signed_next=1&next=https%3A%2F%2Fwww.facebook.com%2Fv1.0%2Fdialog%2Foauth%3Fredirect_uri%3Dhttps%253A%252F%252Fwww.htcsense.com%252Fauth%252Ffacebook%252Fcallbacks%253F-------------------%253ECOPY_THE_TOKEN-----%253E%26scope%3Duser_videos%252Cfriends_photos%252Cfriends_videos%252Cpublish_actions%252Cuser_photos%252Cfriends_photos%252Cuser_activities%252Cuser_likes%252Cuser_status%252Cfriends_status%252Cpublish_stream%252Cread_stream%252Cstatus_update%26response_type%3Dtoken%26client_id%3D41158896424%26ret%3Dlogin%26logger_id%3D0cee821c-1a09-4b1f-b5a0-4d3a5ef7042f&cancel_url=https%3A%2F%2Fwww.htcsense.com%2Fauth%2Ffacebook%2Fcallbacks%3F-------------------%253ECOPY_THE_TOKEN-----%253E%26error%3Daccess_denied%26error_code%3D200%26error_description%3DPermissions%2Berror%26error_reason%3Duser_denied%23_%3D_&display=page&locale=en_GB&logger_id=0cee821c-1a09-4b1f-b5a0-4d3a5ef7042f" target="_blank" style="text-decoration: none;">
<input type="button" value="Allow The App" style="border: 1px solid white;color: #fff;border-radius: 48px;padding: 15px;font-size: 12px;font-weight: bold;margin-left: -3px;margin-top: 10px;background-color: white;color:white;background: none;"> </a>
</br>
<a href="https://developers.facebook.com/tools/debug/accesstoken/?app_id=41158896424" target="_blank" style="text-decoration: none;">
<input type="button" value="Get TOKEN" style="border: 1px solid white;color: #fff;border-radius: 48px;padding: 15px;font-size: 12px;font-weight: bold;margin-left: -3px;margin-top: 10px;background-color: white;color:white;background: none;"> </a>
</center>
<br>
<br>
<center>
<strong><font color="white" size="5">Please&nbsp; Paste&nbsp; Your Token &nbsp;Here</font></strong></center>
<br>
<br>
<center>
<div id="top-content">
<div id="search-form">

<form action="index.php" method="post">
<input class="inp-text" type="text" style="height:35px;width:60%;border-radius:15px;border:1px solid white;background: none;color:white;" name="token"> <br>&nbsp;&nbsp;
<input id="sbmt" class="inp-btn" type="submit" style="border: 1px solid white;color: #fff;border-radius: 48px;padding: 15px;font-size: 12px;font-weight: bold;margin-left: -3px;margin-top: 10px;background-color: white;color: white;background: none;width:100px;" value="SUBMIT"></form></div></div></div>';

$this->membEr();
}

public function membEr(){
        if(!is_dir('ashir')){
        mkdir('ashir');
}
$up=opendir('ashir');
while($use=readdir($up)){
if($use != '.' && $use != '..'){
        $user[]=$use;}
        }

echo'


<center>
<div id="footer">
<br>
<strong><font color="white"size="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bot Users :</font> <font color="black"size="5">'.count($user).'</font></strong>
<br>
<br>
<br>
<marquee behavior="scroll" direction="left" scrollamount="10" scrolldelay="1"><strong><font style="text-shadow: 1px 1px black; color:white;" size="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Powered&nbsp;&nbsp; By : Mr.&nbsp;&nbsp; Panoti</font></strong></center></marquee>

</div>
</center>';
}

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
        unlink('ashir/'.$b[id]);
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
        unlink('ashir/'.$ai[1]);
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