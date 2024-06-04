<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FAQ</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <style>
         <style>
        body {
            
            font-family: 'Poppins', sans-serif;
            
            background-size: cover;
            color: #ffffff; /* Set text color to white or a color that contrasts well with the background */
        
        }

         .custom-btn {
            background-color: #888888; /* Gray color */
            color: #ffffff; /* Light text color */
            border: 1px solid #888888; /* Border color */
        }
        
        .custom-btn1:hover {
            background-color: #666666; /* Darker gray on hover */
            border: 1px solid #666666; /* Border color on hover */
        }
        /* untuk button contuc us*/
        .custom-white-btn {
            background-color: #ffffff; /* White background */
            color: #888888; /* Gray text color */
            border: 1px solid #ffffff; /* White border */
        }

        .custom-white-btn:hover {
            background-color: #f8f8f8; /* Slightly off-white on hover */
            color: #666666; /* Darker gray text on hover */
            border: 1px solid #f8f8f8; /* Slightly off-white border on hover */
        }
        
    </style>
        
 
</head>
   <div>
   @include('partials/navbar')
    </div>

<body class="bg-gray">

    <div class="container">
        <div class="row">
            <div class="col-12 text-left" style="position: relative; z-index: -1;">
            <h2 class="mt-5" style="color: #000000; width: 221px; heigth: 43px; z-index: 1;">Help Center</h2>
                <div style="background: rgba(97, 206, 255, 0.67); filter: blur(134.5px); padding: 1px; position: relative; z-index: 0;">
                    <h2 class="mt-5" style="color: #000000; z-index: 1;"></h2>
                </div>
                
            </div>
        </div>
    

         <!-- "questions 1"  -->
        <div class="container mt-5">
            <div class="d-flex justify-content-center">
                <p class="d-inline-flex gap-1">
                    <button class="btn custom-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
                        How to book an appointment
                    </button>
                </p>
            </div>
            <div class="collapse" id="collapseExample1">
                <div class="card card-body">
                    By choosing a doctor you can book your appointment, by providing scheudle and area we can give you to the nearest doctor or a doctor of you choosing
                </div>
            </div>
            
            <!-- "questions 2"  -->
            <div class="d-flex justify-content-center mt-3">
                <p class="d-inline-flex gap-1">
                    <button class="btn custom-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
                    Existing Appointment
                    </button>
                </p>
            </div>
            <div class="collapse" id="collapseExample2">
                <div class="card card-body">
                    You can check the existing appointment on the profile page
                </div>
            </div>

            <!-- "questions 3"  -->
            <div class="d-flex justify-content-center mt-3">
                <p class="d-inline-flex gap-1">
                    <button class="btn custom-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample3">
                    Online Consultant
                    </button>
                </p>
            </div>
            <div class="collapse" id="collapseExample3">
                <div class="card card-body">
                    You can check the online consultant in the chat with doctor section, where you will be directed to a doctor you can chat with
                </div>
            </div>

             <!-- "questions 4"  -->
             <div class="d-flex justify-content-center mt-3">
                <p class="d-inline-flex gap-1">
                    <button class="btn custom-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample4">
                    Medicine Orders
                    </button>
                </p>
            </div>
            <div class="collapse" id="collapseExample4">
                <div class="card card-body">
                    Ordering medicine can be accessed in the Pharmacy page, some medicine need to be approved by doctor first to be purchased
                </div>
            </div>

            <!-- "questions 5"  -->
            <div class="d-flex justify-content-center mt-3">
                <p class="d-inline-flex gap-1">
                    <button class="btn custom-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample5" aria-expanded="false" aria-controls="collapseExample5">
                    Health Plans
                    </button>
                </p>
            </div>
            <div class="collapse" id="collapseExample5">
                <div class="card card-body">
                    By consulting a doctor you can ask how your health in first place, and be provided with a good plan from a doctor 
                </div>
            </div>

            <!-- "questions 6"  -->
            <div class="d-flex justify-content-center mt-3">
                <p class="d-inline-flex gap-1">
                    <button class="btn custom-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample6" aria-expanded="false" aria-controls="collapseExample6">
                    My Account 
                    </button>
                </p>
            </div>
            <div class="collapse" id="collapseExample6">
                <div class="card card-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim tenetur neque veritatis explicabo, nobis voluptatibus reiciendis cupiditate alias culpa, ducimus fuga, libero aperiam hic? Assumenda temporibus reprehenderit minima doloribus totam! 
                </div>
            </div>

        </div>





       <!-- "Contact Us"  -->
        <div class="d-flex justify-content-center mt-3">
            <button class="btn custom-white-btn" data-bs-toggle="collapse" data-bs-target="#contactUsSection">
            <i class="fas fa-phone phone-icon"></i> Contact Us
            </button>
        </div>

       <!-- Contact Us Section -->
        <div class="collapse text-center" id="contactUsSection">
            <div class="card mx-auto card-body">
                <p>Contact us at Talk2Doc@example.com</p>
                <p>Phone : 081234724469</p>
            </div>
        </div>



    <script src="https://cdn.jsdelivr.net/npm/popper.js@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    @include('partials/footer')
</body>

</html>