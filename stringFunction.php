<?php

//menggabungkan string
var_dump(join(",", [1,2,3,4,5]));
//menggabungkan string menjadi array
var_dump(explode(" ","Dimas Dwi Susanto"));
//mengubah string ke huruf kecil
var_dump(strtolower("DIMAS DWI SUSANTO"));
//mengubah string ke huruf besar
var_dump(strtoupper("dimas dwi susanto"));
//menghapus whitespace di depan dan di belakang
var_dump(trim("       Dimas            "));
//mengambil sebagian string
var_dump(substr("Dimas dwi susanto",0,5));

?>