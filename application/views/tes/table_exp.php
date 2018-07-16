  <div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Obat Kedaluwarsa</h2>
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
        <div class="clearfix">
        </div>
      </div>

      <div class="x_content">
        
            <div class="alert alert-danger">
              <h4><i class="fa fa-warning"></i> Peringatan!</h4> Obat sudah kedaluwarsa. Harap menambahkan obat yang baru.
            </div>
                  
       

        
        <!--
        <p class="text-muted font-13 m-b-30">
          Responsive is an extension for DataTables that resolves that problem by optimising the table's layout for different screen sizes through the dynamic insertion and removal of columns from the table.
        </p>
      -->
        <table id="" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Nama Obat</th>
              <th>Penyimpanan</th>
              <th>Kategori</th>
              
              <th>Stok</th>
              <th>Kedaluwarsa</th>
              
              <th>Harga Jual</th>
              <th>Unit</th>
              
            </tr>
          </thead>
          <tbody>

            <?php foreach($table_exp as $ex){ ?>
            <tr>
              <td><?php echo $ex->nama_obat ?></td>
              <td><?php echo $ex->penyimpanan ?></td>
              <td><?php echo $ex->nama_kategori ?></td>
          
              <td><?php echo $ex->stok ?></td>
              <td><?php echo $ex->kedaluwarsa ?></td>
              
              <td><?php echo number_format($ex->harga_jual) ?></td>
              <td><?php echo $ex->unit ?></td>
              
            </tr>

            <?php } ?>
          </tbody>

        </table>
    </div>
  </div>
</div>
  </div>


    <div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Obat Hampir Kedaluwarsa</h2>
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
        <div class="clearfix">
        </div>
      </div>

      <div class="x_content">
        
        <!--
        <p class="text-muted font-13 m-b-30">
          Responsive is an extension for DataTables that resolves that problem by optimising the table's layout for different screen sizes through the dynamic insertion and removal of columns from the table.
        </p>
      -->
        <table id="datatable" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Nama Obat</th>
              <th>Penyimpanan</th>
              <th>Kategori</th>
              
              <th>Stok</th>
              <th>Kedaluwarsa</th>
              
              <th>Harga Jual</th>
              <th>Unit</th>
              
            </tr>
          </thead>
          <tbody>

            <?php foreach($table_alex as $ax){ ?>
            <tr>
              <td><?php echo $ax->nama_obat ?></td>
              <td><?php echo $ax->penyimpanan ?></td>
              <td><?php echo $ax->nama_kategori ?></td>
          
              <td><?php echo $ax->stok ?></td>
              <td><?php echo $ax->kedaluwarsa ?></td>
              
              <td><?php echo number_format($ax->harga_jual) ?></td>
              <td><?php echo $ax->unit ?></td>
              
            </tr>

            <?php } ?>

          </tbody>

        </table>
    </div>
  </div>
</div>





  </div>

  













