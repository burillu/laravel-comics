@php
$menu= config('comics.menu'); 
//dd($menu);   
@endphp
<header>
    <div class="container">
        <div class="container d-flex justify-content-between align-items-center h-100">
            <div class="my-img-container">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo-dc">
            </div>
            <nav class="my-text-condensed">

                <ul class="nav text-secondary fw-bold  text-uppercase">
                    @foreach ($menu as $item)
                    <li class="nav-item">
                        <a class="nav-link ">{{$item['titolo']}}</a>

                    </li> 
                    @endforeach
                
                
                

                </ul>
        </nav>
        </div>
        
    </div>

</header>