<?php
class Db {
    private static $conn;
    public static function getInstance() {
        if( is_null(self::$conn)) {
            try{
                self::$conn = new PDO("mysql:host=mariadb-138.wc1.ord1.stabletransit.com; dbname=1019214_twitterland", "1019214_country", "dbLogTweet178!");
            }catch(Exception $e){
                throw new Exception("connectie met server mislukt. Onze excuses voor het ongemak. Probeer later opnieuw.");
            }
        }
        return self::$conn;
    }
}