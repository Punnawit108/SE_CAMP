@extends('layouts.default')

@section('title', 'Homepage')

@section('content')
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Firstname</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Firstname">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Lastname</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Lastname">
                  </div>
                  <div class="form-group">
                  <label>Date</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                <label>Gender</label>
                <div class="row">
                    <div class="col-sm-6">
                      <!-- checkbox -->
                      <div class="form-group">
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1">
                          <label for="customCheckbox1" class="custom-control-label">Male</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox2" checked>
                          <label for="customCheckbox2" class="custom-control-label">Female</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox3" disabled>
                          <label for="customCheckbox3" class="custom-control-label">Other</label>
                        </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Picture</label>
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
                  <div class="form-group">
                        <label>Address</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                      </div>
                      <label>Color</label>
                      <div><label for="favcolor"></label>
<input type="color" id="favcolor" value="#ff0000"></div>
                    <label>
                    Song style
                    </label>
                    <div class="form-group">

                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Accepted</label>
                  </div>
                </div>
                <!-- /.card-body -->


                 <div class="card-footer">
                  <button type="submit" class="btn btn-info">Reset</button>
                  <button type="submit" class="btn btn-default float-right">Submit</button>
                </div>
            <!-- /.card -->



@endsection
