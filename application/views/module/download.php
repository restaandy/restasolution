<?php
 $x=1;
 $bg=array("success","info","warning","danger");
 $list_kategori=$list_kategori->result();
 foreach ($list_kategori as $q) {
    if($x==1||$x==5){ ?><div class="row"><?php }
    ?>
    <div class="col-md-3">
        <div class="hpanel">
                    <div class="panel-body">
                        <div class="text-center">
                            <h2 class="m-b-xs"><?php echo $q->nama_kategori;$warna=rand(0,sizeof($bg)-1); ?></h2>
                            <p class="font-bold text-<?php echo $bg[$warna]; ?>">Terdapat 30+ <?php echo $q->nama_kategori; ?></p>
                            <div class="m">
                                <i class="pe-7s-science fa-5x"></i>
                            </div>
                            <p class="small">
                                <?php echo $q->deskripsi; ?>
                            </p>
                            <a href="#" class="btn btn-<?php echo $bg[$warna]; ?> btn-sm">Lihat</a>
                    </div>
               </div>
          </div>
    </div>
    <?php 
    if($x==4){?></div><?php $x=1;}else{$x++;}
 }
?>