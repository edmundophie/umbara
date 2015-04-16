@extends('master')
@section('title')
  UMBARA - Ticketing System
@stop
@section('header')
@stop
@section('pengeluaran-menu-status')
	active
@stop
@section('main-content')
<section id="main-content">
	<section class="wrapper">
   	<h3><i class="fa fa-angle-right"></i> Pengeluaran</h3>
		
	<div class="row mt">
		<form class="form-horizontal style-form" method="get">
	    <div class="col-lg-6">
	    	<div class="form-panel">
				<div class="form-group">
					<label class="col-sm-3 control-label">Jumlah pengeluaran</label>
					<div class="col-sm-9">
						<input type="number" class="form-control" placeholder="Jumlah pengeluaran" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Rincian pengeluaran</label>
					<div class="col-sm-9">
						<textarea name="" id="" class="form-control"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Upload kwitansi</label>
					<div class="col-sm-9">
						<input type="file">
					</div>
				</div>
				<div class="form-group btn-submit">
					<div class="col-sm-offset-3 col-sm-9">
						<button type="submit" class="btn btn-theme">Simpan</button>
					</div>
				</div>
			</div><!-- /form-panel END DIV MIDDLE -->
	    </div><!-- /col-lg-6 END SECTION MIDDLE -->
    	</form>
    </div>
	</section>
</section>
@stop