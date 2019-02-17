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
            Ticket
        <small>Preview and Assign</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('table') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ route('ticket') }}">Tickets</a></li>
            <li class="active">General Elements</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <div class="text-left"><h3 class="box-title">{{ $ticket->complain_sub }}</h3><br>{{ $ticket->c_name }}<br>{{ $ticket->phone }}</div>
                        <div class="text-right">Created- {{ $ticket->created_at }}</div>
                    </div>
                    <div class="box-body">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Ticket ID:</strong>
                                {{ $ticket->id }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Ticket Details:</strong>
                                {{ $ticket->complain_details }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </div>
@endsection
