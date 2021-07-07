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
                  <label>Status :</label>
                    <select name="filter_status" class="form-control" style="width: 200px">
                        <option value="">--Select Status--</option>
                        <option value="Normal" {{ request('filter_status') == "Normal" ? 'selected' : '' }}>Normal</option>
                        <option value="Hot" {{ request('filter_status') == "Hot" ? 'selected' : '' }}>Hot</option>
                        <option value="Cool" {{ request('filter_status') == "Cool" ? 'selected' : '' }}>Cool</option>
                    </select>
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
                    <th>Status</th>
                    <th>Information</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($temperature as $data)
                      <tr>
                        <td>{{ $data->temperature }}</td>
                        <td>{{ \Carbon\Carbon::parse($data->date)->format('Y-M-d H:i') }}</td>
                        <td>{{ $data->device_id }}</td>
                        <td>{{ $data->note }}</td>
                          @if($data->note == "Normal")
                            <td style="background-color: #0fbe00">
                          @elseif($data->note == "Hot")
                            <td style="background-color: #fb0000">
                          @else
                            <td style="background-color: #0000b0">
                          @endif
                      </tr>
                    @endforeach
                </table>

                {!! $temperature->appends(Request::except('page'))->render() !!}

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

