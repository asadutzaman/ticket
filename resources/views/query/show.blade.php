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
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Ticket Comment:</strong>
                                {{ $ticket->comment }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <form role="form" action="{{ action('commentController@update', $ticket->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="PATCH" />
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Comment</label>
                                        <textarea type="text" class="form-control"  name="comment" placeholder="comment"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Comment</button>
                                </div>
                            </form>    
                        </div>
                        <div class="row">
                            <form role="form" action="{{ action('ticketController@update', $ticket->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="PATCH" />
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="sel1">Ticket Assign</label>
                                        <select class="form-control" name="assign" id="sel1">
                                            <option value="1">...</option>
                                            <option value="Asad">Asad</option>
                                            <option value="Zaman">Zaman</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="sel1">Ticket Status</label>
                                        <select class="form-control" name="status" id="sel1">
                                            <option>Open</option>
                                            <option>Close</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
@endsection
