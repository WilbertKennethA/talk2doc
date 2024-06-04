<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dr. {{$doc->name}}</title>
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
        .custom-color{
            color: #9AC5F4;
        }
        .custom-gray{
            background-color: #DADADA;
        }
        .card.selected {
            background-color: #9AC5F4;
        } 
    </style>
</head>
<body>
@include('partials/navbar')

<div class="contents custom-body">

    <!-- TopSide -->
    <div class="info p-5">
        <div class="top d-flex justify-content-center">
            <div class="image col-md-2 text-center">
                <img class="p-3" src={{$doc->image}} class="img-fluid rounded" alt="" style="width: 250px; height: 300px;">
            </div>
            <div class="name col-md-6">
                <div class="nameinfo p-4">
                    <h1 class="mb-2" style="color: #5FA8D3;">{{$doc->name}}</h1>
                    <h2 class="mb-5">{{$doc->job}}</h2>
                    <p class="fs-5">Experience: {{$doc->exp}}</p>
                    <p class="fs-5">Next available: {{$doc->next_available}}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- BottomSide -->

    <form action="{{url('/store')}}" method="POST">
        @csrf
        <div class="schedule p-5">
            <div class="bottom p-2 mx-auto col-md-8 custom-gray rounded" style="width: 1100px; height: auto;">

                <input type="hidden" name="doctor_id" id="doctor_id" value="{{$doc->id}}">

                <h4 class="p-3">Choose Time and Date</h4>
                
                <div class="group-form p-3">
                            <label for="date">Select a Date</label>
                            <select class="form-control" name="date" id="date">
                                <option value="--">--</option>
                                <option value="28 December 2023">28 December 2023 - Thursday</option>
                                <option value="29 December 2023">29 December 2023 - Friday</option>
                                <option value="30 December 2023">30 December 2023 - Saturday</option>
                                <option value="1 January 2024">1 January 2024 - Monday</option>
                            </select>
                </div>
                <div class="group-form p-3">
                            <label for="time">Select the Time</label>
                            <select class="form-control" name="time" id="time">
                                <option value="--">--</option>
                                <option value="Morning">11:00 AM - Morning</option>
                                <option value="Afternoon">15:30 PM - Afternoon</option>
                                <option value="Evening">19:00 PM - Evening</option>
        
                            </select>
                </div>
                <div class="confirm p-3">
                    <button class="btn btn-primary">Confirm</button>
                </div>
            </div>
        </div>
    </form>

    @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
    @endif

</div>
    
@include('partials/footer')
<script>
        // Add a click event listener to all elements with the 'clickable' class
        var cards = document.querySelectorAll('.clickable');
        cards.forEach(function (card) {
            card.addEventListener('click', function () {
                // Toggle the 'selected' class when a card is clicked
                this.classList.toggle('selected');
            });
        });
    </script>
</body>
</html>