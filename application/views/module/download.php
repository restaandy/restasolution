<?php
if($kategori==NULL&&$subkategori==NULL){
 $x=1;
 $bg=array("success","info","warning","danger");
 $list_kategori=$list_kategori->result();
 $x=0;
 function fancy_name($name){
    $name=str_replace("_"," ",$name);
    $name=str_replace("&"," & ",$name);
    $name=ucwords($name);
    return $name;
 }
 for (;;) {
    echo "<div class='row'>"; 
     if(isset($list_kategori[$x])){
        $q=$list_kategori[$x];
        ?>
        <div class="col-md-3">
        <div class="hpanel">
                    <div class="panel-body">
                        <div class="text-center">
                            <h2 class="m-b-xs"><?php echo fancy_name($q->nama_kategori);$warna=rand(0,sizeof($bg)-1); ?></h2>
                            <p class="font-bold text-<?php echo $bg[$warna]; ?>">Terdapat 30+ <?php echo $q->nama_kategori; ?></p>
                            <div class="m">
                                <i class="pe-7s-science fa-5x"></i>
                            </div>
                            <p class="small">
                                <?php echo $q->deskripsi; ?>
                            </p>
                            <a href="<?php echo base_url(); ?>download/<?php echo $q->nama_kategori; ?>" class="btn btn-<?php echo $bg[$warna]; ?> btn-sm">Lihat</a>
                    </div>
               </div>
          </div>
        </div>
        <?php
        $x++;
     }else{break;}
     if(isset($list_kategori[$x])){
        $q=$list_kategori[$x];
        ?>
        <div class="col-md-3">
        <div class="hpanel">
                    <div class="panel-body">
                        <div class="text-center">
                            <h2 class="m-b-xs"><?php echo fancy_name($q->nama_kategori);$warna=rand(0,sizeof($bg)-1); ?></h2>
                            <p class="font-bold text-<?php echo $bg[$warna]; ?>">Terdapat 30+ <?php echo $q->nama_kategori; ?></p>
                            <div class="m">
                                <i class="pe-7s-science fa-5x"></i>
                            </div>
                            <p class="small">
                                <?php echo $q->deskripsi; ?>
                            </p>
                            <a href="<?php echo base_url(); ?>download/<?php echo $q->nama_kategori; ?>" class="btn btn-<?php echo $bg[$warna]; ?> btn-sm">Lihat</a>
                    </div>
               </div>
          </div>
        </div>
        <?php
        $x++;
     }else{break;}
     if(isset($list_kategori[$x])){
        $q=$list_kategori[$x];
        ?>
        <div class="col-md-3">
        <div class="hpanel">
                    <div class="panel-body">
                        <div class="text-center">
                            <h2 class="m-b-xs"><?php echo fancy_name($q->nama_kategori);$warna=rand(0,sizeof($bg)-1); ?></h2>
                            <p class="font-bold text-<?php echo $bg[$warna]; ?>">Terdapat 30+ <?php echo $q->nama_kategori; ?></p>
                            <div class="m">
                                <i class="pe-7s-science fa-5x"></i>
                            </div>
                            <p class="small">
                                <?php echo $q->deskripsi; ?>
                            </p>
                            <a href="<?php echo base_url(); ?>download/<?php echo $q->nama_kategori; ?>" class="btn btn-<?php echo $bg[$warna]; ?> btn-sm">Lihat</a>
                    </div>
               </div>
          </div>
        </div>
        <?php
        $x++;
     }else{break;}
     if(isset($list_kategori[$x])){
        $q=$list_kategori[$x];
        ?>
        <div class="col-md-3">
        <div class="hpanel">
                    <div class="panel-body">
                        <div class="text-center">
                            <h2 class="m-b-xs"><?php echo fancy_name($q->nama_kategori);$warna=rand(0,sizeof($bg)-1); ?></h2>
                            <p class="font-bold text-<?php echo $bg[$warna]; ?>">Terdapat 30+ <?php echo $q->nama_kategori; ?></p>
                            <div class="m">
                                <i class="pe-7s-science fa-5x"></i>
                            </div>
                            <p class="small">
                                <?php echo $q->deskripsi; ?>
                            </p>
                            <a href="<?php echo base_url(); ?>download/<?php echo $q->nama_kategori; ?>" class="btn btn-<?php echo $bg[$warna]; ?> btn-sm">Lihat</a>
                    </div>
               </div>
          </div>
        </div>
        <?php
        $x++;
     }else{break;}
    echo "</div>";
 }
}else if($kategori!=NULL&&$subkategori==NULL){
?>
<div class="row">
   <div class="col-md-2">
                <div class="hpanel hblue">
                    <div class="panel-body">
                    <div class="text-center text-muted font-bold">Kategori Template</div>
                    <hr>    
                        <ul class="mailbox-list">
                            <li>
                                <a href="#">
                                    <span class="pull-right">12</span>
                                    <i class="fa fa-envelope"></i> Inbox
                                </a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-paper-plane"></i> Sent</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-pencil"></i> Draft</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-trash"></i> Trash</a>
                            </li>
                        </ul>
                        <hr>
                        <ul class="mailbox-list">
                            <li>
                                <a href="#"><i class="fa fa-plane text-danger"></i> Travel</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-bar-chart text-warning"></i> Finance</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-users text-info"></i> Social</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-tag text-success"></i> Promos</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-flag text-primary"></i> Updates</a>
                            </li>
                        </ul>
                        <hr>
                        <ul class="mailbox-list">
                            <li>
                                <a href="#"><i class="fa fa-gears"></i> Settings</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-info-circle"></i> Support</a>
                            </li>
                        </ul>


                    </div>

                </div>
    </div>
    <div class="col-md-10">
        <div class="row">
            <div class="col-md-3">
                <div class="hpanel blog-box">
                    <div class="panel-heading">
                        <div class="media clearfix">
                            <a class="pull-left">
                                <img src="<?php echo base_url(); ?>assets/images/a4.jpg" alt="profile-picture">
                            </a>
                            <div class="media-body">
                                <h5>Template Admin</h5>
                            </div>
                        </div>
                    </div>
                    <div class="panel-image">
                        <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/p1.jpg" alt="">
                        <div class="title">
                            <a href="blog_details.html"></a>
                        </div>
                    </div>
                    <div class="panel-footer">
                            <span class="pull-right">
                                <i class="fa fa-comments-o"> </i> 10 comments
                            </span>
                        <i class="fa fa-eye"> </i> 62 views
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="hpanel blog-box">
                    <div class="panel-heading">
                        <div class="media clearfix">
                            <a class="pull-left">
                                <img src="<?php echo base_url(); ?>assets/images/a4.jpg" alt="profile-picture">
                            </a>
                            <div class="media-body">
                                <h5>Template Admin</h5>
                            </div>
                        </div>
                    </div>
                    <div class="panel-image">
                        <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/p1.jpg" alt="">
                        <div class="title">
                            <a href="blog_details.html"></a>
                        </div>
                    </div>
                    <div class="panel-footer">
                            <span class="pull-right">
                                <i class="fa fa-comments-o"> </i> 10 comments
                            </span>
                        <i class="fa fa-eye"> </i> 62 views
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="hpanel blog-box">
                    <div class="panel-heading">
                        <div class="media clearfix">
                            <a class="pull-left">
                                <img src="<?php echo base_url(); ?>assets/images/a4.jpg" alt="profile-picture">
                            </a>
                            <div class="media-body">
                                <h5>Template Admin</h5>
                            </div>
                        </div>
                    </div>
                    <div class="panel-image">
                        <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/p1.jpg" alt="">
                        <div class="title">
                            <a href="blog_details.html"></a>
                        </div>
                    </div>
                    <div class="panel-footer">
                            <span class="pull-right">
                                <i class="fa fa-comments-o"> </i> 10 comments
                            </span>
                        <i class="fa fa-eye"> </i> 62 views
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="hpanel blog-box">
                    <div class="panel-heading">
                        <div class="media clearfix">
                            <a class="pull-left">
                                <img src="<?php echo base_url(); ?>assets/images/a4.jpg" alt="profile-picture">
                            </a>
                            <div class="media-body">
                                <h5>Template Admin</h5>
                            </div>
                        </div>
                    </div>
                    <div class="panel-image">
                        <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/p1.jpg" alt="">
                        <div class="title">
                            <a href="blog_details.html"></a>
                        </div>
                    </div>
                    <div class="panel-footer">
                            <span class="pull-right">
                                <i class="fa fa-comments-o"> </i> 10 comments
                            </span>
                        <i class="fa fa-eye"> </i> 62 views
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="hpanel blog-box">
                    <div class="panel-heading">
                        <div class="media clearfix">
                            <a class="pull-left">
                                <img src="<?php echo base_url(); ?>assets/images/a4.jpg" alt="profile-picture">
                            </a>
                            <div class="media-body">
                                <h5>Template Admin</h5>
                            </div>
                        </div>
                    </div>
                    <div class="panel-image">
                        <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/p1.jpg" alt="">
                        <div class="title">
                            <a href="blog_details.html"></a>
                        </div>
                    </div>
                    <div class="panel-footer">
                            <span class="pull-right">
                                <i class="fa fa-comments-o"> </i> 10 comments
                            </span>
                        <i class="fa fa-eye"> </i> 62 views
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="hpanel blog-box">
                    <div class="panel-heading">
                        <div class="media clearfix">
                            <a class="pull-left">
                                <img src="<?php echo base_url(); ?>assets/images/a4.jpg" alt="profile-picture">
                            </a>
                            <div class="media-body">
                                <h5>Template Admin</h5>
                            </div>
                        </div>
                    </div>
                    <div class="panel-image">
                        <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/p1.jpg" alt="">
                        <div class="title">
                            <a href="blog_details.html"></a>
                        </div>
                    </div>
                    <div class="panel-footer">
                            <span class="pull-right">
                                <i class="fa fa-comments-o"> </i> 10 comments
                            </span>
                        <i class="fa fa-eye"> </i> 62 views
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="hpanel blog-box">
                    <div class="panel-heading">
                        <div class="media clearfix">
                            <a class="pull-left">
                                <img src="<?php echo base_url(); ?>assets/images/a4.jpg" alt="profile-picture">
                            </a>
                            <div class="media-body">
                                <h5>Template Admin</h5>
                            </div>
                        </div>
                    </div>
                    <div class="panel-image">
                        <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/p1.jpg" alt="">
                        <div class="title">
                            <a href="blog_details.html"></a>
                        </div>
                    </div>
                    <div class="panel-footer">
                            <span class="pull-right">
                                <i class="fa fa-comments-o"> </i> 10 comments
                            </span>
                        <i class="fa fa-eye"> </i> 62 views
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="hpanel blog-box">
                    <div class="panel-heading">
                        <div class="media clearfix">
                            <a class="pull-left">
                                <img src="<?php echo base_url(); ?>assets/images/a4.jpg" alt="profile-picture">
                            </a>
                            <div class="media-body">
                                <h5>Template Admin</h5>
                            </div>
                        </div>
                    </div>
                    <div class="panel-image">
                        <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/p1.jpg" alt="">
                        <div class="title">
                            <a href="blog_details.html"></a>
                        </div>
                    </div>
                    <div class="panel-footer">
                            <span class="pull-right">
                                <i class="fa fa-comments-o"> </i> 10 comments
                            </span>
                        <i class="fa fa-eye"> </i> 62 views
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="hpanel blog-box">
                    <div class="panel-heading">
                        <div class="media clearfix">
                            <a class="pull-left">
                                <img src="<?php echo base_url(); ?>assets/images/a4.jpg" alt="profile-picture">
                            </a>
                            <div class="media-body">
                                <h5>Template Admin</h5>
                            </div>
                        </div>
                    </div>
                    <div class="panel-image">
                        <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/p1.jpg" alt="">
                        <div class="title">
                            <a href="blog_details.html"></a>
                        </div>
                    </div>
                    <div class="panel-footer">
                            <span class="pull-right">
                                <i class="fa fa-comments-o"> </i> 10 comments
                            </span>
                        <i class="fa fa-eye"> </i> 62 views
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="hpanel blog-box">
                    <div class="panel-heading">
                        <div class="media clearfix">
                            <a class="pull-left">
                                <img src="<?php echo base_url(); ?>assets/images/a4.jpg" alt="profile-picture">
                            </a>
                            <div class="media-body">
                                <h5>Template Admin</h5>
                            </div>
                        </div>
                    </div>
                    <div class="panel-image">
                        <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/p1.jpg" alt="">
                        <div class="title">
                            <a href="blog_details.html"></a>
                        </div>
                    </div>
                    <div class="panel-footer">
                            <span class="pull-right">
                                <i class="fa fa-comments-o"> </i> 10 comments
                            </span>
                        <i class="fa fa-eye"> </i> 62 views
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="hpanel blog-box">
                    <div class="panel-heading">
                        <div class="media clearfix">
                            <a class="pull-left">
                                <img src="<?php echo base_url(); ?>assets/images/a4.jpg" alt="profile-picture">
                            </a>
                            <div class="media-body">
                                <h5>Template Admin</h5>
                            </div>
                        </div>
                    </div>
                    <div class="panel-image">
                        <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/p1.jpg" alt="">
                        <div class="title">
                            <a href="blog_details.html"></a>
                        </div>
                    </div>
                    <div class="panel-footer">
                            <span class="pull-right">
                                <i class="fa fa-comments-o"> </i> 10 comments
                            </span>
                        <i class="fa fa-eye"> </i> 62 views
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="hpanel blog-box">
                    <div class="panel-heading">
                        <div class="media clearfix">
                            <a class="pull-left">
                                <img src="<?php echo base_url(); ?>assets/images/a4.jpg" alt="profile-picture">
                            </a>
                            <div class="media-body">
                                <h5>Template Admin</h5>
                            </div>
                        </div>
                    </div>
                    <div class="panel-image">
                        <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/p1.jpg" alt="">
                        <div class="title">
                            <a href="blog_details.html"></a>
                        </div>
                    </div>
                    <div class="panel-footer">
                            <span class="pull-right">
                                <i class="fa fa-comments-o"> </i> 10 comments
                            </span>
                        <i class="fa fa-eye"> </i> 62 views
                    </div>
                </div>
            </div>
        </div>   
   </div>
</div>
<?php
}else if($kategori!=NULL&&$subkategori!=NULL){

}else{
    
}
?>