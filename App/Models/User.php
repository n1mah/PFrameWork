<?php
namespace App\Models;
use App\Models\Contract\MysqlBaseModel;
class User extends MysqlBaseModel{
    protected $table = 'users';

}