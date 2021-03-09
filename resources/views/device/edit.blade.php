@extends('layouts.app')

@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Device</h1>
          </div>
          <div class="col-sm-6">
            <!-- <a href="#" class="btn btn-block btn-primary btn-lg">Add Device</a> -->
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{route('device.index')}}">Device</a></li>
              <li class="breadcrumb-item active">Edit Device</li>
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
                <form action="{{route('device-update', $device->device_id)}}" method="post" >
                  {{ csrf_field() }}
                  <div class="form-group">
                    <input type="text" name="device" value="{{ $device->device }}" id="device" class="form-control" placeholder="Device's Name">
                  </div>
                  <div class="form-group">
                    <input type="text" name="location" id="location" value="{{ $device->location }}" class="form-control" placeholder="Device's Location">
                  </div>
                  <div class="form-group">
                    <input type="text" name="status" id="status" value="{{ $device->status }}" class="form-control" placeholder="Device's Status">
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>

                </form>
                 

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

