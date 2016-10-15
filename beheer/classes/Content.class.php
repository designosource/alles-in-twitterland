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
    public function addContent()
    {
        //connectie db
        $conn = Db::getInstance();
        //statement voorbereiden
        $statement = $conn->prepare("INSERT INTO content (title, body) VALUES (:titel, :inhoud)");
        //values binden
        $statement->bindValue(":titel", $this->m_sTitel, PDO::PARAM_STR);
        $statement->bindValue(":inhoud", $this->m_sInhoud, PDO::PARAM_STR);
        //statement uitvoeren
        if (!$statement->execute()) {
            throw new Exception("de pagina kon niet worden toegevoegd door een technisch probleem.");
        } else {
            return true;
        }
    }


    //inhoud ophalen
    public function getContent()
    {
        $conn = Db::getInstance();
        $statement = $conn->prepare("SELECT * FROM content ORDER BY created DESC");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }


}
