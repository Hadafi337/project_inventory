@extends('layout.master')
@section('title', 'Data Transaksi')
@section('content')

<!-- Main Content -->
<div class="page-wrapper">
    <div class="container-fluid">
        <!-- Title -->
        <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-dark">Data Barang keluar</h5><br>
                <!-- <a href="/transaksi" class="btn btn-primary btn-icon-anim"><i class="fa fa succes"></i> MASUK</a>
                <a href="/transaksikeluar" class="btn btn-primary btn-icon-anim"><i class="fa fa succes"></i> KELUAR</a> -->
            </div>


            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="inventory">Transaksi</a></li>
                    <li class="active"><span>Data Barang Keluar</span></li>
                </ol>
            </div>
            <!-- /Breadcrumb -->
        </div>
        <!-- Row -->
        <div class="col-lg-12 col-md-12 mt-10">
			<div class="panel panel-default card-view">
				<div class="panel-heading">
					<div class="pull-left">
						<h6 class="panel-title txt-dark">Barang Keluar</h6>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="panel-wrapper collapse in">
					<div class="panel-body">
						<div  class="tab-struct custom-tab-1 ">
							<ul role="tablist" class="nav nav-tabs" id="myTabs_7">
								<li class="active" role="presentation"><a aria-expanded="true"  data-toggle="tab" role="tab" id="home_tab_7" href="#masuk_baru">Baru</a></li>
								<li role="presentation" class=""><a  data-toggle="tab" id="profile_tab_7" role="tab" href="#masuk_retur" aria-expanded="false">Retur</a></li>
								
							</ul>
                            <!-- BARANG -->
							<div class="tab-content" id="myTabContent_7">
								<div  id="masuk_baru" class="tab-pane fade active in" role="tabpanel">
								<table id="data_table1" class="table table-bordered display  pb-30">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>No transaksi</th>
                                                <th>Jenis Barang</th>
                                                <th colspan="3">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            @foreach($transaksi_masuk as $transaksi_masuk)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $transaksi_masuk->no_transaksi}}</td>
                                                <td>{{ $transaksi_masuk->jns_barang }}</td>
                                                <td>
                                                    <a href="#"><button class="btn btn-primary btn-icon-anim btn-square"><i class="fa fa-eye"></i></button></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
								
                                <!-- BARANG RETUR -->
                                <div  id="masuk_retur" class="tab-pane fade" role="tabpanel">
                                <table id="data_table1" class="table table-bordered display  pb-30">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>No transaksi</th>
                                                <th>Tanggal Transaksi</th>
                                                <th>Nama Barang</th>
                                                <th>Created at</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            @foreach($transaksi_retur as $transaksi_retur)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $transaksi_retur->no_transaksi}}</td>
                                                <td>{{ $transaksi_retur->tgl_transaksi}}</td>
                                                <td>{{ $transaksi_retur->nama_barang }}</td>
                                                <td>{{ $transaksi_retur->created_at }}</td>
                                                <td>
                                                    <a href="#"><button class="btn btn-primary btn-icon-anim btn-square"><i class="fa fa-eye"></i></button></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
								</div>
								
							</div>
						</div>
					</div>
				</div>
            </div>
		</div>
        
        <!-- /Row -->
    </div>
</div>
<!-- /Main Content -->
</div>
<!-- /#wrapper -->
@endsection
