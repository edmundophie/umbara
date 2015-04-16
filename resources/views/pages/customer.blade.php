@extends('master')
@section('title')
  UMBARA - Ticketing System
@stop
@section('header')
@stop
@section('customer-menu-status')
	active
@stop
@section('main-content')
<section id="main-content">
	<section class="wrapper">
   	<h3><i class="fa fa-angle-right"></i> Customer</h3>
		
	<div class="row mt">
		<form class="form-horizontal style-form" method="get">
	    <div class="col-lg-6">
	    	<div class="form-panel">
	    		<div class="form-group">
					<div class="col-sm-offset-3 col-sm-6">
						<input type="text" class="form-control" placeholder="Nomor telepon">
					</div>
					<div class="col-sm-3">
						<button type="submit" class="btn btn-block btn-theme">Cari</button>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Nama</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="Nama" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Alamat</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="Alamat" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Telepon</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="Nomor telepon" required>
					</div>
				</div>
				<button type="submit" class="col-sm-offset-3 btn btn-theme">Update Customer</button>
				</div>
			</div><!-- /form-panel END DIV MIDDLE -->
	    </div><!-- /col-lg-6 END SECTION MIDDLE -->
    	</form>
    </div>
	</section>
</section>
@stop