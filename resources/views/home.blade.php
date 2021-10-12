@extends('layouts.template')
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data RSO Tahun 2020-2021</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">

                    <thead>
                      <!-- No.	Name of RSO	No of DG Decree	Issued	Valid	Comment
                      -->
                    <tr>
                      <th scope="col 1">No</th>
                      <th>Nama Rso</th>
                      <th>No Of Decree</th>
                      <th>Issued</th>
                      <th>Valid</th>
                      <th>Comment</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($datarso as $d)

                      <tr>
                        <td>{{ $d->id }}</td>
                        <td>{{ $d->nama_of_rso }}</td>
                        <td>{{ $d->no_of_degree }}</td>
                        <td>{{ $d->Issued }}</td>
                        <td>{{ $d->valid }}</td>
                        <td>{{ $d->comment }}</td>
                      </tr>
  
  
                      @endforeach
                    
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
               <!-- BAR CHART -->
          <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title">Bar Chart</h3>

            </div>
            <div class="card-body">
              <div class="chart">
                <canvas id="myChart" style="min-height: 250px;  max-width: 100%;"></canvas>

              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->

@endsection