<x-layout>
    <x-slot name='title'>Home </x-slot>

    <x-slot name='content'>
    
<div class="mt-5">
    <div class="text-center">
        <img src="{{asset('images/pic3.jpg')}}" alt="" class="img-thumbnail"
         width="250px" height="50px">
    </div>
    <div class="mt-5 text-white mx-5 text-justify">
        <h1 class="fw-blod">Hello,</h1>
        <div class="px-4" style="line-height: 2rem;">
            <p style="text-indent: 100px;">
            I am <b class="text-warning" >Babar Ali </b>
        having 5 years of full stack web development experience for 
    global business ,I offer the technical expertise you are seeking for your web developer position.  </p>
<p> Since earning my bachelor's degree in internet and web development 
    fro xyz university,I have served as web developer at 
    <b one of the biggest premier digital marketing abd web development firm.>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet velit iste similique, expedita eos reprehenderit molestiae repudiandae in quibusdam maiores totam error cum? Aut eaque nostrum ducimus facilis fuga commodi.</p>
</p>
        </div>

    </div>

    <div class="text-center">
        <a href="{{route('contact')}}" class="btn btn-outline-warning mx-5 y-3">Hire Me</a>
        <a href="{{route('contact')}}" class="btn btn-outline-info mx-5 y-3">Contact</a>

    </div>
</div>


    </x-slot>
</x-layout>