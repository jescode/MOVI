<?php
//include_once 'includes/dbh.inc.php';
//include_once 'includes/picture.inc.php';
?>
<!--<div class='profilansicht'>-->

<!--<div class='hintergrund-bild'>-->


<h1 style='font-family: Raleway; font-weight:bold; color:black; padding: 50px 0 0 400px; margin:0em;'> Dein Profil </h1>

<!--<div class='user-container'>-->
<div>
<?php
$pic=profilepic($_SESSION['u_id'],$conn);
$username=$_SESSION['u_uid'];
$firstname=$_SESSION['u_first'];
$lastname=$_SESSION['u_last'];
$email=$_SESSION['u_email'];
echo"<div class='img-responsive'> <img class='zoom'  src= $pic></div>";
echo"<p style='color: black; font-weight:bold; margin:3em  0 0 11em; padding: 0 2.5em 0 2.5em;'> Benutzername: ".$username."</p>";
echo"<p style='color: black; font-weight:bold; margin:1em  0 0 11em; padding: 0 2.5em 0 2.5em;'> Name: ".$lastname."</p>";
echo"<p style='color: black; font-weight:bold; margin:1em  0 0 11em; padding: 0 2.5em 0 2.5em;'> Vorname: ".$firstname."</p>";
echo"<p style='color: black; font-weight:bold; margin:1em  0 0 11em; padding: 0 2.5em 0 2.5em;'> E-mail: ".$email."</p>";
?>
</div>

<div>
<?php
		echo "<form action='includes/profilepicupload.inc.php' method='POST' enctype='multipart/form-data' style='margin: 120px 0 0 0;'>
		
		<p style='font-family:Raleway; margin:0 0 10px 0; padding:13px 0 0 0;'>Wähle ein neues Profilbild aus <input type='file' name='file'> </p>
		<button type='submit' name='submit'style='border-radius: 8px; padding:0 4px 0 4px; margin: 0 0 0 0;'> 📷 hochladen </button>
		</form>";

		echo "<form action='includes/deleteprofile.inc.php' method='POST'>
		<button type='submit' name='submit' style='border-radius: 8px; padding:0 4px 0 4px; margin: 3px 0 0 0; '>🗑️ löschen </button>
	</form>";
		?>
	</div>

	<div>
	<p>Video upload</p>
	<form action='includes/videoupload.inc.php' method='POST' enctype='multipart/form-data' style='margin: 120px 0 0 0;'>
  	<input type="file" name="pic" accept="image/*">
	<button type='submit' name='submit'	style='border-radius: 8px; padding:0 4px 0 4px; margin: 0 0 0 0;'> 📷 hochladen </button>
	</form>
	</div>
	
 <!--</div>-->


