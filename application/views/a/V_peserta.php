<section class="content-header">
	<h1>Peserta Belum diperiksa</h1>
	<br>
	<button type="button" onclick="tambahsd()" class="btn btn-info" data-toggle="modal" data-target="#modal-add-sd">Tambahkan Peserta SD</button>
	<button type="button" onclick="tambahmi()" class="btn btn-info" data-toggle="modal" data-target="#modal-add-mi">Tambahkan Peserta MI</button>
	<ol class="breadcrumb">
		<li>
			<a href="http://[::1]/lte/admin/dashboard">
				<i class="fa fa-dashboard"></i> Peserta</a>
		</li>
		<li class="active">View</li>
	</ol>
</section>

<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<!-- /.box -->

			<div class="box">
				<!-- /.box-header -->
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
                                <th>No</th>
								<th>Nomor Peserta</th>
								<th>Dari</th>
								<th>Nama</th>
								<th>Jenis Kelamin</th>
								<th>NISN</th>
								<th>Sekolah</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
                        <?php $no = 0 ?>
                        <?php foreach ($data as $value) : ?>
                        <?php $no++ ?>
							<tr>
                                <td>
									<?php echo $no ?>
								</td>
                                <td>
                                    <?php echo str_pad($value['urutan'], 4, '0', STR_PAD_LEFT); ?>/PPDB/<?php 
                                echo strtoupper($value['dari_sekolah']);
                                if($value['siswa_kelamin'] == 'laki-laki'){
                                    echo 'PA';
                                }
                                else{
                                    echo 'PI';
                                }?>
								</td>
                                <td>    
                                    <?php echo strtoupper($value['dari_sekolah']) ?>
                                </td>
								<td>
									<?php echo $value['siswa_namalengkap'] ?>
								</td>
								<td>
                                    <?php echo $value['siswa_kelamin'] ?>
								</td>
								<td>
                                    <?php echo $value['lbp_sklh_nisn'] ?>
                                </td>
                                <td>
                                    <?php echo $value['lbp_sklh_nama'] ?>
								</td>
								<td>
									<?php
									if($value['status'] == 'sudahdiperiksa'){
										echo '<span style="color:green;font-weight:600">Sudah Diperiksa</span>';
									}
									else{
										echo '<span style="color:red;font-weight:600">Belum Diperiksa</span>';
									}
									
									
									?>
								</td>
								<td>
									<button type="button" onclick="viewedit(<?php echo $value['id'] ?>,'<?php echo $value['dari_sekolah'] ?>')" class="btn btn-success" data-toggle="modal" data-target="#modal-viewedit">View/Edit</button>
									<a onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger" href="<?php echo base_url() ?>admin/peserta/delete/<?php echo $value['id'] ?>">Delete</a>
								</td>
							</tr>
                            <?php endforeach; ?>
						</tbody>
						<!-- <tfoot>
              <tr>
              </tr>
              </tfoot> -->
					</table>

					<!-- modal-edit -->
					<div class="modal fade" id="modal-viewedit">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<h4 class="modal-title">View/Edit Peserta Belum diperiksa</h4>
								</div>
								<div class="modal-body">

									<!-- ################# -->
									<div id="viewedit"></div>
									<!-- ################# -->

								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
									<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
								</div>
							</div>
							<!-- /.modal-content -->
						</div>
						<!-- /.modal-dialog -->
					</div>

					<div class="modal fade" id="modal-add-sd">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<h4 class="modal-title">Tambah Peserta SD</h4>
								</div>
								<div class="modal-body">

								<!-- ################# -->
								<div id="tambahsd"></div>
									<!-- ################# -->

								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
									<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
								</div>
							</div>
							<!-- /.modal-content -->
						</div>
						<!-- /.modal-dialog -->
					</div>
				</div>

				<div class="modal fade" id="modal-add-mi">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<h4 class="modal-title">Tambah Peserta MI</h4>
								</div>
								<div class="modal-body">

								<!-- ################# -->
								<div id="tambahmi"></div>
									<!-- ################# -->

								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
									<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
								</div>
							</div>
							<!-- /.modal-content -->
						</div>
						<!-- /.modal-dialog -->
					</div>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->
</section>
