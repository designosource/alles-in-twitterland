<?php
include_once("Db.class.php");

class User
{
    //membervariabelen
    private $m_sEmail;
    private $m_sPassword;

    //getters en setters

    public function getMSEmail()
    {
        return $this->m_sEmail;
    }

    public function setMSEmail($m_sEmail)
    {
        $this->m_sEmail = $m_sEmail;
    }

    public function getMSPassword()
    {
        return $this->m_sPassword;
    }

    public function setMSWachtwoord($m_sPassword)
    {
        $this->m_sPassword = $m_sPassword;
    }

    //functies
    public function Register()
    {
        //connectie db
        $conn = Db::getInstance();
        //statement voorbereiden
        $statement = $conn->prepare("INSERT INTO users (email, password) VALUES (:email, :password)");
        //values binden
        $statement->bindValue(":email", $this->m_sEmail, PDO::PARAM_STR);
        $statement->bindValue(":password", $this->m_sPassword, PDO::PARAM_STR);
        //statement uitvoeren
        if (!$statement->execute()) {
            throw new Exception(" Je account is niet geregistreerd. Mogelijk bestaat er al een account met deze gegevens.");
        }
    }


    //kan er ingelogd worden
    public function canLogin()
    {
        if (!empty($this->m_sEmail) && !empty($this->m_sPassword)) {
            //database connectie
            $conn = Db::getInstance();
            // gebruiker zoeken die wil inloggen adhv e-mailadres
            $statement = $conn->prepare("SELECT * FROM users WHERE email = :email");
            // bind value to parameter :email
            $statement->bindValue(":email", $this->m_sEmail, PDO::PARAM_STR);
            //execute statement
            $statement->execute();
            // als we 1 rij terug krijgen = user bestaat
            if ($statement->rowCount() == 1) {
                // fetch row van resultaat, return array met kolomnamen als index
                $userRow = $statement->fetch(PDO::FETCH_ASSOC);
                $hash = $userRow['password'];
                // check dat het ingegeven wachtwoord van de gebruiker overeenkomt met het wachtwoord in de databank
                if (password_verify($this->m_sPassword, $hash)) {
                    //basis profielgegevens ophalen uit resultaatrij en toevoegen aan de sessie login
                    //meeste van deze gegevens komen op de meeste pagina's terug (foto, etc) zo niet steeds moeten querie halen performance
                    $_SESSION['login']['loggedin'] = 1;
                    //alles okido
                    return true;
                } else {
                    throw new Exception("het ingevoerde wachtwoord komt niet overeen met het opgegeven e-mailadres.");
                }
            } else if ($statement->rowCount() == 0) {
                // als er geen email in de database overeenkomt(0 rijen), met het ingevulde e-mail adress
                // (het veld e-mail is in onze database UNIQUE dus we kunnen enkel 1 row of geen row terug krijgen)
                throw new Exception("er is geen account geregistreerd met dit e-mailadres.");
            }
        }
    }

}

?>