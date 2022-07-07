@extends('master.base')
<link rel="stylesheet" href="assets/css/cal.css">
@section('contenu')
<section class="section" id="men">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>Deco by pambou</h2>
                    <span>Des détails aux détails, c'est ce qui différencie pambou des autres magasins.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="men-item-carousel">
                    <div class="owl-men-item owl-carousel">
                       @foreach ($data as $item)
                    <div class="item">
                        <div class="thumb">
                            {{-- <div class="hover-content">
                                <ul>
                                    <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                    <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div> --}}
                            <img src="{{ $item}}">
                        </div>
                        {{-- <div class="down-content">
                            <h4>{{$item->nom}}</h4>
                            <span>{{$item->prixdevente}}</span>
                            <ul class="stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div> --}}
                    </div>
                       @endforeach
                    </div>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <div>

        
        
        <center>
            <iframe src="https://calendar.google.com/calendar/embed?src=gkovm4k240q1k9jh1el3rlkd40%40group.calendar.google.com&ctz=Africa%2FCasablanca" style="border: 0" width="800" height="600" frameborder="1" scrolling="no"></iframe>
        </center>
        <br>
        <br>
        <center>
            <button class="button-6" role="button"><a href="">Reserver</a></button>
        </center>

    </div>
    
    
    
</section>
@endsection