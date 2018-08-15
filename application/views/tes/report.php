<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="dashboard_graph x_panel">
      <div class="row x_title">
        <div class="col-md-6">
          <h4>Grafik Penjualan dan Pembelian Tahun 2018</h4>
        </div>
        
      </div>
      <div class="x_content">
        	<canvas id="report" width="900" height="280"></canvas>
      </div>
    </div>
  </div>
</div>



<div class="row">
	<div class="col-md-6 col-sm-6 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Laporan</small></h2>
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
							<th>Bulan</th>
							<th>Penjualan</th>
							<th>Pembelian</th>
							<th>Laba</th>

						</tr>
					</thead>
					<?php $sn = 1 ?>
					<tbody>
						
						<?php foreach($report as $r){ ?>
						<tr>
							<th scope="row"><?= $sn ?></th>
							<td><?php echo $r->month ?></td>
							<td><?php echo $r->total2 ?></td>
							<td><?php echo $r->total1 ?></td>
							<td><?php echo $r->total2 - $r->total1 ?></td>

						</tr>
						<?php $sn++; ?>

						<?php } ?>
					</tbody>
					<tfoot>
						<td style="text-align:center;" colspan="2"><b>Total</b></td>
				          <td><?php echo $totinv ?></td>
				          <td><?php echo $totpur ?></td>
				          <td><?php echo $totinv - $totpur ?></td>
					</tfoot>
				</table>

			</div>
		</div>
	</div>


	