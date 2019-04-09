@extends('page.layouts.app')
@section('style')
    <style>
        .list-group-item {
            position: relative;
            display: block;
            padding: .50rem 1.25rem;
            margin-bottom: -1px;
            background-color: #fff;
            border: unset;
        }
    </style>
@endsection
@section('content')
    <!--Carousel Wrapper-->
    <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel" >
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-2" data-slide-to="1"></li>
            <li data-target="#carousel-example-2" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox" style="height: 500px;">
            <div class="carousel-item active">
                <div class="view">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(68).jpg"
                         alt="First slide">
                    <div class="mask rgba-black-light"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">Light mask</h3>
                    <p>First text</p>
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(6).jpg"
                         alt="Second slide">
                    <div class="mask rgba-black-strong"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">Strong mask</h3>
                    <p>Secondary text</p>
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg"
                         alt="Third slide">
                    <div class="mask rgba-black-slight"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">Slight mask</h3>
                    <p>Third text</p>
                </div>
            </div>
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->
<div class="container my-5">
    <div class="row ">
        <div class="col-md-6">
            <h4 class="font-weight-bold" style="color: #175A9F;">Servicio de cargas y descargas generales, transporte de carga peligrosa
                a cualquier punto del país</h4>
            <a href="" class="btn btn-danger">MÁS SERVICIOS</a>
        </div>
        <div class="col-md-6">
            <ul class="list-group">
                <li class="list-group-item">
                    <div class="md-v-line"></div><i class="fas fa-laptop mr-4 pr-3"></i> Cras justo odio
                </li>
                <li class="list-group-item">
                    <div class="md-v-line"></div><i class="fas fa-bomb mr-5"></i>Dapibus ac facilisis in
                </li>
                <li class="list-group-item">
                    <div class="md-v-line"></div><i class="fas fa-code mr-5"></i>Morbi leo risus
                </li>
                <li class="list-group-item">
                    <div class="md-v-line"></div><i class="far fa-gem mr-5"></i>Porta ac consectetur ac
                </li>
                <li class="list-group-item">
                    <div class="md-v-line"></div><i class="fas fa-cogs mr-5"></i>Vestibulum at eros
                </li>
            </ul>
        </div>
    </div>
</div>

    <div class="container-fluid " style="background-color: #DDDDDD">
        <div class="container py-5">
            <h5>NUESTRO EQUIPAMIENTO</h5>
            <div class="row">
                <div class="col-md-3">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad aspernatur enim ex exercitationem id labore magni mollitia natus nemo nesciunt nihil quam quas quis recusandae rem, sed tempore vitae.</p>
                </div>
                <div class="col-md-3">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta eaque, facilis harum illo ipsam magni mollitia nam officiis omnis pariatur possimus provident quo reprehenderit tempore voluptates! Aperiam earum error porro.</p>
                </div>
                <div class="col-md-3">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci dolorum est magnam perspiciatis quasi quis quod recusandae saepe suscipit ullam. Necessitatibus recusandae rerum sequi similique! Amet reprehenderit vel veniam veritatis!</p>
                </div>
                <div class="col-md-3">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab autem corporis eaque eligendi eos excepturi fuga harum illo in nobis numquam quasi, quod repellendus repudiandae soluta tempora unde, veniam voluptates!</p>
                </div>
            </div>
        </div>
    </div>
@endsection
