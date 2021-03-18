@extends('layouts.app')

@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Report</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Report</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

        <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Parameter</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option value="1" selected="">Temperature</option>
                      <option value="2">Humidity</option>
                      <option value="3">Soil Moisture</option>
                      <option value="4">Light Intensity</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                  <label>Date range:</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="far fa-calendar-alt"></i>
                        </span>
                      </div>
                      <input type="text" class="form-control float-right" id="reservation">
                    </div>

                  <!-- /.input group -->
                  </div>

                </div>
              </div>
                <div class="card-footer">
                  <button type="button" class="btn btn-default float-left">Export</button>
                </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  
@section('script')

  <script type="text/javascript">
      $(function () {

      $('#reservation').daterangepicker()
       // $('.select2').select2();

     });
  </script>
  
@endsection


@endsection
