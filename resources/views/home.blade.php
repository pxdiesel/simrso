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
                <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                <script>
                  $(function () {
                    /* ChartJS
                     * -------
                     * Here we will create a few charts using ChartJS
                     */
                
                    //--------------
                    //- AREA CHART -
                    //--------------
                
                    // Get context with jQuery - using jQuery's .get() method.
                    var areaChartCanvas = $('#areaChart').get(0).getContext('2d')
                
                    var areaChartData = {
                      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                      datasets: [
                        {
                          label               : 'Digital Goods',
                          backgroundColor     : 'rgba(60,141,188,0.9)',
                          borderColor         : 'rgba(60,141,188,0.8)',
                          pointRadius          : false,
                          pointColor          : '#3b8bba',
                          pointStrokeColor    : 'rgba(60,141,188,1)',
                          pointHighlightFill  : '#fff',
                          pointHighlightStroke: 'rgba(60,141,188,1)',
                          data                : [28, 48, 40, 19, 86, 27, 90]
                        },
                        {
                          label               : 'Electronics',
                          backgroundColor     : 'rgba(210, 214, 222, 1)',
                          borderColor         : 'rgba(210, 214, 222, 1)',
                          pointRadius         : false,
                          pointColor          : 'rgba(210, 214, 222, 1)',
                          pointStrokeColor    : '#c1c7d1',
                          pointHighlightFill  : '#fff',
                          pointHighlightStroke: 'rgba(220,220,220,1)',
                          data                : [65, 59, 80, 81, 56, 55, 40]
                        },
                      ]
                    }
                
                    var areaChartOptions = {
                      maintainAspectRatio : false,
                      responsive : true,
                      legend: {
                        display: false
                      },
                      scales: {
                        xAxes: [{
                          gridLines : {
                            display : false,
                          }
                        }],
                        yAxes: [{
                          gridLines : {
                            display : false,
                          }
                        }]
                      }
                    }
                
                   
                
                    //-------------
                    //- BAR CHART -
                    //-------------
                    var barChartCanvas = $('#barChart').get(0).getContext('2d')
                    var barChartData = $.extend(true, {}, areaChartData)
                    var temp0 = areaChartData.datasets[0]
                    var temp1 = areaChartData.datasets[1]
                    barChartData.datasets[0] = temp1
                    barChartData.datasets[1] = temp0
                
                    var barChartOptions = {
                      responsive              : true,
                      maintainAspectRatio     : false,
                      datasetFill             : false
                    }
                
                    new Chart(barChartCanvas, {
                      type: 'bar',
                      data: barChartData,
                      options: barChartOptions
                    })
                </script>
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