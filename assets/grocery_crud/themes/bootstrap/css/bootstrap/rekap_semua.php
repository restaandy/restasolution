<?php  
require_once './libraries/dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf = new Dompdf();
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo "Laporan_snack_".$rolevalue."_".$dari."_".$sampai; ?></title>
	<style> 
    @media print { 
        div#break { 
            display: block; 
            break-before: always; 
            page-break-before: always; 
        } 
        .footer{ 
            position: absolute; 
        } 
    } 
    .divsignature{ 
        /*outline: 2px dashed black;*/ 
        background-repeat: no-repeat; 
        background-size: 370% 370%; 
        width: 100px; 
        height: 100px;  
        margin: auto; 
    } 
     
    .footer{ 
        right: 0; 
        bottom: 0; 
        left: 0; 
        padding: 1rem; 
        background-color: #efefef; 
        text-align: center; 
        background-size:cover; 
        background-image:url("assets/images/dium/footer-bjtg.jpg"); 
    } 
     
    .dashed { 
        border-bottom: 1px dashed; 
    } 
    th{font-size: 13px;}
    td{font-size: 11px;}
</style> 
</head>
<body>
    <div style="margin-top: 5px;  margin-left: 10px;"> 
        <img src="assets/images/dium/logo-bjtg.jpg" alt="logo_bjtg" width="15%" /> 
        <div align="center"> 
            <h4> 
                Laporan Permintaan Snack<br /> 
                <u> 
                    PT. BANK PEMBANGUNAN DAERAH JAWA TENGAH 
                </u> 
            </h4> 
        </div> 
        <table border="0" width="98%" style="border-collapse:collapse ;">           
            <tr>  
                <td style="width: 42%;" valign="top">  
                    <table border="0" style="border-collapse:collapse ;"> 
                        <tr> 
                            <td style="width: 10%;" valign="top">Unit Kerja </td> 
                            <td style="width: 1%;" valign="top"> : </td> 
                            <td style="width: 18%;" valign="top">
                            	<?php  
                            		if($role=="semua_unit"){
                            			echo "Semua Unit/Divisi";
                            		}else if($role=="per_unit_kerja"){
                            			echo $this->db->query("select * from users where user_name = ?",array($rolevalue))->row()->user_fullname;
                            		}else if($role=="per_status_divisi"){
                                  echo "Semua Unit/Divisi";
                                }else{
                            			echo "Semua Unit";
                            		}
                            	?>
                            </td> 
                        </tr> 
                        <tr> 
                            <td style="width: 10%;" valign="top">Dari Tanggal </td> 
                            <td style="width: 1%;" valign="top"> : </td> 
                            <td style="width: 18%;" valign="top">
                            	<?php  
                            		echo $vdari
                            	?>
                            </td> 
                        </tr> 
                        <tr> 
                            <td style="width: 10%;" valign="top">Sampai Tanggal </td> 
                            <td style="width: 1%;" valign="top"> : </td> 
                            <td style="width: 18%;" valign="top">
                            	<?php  
                            		 echo $vsampai;
                               	?>
                            </td> 
                        </tr>         
                    </table> 
                </td> 
               
            </tr> 
        </table> 
        <br /> 
        <br /> 
        <table border="1" width="98%" cellpadding="3" style="border-collapse:collapse ;">
          <thead>  
            <tr>
            	<th width="5%" style="vertical-align:middle;text-align:center;">No</th> 
                <th width="15%" style="vertical-align:middle;text-align:center;">Unit kerja</th> 
                <th width="25%" style="vertical-align:middle;text-align:center;">Acara</th> 
                <th width="10%" style="vertical-align:middle;text-align:center;">Waktu</th> 
                <th width="7%" style="vertical-align:middle;text-align:center;">Jumlah Tamu</th>
                <th width="7%" style="vertical-align:middle;text-align:center;">Status</th> 
                <th style="vertical-align:middle;text-align:center;">Snack / Makan</th>
            </tr>
          </thead>
          <tbody>
          <?php  
          $q=$q->result(); 
          $x=1; 
          foreach($q as $key){

            ?>
          	<tr>
          		<td style="vertical-align:middle;text-align:center;"><?php echo $x; ?></td>
          		<td><?php echo $key->user_fullname; ?></td>
          		<td><?php echo $key->acara; ?></td>
          		<td style="vertical-align:middle;text-align:center;"><?php echo $key->tgl; ?></td>
          		<td style="vertical-align:middle;text-align:center;"><?php echo $key->jumlah_tamu; ?></td>
          		<td style="vertical-align:middle;text-align:center;"><?php echo $key->status; ?></td>
          		<td style="font-size: 11px">
          			<ul>
                  <?php if($key->snack_pagi!=0&&$key->snack_pagi!=""){ ?>
                  <li> <b>Snack Pagi</b>
                    <ul>
                      <li><b>Jumlah :</b> <?php echo $key->snack_pagi; ?></li>
                      <li><b>Toko :</b> <?php echo $key->toko_snack_pagi; ?></li>
                      <li><b>Harga :</b> <?php echo $key->harga_snack_pagi; ?></li>
                    </ul>   
                  </li>
                  <?php } ?>
                  <?php if($key->snack_sore!=0&&$key->snack_sore!=""){ ?>
                  <li> <b>Snack Sore</b>
                    <ul>
                      <li><b>Jumlah :</b> <?php echo $key->snack_sore; ?></li>
                      <li><b>Toko :</b> <?php echo $key->toko_snack_sore; ?></li>
                      <li><b>Harga :</b> <?php echo $key->harga_snack_sore; ?></li>
                    </ul>   
                  </li>
                  <?php } ?>
                  <?php if($key->makan_siang!=0&&$key->makan_siang!=""){ ?>
                  <li> <b>Makan Siang</b>
                    <ul>
                      <li><b>Jumlah :</b> <?php echo $key->makan_siang; ?></li>
                      <li><b>Toko :</b> <?php echo $key->toko_makan_siang; ?></li>
                      <li><b>Harga :</b> <?php echo $key->harga_makan_siang; ?></li>
                    </ul>   
                  </li>
                  <?php } ?>
                  <?php if($key->makan_malam!=0&&$key->makan_malam!=""){ ?>
                  <li> <b>Makan Malam</b>
                    <ul>
                      <li><b>Jumlah :</b> <?php echo $key->makan_malam; ?></li>
                      <li><b>Toko :</b> <?php echo $key->toko_makan_malam; ?></li>
                      <li><b>Harga :</b> <?php echo $key->harga_makan_malam; ?></li>
                    </ul>   
                  </li>
                  <?php } ?>
                  <?php if($key->buah!=0&&$key->buah!=""){ ?>
                  <li> <b>Buah</b>
                    <ul>
                      <li><b>Jumlah :</b> <?php echo $key->buah; ?></li>
                      <li><b>Toko :</b> <?php echo $key->toko_buah; ?></li>
                      <li><b>Harga :</b> <?php echo $key->harga_buah; ?></li>
                    </ul>   
                  </li>
                  <?php } ?>
                  <?php if($key->oleh_oleh!=0&&$key->oleh_oleh!=""){ ?>
                  <li> <b>Oleh oleh</b>
                    <ul>
                      <li><b>Jumlah :</b> <?php echo $key->oleh_oleh; ?></li>
                      <li><b>Toko :</b> <?php echo $key->toko_oleh_oleh; ?></li>
                      <li><b>Harga :</b> <?php echo $key->harga_oleh_oleh; ?></li>
                    </ul>   
                  </li>
                  <?php } ?>
                </ul>
          			
          		</td>
          	</tr><?php $x++;} ?>
          </tbody>  
        </table> 
    </div> 
    <div class="footer"></div>     
</body>
</html>
<?php
$html=ob_get_clean();
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'potrait');
$dompdf->render();
$dompdf->stream("Laporan_snack_".$rolevalue."_".$dari."_".$sampai,array("Attachment"=>0));
?>