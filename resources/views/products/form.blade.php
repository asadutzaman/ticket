  @section('title')
    <title>Form</title>
  @endsection
 @extends('layouts.master')
 @section('content')
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

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
                 @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('tickets.store') }}" method="POST">
                @csrf
                <div class="box-body">
                    <!--form first part-->
                    <div class="col-md-9">
                        <div class="form-group">
                            <label for="inputState">Call Type</label>
                            <select id="calltype" name="calltype" class="form-control" >
                                <option selected value="0">Select ...</option>
                                <option value="select_1">select_1</option>
                                <option value="select_1">select_1</option>
                                <option value="select_div">select_div</option>
                            </select>
                        </div>
                        <div id="select_1" >
                            <div class="form-group">
                                <label for="inputState">select 001</label>
                                <select id="" name="" class="form-control" >
                                    <option selected value="0">Select ...</option>
                                    <option value="">select 001</option>
                                    <option value="">select 001</option>
                                    <option value="">select 001</option>
                                </select>
                            </div>
                        </div>
                        <div id="select_2" >
                            <div class="form-group">
                                <label for="inputState">select 002</label>
                                <select id="" name="" class="form-control" >
                                    <option selected value="0">Select ...</option>
                                    <option value="">select 002</option>
                                    <option value="">select 002</option>
                                    <option value="">select 002</option>
                                </select>
                            </div>
                        </div> 
                        <div id="select_div" >
                            <div class="form-group">
                                <label for="inputState">Problem Type</label>
                                <select id="department" name="department" class="form-control" >
                                    <option selected value="0">Select ...</option>
                                    <option value="complain">Pc issue</option>
                                    <option value="query">Asset issue</option>
                                    <option value="product">Paper issue</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Phone No.</label>
                                <input type="text" class="form-control"  name="phone" placeholder="name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Customer Name</label>
                                <input type="text" class="form-control"  name="c_name" placeholder="name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Customer Email</label>
                                <input type="text" class="form-control"  name="c_email" placeholder="name">
                            </div>   
                    <!--Compalin part-->
                    <div id="complain_div" >
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Customer Address</label>
                                <input type="text" class="form-control"  name="c_address" placeholder="name">
                            </div>
                        </div>
                        <!--conplain/query-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Subject</label>
                                <input type="text" class="form-control"  name="complain_sub" placeholder="name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Details</label>
                                <textarea class="form-control" rows="5" name="complain_details"></textarea>
                            </div>
                        </div>
                    </div>
                    <!--Query part-->
                    <div id="query_div">
                        <!--conplain/query-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Query Subject</label>
                                <input type="text" class="form-control"  name="query_sub" placeholder="name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Query Details</label>
                                <textarea class="form-control" rows="5" name="query_details"></textarea>
                            </div>
                        </div>
                    </div>
                    <!--Product part-->
                    <div id="product_div">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product  Name</label>
                                <input type="text" class="form-control"  name="product_name" placeholder="">
                            </div>
                        </div>
                        <!--conplain/query-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product Subject</label>
                                <input type="text" class="form-control"  name="product_sub" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Complain/Query on product</label>
                                <textarea class="form-control" rows="5" name="product_details"></textarea>
                            </div>
                        </div>
                    </div>
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
  <script>
        $(document).ready(function(){
            $("#select_1").hide();
            $("#select_2").hide();
            $("#select_div").hide();
       
            $("#calltype").change(function(){
                var calltype = $("#calltype").val();
                //alert(calltype);
                if (calltype=='select_1'){
                    $("#select_1").show();
                    $("#select_2").hide();
                    $("#select_div").hide();
                }
                if (calltype=='select_2'){
                    $("#select_1").hide();
                    $("#select_2").show();
                    $("#select_div").hide();
                }
                if (calltype=='select_div'){
                    $("#select_1").hide();
                    $("#select_2").hide();
                    $("#select_div").show();
                }
                if (calltype=='0'){
                    $("#select_1").hide();
                    $("#select_2").hide();
                    $("#select_div").hide();
                }
            });
        });
    </script>
    <script>
        $(document).ready(function(){
            $("#complain_div").hide();
            $("#query_div").hide();
            $("#product_div").hide();
       
            $("#department").change(function(){
                var department = $("#department").val();
                //alert(department);
                if (department=='complain'){
                    $("#complain_div").show();
                    $("#query_div").hide();
                    $("#product_div").hide();
                }
                if (department=='query'){
                    $("#complain_div").hide();
                    $("#query_div").show();
                    $("#product_div").hide();
                }
                if (department=='product'){
                    $("#complain_div").hide();
                    $("#query_div").hide();
                    $("#product_div").show();
                }
                if (department=='0'){
                    $("#complain_div").hide();
                    $("#query_div").hide();
                    $("#product_div").hide();
                }
            });
        });
    </script>
  <!-- /.content-wrapper -->
  @endsection
