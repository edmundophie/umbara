@extends('master')
@section('title')
  UMBARA - Ticketing System
@stop
@section('header')
@stop
@section('pengaturan-menu-status')
	active
@stop
@section('main-content')
<section id="main-content">
	<section class="wrapper">
   	<h3><i class="fa fa-angle-right"></i> Pengaturan</h3>
		
	<div class="row mt">
		<form class="form-horizontal style-form" method="get">
	    <div class="col-lg-6">
	    	<div class="form-panel">
				<div class="form-group">
					<label class="col-sm-3 control-label">Harga tiket</label>
					<div class="col-sm-9">
						<input type="number" class="form-control round-form" value="75000" required>
					</div>
				</div>
				<button type="submit" class="col-sm-offset-3 btn btn-theme">Ubah Harga</button>
				</div>
			</div><!-- /form-panel END DIV MIDDLE -->
	    </div><!-- /col-lg-6 END SECTION MIDDLE -->
    	</form>
    </div>
	</section>
</section>
@stop