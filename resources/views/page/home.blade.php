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
@include('page.partials.carousel')
<div class="container my-5">
    <div class="row ">
        <div class="col-md-6 wow fadeInDown">
            <h4 class="font-weight-bold tpn-blue">{!! $home->text !!}</h4>
            <a href="" class="btn btn-danger">MÁS SERVICIOS</a>
        </div>
        <div class="col-md-6 fadeInDown">
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
                <div class="col-md-3 ">
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
    <div class="container-fluid">
        <div class="row">
            <img src="{{ $home->image }}" class="img-fluid" alt="">
        </div>
    </div>
@endsection
