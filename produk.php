<?php 
    include "header.php";
?>
<h3 align="center"><strong>Produk</strong></h3>
<div class="row">
    <?php 
    include "koneksi.php";
    $qry_produk=mysqli_query($conn,"select * from produk");
    while($dt_produk=mysqli_fetch_array($qry_produk)){
        ?>
        <div class="col-md-3">
              <img src="foto/<?=$dt_produk['foto']?>" class="card-img-top">
              <div class="card-body">
                  <h5 class="card-title"><?=$dt_produk['nama_produk']?></h5>
                  <p class="card-text"><?=substr($dt_produk['deskripsi'],0,30)?></p>
                  <p class="card-text" style="color:red;">Rp. <?=$dt_produk['harga']?></p> 
                  <a href="beli_produk.php?id_produk=<?=$dt_produk['id_produk']?>" class="btn btn-primary">Beli</a>
              </div>
            </div>
        <?php
    }
    ?>
</div>
<?php
    include "footer.php";
?>