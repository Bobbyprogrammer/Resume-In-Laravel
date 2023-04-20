<div class="border-end border-warning h-100">
 <div class="text-center">
    <img src="{{asset('images/pic3.jpg')}}" alt="" class="img-fluid rounded-circle mt-5">

    <h1 class="text-white mt-3"> Babar Ali</h1>
 </div>

 <nav class="nav flex-column text-center mt-4">
    <a href="{{asset('/')}}" class="nav-link {{Request::routeIs('Home')? 'active' : " "}}">Home</a>
    <a href="{{asset('service')}}" class="nav-link {{Request::routeIs('service')? 'active' : " "}}">Services</a>
    <a href="{{asset('skill')}}" class="nav-link {{Request::routeIs('skill')? 'active' : " "}}" >Skills</a>
    <a href="{{asset('contact')}}" class="nav-link {{Request::routeIs('contact')? 'active' : " "}}">Contact</a>
 </nav>
   
</div>