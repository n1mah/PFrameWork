<?php
namespace App\Models\Contract;
abstract class BaseModel implements CurdInterface{
    protected $connection;
    protected $table;
    protected $PrimeryKey='id';
    protected $pageSize=10;
    protected $attributes=[];
    protected function __construct()
    {
        
    }
   
}