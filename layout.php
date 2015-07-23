<page backtop="0mm" backbottom="0mm" backleft="0mm" backright="0mm"> 
	<div id="fullpage">
		<div class="row">
			<div id="godfather">
				
			    <img id="avatar" src="<?= $picUrl ?>" alt="picture" height="95">
			    <br>
			    <div class="godfatherName" style="margin-top: -39px; margin-left: 5px;">
			    	<h1><?= $godFather ?></h1>
			    </div>
			    <div id="godfatherContent" style="padding-right: 210px; padding-left: 5px;">
			    	<?= $whoIsThis ?>
			    </div>
	    	
	    		<img src="img/phone.png" alt="Téléphone :"> <?= $phoneNumber ?>
	    	
	    		<img src="img/mail.png" alt="Mail :"> <?= $mail ?>
	    	
				<h1 style="margin-top: 5px; margin-bottom: 5px;"><img src="img/chat.png" alt=""> Le mot de ton parrain</h1>
				<div style="padding-right: 130px;">
					<?= $godFatherSpeech ?>
				</div>
			</div>
			<img src="img/anneaux.png" alt="" height="95" style="margin-top: 35px; margin-left: -15px;">
		</div>



		<div id="team">
				<h1 style="font-size: 50%;"><img src="img/team.png" alt=""> Ton équipe : <i><?= $teamName ?></i></h1>
				<div style="padding-top: -10px;">
					<?= $teamSpeech ?><br>
				</div>
				<div style="text-align: center;">
					<img src="<?= $teamPicUrl ?>" height="180" width="210" style="margin-top: 15px;">
				</div>
		</div>


		<div id="etu">
				<h1 style="font-size: 50%;">Plus d'infos ?</h1>
				<div style="padding-top: -10px;">
					<?= $etuSpeech ?><br>
				</div>
		</div>
		
	    
			
			

	</div>
</page>