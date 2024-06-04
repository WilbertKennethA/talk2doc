
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>appointment</title>
    <style>
        .custom-bg{
            background-color: #9AC5F4;
        }
        .card {
        transition: box-shadow 0.3s;
        }
        .card:hover {
        box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.1);
        cursor: pointer;
        }
        .custom-body{
          background-color: #F6F6F6;
        }
    </style>
</head>
<body class="custom-body">
@include('partials/navbar')

<!-- Content -->
<div class="content1 mt-3 d-flex container-fluid justify-content-even align-items-center">
  <div class="row p-2">
    @foreach ($doc as $doctor)
      <div class="col-md-6 mb-3">
        <a href="/doctor/{{$doctor->id}}" style="text-decoration: none">
          <div class="card mx-auto mb-auto" style="max-width: 500px;">
            <div class="row g-0">
              <div class="col-md-6 text-center">
                <img class="p-2 mt-auto" src={{$doctor->image}} class="img-fluid rounded" alt="..." style="width: 120px">
              </div>
              <div class="col-md-6">
                <div class="card-body">
                  <h5 class="card-title">{{$doctor->name}}</h5>
                  <h6 class="card-job">{{$doctor->job}}</h6>
                  <h6 class="card-exo">{{$doctor->exp}}</h6>
                  <p class="card-text"><strong>Next Available -  </strong> {{$doctor->next_available}}</p>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
    @endforeach
  </div>
</div>


@include('partials/footer')
</body>
</html>




