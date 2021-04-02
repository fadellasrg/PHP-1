<?php

$data = [
    "id" => 1,
    "name" => "Leanne Graham",
    "username" => "Bret",
    "email" => "Sincere@april.biz",
    "address" => [
        "street" => "Kulas Light",
        "suite" => "Apt. 556",
        "city" => "Gwenborough",
        "zipcode" => "92998-3874"
    ],
    "phone" => "1-770-736-8031 x56442",
    "website" => "hildegard.org"
];

$data["name"] = "Fadella";
$data["email"] = "fadellasrg@gmail.com";
$data["hobby"] = "Swimming";

// foreach($data as $key){
//     for($i=0; $i<count($key); $i++){
//         echo $key."<br/>";
//     }
// }

$street = $data["address"]["street"];
$city = $data["address"]["city"];

echo $street."<br>".$city;

// [
//     "address" => [
//         "street" => $street,
//         "city" => $city
//     ]
// ] = $data;
// echo $street;

?>