<?php  
//currency idr
function buatrp($angka)
{
 $jadi = "Rp " . number_format($angka,2,',','.');
 return $jadi
}
?>
