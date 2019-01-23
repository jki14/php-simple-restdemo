<?php
    class PsrMysql{
        private $mysqli=false;
        public function __construct(){
            $config = json_decode(file_get_contents('../../config.json'));
            $this->__construct($config->datasource->host, $config->datasource->username, $config->datasource->passwd, $config->datasource->dbname, $config->datasource->port, $config->datasource->charset);
        }
        public function __construct($host, $username, $passwd, $dbname, $port, $charset){
            $this->mysqli = @new mysqli($host, $username, $passwd, $dbname, $port);
            if($this->mysqli->connect_errno!==0){
                //TODO
            }
            if($this->mysqli->set_charset($charset)!==true){
                //TODO
            }
        }
        public function start_transaction(){
            if($this->mysqli->autocommit(false)!==true){
                //TODO
            }
        }
        public function commit(){
            if($this->mysqli->commit()!==true){
                //TODO
            }
            if($this->mysqli->autocommit(true)!==true){
                //TODO
            }
        }
        public function rollback(){
            if($this->mysqli->rollback()!==true){
                //TODO
            }
            if($this->mysqli->autocommit(true)!==true){
                //TODO
            }
        }
    }
