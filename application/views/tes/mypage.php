<?php if ($nullstock > 0): ?>
                  <button id="melinda" style="display: none;" class="btn btn-default source" onclick="new PNotify({
                                  title: 'Peringatan',
                                  text: 'Obat sudah habis...',
                                  type: 'error',
                                  hide: false,
                                  styling: 'bootstrap3'
                              });">Error</button>
                  
        <?php endif; ?>

<?php if ($nullex > 0): ?>
                  <button id="melinda" style="display: none;" class="btn btn-default source" onclick="new PNotify({
                                  title: 'Peringatan',
                                  text: 'Obat sudah kedaluwarsa...',
                                  
                                  hide: false,
                                  styling: 'bootstrap3'
                              });">Error</button>
                  
        <?php endif; ?>

<div>
  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <a href="<?php echo base_url('example/form_med') ?>">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-medkit green"></i>
      </div>
      <div class="count">...</div>
      <h3>Obat</h3>
      <p>Menambahkan obat baru</p>
    </div>
    </a>
  </div>

  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <a href="<?php echo base_url('example/form_cat') ?>">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-hospital-o green"></i>
      </div>
      <div class="count">...</div>
      <h3>Kategori</h3>
      <p>Menambahkan kategori obat baru</p>
    </div>
  </a>
  </div>


  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <a href="<?php echo base_url('example/form_sup') ?>">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-user green"></i>
      </div>
      <div class="count">...</div>
      <h3>Pemasok</h3>
      <p>Menambahkan pemasok baru</p>
    </div>
  </a>
  </div>

<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
  <a href="<?php echo base_url('example/form_invoice') ?>">
  <div class="tile-stats">
    <div class="icon"><i class="fa fa-edit green"></i>
      </div>
      <div class="count">...</div>
      <h3>Tagihan</h3>
      <p>Menambahkan tagihan dari pembeli</p>
    </div>
  </a>
  </div>


 <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
  <a href="<?php echo base_url('example/table_exp') ?>">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-warning green"></i>
      </div>
      <div class="count">...</div>
      <h3>Kedaluwarsa</h3>
      <p>Banyak obat yang hampir kedaluwarsa</p>
    </div>
  </a>
  </div>


   <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <a href="<?php echo base_url('example/table_stock') ?>">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-file-text-o green"></i>
      </div>
      <div class="count">...</div>
      <h3>Stok Habis</h3>
      <p>Melihat stok obat yang hampir habis</p>
    </div>
  </a>
  </div>


 <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-check-square-o green"></i>
      </div>
      <div class="count">...</div>
      <h3>Penjualan</h3>
      <p>Laporan penjualan obat</p>
    </div>
  </div>


<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-shopping-cart green"></i>
      </div>
      <div class="count">...</div>
      <h3>Pembelian</h3>
      <p>Laporan pembelian obat</p>
    </div>
  </div>


<div>
  <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url('assets/images/pet.png') ?>" alt="..." class="img-home"></a>
</div>
</div>


