if(isset($_POST['formulaire']))
{
    $mail = $_POST['Email']
    if(eregi("^([a-zA-Z0-9]+)@([a-zA-Z0-9]+).{2,4}$",$mail))
   {
     echo  "ok<br>";
   }
 else
 {
   if(eregi("^([a-zA-Z0-9]+)([_\.-]+)([a-zA-Z0-9]+){1,}@([a-zA-Z0-9]+).([a-zA-Z]+){2,4}$",$mail))
  {
   echo "ok<br>";
  }
else
  echo "erreur<br>";
 }
}
