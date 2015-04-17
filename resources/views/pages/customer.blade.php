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

	    <div class="col-lg-6 form-horizontal style-form">
	    	<div class="form-panel">
	            {!! Form::open(array('url' => 'customer/search', 'method' => 'post')) !!}
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <input type="text" class="form-control" name="telepon" placeholder="Nomor telepon" required>
                        </div>
                        <div class="col-sm-3">
                            <button type="submit" class="btn btn-block btn-theme">Cari</button>
                        </div>
                    </div>
                {!! Form::close() !!}

                {!! Form::open(array('url' => 'customer/update', 'method' => 'post')) !!}
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Nama</label>
                        <div class="col-sm-9">
                            @if (Session::has('nama'))
                                <input type="text" class="form-control" name="nama" placeholder="Nama" value="{{ Session::get('nama') }}" required>
                            @else
                                <input type="text" class="form-control" name="nama" placeholder="Nama" required>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Alamat</label>
                        <div class="col-sm-9">
                            @if (Session::has('alamat'))
                                <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="{{ Session::get('alamat') }}" required>
                            @else
                                <input type="text" class="form-control" name="alamat" placeholder="Alamat" required>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Telepon</label>
                        <div class="col-sm-9">
                            @if(Session::has('telepon'))
                                <input type="text" class="form-control" name="telepon" placeholder="Nomor telepon" value="{{ Session::get('telepon') }}"required>
                            @else
                                <input type="text" class="form-control" name="telepon" placeholder="Nomor telepon" required>
                            @endif
                        </div>
                    </div>
                    <input type="hidden" name="id" value="{{ Session::get('id') }}">
                    <button type="submit" class="col-sm-offset-3 btn btn-theme">Update Customer</button>
				{!! Form::close() !!}
			</div>
		</div><!-- /form-panel END DIV MIDDLE -->


	</div><!-- /col-lg-6 END SECTION MIDDLE -->


    </div>
	</section>
</section>
@stop