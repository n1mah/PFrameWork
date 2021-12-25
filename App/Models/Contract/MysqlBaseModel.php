<?php
namespace App\Models\Contract;
use Medoo\Medoo;
use PDOException;
use PDO;

// use catfan\Medoo;
 class MysqlBaseModel extends BaseModel{
    public function __construct($id=null)
    {
        try{
            $this->connection = new Medoo([
                'type' => 'mysql',
                'host' => $_ENV['DB_HOST'],
                'database' => $_ENV['DB_NAME'],
                'username' => $_ENV['DB_USER'],
                'password' => $_ENV['DB_PASS'],
             
                // [optional]
                'charset' => 'utf8mb4',
                'collation' => 'utf8mb4_general_ci',
                'port' => 3306,
             
                // [optional] Table prefix, all table names will be prefixed as PREFIX_table.
                'prefix' => '',
        
                // [optional] Enable logging, it is disabled by default for better performance.
                'logging' => true,
             
                // [optional]
                // Error mode
                // Error handling strategies when error is occurred.
                // PDO::ERRMODE_SILENT (default) | PDO::ERRMODE_WARNING | PDO::ERRMODE_EXCEPTION
                // Read more from https://www.php.net/manual/en/pdo.error-handling.php.
                'error' => \PDO::ERRMODE_EXCEPTION,
        
             
                // [optional] Medoo will execute those commands after connected to the database.
                'command' => [
                    'SET SQL_MODE=ANSI_QUOTES'
                ]
            ]);
        }catch(PDOException $e){
            echo "Connection Failed: " . $e->getMessage();
        }
        if(!is_null($id)){
            return $this->find($id);
        }
    }
    public function create(array $data):int{
        $this->connection->insert($this->table,$data);
        return $this->connection->id();
    }
    public function find($id):object{
        $record= $this->connection->get($this->table,'*',[$this->PrimeryKey=>$id]);
        if(is_null($record)){
            return (object)[];
        }
        foreach ($record as $column => $value) {
            $this->attributes[$column]=$value;
        }
        return $this;
    }
    public function getAll():array{
        return $this->connection->select($this->table,'*');
    }
    public function get($columns,array $where):array{
        return $this->connection->select($this->table, $columns, $where);
    }
    public function update(array $data,array $where):int{
        $result=$this->connection->update($this->table,$data,$where);
        return $result->rowCount();
    }
    public function delete(array $where):int{
        $result= $this->connection->delete($this->table,$where);
        return $result->rowCount();
    } 
    public function count(array $where):int{
        return $this->connection->count($this->table,$where);
    } 
    public function sum(string $columns,array $where):int{
        return $this->connection->sum($this->table,$columns,$where);
       
    } 
    public function getAttribute($key){
        if(!$key || !array_key_exists($key,$this->attributes)){
            return null;
        }
        return $this->attributes[$key];
    }
    public function getAttributes(){
        return $this->attributes;
    }
    public function __get($key)
    {
        if(array_key_exists($key,$this->attributes)){
            return $this->getAttribute($key);
        }
    }
    public function remove():int
    {
        if(count($this->getAttributes())!=0){
              $record_id=$this->{$this->PrimeryKey};
            return $this->delete([$this->PrimeryKey=>$record_id]);
        }
        return 0;
    }
    public function __set($key,$value)
    {
        if(array_key_exists($key,$this->attributes)){
            $this->attributes[$key]=$value;
        }
    }
    public function save():int
    {
        if(count($this->getAttributes())!=0){
            $record_id=$this->{$this->PrimeryKey};
            return $this->update($this->attributes,[$this->PrimeryKey=>$record_id]);
        }
        return 0;
    }
}