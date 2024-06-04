<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="home.css">
    <title>home</title>
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
    </style>
</head>

<body>
@include('partials/navbar')

<!-- content -->
    <div class="content bg-light container-fluid">
        <div class="row">
            <div class="titleside col-md-8">
                <div class="title p-5">
                    <h1>Healthcare at its finest</h1>
                </div>
                <div class="options p-4 d-flex justify-content-center mt-3">
                
                <a href="{{ route('appointment') }}" class="card p-3 text-decoration-none" style="width: 13rem;">
                    <img class="card-img-top mx-auto" src="/assets/appointment.svg" alt="Card image cap" style="width: 80px; height: auto;">
                    <div class="card-body">
                        <h5 class="card-title text-center">Doctors</h5>
                    </div>
                </a>

                <a href="{{ route('history') }}" class="card p-3 text-decoration-none" style="width: 13rem;  margin-left: 50px;">
                    <img class="card-img-top mx-auto" src="/assets/chat.svg" alt="Card image cap" style="width: 100px; height: auto;">
                    <div class="card-body">
                        <h5 class="card-title text-center">History</h5>
                    </div>
                </a>

                <a href="{{ route('pharmacy') }}" class="card p-3 text-decoration-none" style="width: 13rem;  margin-left: 50px;">
                    <img class="card-img-top mx-auto" src="/assets/pill.svg" alt="Card image cap" style="width: 100px; height: auto;">
                    <div class="card-body">
                        <h5 class="card-title text-center">Pharmacy</h5>
                    </div>
                </a>

                </div>
            </div>
            <div class="imageside col-md-4 container-fluid" >
                <img src="/assets/doctorss.svg" alt="" style="width: 100%; height: auto;">
            </div>

        </div>
    </div>

    <div class="paragraph p-5 fs-5">
        <div class="text" >
            <p style="max-width: 900px;">Welcome to Talk2Doc, your trusted healthcare companion designed to make your wellness journey seamless and personalized. At Talk2Doc, we are driven by a commitment to redefine the way you access healthcare.</p>
        </div>
    </div>

@include('partials/footer')

</body>
</html>