<div class="row">
	<?php if($tipe==2){ ?>
	<div class=" col-lg-12">
	    <div class="hpanel">
	        <div class="panel-body">
	            <a class="small-header-action" href="">
	                <div class="clip-header">
	                    <i class="fa fa-arrow-up"></i>
	                </div>
	            </a>

	            <div id="hbreadcrumb" class="pull-right m-t-lg">
	                <ol class="hbreadcrumb breadcrumb">
	                    <li><a href="index.html">Dashboard</a></li>
	                    <li>
	                        <span>App views</span>
	                    </li>
	                    <li class="active">
	                        <span>Projects</span>
	                    </li>
	                </ol>
	            </div>
	            <h2 class="font-light m-b-xs">
	                <?php echo $title; ?>
	            </h2>
	            <small><?php echo $content; ?></small>
	        </div>
	    </div>
	</div>
	<?php } ?>
	<?php if($tipe==1){ ?>
    <div class="col-lg-12 text-center m-t-md">
        <h2>
            <?php echo $title; ?>
        </h2>

        <p>
            <?php echo $content; ?>
        </p>
    </div>
    <?php } ?>
</div>