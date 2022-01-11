<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tebweb</title>

    <!-- css -->
    <link href="website_home/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="website_home/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="website_home/plugins/cubeportfolio/css/cubeportfolio.min.css">
    <link href="website_home/css/nivo-lightbox.css" rel="stylesheet" />
    <link href="website_home/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
    <link href="website_home/css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="website_home/css/owl.theme.css" rel="stylesheet" media="screen" />
    <link href="website_home/css/animate.css" rel="stylesheet" />
    <link href="website_home/css/style.css" rel="stylesheet">

    <!-- boxed bg -->
    <link id="bodybg" href="website_home/bodybg/bg1.css" rel="stylesheet" type="text/css" />
    <!-- template skin -->
    <link id="t-colors" href="website_home/color/default.css" rel="stylesheet">


</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

<div id="wrapper">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="top-area">
            <div class="container">
                <div class="row">

                </div>
            </div>
        </div>
        <div class="container navigation">

            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="website_home/img/323.png" alt="" width="150" height="40" />
                </a>
            </div>

            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#intro">Home</a></li>
                    <li><a href="#doctor">Doctors</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Section: intro -->
    <section id="intro" class="intro">
        <div class="intro-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
                            <h2 class="h-ultra">Tebweb</h2>
                        </div>
                        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
                            <h4 class="h-light">Provide <span class="color">best quality healthcare</span> for you</h4>
                        </div>
                        <div class="well well-trans">
                            <div class="wow fadeInRight" data-wow-delay="0.1s">

                                <ul class="lead-list">
                                    <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Affordable monthly premium packages</strong><br />Lorem ipsum dolor sit amet, in verterem persecuti vix, sit te meis</span></li>
                                    <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Choose your favourite doctor</strong><br />Sit zril sanctus scaevola ei, ea usu movet graeco</span></li>
                                    <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Only use friendly environment</strong><br />Wisi lobortis eos ex, per at movet delectus, qui no vocent deleniti</span></li>
                                </ul>

                            </div>
                        </div>


                    </div>
                    <div class="col-lg-6">
                        <div class="form-wrapper">
                            <div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">

                                <div class="panel panel-skin">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><span class="fa fa-pencil-square-o"></span> Make an appoinment <small>(Login Please)</small></h3>
                                    </div>
                                    <div class="panel-body">
                                        <form role="form" method="POST" action="{{route('auth.login')}}" class="lead">
                                            @csrf
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input class="form-control input-md" type="text" name="email" placeholder="user@example.com" autocomplete="username">
                                                        @if ($errors->has('email'))
                                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input class="form-control input-md" type="password" name="password" placeholder="Password" autocomplete="current-password">
                                                        @if ($errors->has('password'))
                                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            @include('flash-message')

                                            <input type="submit" value="Login" class="btn btn-skin btn-block btn-lg">

                                            <p class="lead-footer"><a href="{{route('auth.login')}}">If you do not have an account, enter here‏</a></p>

                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- /Section: intro -->

    <!-- Section: boxes -->
    <section id="boxes" class="home-section paddingtop-80">

        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-md-3">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box text-center">

                            <i class="fa fa-check fa-3x circled bg-skin"></i>
                            <h4 class="h-bold">Make an appoinment</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box text-center">

                            <i class="fa fa-list-alt fa-3x circled bg-skin"></i>
                            <h4 class="h-bold">Choose your Doctor</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box text-center">
                            <i class="fa fa-user-md fa-3x circled bg-skin"></i>
                            <h4 class="h-bold">Help by specialist</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box text-center">

                            <i class="fa fa-hospital-o fa-3x circled bg-skin"></i>
                            <h4 class="h-bold">Get diagnostic report</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section id="doctor" class="home-section bg-gray paddingbot-60">
        <div class="container marginbot-50">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="section-heading text-center">
                            <h2 class="h-bold">Doctors</h2>
                            Best Doctors</p>
                        </div>
                    </div>
                    <div class="divider-short"></div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div id="filters-container" class="cbp-l-filters-alignLeft">
                        <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All (<div class="cbp-filter-counter"></div>)</div>
                    </div>

                    <div id="grid-container" class="cbp-l-grid-team">
                        <ul>
                            @foreach($doctors as $doctor)
                            <li class="cbp-item psychiatrist">

                                <a href="#" class="cbp-caption cbp-singlePage">

                                    <div class="cbp-caption-defaultWrap">
                                        <img src="website_home/img/tebweb.jpg" alt="" width="100%">
                                    </div>

                                    <div class="cbp-caption-activeWrap">
                                        <div class="cbp-l-caption-alignCenter">
                                            <div class="cbp-l-caption-body">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#.html" class="cbp-singlePage cbp-l-grid-team-name">{{$doctor->first_name .' ' .$doctor->last_name}}</a>

                                <div class="cbp-l-grid-team-position">{{$doctor->department->name ?? ''}}</div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section>



    <footer>

        <div class="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="wow fadeInLeft" data-wow-delay="0.1s">
                            <div class="text-left">
                                <p>&copy;Copyright 2022 - Tebweb. All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="wow fadeInRight" data-wow-delay="0.1s">
                            <div class="text-right">
                            </div>
                            <!--
                                All links in the footer should remain intact.
                                Licenseing information is available at: http://bootstraptaste.com/license/
                                You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Medicio
                            -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

<!-- Core JavaScript Files -->
<script src="website_home/js/jquery.min.js"></script>
<script src="website_home/js/bootstrap.min.js"></script>
<script src="website_home/js/jquery.easing.min.js"></script>
<script src="website_home/js/wow.min.js"></script>
<script src="website_home/js/jquery.scrollTo.js"></script>
<script src="website_home/js/jquery.appear.js"></script>
<script src="website_home/js/stellar.js"></script>
<script src="website_home/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
<script src="website_home/js/owl.carousel.min.js"></script>
<script src="website_home/js/nivo-lightbox.min.js"></script>
<script src="website_home/js/custom.js"></script>


</body>

</html>
