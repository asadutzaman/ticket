@section('title')
    <title>form</title>
@endsection
@extends('layouts.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <section class="content-header">
        <h1>
            Table
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Table</a></li>
            <li class="active">General Elements</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
            <!-- general form elements -->
                <div class="box box-success">
                    <div class="box-header with-border">
                        <div class="col-sm-8">
                        <h3 class="box-title">Bordered Table</h3>
                        </div>
                            <!-- Button trigger modal -->
                            <div class="col-sm-4">
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                                    Insert New
                                </button>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Insert</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form role="form" action="{{ route('products.store') }}" method="POST">
                                            @csrf
                                            <div class="modal-body">
                                                <!-- general form elements -->
                                                <div class="box box-primary">
                                                    <div class="box-header with-border">
                                                        <h3 class="box-title">Data de</h3>
                                                    </div>
                                                    
                                                    <div class="box-body">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">name</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Description</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1" name="detail" placeholder="name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">first name</label>
                                                            <input type="text" name="first_name" class="form-control" placeholder="Enter First Name" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">last name</label>
                                                            <input type="text" name="last_name" class="form-control" placeholder="Enter Last Name" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.box -->
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table class="table table-bordered">
                                <tr>
                                    <th class="col-md-1">No</th>
                                    <th class="col-md-2">Name</th>
                                    <th class="col-md-5">Details</th>
                                    <th class="col-md-2">first Name</th>
                                    <th class="col-md-5">last name</th>
                                    <th class="col-md-4">Action</th>
                                </tr>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->detail }}</td>
                                        <td>{{ $product->first_name }}</td>
                                        <td>{{ $product->last_name }}</td>
                                        <td>
                                            <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                                                <a class="btn btn-info" href="{{ route('products.show',$product->id) }}"><i class="fa fa-eye"></i></a>
                                                <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}" data-toggle="modal" data-target="#exampleModal_e"><i class="fa fa-edit"></i></a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                            {!! $products->links() !!}
                        </div>
                    <!-- /.box-body -->
                </div>
            <!-- /.box -->
            </div>
        <!--/.col (left) -->
        </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
<div class="modal fade" id="exampleModal_e" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form role="form" action="{{ route('products.store') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="box box-danger">
                        <div class="box-header with-border">
                            <h3 class="box-title">Data Edit</h3>
                        </div>
                        
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="name"value="{{ $product->name }}" placeholder="name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="{{ $product->detail }}" name="detail" placeholder="name">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>