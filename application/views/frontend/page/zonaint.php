<div class="container col-sm-12" id="zonaintegritas">
    <center>
        <a href="<?php echo base_url('frontend/zonaint')?>">
            <img src="<?php echo base_url('/asset/assets_front') ?>/img/zonaintegritas3.png" style="width:80%;">
        </a>
    </center>
</div>
<br>
<br>
<div class="container-fluid shadow-lg" style="text-align:center;width:82%;">
    <br>
    <div class="row">
        <?php foreach($data as $dt){?>
        <div class="col-sm col-lg-4">
            <div class="card h-100">
                <div id="beritaFoto" style="background-image:url(<?php echo $dt['cover_berita'];?>);height: 200px;"></div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $dt['judul_berita'];?></h5>
                    <?php echo substr($dt['isi_berita'],0,150).' [. . .]';?><br><br>
                    <a href="<?php echo base_url('frontend/berita/beritaDetail/').$dt['id_berita'];?>">See More&nbsp;&nbsp;<i style="color:#000;" class="fa fa-arrow-right"></i> </a>
                    <p class="card-text"><small class="text-muted"><?php echo tgl_indo($dt['tgl_update']);?></small></p>
                </div>
            </div>
        </div>
        <?php }?>
    </div>
    <br>
</div>
<br>
<div class="container-fluid" style="text-align:center;width:70%">
    <div class="row justify-content-center">
        <div class="col-2">
            <?php 
                echo $this->pagination->create_links();
            ?>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>