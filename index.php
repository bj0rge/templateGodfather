<?php
	// If you want to save the pdf into a specific folder, turn $printfile to true
	$printfile = false;


	// Link to the godfather profile pic in the ent
	$picUrl = "https://local-sig.utt.fr/Pub/trombi/individu/36263.jpg";

	// Name of the godfather
	$godFather = "Jean-Michel Crapaud";
	// Generic message written before the coordinates
	$whoIsThis = <<<YOLO
Cette personne, c'est ton <strong>parrain</strong>. Son rôle est de te guider durant toute l'intégration et au delà. Il est conseillé de prendre contact avec lui rapidement :)
YOLO;
	$phoneNumber = "06.75.14.33.40";
	$mail = "jm.crapaud@utt.fr";

	// A small message (< 500 chars) the godfather write to his godson
	$godFatherSpeech = <<<HASHTAGCREPES
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed leo nisi. Donec mattis magna eget magna porta, a tincidunt leo imperdiet. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque sapien neque, lobortis ac est nec, sodales auctor ipsum. Nullam tincidunt rutrum sodales. Suspendisse potenti. In euismod consectetur iaculis. Curabitur gravida condimentum aliquet. Vestibulum sodales lacus sit amet imperdiet sodales. Donec ac scelerisque metus. Maecenas eleifend metus
HASHTAGCREPES;

	// The team where the student will be
	$teamName = "Les dindes de l'UNG";
	$teamSpeech = <<<SWAGGG
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus consectetur, nisl facilisis iaculis mollis, magna metus faucibus odio, vitae rutrum sapien elit et nibh. Nam quam erat, luctus ut tincidunt ac, lobortis eu erat. Donec luctus placerat nibh, non pharetra nunc volutpat nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non tristique justo. Curabitur dictum ligula mauris, vel elementum enim dapibus ac. Donec non sem vel nisi convallis posuere ut vitae tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis euismod felis in massa rutrum sagittis. Quisque ac efficitur lacus, vitae tempus risus. Aliquam erat volutpat posuere.
SWAGGG;
	$teamPicUrl = "http://placehold.it/210x180.png&text=Photo%20dequipe";


	// Student infos
	$studentFirstName = "Thimothée";
	$studentLastName = "Toury";
	// Temporary ids
	$login = "jambon2000";
	$pwd = "lafaluchesaykhoule";

	$etuSpeech = <<<YOLO
$studentFirstName $studentLastName, voici ton compte temporaire pour accéder au site étudiant sur <a href="http://etu.utt.fr">etu.utt.fr</a> ainsi qu'au site de l'intégration sur <a href="http://integration.utt.fr">integration.utt.fr</a> :<br>
	- Identifiant : <strong>$login</strong><br>
	- Mot de passe : <strong>$pwd</strong>
YOLO;


	// DO NOT TOUCH
	$print = $printfile ? 'F' : '';

    ob_start();
?>
<style type="text/css"> 
<?php include "style.css"; ?>
</style> 

<?php include "layout.php"; ?>

<?php 
	$content = ob_get_clean();

	

    require_once(dirname(__FILE__).'/html2pdf/html2pdf.class.php');


    try
	{
	    $html2pdf = new HTML2PDF('L','A4','fr', false, 'ISO-8859-15', array(0, 0, 0, 0));
	    $html2pdf->pdf->AddFont('augusta', '', 'augusta.php');
	    $html2pdf->pdf->SetDisplayMode('fullpage');
	    $html2pdf->writeHTML($content);
	    $html2pdf->Output('files/integration_'.$login.'.pdf', $print);
	    die();
	}
	catch(HTML2PDF_exception $e)
	{
	    die($e.''. __LINE__ );
	}
?>