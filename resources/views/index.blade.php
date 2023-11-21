<?php
use App\Models\dataPerusahaan;
use App\Models\dataProduk;
use App\Models\dataPelanggan;
?>
@extends('layouts.app')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-0">
        <div class="col-sm-6">
            <img src="asset/uph.png" alt="uph" width="40px" height="40px">
        </div>

      </div>
    </div><!-- /.container-fluid -->
  </section>
<hr>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">

            <h5>
                @foreach ($dataPerusahaan as $perusahaan)
                    {{$perusahaan->nama_perusahaan}}<br>
                    {{$perusahaan->alamat}}<br>
                    {{$perusahaan->kota}}<br>
                    {{$perusahaan->negara}}<br>
                @endforeach
            </h5>

          </div>


          <!-- Main content -->
          <div class="invoice p-3 mb-3">
            <!-- title row -->
            <div class="row">
              <div class="col-12">

              </div>
              <!-- /.col -->
            </div>
            <!-- info row -->
            <div class="row invoice-info">
              <div class="col-sm-4 invoice-col">

              </div>
              <!-- /.col -->
              <div class="col-sm-4 invoice-col">

              </div>
              <!-- /.col -->
              <div class="col-sm-4 invoice-col">

                @foreach ($dataPelanggan as $pelanggan)
                    {{$pelanggan->nama_pelanggan}}<br>
                    {{$pelanggan->alamat}}<br>
                    {{$pelanggan->kota}}<br>
                    {{$pelanggan->negara}}<br>
                @endforeach
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            <br>

            <div class="row invoice-info">
                <div class="col-sm-12 invoice-col">
                    <h2><b>Invoice INV/2023/00003</b></h2>
                </div>
                <!-- /.col -->
              </div>

              <div class="row invoice-info">
                <div class="col-sm-6 invoice-col">

                  <address>
                    <strong>Invoice Date:</strong><br>
                        11/21/2023
                  </address>
                </div>

                <div class="col-sm-6 invoice-col">

                    <address>
                      <strong>Due Date:</strong><br>
                          11/21/2023
                    </address>
                  </div>
              </div>
            <!-- Table row -->
            <div class="row">
              <div class="col-12 table-responsive">
                <table class="table table-hover">
                  <thead>
                  <tr>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th>Unit Price</th>
                    <th>Taxes</th>
                    <th>Amount</th>
                  </tr>
                  </thead>
                  <tbody>
                    @php
                        $totalAmount = 0;
                    @endphp
                  <tr>
                    @foreach ($dataProduk as $produk)
                    <tr>
                        <td>
                            {{$produk->deskripsi}}
                        </td>
                        <td>
                            {{$produk->qty}} Units
                        </td>
                        <td>
                            {{$produk->harga_satuan}}
                        </td>
                        <td>
                            {{$produk->tax}}
                        </td>
                        <td>
                            Rp. {{ number_format($produk->qty * $produk->harga_satuan, 2, '.', ',') }}
                        </td>
                    </tr>
                    @php
                        $totalAmount += $produk->qty * $produk->harga_satuan;
                    @endphp
                @endforeach
                  </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row">
              <!-- accepted payments column -->
              <div class="col-6">
                <p>Payment terms: Immediate Payment</p>
                <br>


                <p>Payment Communication: <b>INV/2023/00003</b></p>
                <p style="color: white">
                  Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem
                  plugg
                  dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                </p>
              </div>
              <!-- /.col -->
              <div class="col-6">
                <hr>


                  <table class="table">
                    <tr>
                      <th style="width:50%">Untaxed Amount</th>
                      <td>Rp. {{ number_format($totalAmount, 2, '.', ',') }}</td>
                    </tr>
                    <tr>
                      <th>Tax</th>
                      <td>Rp. 2,007,500.00</td>
                    </tr>
                    <tr>
                      <th>Total</th>
                      <td>Rp. 20,257,500.00</td>
                    </tr>
                  </table>

              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- this row will not appear when printing -->

          </div>
          <!-- /.invoice -->
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
@endsection

