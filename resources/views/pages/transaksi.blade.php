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
    {!! Form::open(array('url' => 'tiket/searchByDate', 'class' => 'form-horizontal style-form', 'method' => 'get')) !!}
	    	<div class="form-panel">
	    		<div class="form-group">
	    			<label class="col-sm-4 control-label">Pilih tanggal</label>
					<div class="col-sm-6">
						<input type="date" name="tanggal" class="form-control">
					</div>
          <div class="col-sm-2">
            <button type="submit" class="btn btn-theme">Cari</button>
          </div>
				</div>
        {!! Form::close() !!}
        {!! Form::open(array('url' => 'tiket/searchById', 'class' => 'form-horizontal style-form', 'method' => 'get')) !!}
				<div class="form-group">
    			<label class="col-sm-4 control-label">Masukkan id transkasi</label>
					<div class="col-sm-6">
						<input type="number" name="id_transaksi" class="form-control">
					</div>
          <div class="col-sm-2">
            <button type="submit" class="btn btn-theme">Cari</button>
          </div>
				</div>
				</div>
			</div>
			</div>
		{!! Form::close() !!}
		</div>

    @if(isset($arr_tiket))
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

                      @foreach($arr_tiket as $tiket)
                      <tr>
                          <td><a href="{{$tiket->getDataTiket()['id'].'-modal'}}" data-toggle="modal" data-target="#{{$tiket->getDataTiket()['id'].'-modal'}}">#{{$tiket->getDataTiket()['id']}}</a></td>
                          <td>{{$tiket->getDataTiket()['tanggal_pemesanan']}}</td>
                          <td class="hidden-phone">{{$tiket->getDataTiket()['jam_keberangkatan']}}</td>
                          <td>{{$tiket->getDataTiket()['jumlah']}}</td>
                          <td>{{$tiket->getDataPelanggan()->getDataPelanggan()['nama']}}</td>
                          <td>{{$tiket->getDataTiket()['username_cso']}}</td>
                          <td><span class="label label-{{$tiket->getDataTiket()['color_code']}} label-mini">{{$tiket->getDataTiket()['status_pembayaran']}}</span></td>
                      </tr>           
                      @endforeach
                      <!-- <tr>
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
                      </tr> -->
                      </tbody>
                  </table>
              </div><!-- /content-panel -->
          </div><!-- /col-md-12 -->
      	</div><!-- /row -->

        @foreach($arr_tiket as $tiket) 
          <!-- Modal -->
          <div class="modal fade" id="{{$tiket->getDataTiket()['id'].'-modal'}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="myModalLabel">Transaksi #{{$tiket->getDataTiket()['id']}}</h4>
                </div>
                <div class="modal-body">
                  <table class="table">
                  <tr>
                    <td><strong>ID Transaksi</strong></td>
                    <td>#{{$tiket->getDataTiket()['id']}}</td>
                  </tr>
                  <tr>
                    <td><strong>CSO</strong></td>
                    <td>{{$tiket->getDataTiket()['username_cso']}}</td>
                  </tr>
                  <tr>
                    <td><strong>Pelanggan</strong></td>
                    <td>{{$tiket->getDataPelanggan()->getDataPelanggan()['nama']}}</td>
                  </tr>
                  <tr>
                    <td><strong>Tgl Pemesanan</strong></td>
                    <td>{{$tiket->getDataTiket()['tanggal_pemesanan']}}</td>
                  </tr>
                  <tr>
                    <td><strong>Tgl Keberangkatan</strong></td>
                    <td>{{$tiket->getDataTiket()['tanggal_keberangkatan']}}</td>
                  </tr>
                  <tr>
                    <td><strong>Jam Keberangkatan</strong></td>
                    <td>{{$tiket->getDataTiket()['jam_keberangkatan']}}</td>
                  </tr>
                  <tr>
                    <td><strong>Jumlah</strong></td>
                    <td>{{$tiket->getDataTiket()['jumlah']}}</td>
                  </tr>
                  <tr>
                    <td><strong>Jenis</strong></td>
                    <td>{{$tiket->getDataStatus()->getDataStatus()['status']}}</td>
                  </tr>
                  <tr>
                    <td><strong>Dropping Point</strong></td>
                    <td>{{$tiket->getDataTiket()['dropping_point']}}</td>
                  </tr>
                  <tr>
                    <td><strong>Total Harga</strong></td>
                    <td>Rp {{($tiket->getDataTiket()['harga'])}}</td>
                  </tr>
                  <tr>
                    <td><strong>Status Pembayaran</strong></td>
                    <td><span class="label label-{{$tiket->getDataTiket()['color_code']}} label-mini">{{$tiket->getDataTiket()['status_pembayaran']}}</span></td>
                  </tr>
                  </table>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                </div>
              </div>
            </div>
          </div><!-- modal END DIV MODULE -->   
        @endforeach
      @endif
	</section>
</section>
@stop