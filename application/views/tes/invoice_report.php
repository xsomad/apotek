<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="dashboard_graph x_panel">
      <div class="row x_title">
        <div class="col-md-6">
          <h4>Grafik Penjualan</h4>
        </div>
        <div class="col-md-2 pull-right">
          <div class='input-group date ' id='coba'>
            <input type="text" name="tahun_beli" id="tahun_beli" class="form-control tahun_beli" required="required" placeholder="Tahun">
              <span class="input-group-addon">
                 <span class="glyphicon glyphicon-calendar"></span>
              </span>
          </div>
        </div>
      </div>
      <div class="x_content">
        	<canvas id="transaksi" width="900" height="280"></canvas>
      </div>
    </div>
  </div>
</div>



<div class="row">
	<div class="col-md-6 col-sm-6 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Penjualan terbanyak</small></h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
					</li>
					
					<li><a class="close-link"><i class="fa fa-close"></i></a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">

				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Nama Obat</th>
							<th>Banyak Penjualan</th>
						</tr>
					</thead>
					<?php $sn = 1 ?>
					<tbody>
						
						<?php foreach($top_demand as $tp){ ?>
						<tr>
							<th scope="row"><?= $sn ?></th>
							<td><?php echo $tp->nama_obat ?></td>
							<td><?php echo $tp->totSold ?></td>

						</tr>
						<?php $sn++; ?>

						<?php } ?>
					</tbody>
				</table>

			</div>
		</div>
	</div>


	<div class="col-md-6 col-sm-6 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Penjualan Tersedikit</h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
					</li>
					
					<li><a class="close-link"><i class="fa fa-close"></i></a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">

				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Nama Obat</th>
							<th>Banyak Penjualan</th>
							
						</tr>
					</thead>
					<?php $sn = 1 ?>
					<tbody>
						<?php foreach($least_demand as $ld){ ?>
						<tr>
							<th scope="row"><?= $sn ?></th>
							<td><?php echo $ld->nama_obat ?></td>
							<td><?php echo $ld->totSold ?></td>
							
						</tr>
						<?php $sn++; ?>

						<?php } ?>
					</tbody>
				</table>

			</div>
		</div>
	</div>


<div class="col-md-6 col-sm-6 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Pendapatan Terbanyak</h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
					</li>
					
					<li><a class="close-link"><i class="fa fa-close"></i></a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">

				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Nama Obat</th>
							<th>Total Penjualan</th>
							
						</tr>
					</thead>
					<?php $sn = 1 ?>
					<tbody>
						<?php foreach($high_earn as $he){ ?>
						<tr>
							<th scope="row"><?= $sn ?></th>
							<td><?php echo $he->nama_obat ?></td>
							<td>Rp <?php echo number_format($he->totEarned) ?></td>
							
						</tr>
						<?php $sn++; ?>

						<?php } ?>
					</tbody>
				</table>

			</div>
		</div>
	</div>

	<div class="col-md-6 col-sm-6 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Pendapatan Tersedikit</h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
					</li>
					
					<li><a class="close-link"><i class="fa fa-close"></i></a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">

				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Nama Obat</th>
							<th>Total Penjualan</th>
							
						</tr>
					</thead>
					<?php $sn = 1 ?>
					<tbody>
						<?php foreach($low_earn as $le){ ?>
						<tr>
							<th scope="row"><?= $sn ?></th>
							<td><?php echo $le->nama_obat ?></td>
							<td>Rp <?php echo number_format ($le->totEarned) ?></td>
							
						</tr>
						<?php $sn++; ?>

						<?php } ?>
					</tbody>
				</table>

			</div>
		</div>
	</div>
	
