@extends('master')
@section('title')
  UMBARA - Ticketing System
@stop
@section('header')
@stop
@section('transaksi-menu-status')
	active
@stop
@section('main-content')
<section id="main-content">
	<section class="wrapper">
   	<h3><i class="fa fa-angle-right"></i> Transaksi</h3>
		<div class="row mt">
		<div class="col-lg-6">
		<form class="form-horizontal style-form" method="get">
	    	<div class="form-panel">
	    		<div class="form-group">
	    			<label class="col-sm-4 control-label">Pilih tanggal</label>
					<div class="col-sm-8">
						<input type="date" class="form-control">
					</div>
				</div>
				<div class="form-group">
	    			<label class="col-sm-4 control-label">Masukkan id transkasi</label>
					<div class="col-sm-8">
						<input type="number" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-4 col-sm-3">
						<button type="submit" class="btn btn-block btn-theme">Cari</button>
					</div>
				</div>
			</div>
			</div>
		</form>
		</div>

		<!-- Single button -->
		<div class="btn-group pull-right">
			<button type="button" class="btn btn-theme dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
				Urutkan <span class="caret"></span>
			</button>
			<ul class="dropdown-menu" role="menu">
				<li><a href="#">Tanggal</a></li>
				<li><a href="#">Waktu Transaksi</a></li>
				<li><a href="#">Status</a></li>
			</ul>
		</div>
		<br>
		<div class="row mt">
          <div class="col-md-12">
              <div class="content-panel">
                  <table class="table table-striped table-advance table-hover">
                      <thead>
                      <tr>
                          <th><i class="fa fa-bullhorn"></i> Transaction Id</th>
                          <th class="hidden-phone"><i class="fa fa-question-circle"></i> Transaction Time</th>
                          <th><i class="fa fa-bookmark"></i> Jam Berangkat</th>
                          <th><i class=" fa fa-edit"></i> Qty</th>
                          <th><i class=" fa fa-edit"></i> Customer</th>
                          <th><i class=" fa fa-edit"></i> CSO</th>
                          <th><i class=" fa fa-edit"></i> Status</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                          <td><a href="">0958220417</a></td>
                          <td class="hidden-phone">15.20</td>
                          <td>14.00 </td>
                          <td>2</td>
                          <td> Joko Widodo</td>
                          <td> Susan</td>
                          <td><span class="label label-success label-mini">Paid</span></td>
                      </tr>
                      <tr>
                          <td><a href="">0958220417</a></td>
                          <td class="hidden-phone">15.20</td>
                          <td>14.00 </td>
                          <td>2</td>
                          <td> Joko Widodo</td>
                          <td> Susan</td>
                          <td><span class="label label-danger label-mini">Book</span></td>
                      </tr>
                      <tr>
                          <td><a href="">0958220417</a></td>
                          <td class="hidden-phone">15.20</td>
                          <td>14.00 </td>
                          <td>2</td>
                          <td> Joko Widodo</td>
                          <td> Susan</td>
                          <td><span class="label label-danger label-mini">Book</span></td>
                      </tr>
                      <tr>
                          <td><a href="">0958220417</a></td>
                          <td class="hidden-phone">15.20</td>
                          <td>14.00 </td>
                          <td>2</td>
                          <td> Joko Widodo</td>
                          <td> Susan</td>
                          <td><span class="label label-success label-mini">Paid</span></td>
                      </tr>
                      <tr>
                          <td><a href="">0958220417</a></td>
                          <td class="hidden-phone">15.20</td>
                          <td>14.00 </td>
                          <td>2</td>
                          <td> Joko Widodo</td>
                          <td> Susan</td>
                          <td><span class="label label-success label-mini">Paid</span></td>
                      </tr>
                      </tbody>
                  </table>
              </div><!-- /content-panel -->
          </div><!-- /col-md-12 -->
      	</div><!-- /row -->
	</section>
</section>
@stop