<?php
include_once("Db.class.php");

class Content
{
    //membervariabelen
    private $m_sTitel;
    private $m_sInhoud;

    //getters en setters

    public function getMSTitel()
    {
        return $this->m_sTitel;
    }

    public function setMSTitel($m_sTitel)
    {
        $this->m_sTitel = $m_sTitel;
    }

    public function getMSInhoud()
    {
        return $this->m_sInhoud;
    }

    public function setMSInhoud($m_sInhoud)
    {
        $this->m_sInhoud = $m_sInhoud;
    }


    //inhoud toevoegen
    public function addContent(){
        //connectie db
        $conn = Db::getInstance();
        //statement voorbereiden
        $statement = $conn->prepare("INSERT INTO content (title, body) VALUES (:title, :body)");
        //values binden
        $statement->bindValue(":title", $this->m_sTitel, PDO::PARAM_STR);
        $statement->bindValue(":body", $this->m_sInhoud, PDO::PARAM_STR);
        //statement uitvoeren
        if (!$statement->execute()) {
            throw new Exception("De pagina kon niet worden toegevoegd door een probleem met de database.");
        }
    }

}
