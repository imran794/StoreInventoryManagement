@extends('layouts.master')

@section('title','size Create')


@section('content')

   <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Size</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ Route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Size</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

      <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"> <small>Size Create</small></h3>

              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('size.store') }}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Size Name</label>
                    <input type="text" name="size" class="form-control" id="exampleInputEmail1" placeholder="Enter Size">
                    @if ($errors->has('size'))
                      <span class="text-danger">{{ $errors->first('size') }}</span>
                    @endif
                   
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                       <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

@endsection