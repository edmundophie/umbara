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


            {!! Form::open(array('url' => 'tiket/insert', 'class' => 'form-horizontal style-form', 'method' => 'post')) !!}
		    <div class="col-lg-6">
		    	<div class="form-panel">

                        <div class="form-group">
							<label class="col-sm-3 control-label">Nama</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="nama" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Alamat</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="alamat" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Telepon</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="telepon" required>
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
								<select name="jenis" class="form-control">
									<option value="Pembelian">Pembelian</option>
									<option value="Pemesanan">Pemesanan</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Tgl berangkat</label>
							<div class="col-sm-9">
								<input type="date" name="tanggal_berangkat" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Jam berangkat</label>
							<div class="col-sm-9">	
								<select name="jam_berangkat" class="form-control">
									<option value="7">07.00</option>
									<option value="9">09.00</option>
									<option value="11">11.00</option>
									<option value="13">13.00</option>
									<option value="15">15.00</option>
									<option value="17">17.00</option>
									<option value="19">19.00</option>
									<option value="21">21.00</option>
									<option value="23">23.00</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Qty</label>
							<div class="col-sm-9">
								<select name="jumlah" class="form-control">
									<option value="1">1 kursi</option>
									<option value="2">2 kursi</option>
									<option value="3">3 kursi</option>
									<option value="4">4 kursi</option>
									<option value="5">5 kursi</option>
									<option value="6">6 kursi</option>
									<option value="7">7 kursi</option>
									<option value="8">8 kursi</option>
									<option value="9">9 kursi</option>
									<option value="10">10 kursi</option>
									<option value="11">11 kursi</option>
									<option value="12">12 kursi</option>
									<option value="13">13 kursi</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Dropping Point</label>
							<div class="col-sm-9">
								<input type="text" name="dropping_point" class="form-control">
							</div>
						</div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
						        <button type="submit" class="col-sm-offset-3 btn btn-theme">Proses Transaksi</button>
						    </div>
						</div>
				</div><!-- /form-panel END DIV MIDDLE -->
		    </div><!-- /col-lg-6 END SECTION MIDDLE -->
		    {!! Form::close() !!}



		</div><!--/row -->
	</section>
</section>
@stop