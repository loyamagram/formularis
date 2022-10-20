<?php 

// CREAREM UNA VARIABLE PER CADA CAMP QUE TENIM AL FORMULARI
$nom = $_POST['nom']; 
$edad = $_POST['edad'];
$pais = $_POST['pais'];
$pais_telefono = $_POST['pais_telefono'];
$telefono = $_POST['telefono'];
$dni = $_POST['dni'];
$correu = $_POST['correu'];
$Allergies_o_problemes_de_salut = $_POST['Allergies_o_problemes_de_salut'];
$batchiller = $_POST['batchiller'];
$menjar = $POST['menjar'];
$Gust_musical_preferit = $POST['Gust_musical_preferit'];


// SI VOLEM ENVIAR UN MISSATGE
$para = 'tonivivesbalaguer@gmail.com'; //a qui enviam missatge
$asunto = 'FormulariX'; 
$missatge='En/Na'.$nom.'de'.$edad.'anys, provenent de'.$pais.'amb el telefon'.$telefon.'i dni'.$dni.'t&#233 les seguents al&#183l&#232rgies o problemes de salut'.$Allergies_o_problemes_de_salut.
mail($para, $asunto, $missatge); // enviam correu

//SI VOLEM MOSTRAR LES DADES PER PANTALLA

echo "EL missatge enviat per " . $nom ." al correu ". $para." amb l'assumpte ".$asunto." s'ha enviat correctament.";

?> 