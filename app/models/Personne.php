<?php
class Personne extends Modal {
public function inscription($table=[]){
   if ($this->Verifyiels($table)) {
    $this->e(extract($_POST));
    $insertion=$this->insertion_update_simples("INSERT INTO personne (firstName,lastName,telephone,email)
    VALUES (:firstName,:lastName,:telephone,:email)",
    [
      ":firstName"=>$firstName,
      ":lastName"=>$lastName,
      ":telephone"=>$telephone,
      ":email"=>$email
    ]);
    if($insertion==true){
      $this->set_flash("Vous etes inscrit avec success","success");
    }
   //  echo "$nom <br> $prenom <br> $contact <br> $email <br>";
   }
}
}