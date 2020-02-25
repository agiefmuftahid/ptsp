<div class="container" style="width:95%;">
    <h3 class="text-center text-dark">STRUKTURAL</h3>
    <hr class="garisJudul">
    <br>
</div>
<div class="container" style="width:95%;float:center;">
    <table class="table table-bordered" style="border-radius: 5px;width: 30%;margin: 0px auto;float: none">
        <tbody>
            <tr>
                
                <td style="width:50%">
                <?php if(!empty($kajati)){?>
                    <div class="card cardJaksa" style="width: 8rem;margin: 0px auto;float: noneborder-radius: 5px;">
                        <img class="card-img-top" src="<?php echo $kajati[0]['url_file']?>" alt="Card image cap">
                    </div>
                    <h4 class="card-text text-center" style="margin-top:10px;font-size:16px;"><?php echo ucwords($kajati[0]['jabatan_struktural'])?></h4>
                    <hr style="width:35%;border: 2px solid green;margin-top:5px;">
                    <p class="card-text text-center" style="font-size:13px;"><?php echo $kajati[0]['nama_struktural']?></p>
                <?php } ?>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<br>
<hr class="garisBaganVer1">
<br>
<div class="container" style="width:95%;float:center;">
    <table class="table table-bordered" style="border-radius: 5px;width: 30%;margin: 0px auto;float: none">
        <tbody>
            <tr>
                <td style="width:50%">
                <?php if(!empty($wakajati)){?>
                   <div class="card cardJaksa" style="width: 8rem;margin: 0px auto;float: noneborder-radius: 5px;">
                        <img class="card-img-top" src="<?php echo $wakajati[0]['url_file']?>" alt="Card image cap">
                    </div>
                    <h4 class="card-text text-center" style="margin-top:10px;font-size:16px;"><?php echo ucwords($wakajati[0]['jabatan_struktural'])?></h4>
                    <hr style="width:15%;border: 2px solid green;margin-top:5px;">
                    <p class="card-text text-center" style="font-size:13px;"><?php echo $wakajati[0]['nama_struktural']?></p>
                <?php } ?>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<br>
<hr class="garisBaganVer2">
<hr class="garisBaganHor1">
<div class="container" style="width:95%;float:center;">
    <table class="table table-borderless" style="border-radius: 5px;width: 100%;margin: 0px auto;float: none">
        <tbody>
            <tr>
                <td style="width:45%">
                    <div class="card cardJaksa text-center" style="width: 60%;margin: 0px auto;float: none;border-radius: 5px;height:55px;border:1px solid green;">
                        Koordinator
                    </div>
                </td>
                <td>
                    <center>
                    <hr class="garisBaganVer3" style="width:100%;transform: rotate(90deg);border:2px solid green;margin-left:-2px;">
                    <hr class="garisBaganVer4" style="width:100%;transform: rotate(90deg);border:2px solid green;margin-top:34px;margin-left:-2px;">
                    <hr class="garisBaganVer4" style="width:100%;transform: rotate(90deg);border:2px solid green;margin-top:34px;margin-left:-2px;">
                    <hr class="garisBaganVer4" style="width:100%;transform: rotate(90deg);border:2px solid green;margin-top:34px;margin-left:-2px;">
                    <hr class="garisBaganVer4" style="width:100%;transform: rotate(90deg);border:2px solid green;margin-top:34px;margin-left:-2px;">
                    <hr class="garisBaganVer4" style="width:100%;transform: rotate(90deg);border:2px solid green;margin-top:34px;margin-left:-2px;">
                    <hr class="garisBaganVer4" style="width:100%;transform: rotate(90deg);border:2px solid green;margin-top:34px;margin-left:-2px;">
                    </center>
                </td>
                <td style="width:45%">
                <?php if(!empty($tu)){?>
                   <div class="card cardJaksa" style="width: 8rem;margin: 0px auto;float: noneborder-radius: 5px;">
                        <img class="card-img-top" src="<?php echo $tu[0]['url_file']?>" alt="Card image cap">
                    </div>
                    <h4 class="card-text text-center" style="margin-top:10px;font-size:16px;"><?php echo ucwords($tu[0]['jabatan_struktural'])?></h4>
                    <hr style="width:20%;border: 2px solid green;margin-top:5px;">
                    <p class="card-text text-center" style="font-size:13px;"><?php echo $tu[0]['nama_struktural']?></p>
                <?php } ?>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<br>
<hr class="garisBaganVer5">
<hr class="garisBaganHor2">
<div class="container" style="width:95%;float:center;">
    <table class="table" style="border-radius: 5px;width: 100%;margin: 0px auto;float: none">
        <tbody>
            <tr>
                <td style="width:16.7%">
                <?php if(!empty($pembinaan)){?>
                   <div class="card cardJaksa" style="width: 8rem;margin: 0px auto;float: noneborder-radius: 5px;">
                        <img class="card-img-top" src="<?php echo $pembinaan[0]['url_file']?>" alt="Card image cap">
                    </div>
                    <h4 class="card-text text-center" style="margin-top:10px;font-size:16px;"><?php echo ucwords($pembinaan[0]['jabatan_struktural'])?></h4>
                    <hr style="width:25%;border: 2px solid green;margin-top:5px;">
                    <p class="card-text text-center" style="font-size:13px;"><?php echo $pembinaan[0]['nama_struktural']?></p>
                <?php } ?>
                </td>
                <td style="width:16.7%">
                <?php if(!empty($intel)){?>
                   <div class="card cardJaksa" style="width: 8rem;margin: 0px auto;float: noneborder-radius: 5px;">
                        <img class="card-img-top" src="<?php echo $intel[0]['url_file']?>" alt="Card image cap">
                    </div>
                    <h4 class="card-text text-center" style="margin-top:10px;font-size:16px;"><?php echo ucwords($intel[0]['jabatan_struktural'])?></h4>
                    <hr style="width:25%;border: 2px solid green;margin-top:5px;">
                    <p class="card-text text-center" style="font-size:13px;"><?php echo $intel[0]['nama_struktural']?></p>
                <?php } ?>
                </td>
                <td style="width:16.7%">
                <?php if(!empty($pidum)){?>
                   <div class="card cardJaksa" style="width: 8rem;margin: 0px auto;float: noneborder-radius: 5px;">
                        <img class="card-img-top" src="<?php echo $pidum[0]['url_file']?>" alt="Card image cap">
                    </div>
                    <h4 class="card-text text-center" style="margin-top:10px;font-size:16px;"><?php echo ucwords($pidum[0]['jabatan_struktural'])?></h4>
                    <hr style="width:25%;border: 2px solid green;margin-top:5px;">
                    <p class="card-text text-center" style="font-size:13px;"><?php echo $pidum[0]['nama_struktural']?></p>
                <?php } ?>
                </td>
                <td style="width:16.7%">
                <?php if(!empty($pidsus)){?>
                   <div class="card cardJaksa" style="width: 8rem;margin: 0px auto;float: noneborder-radius: 5px;">
                        <img class="card-img-top" src="<?php echo $pidsus[0]['url_file']?>" alt="Card image cap">
                    </div>
                    <h4 class="card-text text-center" style="margin-top:10px;font-size:16px;"><?php echo ucwords($pidsus[0]['jabatan_struktural'])?></h4>
                    <hr style="width:25%;border: 2px solid green;margin-top:5px;">
                    <p class="card-text text-center" style="font-size:13px;"><?php echo $pidsus[0]['nama_struktural']?></p>
                <?php } ?>
                </td>
                <td style="width:16.7%">
                <?php if(!empty($ptun)){?>
                   <div class="card cardJaksa" style="width: 8rem;margin: 0px auto;float: noneborder-radius: 5px;">
                        <img class="card-img-top" src="<?php echo $ptun[0]['url_file']?>" alt="Card image cap">
                    </div>
                    <h4 class="card-text text-center" style="margin-top:10px;font-size:16px;"><?php echo ucwords($ptun[0]['jabatan_struktural'])?></h4>
                    <hr style="width:25%;border: 2px solid green;margin-top:5px;">
                    <p class="card-text text-center" style="font-size:13px;"><?php echo $ptun[0]['nama_struktural']?></p>
                <?php } ?>
                </td>
                <td style="width:16.7%">
                <?php if(!empty($pengawas)){?>
                   <div class="card cardJaksa" style="width: 8rem;margin: 0px auto;float: noneborder-radius: 5px;">
                        <img class="card-img-top" src="<?php echo $pengawas[0]['url_file']?>" alt="Card image cap">
                    </div>
                    <h4 class="card-text text-center" style="margin-top:10px;font-size:16px;"><?php echo ucwords($pengawas[0]['jabatan_struktural'])?></h4>
                    <hr style="width:25%;border: 2px solid green;margin-top:5px;">
                    <p class="card-text text-center" style="font-size:13px;"><?php echo $pengawas[0]['nama_struktural']?></p>
                <?php } ?>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<br>
<br>
<br>