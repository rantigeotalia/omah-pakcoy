@extends('layouts.app')

@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Temperature</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Temperature</li>
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
        
        <form action="" method="GET">
          {{ csrf_field() }}
          <div class="col-md-6">
                  <div class="form-group">
                  <label>Date:</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="far fa-calendar-alt"></i>
                        </span>
                      </div>
                      <input type="text" name = "filter_date" value="{{ $filter_date }}" class="form-control float-right" id="datepicker">
                    </div>

                  <!-- /.input group -->
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-default">Filter</button>
                  </div>

                </div>
        </form>

            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Temperature</th>
                    <th>Date</th>
                    <th>Device</th>
                    <th>Note</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($temperature as $data)
                      <tr>
                        <td>{{ $data->temperature }}</td>
                        <td>{{ \Carbon\Carbon::parse($data->date)->format('Y-M-d H:i') }}</td>
                        <td>{{ $data->device_id }}</td>
                        <td>{{ $data->note }}</td>
                      </tr>
                    @endforeach
                </table>

                {{ $temperature->links() }}

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
@endsection

