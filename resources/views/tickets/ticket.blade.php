@section('title')
    <title>Ticket</title>
@endsection
@extends('layouts.master')
@section('content')
<div class="content-wrapper">
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
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <div class="col-sm-8">
                            <h3 class="box-title">Complain Tickets</h3>
                        </div>
                    </div>
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tr>
                                <th class="col-md-1">No</th>
                                <th class="col-md-2">Name</th>
                                <th class="col-md-5">Subject</th>
                                <th class="col-md-2">Phone</th>
                                <th class="col-md-5">Created</th>
                                <th class="col-md-4">Action</th>
                            </tr>
                            @foreach ($tickets as $ticket)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $ticket->c_name }}</td>
                                <td>{{ $ticket->complain_sub }}</td>
                                <td>{{ $ticket->phone }}</td>
                                <td>{{ $ticket->created_at }}</td>
                                <td><a class="btn btn-info" href="{{ route('tickets.show',$ticket->id) }}"><i class="fa fa-eye"></i></a></td>
                            </tr>
                            @endforeach
                        </table>
                        {!! $tickets->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
