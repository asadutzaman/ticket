  @section('title')
    <title>form</title>
  @endsection
 @extends('layouts.master')
 @section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        General Form Elements
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('table') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ route('form') }}">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Create Ticket</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('products.store') }}" method="POST">
                @csrf
                <div class="box-body">
                    <!--form first part-->
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">First name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Second name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="detail" placeholder="name">
                        </div>
                    </div>
                    <!--forn second part-->
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Phone No.</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="detail" placeholder="name">
                        </div>
                        <div class="form-group">
                            <label for="inputState">Sub-District</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputState">District</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                    </div>
                    <!--conplain/query-->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="inputState">Select Complain or query</label>
                            <select id="inputState" class="form-control">
                                <option>select</option>
                                <option >Complain</option>
                                <option >query</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Subject</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Details</label>
                            <textarea class="form-control" rows="5" id="comment"></textarea>
                        </div>
                    </div>
                </div> 
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection
