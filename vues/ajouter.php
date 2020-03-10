
        <?php
            $serveur = "localhost";
            $dbname = "BartenderLife";
            $user = "root";
            $pass = "";
            
            $nom = $_POST["nom"];
            $prenom = $_POST["prenom"];
            $adresse = $_POST["adresse"];
            $ville = $_POST["ville"];
            $codePostal = $_POST["postal"];
            $pays = $_POST["pays"];
            $mail = $_POST["email"];
            $mdp = $_POST["password"];
            
            try{
                //On se connecte à la BDD
                $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
                //On insère les données reçues
                $sth = $dbco->prepare("
                    INSERT INTO Clients(nom, prenom, adresse, ville, codePostal, pays, mail, mdp)
                    VALUES(:nom, :prenom, :adresse, :ville, :codePostal, :pays, :mail, :mdp)");
                $sth->bindParam(':nom',$nom);
                $sth->bindParam(':prenom',$prenom);
                $sth->bindParam(':adresse',$adresse);
                $sth->bindParam(':ville',$ville);
                $sth->bindParam(':codePostal',$codePostal);
                $sth->bindParam(':pays',$pays);
                $sth->bindParam(':mail',$mail);
                $sth->bindParam(':mdp',$mdp);
                $sth->execute();
                
                //On renvoie l'utilisateur vers la page de remerciement
                header("Location:mrc.html");
            }
            catch(PDOException $e){
                echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
            }
        ?>

