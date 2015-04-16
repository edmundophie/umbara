@extends('master')
@section('title')
  UMBARA - Ticketing System
@stop
@section('laporan-menu-status')
	active
@stop
@section('main-content')
<section id="main-content">
	<section class="wrapper">
   	<h3><i class="fa fa-angle-right"></i> Laporan Keuangan</h3>
	<div class="row mt">
		<form class="form-horizontal style-form" method="get">
	    <div class="col-lg-6">
	    	<div class="form-panel">
				<div class="form-group">
					<label class="col-sm-3 control-label">Jenis laporan</label>
					<div class="col-sm-9">	
						<select name="" id="" class="form-control">
							<option value="Harian">Harian</option>
							<option value="Bulanan">Bulanan</option>
							<option value="Tahunan">Tahunan</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Pilih tanggal</label>
					<div class="col-sm-9">
						<input type="date" class="form-control" placeholder="Alamat" required>
					</div>
				</div>
				<button type="submit" class="col-sm-offset-3 btn btn-theme">Tampilkan Laporan</button>
				</div>
			</div><!-- /form-panel END DIV MIDDLE -->
	    </div><!-- /col-lg-6 END SECTION MIDDLE -->
    	</form>
    </div>
    <div class="row mt">
          <div class="col-md-12">
              <div class="content-panel">
                  <table class="table table-striped table-advance table-hover">
                      <thead>
                      <tr>
                          <th><i class="fa fa-bullhorn"></i> Jam Berangkat</th>
                          <th class="hidden-phone"><i class="fa fa-question-circle"></i> Qty</th>
                          <th><i class="fa fa-bookmark"></i> Pengeluaran</th>
                          <th><i class=" fa fa-edit"></i> Subtotal</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                          <td>13.00</a></td>
                          <td class="hidden-phone">3</td>
                          <td>Rp 50000 </td>
                          <td>Rp 150000</td>
                      </tr>
                      <tr>
                          <td>13.00</a></td>
                          <td class="hidden-phone">3</td>
                          <td>Rp 50000 </td>
                          <td>Rp 150000</td>
                      </tr>
                      <tr>
                          <td>13.00</a></td>
                          <td class="hidden-phone">3</td>
                          <td>Rp 50000 </td>
                          <td>Rp 150000</td>
                      </tr>
                      <tr>
                          <td>13.00</a></td>
                          <td class="hidden-phone">3</td>
                          <td>Rp 50000 </td>
                          <td>Rp 150000</td>
                      </tr>
                      <tr>
                          <td>13.00</a></td>
                          <td class="hidden-phone">3</td>
                          <td>Rp 50000 </td>
                          <td>Rp 150000</td>
                      </tr>
                      </tbody>
                      <tfoot>
                      <tr>
                      		<td colspan="1"><strong>Subtotal</strong></td>
                      		<td><strong>15</strong></td>
                      		<td><strong>Rp 250000</strong></td>
                      		<td><strong>Rp 750000</strong></td>
              		  </tr>
              		  <tr class="text-warning">
                      		<td colspan="3">Pemasukan-pengeluaran</td>
                      		<td>Rp 550000</td>
              		  </tr>
              		  <tr class="text-danger">
                      		<td colspan="3">Pengeluaran lainnya</td>
                      		<td>Rp 200000</td>
              		  </tr>
              		  <tr class="text-success">
                      		<td colspan="3"><strong>Total</strong></td>
                      		<td><strong>Rp 350000</strong></td>
              		  </tr>
                      </tfoot>
                  </table>
              </div><!-- /content-panel -->
          </div><!-- /col-md-12 -->
      	</div><!-- /row -->
		<br>
      	<a href="" class="btn btn-theme">Cetak</a>
      	<a href="" class="btn btn-success">Kirim laporan ke pusat</a>
	</section>
</section>
@stop