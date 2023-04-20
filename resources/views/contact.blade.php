<x-layout>
    <x-slot name='title'>Contact </x-slot>

    <x-slot name='content'>
<div class="container mt-5">
    <h1 class="text-warning mb-5 border-bottom"> CONTACT US</h1>
<div class="row text-white mb-5"> 
    <p class="mx-auto mb-5">
        Do you have any question? please do not hesitate to contact 
        .I will come back to you within a matter of hours to help you.
    </p>
    <div class="col-sm-9 mb-5">
<form action="">

    <div class="row g-3">
        <div class="col-md-6">
            <label for="inputName">Your Name</label>
            <input type="text" class="form-control mt-2" name="name">
        </div>
        <div class="col-md-6">
            <label for="inputEmail">Your Email*</label>
            <input type="email" class="form-control mt-2" name="email">

        </div>

        <div class="col-md-12 mb-3">
            <label for="inputSubject">Your Subject</label>
            <input type="text" class="form-control mt-2" >
        </div>

        <div class="col-md-12 mb-3">
            <label for="inputTextarea">Your Message</label>
            <textarea class="form-control mt-2 txtarea" required> </textarea>
        </div>
    </div>
    <button class="btn btn-primary sendbtn" type="submit">Send</button>
</form>
        
</div>
<div class="col-sm-3 text-center">

    <ul class="list-unstyled">
        <li>
            <i class="fas fa-map-marker-alt fa-2x i-color"></i>
            <p>Taunsa, Dera Ghazi Khan,Pakistan</p>
        </li>
        <li>
            <i class="fas fa-phone mt-4 fa-2x i-color"></i>
            <p>+923441221998</p>
        </li>
        <li>
            <i class="fa-solid fa-envelope mt-4 fa-2x i-color"></i>
       <p>babar69034096@gmail.com</p>
        </li>
    </ul>
</div>
</div>
</div>
<div class="text-center">

    <a href="#" target="_blank"> <i class="fab fa-twitter i-color mx-3"></i></a>
    <a href="https://www.facebook.com/profile.php?id=100010322475003&mibextid=ZbWKwL" target="_blank"> <i class="fab fa-facebook-f i-color mx-3  "></i></a>
    <a href="http://instagram.com/babar_ali998?utm_source=qr" target="_blank"> <i class="fab fa-instagram i-color mx-3"></i></a>
    <a href="#" target="_blank"> <i class="fab fa-dribbble i-color mx-3"></i></a>
</div>

    </x-slot>
</x-layout>