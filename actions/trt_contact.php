<?php

	include('../connexionBdd/connexion_creedsbusiness.php');

	if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message']))
	{	
		$name = htmlentities($_POST['name']);
		$email = htmlentities($_POST['email']);		
		$subject = htmlentities($_POST['subject']);		
		$message = htmlentities($_POST['message']);
		
		
		
		$reponse = $bdd->query('SELECT * FROM contact WHERE name = "'.$name.'" AND email = "'.$email.'" AND subject = "'.$subject.'"');
		$donnees = $reponse->fetch();
		$nombreEnregistrements = $reponse->rowCount();
		
		if($nombreEnregistrements != 0)
		{
			echo '<body onLoad="alert(\'Ce Contact existe déjà\')">';
		}
		elseif($name == "" || $email == "" || $message == "")
		{
			echo '<body onLoad="alert(\'Les champs NOM, E-MAIL, MESSAGE doivent être renseignés !\')">';
		}
		else
		{
			// insert into db
			$insertcontact = $bdd->prepare('INSERT INTO contact(name, 
																email, 
																subject, 
																message)
																
														VALUES(:name, 
																:email, 
																:subject, 
																:message)');
																
								$insertcontact->execute(array(
															"name"=>$_POST['name'], 
															"email"=>$_POST['email'], 
															"subject"=>$_POST['subject'], 
															"message"=>$_POST['message']));

			
			// Envoi de MAIL
			$header="MIME-Version: 1.0\r\n";
			$header.='From:"CREEDS-BUSINESS GROUP"<rryvonsita@gmail.com>'."\n";
			$header.='Content-Type:text/html; charset="utf-8"'."\n";
			$header.='Content-Transfer-Encoding: 8bit';
			
			$message='
			<html>
				<body>
					<div align="center">
						<table style="margin:auto; margin-top:5px;">
							<tr>
								<td style="font-family:Calibri; font-size:1.2em; font-weight:bold; font-style:normal; color:#000; text-align:center;" align="left">
									CREEDS-BUSINESS GROUP<br />
									Centre-ville<br />
									POINTE-NOIRE<br />
								</td>
							</tr>	
							<tr style="height:15px;"></tr>
							<tr style="background-color:yellow;">
								<td colspan="5" align="center">
									<span style="font-family:Calibri; font-size:1.2em; font-weight:bold; font-style:normal; color:#000; text-align:center;">MESSAGE DU CONTACT EN LIGNE</span><br />
								</td>
							</tr>
							<tr style="background-color:#eee;">
								<td colspan="5" align="left">
									<p style="margin-left:3%; margin-right:3%; font-family:Calibri; font-size:1.0em; font-weight:normal; font-style:normal; color:#000; text-align:left;">									
									<span style="font-size:1.0em; text-align:left;">Cher(e) ami(e) du <b>Service de Messagerie de CREEDS-BUSINESS GROUP 4ème édition</b>,<br /><br />
									Vous venez de recevoir un message d\'un CONTACT EN LIGNE nommé <b>'.$_POST['name'].'</b> et dont l\'adresse E-mail 
									est <b>'.$_POST['email'].'</b>.<br /><br />
									</p>
									<p style="font-family:Calibri; font-size:1.1em; font-weight:bold; font-style:normal; color:#000; text-align:center;">CONTENU DU MESSAGE DU CONTACT EN LIGNE</p>
									<p style="font-family:Calibri; font-size:1.0em; font-weight:normal; font-style:normal; color:#000; text-align:left; margin-left:3%; margin-left:3%;">									
									<b>Contenu du message : </b><br />'.$_POST['message'].'<br />
									</p>
									<br /><br />
								</td>
							</tr>
							<tr style="height:1px;"></tr>
							<tr>
								<td colspan="5" align="center"><hr align="center" width="100%" color="#000"></td>
							</tr>
							<tr style="height:1px;"></tr>
							<tr style="background-color:#eee;">			                    
								<td style="font-family:Calibri; font-size:0.8em; font-weight:bold; font-style:normal; color:#000; text-align:left;" align="left">
                                    CREEDS-BUSINESS GROUP<br />
									Centre-ville, POINTE-NOIRE<br />
									+242 05 578 26 03<br />
									info.festivalpointenoire@gmail.com<br />
									bililiyaafrica@gmail.com<br />									
								</td>
								<td style="width:5px;"></td>
								<td style="font-family:Calibri; font-size:0.8em; font-weight:bold; font-style:normal; color:#000; text-align:center;" align="center">
                                    CREEDS-BUSINESS GROUP<br />
									Centre-ville, POINTE-NOIRE<br />
									+242 05 578 26 03<br />
									info.festivalpointenoire@gmail.com<br />
									bililiyaafrica@gmail.com<br />
								</td>
								<td style="width:5px;"></td>
								<td style="font-family:Calibri; font-size:0.8em; font-weight:bold; font-style:normal; color:#000; text-align:right;" align="right">
									CREEDS-BUSINESS GROUP<br />
									Centre-ville, POINTE-NOIRE<br />
									+242 05 578 26 03<br />
									info.festivalpointenoire@gmail.com<br />
									bililiyaafrica@gmail.com<br />
								</td>
							</tr>
							<tr style="height:5px;"></tr>
							<tr>			                    
								<td style="font-family:Calibri; font-size:0.9em; font-weight:bold; font-style:normal; color:#000; text-align:left;" align="left">						
									www.ficomp.cg<br />
								</td>
								<td style="width:5px;"></td>
								<td align="center"></td>
								<td style="width:5px;"></td>
								<td style="font-family:Calibri; font-size:0.9em; font-weight:bold; font-style:normal; color:#000; text-align:right;" align="right">						
									contact@ficomp.cg<br />
								</td>
							</tr>
						</table>
						
					</div>
				</body>
			</html>			
			';
			
			$email_contact = 'rryvonsita@gmail.com';
			mail($email_contact, "Message du Contact En Ligne", $message, $header);
			
			echo '<body onLoad="alert(\'Votre message a été envoyé. Merci !\')">';
			echo '<meta http-equiv="refresh" content="0;URL=contact.php">';
			
		}

		header('location: ../contact.php');
	}
