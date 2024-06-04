<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>History</title>
    <style>
        .custom-bg{
            background-color: #9AC5F4;
        }
        .card {
        transition: box-shadow 0.3s;
        }
        .custom-body{
          background-color: #F6F6F6;
        }
    </style>
</head>
<body class="custom-body">
    @include('partials/navbar')

    {{-- content --}}
    <div class="content1 mt-3 d-flex container-fluid justify-content-even align-items-center">
        <div class="row p-2">
          @foreach ($app as $appoint)
            <div class="col-md-12 mb-3">
                <div class="card mx-auto mb-auto" style="max-width: 500px;">
                  <div class="row g-0">
                    <div class="col-md-6 text-center">
                      <img class="p-2 mt-auto" src={{$appoint->doctors->image}} class="img-fluid rounded" alt="..." style="width: 120px">
                    </div>
                    <div class="col-md-6">
                      <div class="card-body">
                        <h5 class="card-title">{{ $appoint->doctors->name }}</h5>
                        <h5 class="card-title">{{ $appoint->doctors->job }}</h5>
                        <h5 class="card-title">{{$appoint->date}}</h5>
                        <h5 class="card-title">{{$appoint->time}}</h5>

                      </div>    
                    </div>
                  </div>
                </div>
            </div>
          @endforeach
        </div>
      </div>

    @include('partials/footer')
</body>
</html>