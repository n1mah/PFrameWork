<?php

use App\Models\User;

include "bootstrap/init.php";

// $router=new \App\Core\Routing\Router();
// $router->run();


// $userData=[
//     'user'=>'nima',
//     'name'=>'نیما حیدری',
//     'phone'=>'+989038113433'
// ];
// $user = new User();
// for ($i=0; $i <10 ; $i++) { 
//     $r=$user->create($userData);
// }
// var_dump($r);

// $users=new User();
// var_dump($users->find(3));

// $users=new User();
// var_dump($users->getAll());

// $users=new User();
// var_dump($users->get(["id","name"],["id[<>]" => [20, 25]]));

// $users=new User();
// var_dump($users->get('*',["id[<>]" => [20, 25]]));

// $db->insert("users", [
// 	"user" => "a",
// 	"name" => "a",
// 	"phone" => 'a'
// ]);


// $user=new User();
// $r=$user->update(["name"=>"علی"],["id[<>]"=>[21,25]]);
// var_dump($r);

// $users=new User();
// var_dump($users->get('*',["id[<>]" => [20, 25]]));

// $user=new User();
// $r=$user->delete(["id[>]"=>40]);
// var_dump($r);

// $users=new User();
// var_dump($users->get('*',["id[<>]" => [7, 35]]));


// $users=new User();
// var_dump($users->count(["id[<>]" => [7, 37]]));

// $users=new User();
// var_dump($users->sum("id",["id[<>]" => [7, 37]]));

// $user=new User();
// $user1=$user->find(35);
// var_dump($user1);

// $user=new User(35);
// var_dump($user->getAttribute('name'));
// var_dump($user->getAttributes());

// $user=new User(35);
// var_dump($user->phone);



// $user=new User(35);
// var_dump($user->phone);

// $user=new User(35);
// $user->phone="+989109008307";
// $user->save();

// $user=new User(35);
// var_dump($user->phone);





// $user=new User(3612);
// var_dump($user->getAttributes());

// $user=new User(391);
// $user->name="amir ali arabi";
// $user->save();

// $user=new User(36);
// var_dump($user->getAttributes());


$user=new User(39);
var_dump($user->getAttributes());

$user=new User(39);
$user->remove();

$user=new User(39);
var_dump($user->getAttributes());