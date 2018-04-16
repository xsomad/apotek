	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Stok Obat</h2>
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
				<a href="<?php echo base_url('example/form_med') ?>"><button type="button" class="btn btn-primary">Tambah Obat <span class="fa fa-plus"></span></button></a>
				<!--
				<p class="text-muted font-13 m-b-30">
					Responsive is an extension for DataTables that resolves that problem by optimising the table's layout for different screen sizes through the dynamic insertion and removal of columns from the table.
				</p>
			-->
				<table id="datatable-buttons" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Nama Obat</th>
							<th>Penyimpanan</th>
							<th>Kategori</th>
							<th>Supplier</th>
							<th>Stok</th>
							<th>Kedaluwarsa</th>
							<th>Harga Beli</th>
							<th>Harga Jual</th>
							<th>Unit</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Amodis</td>
							<td>Gudang</td>
							<td>Analgetik</td>
							<td>Bina Jaya</td>
							<td>61</td>
							<td>2011/04/25</td>
							<td>Rp 10.000,-</td>
							<td>Rp 12.000,-</td>
							<td>Kapsul</td>
						</tr>

						<tr>
							<td>Clorofil</td>
							<td>Gudang</td>
							<td>Anti Radang</td>
							<td>Bina Jaya</td>
							<td>61</td>
							<td>2011/04/25</td>
							<td>Rp 10.000,-</td>
							<td>Rp 12.000,-</td>
							<td>Kapsul</td>
						</tr>

						<tr>
							<td>Metafenamat</td>
							<td>Lab</td>
							<td>Anti Radang</td>
							<td>Bina Jaya</td>
							<td>61</td>
							<td>2011/04/25</td>
							<td>Rp 10.000,-</td>
							<td>Rp 12.000,-</td>
							<td>Kapsul</td>
						</tr>
					</tbody>
				</table>
		</div>
	</div>
</div>