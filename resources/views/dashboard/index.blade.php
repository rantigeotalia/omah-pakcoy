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

    <div class="row">
      <div class="col-12">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Parameters</h3>
            </div>
        <div class="card-body">
          <div class="row">
               <div class="col-6 col-md-3 text-center">
                  <div class="knob-label"><strong>Temperature</strong></div>
                  <input type="text" class="knob" id="knob-temp" value="{{ $average1 }}" data-width="90" data-height="90" data-fgColor="#3c8dbc">
                  <input type="hidden" name="noteTemperature" value="{{ $note1 }}" id="noteTemperature">
                  <div class="knob-label">{{ $note1 }}</div>
                </div>

               <div class="col-6 col-md-3 text-center">
                <div class="knob-label"><strong>Humidity</strong></div>
                  <input type="text" class="knob" id="knob-humi" value="{{ $average2 }}" data-width="90" data-height="90" data-fgColor="#3c8dbc" data-max="1024" data-min="0">
                  <input type="hidden" name="noteHumidity" value="{{ $note2 }}" id="noteHumidity">
                  <div class="knob-label">{{ $note2 }}</div>
                </div>

               <div class="col-6 col-md-3 text-center">
                  <div class="knob-label"><strong>Soil Moisture</strong></div>
                  <input type="text" class="knob" id="knob-soil" value="{{ $average3 }}" data-width="90" data-height="90" data-fgColor="#3c8dbc" data-max="600" data-min="0">
                  <input type="hidden" name="noteSoil" value="{{ $note4 }}" id="noteSoil">
                  <div class="knob-label">{{ $note4 }}</div>
                </div>

                <div class="col-6 col-md-3 text-center">
                  <div class="knob-label"><strong>Light Intencity</strong></div>
                  <input type="text" class="knob" id="knob-light" value="{{ $average4 }}" data-max ="700" data-min="0" data-width="90" data-height="90" data-fgColor="#3c8dbc">
                  <input type="hidden" name="noteLight" value="{{ $note3 }}" id="noteLight">
                  <div class="knob-label">{{ $note3 }}</div>
                </div>
            </div>
          </div>
      </div>
    </div>
  </div>


      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">List Device</h3>
            </div>

              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                      <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Device</th>
                        <th class="text-center">Location</th>
                      </tr>
                      </thead>
                    @foreach($device as $item)
                    <tbody>
                      <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-center">{{ $item->device }}</td>
                        <td class="text-center">{{ $item->location }}</td>
                      </tr>
                    </tbody>
                    @endforeach

                    
                    
                  </table>
                  
                </div>
                
              </div>

             </div>
           </div>
    </section>


@endsection

