<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel" >
    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        @foreach($slider as $key=>$s)
            <div class="carousel-item active">
                <div class="view">
                    <img class="d-block w-100"   src="{!! $s->image !!}"
                         alt="First slide">
                    <div class="mask tpn-rgba" style=""></div>
                </div>
                <div class="carousel-caption d-none d-md-block wow fadeInLeft" style="right: 0px; left: 0px; text-align: left; top: 30%">
                    <div class="container" >
                        <h3 class="h3-responsive">{!! $s->title !!}</h3>
                        <p>{!! $s->subtitle !!}</p>
                    </div>
                </div>
            </div>
        @endforeach
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