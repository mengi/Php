<?php
require 'configs.php';
class database extends databaseConfig{
    protected $baglan;/* $db = new PDO("mysql:dbname=$dbname;host=$dbhost", $dbname, "" ); 
                       * Örnek kullanım $db->query(....);
                       * Yukarıda bulunan $db public function içindeki $this->baglan 'la aynı şeydir.
                       * Örnek kullanım $thiş->baglan->query(....);  
                      */
    
    public function __construct() {
        parent::baglantiOlustur();
        
        try {
            $dsn = 'mysql:host=' . $this->dbConfig['host'] . ';dbname=' . $this->dbConfig['dbname'];
            $this->baglan = new PDO($dsn, $this->dbConfig['username'], $this->dbConfig['password']);
            $this->baglan->query("SET NAMES utf8");
            $this->baglan->query("SET CHARACTER SET utf8");
            $this->baglan->query("SET COLLATION_CONNECTION = 'utf8_general_ci");
            
        } catch (Exception $hata) {
            $mesaj_ver = "Baglanti Saglanamadı.".$hata->getMessage();
            return $mesaj_ver;
        }
        
    }
    
    public function select($tabloadi){
        $sql_sorgu = "SELECT * FROM ".$tabloadi;
        $select = $this->baglan->query($sql_sorgu);
        $sonuc = $select->fetchAll(PDO::FETCH_ASSOC);
        return $sonuc;
    }
    
    public function where($tabloadi, $durum){
        $result = "SELECT * FROM ".$tabloadi." WHERE user_id =".$durum;
        $where = $this->baglan->query($result);
        $sonuc = $where->fetchAll(PDO::FETCH_ASSOC);
        return $sonuc;
    }
    
    public function insert($tableName, $data){
        $fieldKeys = implode(",", array_keys($data));
        $fieldValues = ":" . implode(", :", array_keys($data));

        $sql = "INSERT INTO $tableName($fieldKeys) VALUES($fieldValues)";
        $sth = $this->baglan->prepare($sql);
        foreach ($data as $key => $value) {
            $sth->bindValue(":$key", $value);
        }
        return $sth->execute();
    }
    
    public function update($table, $id, $array) {
        $columns = array_keys($array);
	$values = array_values($array);
	$sqlString = "";
	for( $i = 0; $i < count($columns) ; $i++ ){
		if($i == count($columns) - 1){
			$sqlString .= $columns[$i]." = '".$values[$i]."' ";
		}else{
			$sqlString .= $columns[$i]." = '".$values[$i]."', ";
		}
	}
	$sql = "UPDATE ".$table." SET ".$sqlString." WHERE user_id=" . $id;

	$update = $this->baglan->query($sql);

        if ($update) {
            return true;
        } else {
            return false;
        }
    }
}
