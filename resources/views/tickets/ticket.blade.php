@section('title')
    <title>Ticket</title>
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
            <li><a href="#">Ticket</a></li>
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
                            <h3 class="box-title">Complain Tickets</h3>
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
                                @foreach ($tickets as $ticket)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $ticket->c_name }}</td>
                                        <td>{{ $ticket->c_email }}</td>
                                        <td>{{ $ticket->phone }}</td>
                                        <td>{{ $ticket->c_address }}</td>
                                        <td>  
                                            <form action="{{ route('tickets.destroy',$ticket->id) }}" method="POST">
                                                <a class="btn btn-info" href="{{ route('tickets.show',$ticket->id) }}"><i class="fa fa-eye"></i></a>
                                                <a class="btn btn-primary" href="{{ route('tickets.edit',$ticket->id) }}" data-toggle="modal" data-target="#exampleModal_e"><i class="fa fa-edit"></i></a>
                                                @csrf
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                            {!! $tickets->render() !!}
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
