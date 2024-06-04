<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pharmacy</title>
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

        .list-unstyled li {
            cursor: pointer;
        }
        .list-unstyled li.clicked {
            font-weight: bold;
        }
    </style>
</head>
<body class="custom-body">
    @include('partials/navbar')
    
    <div class="row">
        <div class="container d-flex">
            <div class="col-md-4 my-3">
                <div class="card mx-4 mb-auto rounded" style="max-width: 400px;">
                    <div class="row g-0">
                        <h3 class="px-5 pt-3">Kategori</h3>
                        <div class="col-md-12 d-flex align-items-center">
                            <div class="card-body">
                                <ul class="list-unstyled text-left px-4">
                                    <li onclick="makeBold(this)" class="py-2">Pain and Inflammation</li>
                                    <li onclick="makeBold(this)" class="py-2">Gerd</li>
                                    <li onclick="makeBold(this)" class="py-2">Allergies</li>
                                    <li onclick="makeBold(this)" class="py-2">Infection</li>
                                    <li onclick="makeBold(this)" class="py-2">Fertility</li>
                                    <li onclick="makeBold(this)" class="py-2">Chronic Conditions</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 my-3">
                <div class="content1 mt-3 d-flex container-fluid justify-content-even align-items-center">
                    <div class="row p-2">
                        @foreach ($obat as $obt)
                        <div class="col-md-4 mb-3">
                            <div class="card mx-auto mb-auto" style="max-width: 500px; height: 350px">
                                <div class="row g-0">
                                    <div class="text-center">
                                        <img class="p-2 mt-auto" src="{{$obt->image}}" class="img-fluid rounded" alt="..."
                                            style="height: 150px">
                                    </div>
                                    <div class="text-center flex-grow-1 d-flex flex-column">
                                        <div class="card-body">
                                            <h5 class="card-title">{{$obt->name}}</h5>
                                            <h6 class="card-job">{{$obt->perwhat}}</h6>
                                            <h6 class="card-exo">{{$obt->price}}</h6>
                                            <div >
                                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"
                                                    style="borderColor: green; color: green;">Buy</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function makeBold(element) {
            var listItems = document.querySelectorAll('.list-unstyled li');
            listItems.forEach(item => {
                item.classList.remove('clicked');
            });
            
            element.classList.add('clicked');
        }
    </script>

    @include('partials/footer')
</body>
</html>
