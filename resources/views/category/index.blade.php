@extends('layouts.master')

@push('css')
  <link rel="stylesheet" href="{{ asset('dashboard/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dashboard/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dashboard/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

@endpush


@section('content')

   <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ Route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Category</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

      <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Category List </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>SL</th>
                    <th>Category Name</th>
                    <th>Action</th>
                  </tr>

                  </thead>

                  <tbody>
                  <tr>
                    @foreach($categories as $key=>$category)
                    <td>{{ ++$key }}</td>
                    <td>{{ $category->category_name }}</td>
                    <td>
                      <a href="{{ route('category.edit',$category->id) }}" class="btn btn-primary">
                        <i class="fa fa-edit"></i>
                      Edit</a>
                      <a href="javascript:;" class="btn btn-danger sa-delete" data-form-id="delete-form-{{ $category->id }}"> <i class="fa fa-trash"></i> Delete</a>

                      <form id="delete-form-{{ $category->id }}" action="{{ route('category.destroy',$category->id) }}">
                        @csrf
                        @method('DELETE')
                        
                      </form>
                    </td>
                  </tr>
                  @endforeach
               
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          

          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>

@endsection

@push('js')

<script src="{{ asset('dashboard/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('dashboard/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('dashboard/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('dashboard/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('dashboard/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('dashboard/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    

    $('.sa-delete').on('click',function(){
      alert('test');

    })
  });
</script>

@endpush