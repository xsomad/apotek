	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Kategori Obat</h2>
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
				<a href="<?php echo base_url('example/form_cat') ?>"><button type="button" class="btn btn-primary">Tambah Kategori <span class="fa fa-plus"></span></button></a>
				<!--
				<p class="text-muted font-13 m-b-30">
					The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
				</p>
			-->
				<table id="datatable-buttons" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nama Kategori</th>
							<th>Deskripsi</th>
							
						</tr>
					</thead>


					<tbody>
						<tr>
							<td>1</td>
							<td>Analgetik</td>
							<td>Mengurangi rasa sakit</td>
							
						
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>