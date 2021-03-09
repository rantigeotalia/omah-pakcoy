@extends('layouts.app')

@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="fas fa-thermometer-empty"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Temperature</span>
                <span class="info-box-number">27 <sup>o</sup>C</span>
              </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fas fa-leaf"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Humidity</span>
                <span class="info-box-number">70 %</span>
              </div>
          </div>
        </div>

        <div class="clearfix visible-sm-block"></div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-green"><i class="fas fa-tint"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Soil Moisture</span>
                  <span class="info-box-number">70 %</span>
                </div>
            </div>
          </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="far fa-sun"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Light Intensity</span>
                <span class="info-box-number">30 Lux</span>
              </div>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-md-8">

          <div class="box box-info">
            <div class="box-header with-border">
              <h5 class="box-title">List Device</h5>
              </div>

              <div class="box-body">
                <div class="table-responsive">
                  <table class="table no-margin">
                    <thead>
                      <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Device</th>
                        <th class="text-center">Location</th>

                      </tr>
                    @foreach($device as $item)
                      <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-center">{{ $item->device }}</td>
                        <td class="text-center">{{ $item->location }}</td>
                      </tr>
                    @endforeach

                    </thead>
                    
                  </table>
                  
                </div>
                
              </div>

             </div>
           </div>
       </div>
    </section>


@endsection

