<?php
include_once("Db.class.php");

class Content
{
    //membervariabelen
    private $m_iId;
    private $m_sTitel;
    private $m_sInhoud;

    //getters en setters

    public function getMSId()
    {
        return $this->m_iId;
    }

    public function setMSId($m_iId)
    {
        $this->m_iId = $m_iId;
    }

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
            throw new Exception("de pagina kan niet worden toegevoegd door een technisch probleem.");
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

    //content deleten
    public function deleteContent()
    {
        $conn = Db::getInstance();
        $statement = $conn->prepare("DELETE FROM content WHERE content_id = :contentid");
        $statement->bindValue(":contentid", $this->m_iId, PDO::PARAM_INT);
        if (!$statement->execute()) {
            throw new Exception("de pagina kan niet verwijderd worden door een technisch probleem.");
        } else {
            return true;
        }
    }

    //edit content
    public function editContent()
    {
        $conn = Db::getInstance();
        $statement = $conn->prepare("UPDATE content SET title = :title, body = :body WHERE content_id = :contentid");
        $statement->bindValue(":contentid", $this->m_iId, PDO::PARAM_INT);
        $statement->bindValue(":title", $this->m_sTitel, PDO::PARAM_INT);
        $statement->bindValue(":body", $this->m_sInhoud, PDO::PARAM_INT);
        if (!$statement->execute()) {
            throw new Exception("de pagina kan niet gewijzigd worden door een technisch probleem.");
        } else {
            return true;
        }
    }

    //get selected content
    public function getSelectedContent()
    {
        $conn = Db::getInstance();
        $statement = $conn->prepare("SELECT * FROM content WHERE content_id = :contentid");
        $statement->bindValue(":contentid", $this->m_iId, PDO::PARAM_INT);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }


}
