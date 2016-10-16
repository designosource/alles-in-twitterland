<?php
//Deze klasse dient voor validatie van invoervoervelden bij gebruikers
//Indien html5 validatie faalt of indien javascript uitgeschakeld is, dan is deze validatieklasse eveneens een fall-back
class Validation
{
    public function isValidEmail($p_Email)
    {
        //controleer of e-mailadres is ingevuld
        if (empty($p_Email)) {
            return "E-mailadres is niet ingevuld.";
        }
    }

    //valideer veld wachtwoord
    public function isValidPassword($p_sPassword)
    {
        if (empty($p_sPassword)) {
            return "Wachtwoord is niet ingevuld.";
        } else if (strlen($p_sPassword) < 6) {
            return "Wachtwoord te kort. Wachtwoord moet minstens 6 tekens lang zijn.";
        }
    }

}

?>