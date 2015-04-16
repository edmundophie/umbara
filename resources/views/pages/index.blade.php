@extends('master')
@section('title')
  UMBARA - Ticketing System
@stop
@section('pembelian-menu-status')
	active
@stop
@section('main-content')
<section id="main-content">
	<section class="wrapper">
   	<h3><i class="fa fa-angle-right"></i> Pembelian Tiket</h3>
		
		<div class="row mt">
			<form class="form-horizontal style-form" method="get">
		    <div class="col-lg-6">
		    	<div class="form-panel">
						<div class="form-group">
							<label class="col-sm-3 control-label">Nama</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Alamat</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Telepon</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" required>
							</div>
						</div>
						<div>
							<h4 style="margin-bottom:0">Total harga</h4>
							<h2 style="margin-top:0">Rp 150.000</h2>
						</div>
				</div><!-- /form-panel END DIV MIDDLE -->
		    </div><!-- /col-lg-6 END SECTION MIDDLE -->
			 <div class="col-lg-6">
		    	<div class="form-panel">
						<div class="form-group">
							<label class="col-sm-3 control-label">Jenis</label>
							<div class="col-sm-9">
								<select name="" id="" class="form-control">
									<option value="Pembelian">Pembelian</option>
									<option value="Pemesanan">Pemesanan</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Tgl berangkat</label>
							<div class="col-sm-9">
								<input type="date" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Jam berangkat</label>
							<div class="col-sm-9">	
								<select name="" id="" class="form-control">
									<option value="">07.00</option>
									<option value="">09.00</option>
									<option value="">11.00</option>
									<option value="">13.00</option>
									<option value="">15.00</option>
									<option value="">17.00</option>
									<option value="">19.00</option>
									<option value="">21.00</option>
									<option value="">23.00</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Qty</label>
							<div class="col-sm-9">
								<select name="" id="" class="form-control">
									<option value="1">1 kursi</option>
									<option value="1">2 kursi</option>
									<option value="1">3 kursi</option>
									<option value="1">4 kursi</option>
									<option value="1">5 kursi</option>
									<option value="1">6 kursi</option>
									<option value="1">7 kursi</option>
									<option value="1">8 kursi</option>
									<option value="1">9 kursi</option>
									<option value="1">10 kursi</option>
									<option value="1">11 kursi</option>
									<option value="1">12 kursi</option>
									<option value="1">13 kursi</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Dropping Point</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" required>
							</div>
						</div>

						<button type="submit" class="btn btn-theme">Proses Transaksi</button>
				</div><!-- /form-panel END DIV MIDDLE -->
		    </div><!-- /col-lg-6 END SECTION MIDDLE -->
		    </form>
		</div><!--/row -->
	</section>
</section>
@stop