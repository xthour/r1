<?php

 $login = $_POST["login"];
 $mdp = $_POST["password"];

 $dom = new DomDocument();
 $dom->load('db.xml');
 $xpath = new DOMXPath($dom);



 //$query = '//address[@surname='Dawes']';
 $query ='//user[login="'.$login.'"]/password';
 $entries = $xpath->query($query);
 
/* foreach($entries as $result){
                echo $result->textContent;
        }*/
echo $entries->textContent;
if(strcmp($entries->textContent,$mdp))
{
	echo "authentification reussi";
}else
{
echo "authentification erreur";
}
?>



