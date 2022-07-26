<?php
include_once __DIR__.'/db.php';

class QUERY1 extends DB {
    public $sql;
    private $rs;
    private $data;
    public $lastpk_id = 0;

    public function insert($table,$form = [])
    {
        $columns =implode(",",array_keys($form));
        $values =implode(",",array_values($form));
        $sql = "INSERT INTO $table $columns VALUES $values ;";
        $this->sql = $sql;
        return $this;
    }
    public function select($column='*')
    {
        $sql = " SELECT $column FROM ";
        $this->sql=$sql;
        return $this; 
    }
    public function table($table)
    {
        $this->sql.=$table;
        return $this;
    }

    public function where($column='',$operator='=',$value=''){
	
        $count = func_num_args();
        if($count == 2){
            $value = $operator;
            $column = $column;
            $this->sql = $this->sql. " WHERE $column = '$value'";
        }
        
        if($count == 3){
            
            $operator = $operator;
            $value = $value;
            $column = $column;
            
            $this->sql = $this->sql. " WHERE $column $operator '$value'";
        }
        if($count==1 and is_array($column)){
            $condition_arr = $column;
            
            $str = '';
            foreach($condition_arr as $key => $value){
                $str = $str . " {$key} = '{$value}' AND"; 
            }
            $str = substr($str,0,-4);
            $this->sql = $this->sql. " WHERE ".$str ;
        }
        
        return $this;
        
    }


    public function getId()
    {
        return $this->lastpk_id;
    }
    # update function 
    public function update($table ,$formdata=[])
    {
        $str = "UPDATE `$table` SET ";
        foreach($formdata as $column =>$value)
        {
            $str.= " `$column` = $value,;"; 
        }
        $str = substr($str,0,-2);
        $this->sql.=$str;
        return $this;
    }
    #delete function 
    public function delete($table){
        $str = "DELETE FROM $table ;";
        $this->sql.= $str;
        return $this;
    }
    #truncate 
    public function trauncate($tablename){
	
        $this->sql = "TRUNCATE TABLE `{$tablename}` ";
        return $this;
    }
    
    #to Array 
    public function toArray()
    {
        return json_decode(($this->data),true);
    }

    # all records  
    public function allRecords()
    {
        if($this->runQuery())
        {
            $data = array();
            while($row = mysqli_fetch_object($this->rs))
            {
                $data[]= $row;
            }
            $this->data= $data;
            return $data;
        }
        else 
        {
            return false;
        }

    }
    #commit 
    public function commit()
    {
        if($this->runQuery())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    #first row or records 
    public function first(){
        if($this->runQuery()){
            $data = array();
            while($row = mysqli_fetch_object($this->rs)){
                $data[] = $row;
           }
           $this->data = $data;
           return $data;
           echo $data->name;
          
        }
        return false;
        
    }
    private function runQuery()
    {
        $result_set = mysqli_query($this->getConnection(),$this->sql) or die(mysqli_error($this->getConnection()));
        if(is_object($result_set))
        {
            if(mysqli_fetch_row($result_set)>0)
            {
                $this->rs = $result_set;
                return true;
            }
            else
            {
                return false;
            }
        }
        else
        {
            $count = mysqli_affect_rows($this->getConnection());
            if($count>0)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    }

    public function query()
    {
        return $this->sql;
    }
}
$query = new QUERY1();
// echo $query->select('emp')->where(['id'=>1001,'email'=>'satyam'])->query();
//echo PHP_EOL;
//echo $query->update('emp',['id'=>1001,'name'=>'satyam'])->where('id',1001)->query();
//echo $query->trauncate('emp')->query();

?>