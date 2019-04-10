<!--Accordion wrapper-->
<style>
    #sidebar {
        min-width: 300px;
        max-width: 300px;
        background: white;
        color: rgba(0,0,0,.87);
        transition: all 0.3s;
        box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 3px 1px -2px rgba(0,0,0,0.12), 0 1px 5px 0 rgba(0,0,0,0.2);
    }
    #sidebar.active{
        margin-left: -250px;
    }

    #sidebar .sidebar-header{
        padding: 20px;
        background: darkgrey;
    }
    #sidebar ul.components{
        padding: 20px 0px;
        border-bottom: 1px solid #47748b;
    }
    #sidebar ul p{
        padding: 10px;
        font-size: 1.1em;
        display: block;
    }

    #sidebar ul li a{
        padding: 10px;
        font-size: 1.1em;
        display: block;
    }
    #sidebar ul li a:hover {
        color: rgba(0,0,0,.87);
        background-color: rgba(0,0,0,.05);
    }


    #sidebar ul li.active>a,
    a[aria-expanded="true"] {
        color: #fff;
        background: #6d7fcc;
    }
    a[data-toggle="collapse"] {
        position: relative;
    }
    .dropdown-toggle::after {
        display: block;
        position: absolute;
        top: 50%;
        right: 20px;
        transform: translateY(-50%);
    }
    ul ul a {
        font-size: 0.9em !important;
        padding-left: 30px !important;
        background: #6d7fcc;
    }

</style>

<nav id="sidebar">
    <div class="sidebar-header">

    </div>


    <ul class="list-unstyled">

        <li class="active">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="#">home1</a>
                </li>
                <li>
                    <a href="#">home2</a>
                </li>
                <li>
                    <a href="#">home3</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#">About</a>
        </li>
        <li>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Page</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="#">page1</a>
                </li>
                <li>
                    <a href="#">page2</a>
                </li>
                <li>
                    <a href="#">page3</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">Services</a>
        </li>
        <li>
            <a href="#">Contact Us</a>
        </li>
    </ul>

    <ul class="list-unstyled CTAs">
        <li>
            <a href="#" class="download">Download code</a>
        </li>
        <li>
            <a href="#" class="article">article</a>
        </li>
    </ul>
</nav>
<!--<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 bg-dark " style="background-color: black; height: 100vh">
            <ul>
                <li class="mb5" style="height: auto;text-align: center;">
                    <img src="{{ asset('img/logos/logo-header.png') }}" alt="" class="responsive-img" style="height: 34px; margin: 15px auto 15px auto;">
                </li>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">home1</a>
                        </li>
                        <li>
                            <a href="#">home2</a>
                        </li>
                        <li>
                            <a href="#">home3</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
-->

