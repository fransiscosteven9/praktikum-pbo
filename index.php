<?php

require('./PropertyConstant.php');

use Pbo\Marketplace\Produk;


//object
$produk = new Produk(p0001,Laptop,100000,5);


//hasil
echo "produk: ". $produk->nama;
echo "<br>";
echo "harga: ". $produk->harga;
echo "<br>";
echo "stok: ". $produk->stok;
echo "<br>";
echo "pajak: ". $produk->pajak(). "%";
echo "<br>";
echo "total harga setelah pajak: ". $produk->total();