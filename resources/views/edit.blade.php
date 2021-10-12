@extends('layouts.template')
@section('content')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>General Form</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">General Form</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Quick Example</h3>
            </div>

            @foreach($datarso as $d)
            <form action="/datarso/update" method="post">
                {{ csrf_field() }}
                <div class="card-body">
                                
                <input type="hidden" name="id" value="{{ $d->id }}"> <br/>
                  
                  <div class="form-group">
                <label for="nama of rso">Nama of RSO </label> <input type="text" class="form-control" required="required" name="nama_of_rso" value="{{ $d->nama_of_rso }}"> <br/>
                  </div>
                <div class="form-group">
                <label for="no of decree">No of Decree</label> <input type="text" class="form-control" required="required" name="no_of_degree" value="{{ $d->no_of_degree }}"> <br/>
                </div>
                <div class="form-group">
                <label for="issued">Issued</label>  <input type="text" class="form-control" required="required" name="Issued" value="{{ $d->Issued }}"> <br/>
                </div>
                <div class="form-group">
                <label for="valid">Valid</label>  <input type="text" class="form-control" required="required" name="valid" value=" {{ $d->valid}}"> <br/>
                </div>
                <div class="form-group">
                <label for="comment">Comment</label> <input type="text" class="form-control" required="required" name="comment" value=" {{ $d->comment}}"> <br/>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan Data</button>
                </div>
                </div>
            </form>
            @endforeach

            <!-- /.card-header -->
            <!-- form start 

            <form action="/datarso/update" method="post">
               
              
                <div class="form-group">
                  <label>Email address</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="exampleInputFile">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text">Upload</span>
                    </div>
                  </div>
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
              </div>
             
            </form>
           
        -->
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection


