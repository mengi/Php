<?php

Class databaseConfig extends PDO {

	protected $dbConfig = array();

    protected function baglantiOlustur() {
        $this->dbConfig['host'] = 'localhost';
        $this->dbConfig['username'] = 'root';
        $this->dbConfig['password'] = '';
        $this->dbConfig['dbname'] = 'test';
    }

}