<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Pemasok</h2>
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
				<a href="<?php echo base_url('example/form_sup') ?>"><button type="button" class="btn btn-primary">Tambah Pemasok <span class="fa fa-plus"></span></button></a>
				<!--
				<p class="text-muted font-13 m-b-30">
					DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>
				</p>
			-->
				<table id="datatable" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Nama Supplier</th>
							<th>Alamat</th>
							<th>No Telepon</th>
							
						</tr>
					</thead>


					<tbody>
						<tr>
							<td>Bina Jaya</td>
							<td>Jalan Kaliurang Km 7</td>
							<td>021xxxxx</td>
						</tr>
						
						<tr>
							<td>Mulia Apotek</td>
							<td>Jalan Seturan No 49</td>
							<td>021xxxxx</td>
						</tr>

					</tbody>
				</table>
			</div>
		</div>
	</div>