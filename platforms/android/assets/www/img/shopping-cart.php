<center><img src="img/homeburger.png" width="180" height="180" alt="HomeBurger"><br><br>
<link rel="stylesheet" href="//code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
<?php
include('config.php');
define( '_JEXEC', 1 );
define( 'JPATH_BASE', realpath(dirname(__FILE__).'/../' ));
define( 'DS', DIRECTORY_SEPARATOR );
require_once ( JPATH_BASE .DS.'includes'.DS.'defines.php' );
require_once ( JPATH_BASE .DS.'includes'.DS.'framework.php' );
$mainframe =& JFactory::getApplication('site');
$mainframe->initialise();
$session =& JFactory::getSession();
$session->set('name','value'); //Set session name and value
$session_id = $session->getId();
$user =& JFactory::getUser();
$u = $user->get('id');
$db = JFactory::getDBO();
//$query = "SET NAMES latin1";
//$db->setQuery($query);
//$db->query();

$groups = $user->get('groups');
foreach($groups as $group) {
   // echo "<p>You're group ID is:" . $group . "</p>";
}

if ($group>=2) {
?>
<link rel="stylesheet" href="css/jquery-ui-1.10.4.custom.css">

<script src="http://code.jquery.com/jquery-latest.pack.js" type="text/javascript"></script>


<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js" type="text/javascript"></script>
<?php
$session =&JFactory::getSession();
$session_id = $session->getId();
$cctop = $_REQUEST['c'];
$cctop = addslashes($cctop);
if ($cctop!="" && $cctop>=1) {
$ev1 = mysql_query("SELECT * FROM ax8oc_00_menu_categories WHERE sort<>'' AND category<>'' ORDER BY sort ASC");
while($evrow1 = mysql_fetch_array($ev1)) {

if ($evrow1['id']==$cctop) {
$sto = 1;
}
if ($sto!="1") {
$otop = $evrow1['oftop']+$otop;
}
}
}

//echo $session_id;
$clasx="";
$table = "<table width='100%' id='mytable'>";
$ev1 = mysql_query("SELECT * FROM ax8oc_00_cart WHERE sesid='".$session_id."'");
while($evrow1 = mysql_fetch_array($ev1)) {
$ok = 1;
$id = "";
$poso = "";
$te = "";
$id = "";
$title = "";
$price = "";
$te = "";
$id = $evrow1['pid'];
$ssid = $evrow1['id'];
$poso = $evrow1['posotita'];
if ($clasx=="") {
$x = "#r_";
} else {
$x = ",#r_";
}
$y = ",#p_";
$clasx .= $x.$ssid.$y.$ssid;

$ev111 = mysql_query("SELECT * FROM ax8oc_00_menu WHERE id='".$id."'");
while($evrow111 = mysql_fetch_array($ev111)) {
$title = $evrow111['name'];
$price = $evrow111['price'];
$cateid = $evrow111['cat_id'];
$ccdescr = $evrow111['descr'];

$ext_scr = $evrow1['ext_field'];
$ext_pie = explode("|", $ext_scr);
foreach ($ext_pie as $field => $value) {
$value = str_replace(",","",$value);
$ev11100 = mysql_query("SELECT * FROM ax8oc_00_extra WHERE id='".$value."'");
while($evrow11100 = mysql_fetch_array($ev11100)) {
$price = $price + $evrow11100['price'];
}
}

$ev11122233 = mysql_query("SELECT * FROM ax8oc_00_menu_categories WHERE id='".$cateid."'");
while($evrow1112233 = mysql_fetch_array($ev11122233)) {
if ($evrow1112233['med']!="" && $evrow1112233['larg']!="") {
$tpiecesmed = explode("|", $evrow1112233['med']);
$tpieceslarge = explode("|", $evrow1112233['larg']);
if ($ccdescr=="1" || $ccdescr=="") {
$title = $title . " (".$tpieceslarge[0].")";
} elseif ($ccdescr=="0") {
$title = $title . " (". $tpiecesmed[0].")";
}
}
}
}
$te = $price * $poso;
$total = $total + $te;
$table .= "<tr height='25px'><td>&nbsp;</td><td><b><span id='r_".$ssid."' style='cursor:pointer;'><img src='img/minus.jpg' width='40px' height='40px'>&nbsp;</span>".$poso."<span id='p_".$ssid."' style='cursor:pointer;'>&nbsp;<img src='img/plus.jpg' width='40px' height='40px'></span></b></td><td>&nbsp;&nbsp;</td><td>".$title."</td><td>&nbsp;&nbsp;</td><td align='right'>".round($te,2)." €&nbsp;</td>";

//$upevent = mysql_query("UPDATE ax8oc_00_cart SET posotita='".$pos."' WHERE id='".$evrow1['id']."'");
//echo $pos;
}
$table .= "</table><br>Σύνολο: ".round($total,2)." €";
?>

<div align="center" id="cartshop" style="margin-top:-20px; width:90%;"><center><h3 style="background:#fbb900; line-height:40px;">Καλαθι Αγορων</h3>
<?php if ($ok=="1") {
echo $table;
if ($total>=6) {
?><br><br><span style='color:#fbb900; font-size:20px; cursor:pointer;' id="complete">Ολοκλήρωση παραγγελίας</span><?php
} else {
?><br><br><span style='color:#fbb900;'>Η παραγγελία σας πρέπει να είναι τουλάχιστον 6 euro</span><?php
}
} else {
echo "To καλάθι σας είναι άδειο!";
}
?>
</center><br></div><span style='color:#fbb900; text-align:center; font-size:20px;'><a href='/homeburger-menu'><br>
Επιστροφή στο μενού</a></span></div></div>

<script type="text/javascript" language="javascript">
jQuery(document).ready(function($) {

$("<?php echo $classes; ?>").click(function(event){
var page = this.id;
$("#cartshop").load('jq_buy.php', {"page":page} );
//$( ".modal_link" ).show();
});

$("#complete").click(function(event){
var reloaded = 1;
$("#cartshop").load('jq_buy.php', {"reloaded":reloaded} );
});

$("#complete2").click(function(event){
var reloaded = 1;
$("#cartshop2").load('jq_buy.php', {"reloaded":reloaded} );
});

$("<?php echo $clasx; ?>").click(function(event){
var clx = this.id;
$("#cartshop").load('jq_buy.php', {"clx":clx} );
});

});
</script>
</div>
<?php 
} else {
	?>
<script type="text/javascript">
	<!--
	window.location = "./"
	-->
</script>
<?php
}
?></center>