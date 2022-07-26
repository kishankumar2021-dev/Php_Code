<?php

class Database{

    private $db_host = "localhost";
    private $db_user = "root";
    private $db_pass = "";
    private $db_name = "testing";

    private $mysqli ="";
    private $result = array();
    private $conn = false;

    public function __construct(){
        if(!$this->conn){
        $this->mysqli = new mysqli ($this->db_host,$this->db_user,$this->db_pass,$this->db_name);
          $this->conn = true;
        if($this->mysqli->connect_error){
            array_push($this->result,$this->mysqli->connect_error);
            return true;
        }else{
            return false;
        }                
      }        
    }
    public function insert($table,$params=array()){
        if($this->tableExists($table)){
          
            $table_columns = implode(',', array_keys($params));
            $table_value = implode("','", $params);
            $sql ="insert into $table ($table_columns)values( '$table_value')";
            if($this->mysqli->query($sql)){
                array_push($this->result,$this->mysqli->insert_id);
                return true;
            }else{
                array_push($this->result,$this->mysqli->error);
                return false;
            }
        }else{            
        }
    }
    public function update($table,$params=array(),$where = null){
        if($this->tableExists($table)){

            $args = array();

            foreach($params as $key =>$value){
                $args[] = "$key = '$value'";
            }


            $sql = "UPDATE $table() SET ".implode(',',$args);

            if($where != null){
                $sql .= "WHERE $where";

              
            }
            if($this->mysqli->query($sql)){
                array_push($this->result, $this->mysqli->affected_rows);
                return true;
            }
        }else{
            array_push($this->result, $this->mysqli->error);
            return false;
        }
       
    }
    private function tableExists($table){
        $sql = "show tables from $this->db_name like '$table'";
        $tableInDb = $this->mysqli->query($sql);
        if($tableInDb){
            if($tableInDb->num_rows == 1){
                return true;
            }else{
                array_push($this->result, $table."Does not Exits In database");
                return false;
            }
        }
    }
    public function getResult(){
        $val = $this->result;
        $this->result = array();
        return $val;
    }
    //close connection
    public function __destruct(){
        if($this->conn){
            if($this->mysqli->close()){
                $this->conn = false;
            }
        }else{
            return false;
        }
    }
}

?>