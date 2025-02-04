@extends('layout.master')
@section('title', 'Detail Masuk Baru')
@section('content')

<!-- Main Content -->
<div class="page-wrapper">
    <div class="container-fluid">
        <!-- Title -->
        <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-dark">Detail Masuk Baru</h5>
            </div>
            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="index.html">Transaksi</a></li>
                    <li><a href="#"><span>Transaksi Masuk Baru</span></a></li>
                    <li class="active"><span>Detail Masuk Baru</span></li>
                </ol>
            </div>
            <!-- /Breadcrumb -->
        </div>
        <!-- /Title -->

        <!-- Row -->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default card-view">
                    <div class="panel-heading">
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-6">
                                        @foreach ($data_detail as $detail_tm)
                                        <tr>
                                            <td class="txt-dark">No Transaksi : {{ $detail_tm->no_transaksi}}</td><br>
                                            <td class="txt-dark">Supplier : {{ $detail_tm->supplier}}</td><br>
                                            <td class="txt-dark">PIC Warehouse : {{ $detail_tm->pic_warehouse}}</td>
                                        </tr>
                                        @endforeach
                                    </div>
                                    <div class="col-xs-6 text-right">
                                        <tr>
                                            <td class="txt-dark head-font inline-block capitalize-font mb-5">Pengirim : </td><br>
                                            <td class="txt-dark head-font inline-block capitalize-font mb-5">Penerima : </td>
                                        </tr>
                                    </div>
                                </div>
                                <br>

                                <!-- <div class="seprator-block"></div> -->

                                <div class="invoice-bill-table">
                                    <div class="table-responsive">
                                        <table id="myTable1" class="table table display pb-30">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama barang</th>
                                                    <th>Jumlah</th>
                                                    <th>Keterangan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1; ?>
                                                @foreach ($transaksi_masuk as $transaksi_masuk)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $transaksi_masuk->nama_barang}}</td>
                                                    <td>{{ $transaksi_masuk->jumlah}}</td>
                                                    <td>{{ $transaksi_masuk->keterangan}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--  -->
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Row -->
        </div>
        <!-- /Footer -->
    </div>
    <!-- /Main Content -->
</div>
<!-- /#wrapper -->
</div>
</div>
</div>
@endsection