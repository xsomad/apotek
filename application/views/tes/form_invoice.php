<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Tambah Tagihan Baru</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Settings 1</a>
              </li>
              <li><a href="#">Settings 2</a>
              </li>
            </ul>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <script type="text/javascript">
        $(document).ready(function(){

          
         
        });
      </script>


         

       <form class="form-horizontal form-label-left" novalidate>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama Pembeli</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" name="name" required="required" type="text">
            </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="date">Tanggal Transaksi</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class='input-group date' id='myDatepicker2'>
                  <input type='text' class="form-control" />
                  <span class="input-group-addon">
                     <span class="glyphicon glyphicon-calendar"></span>
                  </span>
              </div>
            </div>
          </div>

          <table id="example" class="table table-bordered">
          <thead>
            <tr>
              <th class="col-md-3 col-sm-12 col-xs-12" style="text-align: center">Obat yang dibeli</th>
              <th style="text-align: center">Stok</th>
              <th style="text-align: center">Unit</th>
              <th style="text-align: center">Banyak</th>
              <th class="col-md-1 col-sm-12 col-xs-12" style="text-align: center">Harga</th>
              <th style="text-align: center">Aksi</th>
            </tr>
          </thead>
          
        <tfoot>
          <tr>
          <td style="text-align:right; vertical-align: middle" colspan="4"><b>Total</b></td>
          <td>
            <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                    <input type="text" class="form-control">
            </div>
          </td>
        </tr>
        </tfoot>
        </table>
          

          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
              <a href="<?php echo base_url('example/table_invoice') ?>"><button type="button" class="btn btn-dark">Batal</button></a>
              <button id="send" type="submit" class="btn btn-success">Submit</button>
              <button id='addRow' class="btn btn-info" type="button"><span class="fa fa-plus"></span> Tambah Produk</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    

      

              </div>
            </div>

  </div>
</div>




