<?php
//method untuk acak
function acak($kali){
  $panjang = 32;
  $karakter = "abcdefghijklmnopqrstuvwxyz123456789@$#";
  $string = "";
  for ($i=0; $i < $kali ; $i++) {
    for ($x=0; $x < $panjang ; $x++) { 
      $pos = rand(0, strlen($karakter)-1);
      $string .= $karakter{$pos};
    }
    $teracak[$i] = $string;
    echo $teracak[$i]."<br>";
    $string="";
  }
  return $teracak;
}

//method untuk cek
function cek($acak, $kali){
  for ($i=0; $i < $kali ; $i++) {
    for ($j=1; $j <= $kali ; $j++) {
      if ($acak[$i] == $acak[$j]) {
        $data = "Warning! data ada yang sama";
        return $data;
      } else {
        $data = "Enjoyy, data beda kok.";
        return $data;
      }
    }
  }
}

//pemanggilan
$brp = 5;
$acak = acak($brp);
$cek = cek($acak,$brp);
echo $cek;

//telah diuji di https://www.onlinegdb.com/
// 3.php by aqil gifari _ b10k3a
