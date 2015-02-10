<style>
input {
	width:90%;
	height:30px;
        font: bold 18px/26px Arial, sans-serif;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--<link rel="stylesheet" href="//code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">-->
<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
<script src="js/modernizr.js"></script> <!-- Modernizr -->
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<?php


include('config.php');
define( '_JEXEC', 1 );
define( 'JPATH_BASE', realpath(dirname(__FILE__).'/' ));
define( 'DS', DIRECTORY_SEPARATOR );
require_once ( JPATH_BASE .DS.'includes'.DS.'defines.php' );
require_once ( JPATH_BASE .DS.'includes'.DS.'framework.php' );
$mainframe =& JFactory::getApplication('site');
$mainframe->initialise();
$session =& JFactory::getSession();
$session->set('name','value'); //Set session name and value
$user =& JFactory::getUser();
$u = $user->get('id');
$db = JFactory::getDBO();
//$query = "SET NAMES latin1";
//$db->setQuery($query);
//$db->query();
$session =& JFactory::getSession(); // starting the session
$session->destroy(); //This will destroy the joomla session

$day = date("w");
$time = date("G");
//echo $day . " - " . $time;
if ($day>=1 && $day<=4 && $time>=8 || $day==7 && $time>=12 || $day==0 && $time>=12) {

} elseif ($day==5 && $time>=8 || $day==6 && $time>=8 || $day==6 && $time<=2 || $day==7 && $time<=2) {

} else {
$stop = 1; 
}

$groups = $user->get('groups');
foreach($groups as $group) {
  //  echo "<p>You're group ID is:" . $group . "</p>";
}


?>
<meta charset="utf-8" />
<title>HomeBurger.gr</title>
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />

<?php
echo "<center><img src='img/homeburger.png' width='180' height='180' alt='HomeBurger'></center>";

if ($stop!=1) {
	//echo $group;
	if ($group<2 || $u=="0" || $group=="") {
		//echo ">".$group."<";
?>
<div class="cd-tabs">
	<nav>
		<ul class="cd-tabs-navigation">
			<li><a data-content="inbox" class="selected" href="#0">Είσοδος Χρήστη</a></li>
			<li><a data-content="new" href="#0">Εγγραφή νέου χρήστη</a></li>
		</ul> <!-- cd-tabs-navigation -->
	</nav>

	<ul class="cd-tabs-content">
		<li data-content="new">
<label for="name">Ονοματεπώνυμο:</label> <input name="name" type="text" class="textfield" id="name" value="<?php echo $row['name']; ?>" placeholder="Ονοματεπώνυμο" />
<label for="phone">Τηλέφωνo:</label> <input name="phone" type="text" class="textfield" id="phone" value="<?php echo $row['phone']; ?>"  placeholder="Τηλέφωνο"/>
<label for="addr">Διεύθυνση / ΤΚ:</label> <input name="addr" type="text" class="textfield" id="addr" value="<?php echo $row['adr']; ?>"  placeholder="Διεύθυνση / ΤΚ"/>
<label for="email">e-mail:</label> <input name="email" type="text" class="textfield" id="email" value="<?php echo $row['email']; ?>"  placeholder="e-mail"/>

<fieldset class="ui-field-contain"><label for="per">Περιοχή:</label><br>
<select id="per" name="per">
<option value="<?php echo $row['perioxi']; ?>" selected>Επιλογή...</option>
<option value="ΑΓΙΟΣ ΔΗΜΗΤΡΙΟΣ">ΑΓΙΟΣ ΔΗΜΗΤΡΙΟΣ</option>
<option value="ΑΛΙΜΟ">ΑΛΙΜΟ</option>
<option value="ΑΜΠΕΛΟΚΗΠΟΙ">ΑΜΠΕΛΟΚΗΠΟΙ</option>
<option value="ΑΡΓΥΡΟΥΠΟΛΗ">ΑΡΓΥΡΟΥΠΟΛΗ</option>
<option value="ΒΟΥΛΑ">ΒΟΥΛΑ</option>
<option value="ΒΥΡΩΝΑ">ΒΥΡΩΝΑ</option>
<option value="ΓΚΥΖΙ">ΓΚΥΖΙ</option>
<option value="ΓΛΥΦΑΔΑ">ΓΛΥΦΑΔΑ</option>
<option value="ΔΑΦΝΗ">ΔΑΦΝΗ</option>
<option value="ΕΛΛΗΝΙΚΟ">ΕΛΛΗΝΙΚΟ</option>
<option value="ΕΞΑΡΧΙΑ">ΕΞΑΡΧΙΑ</option>
<option value="ΖΩΓΡΑΦΟΥ">ΖΩΓΡΑΦΟΥ</option>
<option value="ΗΛΙΟΥΠΟΛΗ">ΗΛΙΟΥΠΟΛΗ</option>
<option value="ΗΛΙΣΙΑ">ΗΛΙΣΙΑ</option>
<option value="ΚΑΙΣΣΑΡΙΑΝΗ">ΚΑΙΣΣΑΡΙΑΝΗ</option>
<option value="ΚΑΛΛΙΘΕΑ">ΚΑΛΛΙΘΕΑ</option>
<option value="ΚΟΛΩΝΑΚΙ">ΚΟΛΩΝΑΚΙ</option>
<option value="ΚΟΛΩΝΑΚΙ">ΚΟΛΩΝΑΚΙ</option>
<option value="ΚΟΥΚΑΚΙ">ΚΟΥΚΑΚΙ</option>
<option value="ΚΥΨΕΛΗ">ΚΥΨΕΛΗ</option>
<option value="ΚΩΛΟΝΟΣ">ΚΩΛΟΝΟΣ</option>
<option value="ΜΕΤΑΞΟΥΡΓΕΙΟ">ΜΕΤΑΞΟΥΡΓΕΙΟ</option>
<option value="ΜΟΣΧΑΤΟ">ΜΟΣΧΑΤΟ</option>
<option value="ΜΕΤΣ">ΜΕΤΣ</option>
<option value="ΝΕΑ ΦΙΛΟΘΕΗ">ΝΕΑ ΦΙΛΟΘΕΗ</option>
<option value="ΝΕΑ ΣΜΥΡΝΗ">ΝΕΑ ΣΜΥΡΝΗ</option>
<option value="ΝΕΟΣ ΚΟΣΜΟΣ">ΝΕΟΣ ΚΟΣΜΟΣ</option>
<option value="ΝΕΑΠΟΛΗ">ΝΕΑΠΟΛΗ</option>
<option value="ΠΑΓΚΡΑΤΙ">ΠΑΓΚΡΑΤΙ</option>
<option value="ΠΑΝΟΡΜΟΥ">ΠΑΝΟΡΜΟΥ</option>
<option value="ΠΑΤΗΣΙΑ">ΠΑΤΗΣΙΑ</option>
<option value="ΠΑΛΑΙΟ ΦΑΛΗΡΟ">ΠΑΛΑΙΟ ΦΑΛΗΡΟ</option>
<option value="ΠΕΤΡΑΛΩΝΑ">ΠΕΤΡΑΛΩΝΑ</option>
<option value="ΠΛΑΚΑ">ΠΛΑΚΑ</option>
<option value="ΣΕΠΟΛΙΑ">ΣΕΠΟΛΙΑ</option>
<option value="ΤΑΥΡΟΣ">ΤΑΥΡΟΣ</option>
<option value="ΥΜΗΤΤΟ">ΥΜΗΤΤΟ</option>
</select></fieldset>
<label for="flor">Όροφος:</label> <input name="flor" type="text" class="textfield" id="flor" value="<?php echo $row['orofos']; ?>"  placeholder="Όροφος"/>
<label for="koud">Όνομα στο κουδούνι:</label> <input name="koud" type="text" class="textfield" id="koud" value="<?php echo $row['onomakoudouni']; ?>"  placeholder="Ονοματεπώνυμο στο κουδούνι"/>
<label for="message">Κωδικός:</label> <input name="password" class="textfield" type="password" id="password"  placeholder="Κωδικός" required/>
<label for="message">Επιβεβαίωση κωδικού:</label> <input name="cpassword" class="textfield" type="password" id="cpassword"  placeholder="Επιβεβαίωση Κωδικού" required/>

<input type="button" id="driver" value="Εγγραφή" />
<div id="stage" style=" color:#FF6600;"></div>
		</li>

		<li data-content="inbox" class="selected">

<label for="email">e-mail:</label> <input name="uname" type="text" class="textfield" id="uname" value="" />
<label for="passwd">Κωδικός:</label> <input name="passwd" type="password" class="textfield" id="passwd" value="" />
<input type="button" id="button2" value="Είσοδος" />
<div id="stage2" style=" color:#FF6600;"></div>
<a href="http://homeburger.gr/activation">Υπενθύμιση κωδικού</a><br>
<br>
		</li>
	</ul> <!-- cd-tabs-content -->
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" language="javascript">
$(document).ready(function() {
		var uname = $("#uname").val();
		var passwd = $("#passwd").val();
		if(uname != '' && passwd!= '') {
			$("#stage2").load('order.php', {"passwd":passwd,"uname":uname} );
		}
	
$("#driver").click(function(event){
var name= $("#name").val();
var phone= $("#phone").val();
var email= $("#email").val();
var addr= $("#addr").val();
var per= $("#per").val();
var flor= $("#flor").val();
var koud= $("#koud").val();
var password= $("#password").val();
var cpassword= $("#cpassword").val();
var message= 3123919391233111;
$("#stage").load('order.php', {"password":password,"cpassword":cpassword,"name":name,"koud":koud,"phone":phone,"message":message,"email":email,"addr":addr,"flor":flor,"per":per} );
});
});
</script> 
<script type="text/javascript" language="javascript">
$(document).ready(function() {
$("#button2").click(function(event){
var passwd = $("#passwd").val();
var uname = $("#uname").val();
var message= 12391239123912111;
$("#stage2").load('order.php', {"passwd":passwd,"uname":escape(uname),"message":message} );
});
});
</script>
<?php
 } else { 
   //ean einai login na kanei epibebaiosi stoixeion
if ($u>=180) { 
?>
<script type="text/javascript">
<!--
window.location = "http://homeburger.gr/app2/menu.php"
//-->
</script>
<?php
$qry = mysql_query("SELECT * FROM jrpom_users WHERE id='".$u."' LIMIT 1");
while($row = mysql_fetch_array($qry)) {
?>
<div class="cd-tabs">
	<nav>
		<ul class="cd-tabs-navigation">
			<li><a data-content="new" class="selected" href="#0">Στοιχεία αποστολής</a></li>
		</ul> <!-- cd-tabs-navigation -->
	</nav>

	<ul class="cd-tabs-content">
		<li data-content="new"  class="selected">
        <label for="name">Ονοματεπώνυμο:</label> <input name="name" type="text" class="textfield" id="name" value="<?php echo $row['name']; ?>" placeholder="Ονοματεπώνυμο" />
<label for="phone">Τηλέφωνo:</label> <input name="phone" type="text" class="textfield" id="phone" value="<?php echo $row['phone']; ?>"  placeholder="Τηλέφωνο"/>
<label for="addr">Διεύθυνση / ΤΚ:</label> <input name="addr" type="text" class="textfield" id="addr" value="<?php echo $row['adr']; ?>"  placeholder="Ονοματεπώνυμο"/>
<label for="email">e-mail:</label> <input name="email" type="text" class="textfield" id="email" value="<?php echo $row['email']; ?>" disabled/>

<fieldset class="ui-field-contain"><label for="per">Περιοχή:</label><br>
<select id="per" name="per">
<option value="<?php echo $row['perioxi']; ?>" selected><?php echo $row['perioxi']; ?></option>
<option value="ΑΓΙΟΣ ΔΗΜΗΤΡΙΟΣ">ΑΓΙΟΣ ΔΗΜΗΤΡΙΟΣ</option>
<option value="ΑΛΙΜΟ">ΑΛΙΜΟ</option>
<option value="ΑΜΠΕΛΟΚΗΠΟΙ">ΑΜΠΕΛΟΚΗΠΟΙ</option>
<option value="ΑΡΓΥΡΟΥΠΟΛΗ">ΑΡΓΥΡΟΥΠΟΛΗ</option>
<option value="ΒΟΥΛΑ">ΒΟΥΛΑ</option>
<option value="ΒΥΡΩΝΑ">ΒΥΡΩΝΑ</option>
<option value="ΓΚΥΖΙ">ΓΚΥΖΙ</option>
<option value="ΓΛΥΦΑΔΑ">ΓΛΥΦΑΔΑ</option>
<option value="ΔΑΦΝΗ">ΔΑΦΝΗ</option>
<option value="ΕΛΛΗΝΙΚΟ">ΕΛΛΗΝΙΚΟ</option>
<option value="ΕΞΑΡΧΙΑ">ΕΞΑΡΧΙΑ</option>
<option value="ΖΩΓΡΑΦΟΥ">ΖΩΓΡΑΦΟΥ</option>
<option value="ΗΛΙΟΥΠΟΛΗ">ΗΛΙΟΥΠΟΛΗ</option>
<option value="ΗΛΙΣΙΑ">ΗΛΙΣΙΑ</option>
<option value="ΚΑΙΣΣΑΡΙΑΝΗ">ΚΑΙΣΣΑΡΙΑΝΗ</option>
<option value="ΚΑΛΛΙΘΕΑ">ΚΑΛΛΙΘΕΑ</option>
<option value="ΚΟΛΩΝΑΚΙ">ΚΟΛΩΝΑΚΙ</option>
<option value="ΚΟΛΩΝΑΚΙ">ΚΟΛΩΝΑΚΙ</option>
<option value="ΚΟΥΚΑΚΙ">ΚΟΥΚΑΚΙ</option>
<option value="ΚΥΨΕΛΗ">ΚΥΨΕΛΗ</option>
<option value="ΚΩΛΟΝΟΣ">ΚΩΛΟΝΟΣ</option>
<option value="ΜΕΤΑΞΟΥΡΓΕΙΟ">ΜΕΤΑΞΟΥΡΓΕΙΟ</option>
<option value="ΜΟΣΧΑΤΟ">ΜΟΣΧΑΤΟ</option>
<option value="ΜΕΤΣ">ΜΕΤΣ</option>
<option value="ΝΕΑ ΦΙΛΟΘΕΗ">ΝΕΑ ΦΙΛΟΘΕΗ</option>
<option value="ΝΕΑ ΣΜΥΡΝΗ">ΝΕΑ ΣΜΥΡΝΗ</option>
<option value="ΝΕΟΣ ΚΟΣΜΟΣ">ΝΕΟΣ ΚΟΣΜΟΣ</option>
<option value="ΝΕΑΠΟΛΗ">ΝΕΑΠΟΛΗ</option>
<option value="ΠΑΓΚΡΑΤΙ">ΠΑΓΚΡΑΤΙ</option>
<option value="ΠΑΝΟΡΜΟΥ">ΠΑΝΟΡΜΟΥ</option>
<option value="ΠΑΤΗΣΙΑ">ΠΑΤΗΣΙΑ</option>
<option value="ΠΑΛΑΙΟ ΦΑΛΗΡΟ">ΠΑΛΑΙΟ ΦΑΛΗΡΟ</option>
<option value="ΠΕΤΡΑΛΩΝΑ">ΠΕΤΡΑΛΩΝΑ</option>
<option value="ΠΛΑΚΑ">ΠΛΑΚΑ</option>
<option value="ΣΕΠΟΛΙΑ">ΣΕΠΟΛΙΑ</option>
<option value="ΤΑΥΡΟΣ">ΤΑΥΡΟΣ</option>
<option value="ΥΜΗΤΤΟ">ΥΜΗΤΤΟ</option>
</select></fieldset>
<label for="flor">Όροφος:</label> <input name="flor" type="text" class="textfield" id="flor" value="<?php echo $row['orofos']; ?>"/>
<label for="koud">Όνομα στο κουδούνι:</label> <input name="koud" type="text" class="textfield" id="koud" value="<?php echo $row['onomakoudouni']; ?>"/>
<label for="message">Σχόλια:</label> <textarea name="message" id="message" cols="45" rows="10" value="">&nbsp;</textarea>
<input type="button" id="driver" value="Συνέχεια" />
<div id="stage" style=" color:#FF6600;"></div>
</li></ul></div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" language="javascript">
$(document).ready(function() {
$("#driver").click(function(event){
$('.loadingnew').toggle();
var name= $("#name").val();
var phone= $("#phone").val();
var email= $("#email").val();
var addr= $("#addr").val();
var per= $("#per").val();
var flor= $("#flor").val();
var koud= $("#koud").val();
var message= $("#message").val();
var mobile = 1;
$("#stage").load('order.php', {"name":name,"koud":koud,"phone":phone,"message":message,"email":email,"addr":addr,"flor":flor,"per":per,"mobile":mobile} );
});
});
</script> 
<?php
   }
  }else {
	 //echo "allo group ".$group . " - " .$u;
 }
 } 

 } else {
echo "<center><img src='img/homeburger.png' width='180' height='180' alt='HomeBurger'><br><br>Το κατάστημά μας είναι κλειστό και δεν εξυπηρετεί παραγγελίες<br><br><img src='img/phone.png' width='100%' style='max-width:350px;'></center>"; 
}

//session_destroy();

?>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> 
