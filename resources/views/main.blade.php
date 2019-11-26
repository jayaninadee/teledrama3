<?php
/**
 * Created by IntelliJ IDEA.
 * User: Jayani
 * Date: 11/4/2019
 * Time: 4:51 PM
 */
?>

<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Drama TV Application</title>
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description" content="Food Recipes Application">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">
    <link href="assets/css/main.cba69814a806ecc7945a.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
    <!--   head-->
    <div class="app-header header-shadow">

        <div class="app-header__logo">
            <div class="logo-src">
                <img style="margin-top: -20px; width: 150px; height: auto" src="assets/imgs/logocom.png">
            </div>
            <div class="header__pane ml-auto">
                <div>
                    <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                            data-class="closed-sidebar">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="app-header__mobile-menu">
            <div>
                <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
        <div class="app-header__menu">
            <span>
                <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                    <span class="btn-icon-wrapper">
                        <i class="fa fa-ellipsis-v fa-w-6"></i>
                    </span>
                </button>
            </span>
        </div>

        <div class="app-header__content">
            <div class="app-header-left">
                <div class="search-wrapper">
                    <div class="input-holder">
                        <input type="text" class="search-input" placeholder="Type to search">
                        <button class="search-icon"><span></span></button>
                    </div>
                    <button class="close"></button>
                </div>
                <!--                <ul class="header-megamenu nav">-->
                <!--                    <li class="nav-item">-->
                <!--                        <a href="dashboard" data-placement="bottom" rel="popover-focus" data-offset="300"-->
                <!--                           data-toggle="popover-custom" class="nav-link">-->
                <!--                            <!--<i class="nav-link-icon pe-7s-gift"> </i>-->
                <!--                            Dashboard-->
                <!--                            <i class="fa fa-angle-down ml-2 opacity-5"></i>-->
                <!--                        </a>-->
                <!--                        <div class="rm-max-width">-->
                <!--                            <div class="d-none popover-custom-content">-->
                <!---->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                    </li>-->
                <!--                    <li class="btn-group nav-item">-->
                <!--                        <a href="foodcategories.html" class="nav-link" data-toggle="dropdown" aria-expanded="false">-->
                <!--                            <span class="badge badge-pill badge-danger ml-0 mr-2">10</span>-->
                <!--                            Food Categories-->
                <!--                            <i class="fa fa-angle-down ml-2 opacity-5"></i>-->
                <!--                        </a>-->
                <!---->
                <!--                    </li>-->
                <!--                    <li class="dropdown nav-item">-->
                <!--                        <a href="fooditems.html" aria-haspopup="true" data-toggle="dropdown" class="nav-link"-->
                <!--                           aria-expanded="false">-->
                <!--                            <!--<i class="nav-link-icon pe-7s-settings"></i>-->
                <!--                            Food Items-->
                <!--                            <i class="fa fa-angle-down ml-2 opacity-5"></i>-->
                <!--                        </a>-->
                <!---->
                <!--                    </li>-->
                <!--                </ul>-->
            </div>
            <div class="app-header-right">
                <div class="header-dots">
                    <div class="dropdown">

                    </div>
                    <div class="dropdown">

                    </div>
                    <div class="dropdown">

                    </div>
                    <div class="dropdown">

                    </div>
                </div>

                <div class="header-btn-lg pr-0">
                    <div class="widget-content p-0">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left">
                                <div class="btn-group">
                                    <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                       class="p-0 btn">
                                        <img width="42" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
                                        <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                    </a>
                                    <div tabindex="-1" role="menu" aria-hidden="true"
                                         class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
                                        <div class="dropdown-menu-header">
                                            <div class="dropdown-menu-header-inner bg-info">
                                                <div class="menu-header-image opacity-2"
                                                     style="background-image: url('assets/images/dropdown-header/city3.jpg');"></div>
                                                <div class="menu-header-content text-left">
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <img width="42" class="rounded-circle"
                                                                     src="assets/images/avatars/1.jpg"
                                                                     alt="">
                                                            </div>
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading">  {{ Auth::user()->name }}
                                                                </div>
                                                                <div class="widget-subheading opacity-8">Admin
                                                            </div>
                                                            </div>
                                                            <div class="widget-content-right mr-2">
                                                                <button class="btn-pill btn-shadow btn-shine btn btn-focus" formaction="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                                    Logout

                                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                            {{ csrf_field() }}
                                                                        </form>

                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="widget-content-left  ml-3 header-user-info">
                                <div class="widget-heading">
                                    {{ Auth::user()->name }}
                                </div>
                                <div class="widget-subheading">
                                  Admin
                                </div>
                            </div>
                            <div class="widget-content-right header-user-info ml-3">
                                <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                    <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-btn-lg">
                    <button type="button" class="hamburger hamburger--elastic open-right-drawer">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!--end head-->

    <div class="app-main">
        <!--  nav bar-->
        <div class="app-sidebar sidebar-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                                data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                    <span>
                        <button type="button"
                                class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
            </div>
            <div class="scrollbar-sidebar">
                <div class="app-sidebar__inner">
                    <ul class="vertical-nav-menu">
                        <li class="app-sidebar__heading">Section Menu</li>
                        <li class="mm-active">
                            <a href="#">
                                <i class="fa fa-list-alt pe-7s-rocket"></i>
                                Categories
                                <!--<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>-->
                            </a>
                            <ul class="mm-show">
                                <li>
                                    <a href="dashboard" class="mm-active">
                                        <i class="metismenu-icon">
                                        </i>Dashboard
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('channel') }}">
                                        <i class="metismenu-icon">
                                        </i>Channel
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('teledrama') }}">
                                        <i class="metismenu-icon">
                                        </i>Teledrama
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('episode') }}" >
                                        <i class="metismenu-icon">
                                        </i>Episode
                                    </a>
                                </li>
                            </ul>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
        <!--end nav bar-->

        <!--content-->


        <!--content-->
        @yield('content')


        <div class="app-main__outer">
            <div class="app-main__inner">
                <div class="app-page-title">
                    <div class="page-title-wrapper">
                        <div class="page-title-heading">
                            <div class="page-title-icon">
                                <i class="fa fa-dashcube icon-gradient bg-ripe-malin">
                                </i>
                            </div>
                            <div>Home Dashboard
                                <div class="page-title-subheading">Food Recipy Application Dashboard
                                </div>
                            </div>
                        </div>
                        <div class="page-title-actions">
                            <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom"
                                    class="btn-shadow mr-3 btn btn-dark">
                                <i class="fa fa-star"></i>
                            </button>
                            <div class="d-inline-block dropdown">
                                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        class="btn-shadow dropdown-toggle btn btn-info">
                                        <span class="btn-icon-wrapper pr-2 opacity-7">
                                            <i class="fa fa-user-secret fa-w-20"></i>
                                        </span>
                                    Sections
                                </button>
                                <div tabindex="-1" role="menu" aria-hidden="true"
                                     class="dropdown-menu dropdown-menu-right">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link">
                                                <i class="nav-link-icon lnr-inbox"></i>
                                                <span>
                                                        Dashboard
                                                    </span>
                                                <!--<div class="ml-auto badge badge-pill badge-secondary">86</div>-->
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link">
                                                <i class="nav-link-icon lnr-book"></i>
                                                <span>
                                                        Food Categories
                                                    </span>
                                                <div class="ml-auto badge badge-pill badge-danger">10</div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link">
                                                <i class="nav-link-icon lnr-picture"></i>
                                                <span>
                                                        Food Items
                                            </span>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tabs-animation">
                    <div class="row">
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content bg-night-fade">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Total Recipes</div>
                                        <div class="widget-subheading">This year expenses</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-white"><span>1000</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content bg-arielle-smile">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Food Items</div>
                                        <div class="widget-subheading">Total Items Updates</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-white"><span>1568</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content bg-happy-green">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Followers</div>
                                        <div class="widget-subheading">People Interested</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-white"><span>56%</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content bg-premium-dark">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Products Sold</div>
                                        <div class="widget-subheading">Revenue streams</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-warning"><span>$14M</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-6 col-xl-5">
                            <div class="mb-3 card">
                                <div class="card-header-tab card-header-tab-animation card-header">
                                    <div class="card-header-title">
                                        <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                                        Adsense Report
                                    </div>
                                    <ul class="nav">
                                        <li class="nav-item"><a data-toggle="tab" href="#tabs-eg-77"
                                                                class="active nav-link">Last</a></li>
                                        <li class="nav-item"><a data-toggle="tab" href="#tabs-eg-88"
                                                                class="nav-link second-tab-toggle">Current</a></li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="tabs-eg-77">
                                            <div class="card mb-3 widget-chart widget-chart2 text-left w-100">
                                                <div class="widget-chat-wrapper-outer">
                                                    <div class="widget-chart-content pt-3 pr-3 pl-3">
                                                        <div class="widget-chart-flex">
                                                            <div class="widget-numbers">
                                                                <div class="widget-chart-flex">
                                                                    <div>
                                                                        <small class="opacity-5">$</small>
                                                                        <span>368</span></div>
                                                                    <div class="widget-title ml-2 opacity-5 font-size-lg text-muted">
                                                                        Total Leads
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
                                                        <div id="dashboard-sparkline-carousel-3"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="text-muted text-uppercase font-size-md opacity-5 font-weight-normal">
                                                Top Authors</h6>
                                            <div class="scroll-area-sm">
                                                <div class="scrollbar-container">
                                                    <ul class="rm-list-borders rm-list-borders-scroll list-group list-group-flush">
                                                        <li class="list-group-item">
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <img width="42" class="rounded-circle"
                                                                             src="assets/images/avatars/9.jpg" alt="">
                                                                    </div>
                                                                    <div class="widget-content-left">
                                                                        <div class="widget-heading">Supun Mayushan
                                                                        </div>
                                                                        <div class="widget-subheading">CEO
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-content-right">
                                                                        <div class="font-size-xlg text-muted">
                                                                            <small class="opacity-5 pr-1">$</small>
                                                                            <span>129</span>
                                                                            <small class="text-danger pl-2">
                                                                                <i class="fa fa-angle-down"></i>
                                                                            </small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <img width="42" class="rounded-circle"
                                                                             src="assets/images/avatars/9.jpg" alt="">
                                                                    </div>
                                                                    <div class="widget-content-left">
                                                                        <div class="widget-heading">Supun Nanayakkara
                                                                        </div>
                                                                        <div class="widget-subheading">Software
                                                                            Engineer
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-content-right">
                                                                        <div class="font-size-xlg text-muted">
                                                                            <small class="opacity-5 pr-1">$</small>
                                                                            <span>1554</span>
                                                                            <small class="text-success pl-2">
                                                                                <i class="fa fa-angle-up"></i>
                                                                            </small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <img width="42" class="rounded-circle"
                                                                             src="assets/images/avatars/4.jpg" alt="">
                                                                    </div>
                                                                    <div class="widget-content-left">
                                                                        <div class="widget-heading">Pasindu Piyumal
                                                                        </div>
                                                                        <div class="widget-subheading">Software Engineer
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-content-right">
                                                                        <div class="font-size-xlg text-muted">
                                                                            <small class="opacity-5 pr-1">$</small>
                                                                            <span>429</span>
                                                                            <small class="text-warning pl-2">
                                                                                <i class="fa fa-dot-circle"></i>
                                                                            </small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <img width="42" class="rounded-circle"
                                                                             src="assets/images/avatars/3.jpg" alt="">
                                                                    </div>
                                                                    <div class="widget-content-left">
                                                                        <div class="widget-heading">Lahiru Diwankara
                                                                        </div>
                                                                        <div class="widget-subheading">Software Engineer
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-content-right">
                                                                        <div class="font-size-xlg text-muted">
                                                                            <small class="opacity-5 pr-1">$</small>
                                                                            <span>129</span>
                                                                            <small class="text-danger pl-2">
                                                                                <i class="fa fa-angle-down"></i>
                                                                            </small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <img width="42" class="rounded-circle"
                                                                             src="assets/images/avatars/2.jpg" alt="">
                                                                    </div>
                                                                    <div class="widget-content-left">
                                                                        <div class="widget-heading">Dushan Namindu</div>
                                                                        <div class="widget-subheading">Software
                                                                            Engineer
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-content-right">
                                                                        <div class="font-size-xlg text-muted">
                                                                            <small class="opacity-5 pr-1">$</small>
                                                                            <span>54</span>
                                                                            <small class="text-success pl-2">
                                                                                <i class="fa fa-angle-up"></i>
                                                                            </small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tabs-eg-88">
                                            <div class="card mb-3 widget-chart widget-chart2 text-left w-100">
                                                <div class="widget-chat-wrapper-outer">
                                                    <div class="widget-chart-content p-3">
                                                        <div class="widget-chart-flex">
                                                            <div class="widget-numbers">
                                                                <div class="widget-chart-flex">
                                                                    <div>
                                                                        <small class="opacity-5">$</small>
                                                                        <span>851</span></div>
                                                                    <div class="widget-title ml-2 opacity-5 font-size-lg text-muted">
                                                                        Adsense Total
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
                                                        <div id="dashboard-sparklines-333"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="text-muted text-uppercase font-size-md opacity-5 font-weight-normal">
                                                Last Month Highlights</h6>
                                            <div class="scroll-area-sm">
                                                <div class="scrollbar-container">
                                                    <ul class="rm-list-borders rm-list-borders-scroll list-group list-group-flush">
                                                        <li class="list-group-item">
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <img width="42" class="rounded-circle"
                                                                             src="assets/images/avatars/1.jpg" alt="">
                                                                    </div>
                                                                    <div class="widget-content-left">
                                                                        <div class="widget-heading">Ella-Rose Henry
                                                                        </div>
                                                                        <div class="widget-subheading">Web Developer
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-content-right">
                                                                        <div class="font-size-xlg text-muted">
                                                                            <small class="opacity-5 pr-1">$</small>
                                                                            <span>129</span>
                                                                            <small class="text-danger pl-2">
                                                                                <i class="fa fa-angle-down"></i>
                                                                            </small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <img width="42" class="rounded-circle"
                                                                             src="assets/images/avatars/10.jpg" alt="">
                                                                    </div>
                                                                    <div class="widget-content-left">
                                                                        <div class="widget-heading">Ruben Tillman</div>
                                                                        <div class="widget-subheading">UI Designer</div>
                                                                    </div>
                                                                    <div class="widget-content-right">
                                                                        <div class="font-size-xlg text-muted">
                                                                            <small class="opacity-5 pr-1">$</small>
                                                                            <span>54</span>
                                                                            <small class="text-success pl-2">
                                                                                <i class="fa fa-angle-up"></i>
                                                                            </small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3"><img
                                                                                width="42" class="rounded-circle"
                                                                                src="assets/images/avatars/9.jpg" alt="">
                                                                    </div>
                                                                    <div class="widget-content-left">
                                                                        <div class="widget-heading">Vinnie Wagstaff
                                                                        </div>
                                                                        <div class="widget-subheading">Java Programmer
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-content-right">
                                                                        <div class="font-size-xlg text-muted">
                                                                            <small class="opacity-5 pr-1">$</small>
                                                                            <span>429</span>
                                                                            <small class="text-warning pl-2">
                                                                                <i class="fa fa-dot-circle"></i>
                                                                            </small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <img width="42" class="rounded-circle"
                                                                             src="assets/images/avatars/5.jpg" alt="">
                                                                    </div>
                                                                    <div class="widget-content-left">
                                                                        <div class="widget-heading">Ella-Rose Henry
                                                                        </div>
                                                                        <div class="widget-subheading">Web Developer
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-content-right">
                                                                        <div class="font-size-xlg text-muted">
                                                                            <small class="opacity-5 pr-1">$</small>
                                                                            <span>129</span>
                                                                            <small class="text-danger pl-2">
                                                                                <i class="fa fa-angle-down"></i>
                                                                            </small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <img width="42" class="rounded-circle"
                                                                             src="assets/images/avatars/8.jpg" alt="">
                                                                    </div>
                                                                    <div class="widget-content-left">
                                                                        <div class="widget-heading">Ruben Tillman</div>
                                                                        <div class="widget-subheading">UI Designer</div>
                                                                    </div>
                                                                    <div class="widget-content-right">
                                                                        <div class="font-size-xlg text-muted">
                                                                            <small class="opacity-5 pr-1">$</small>
                                                                            <span>54</span>
                                                                            <small class="text-success pl-2">
                                                                                <i class="fa fa-angle-up">
                                                                                </i>
                                                                            </small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <img width="42" class="rounded-circle"
                                                                             src="assets/images/avatars/5.jpg" alt="">
                                                                    </div>
                                                                    <div class="widget-content-left">
                                                                        <div class="widget-heading">Ella-Rose Henry
                                                                        </div>
                                                                        <div class="widget-subheading">Web Developer
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-content-right">
                                                                        <div class="font-size-xlg text-muted">
                                                                            <small class="opacity-5 pr-1">$</small>
                                                                            <span>129</span>
                                                                            <small class="text-danger pl-2">
                                                                                <i class="fa fa-angle-down"></i>
                                                                            </small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <img width="42" class="rounded-circle"
                                                                             src="assets/images/avatars/4.jpg" alt="">
                                                                    </div>
                                                                    <div class="widget-content-left">
                                                                        <div class="widget-heading">Ruben Tillman</div>
                                                                        <div class="widget-subheading">UI Designer</div>
                                                                    </div>
                                                                    <div class="widget-content-right">
                                                                        <div class="font-size-xlg text-muted">
                                                                            <small class="opacity-5 pr-1">$</small>
                                                                            <span>54</span>
                                                                            <small class="text-success pl-2">
                                                                                <i class="fa fa-angle-up"></i>
                                                                            </small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 col-xl-7">
                            <div class="mb-3 card">
                                <div class="card-header-tab card-header">
                                    <div class="card-header-title">
                                        <i class="header-icon lnr-rocket icon-gradient bg-tempting-azure"> </i>
                                        Bandwidth Reports
                                    </div>
                                    <div class="btn-actions-pane-right">
                                        <div class="nav">
                                            <a href="#tab-eg-55" data-toggle="tab"
                                               class="border-0 btn-pill btn-wide btn-transition active btn btn-outline-alternate">Tab
                                                1</a>
                                            <a href="#tab-eg-66" data-toggle="tab"
                                               class="ml-1 btn-pill btn-wide border-0 btn-transition  btn btn-outline-alternate second-tab-toggle-alt">Tab
                                                2</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="tab-eg-55">
                                        <div class="widget-chart p-0">
                                            <div id="bar-vertical-candle-lg"></div>
                                            <div class="widget-chart-content">
                                                <div class="widget-description mt-0 text-warning">
                                                    <i class="fa fa-arrow-left"></i>
                                                    <span class="pl-1">175.5%</span>
                                                    <span class="text-muted opacity-8 pl-1">increased server resources</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-2 card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="widget-content">
                                                        <div class="widget-content-outer">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left">
                                                                    <div class="widget-numbers fsize-3 text-muted">63%
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-right">
                                                                    <div class="text-muted opacity-6">Generated Leads
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="widget-progress-wrapper mt-1">
                                                                <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                                    <div class="progress-bar bg-danger"
                                                                         role="progressbar" aria-valuenow="63"
                                                                         aria-valuemin="0" aria-valuemax="100"
                                                                         style="width: 63%;"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="widget-content">
                                                        <div class="widget-content-outer">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left">
                                                                    <div class="widget-numbers fsize-3 text-muted">32%
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-right">
                                                                    <div class="text-muted opacity-6">Submitted
                                                                        Tickers
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="widget-progress-wrapper mt-1">
                                                                <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                                    <div class="progress-bar bg-success"
                                                                         role="progressbar" aria-valuenow="32"
                                                                         aria-valuemin="0" aria-valuemax="100"
                                                                         style="width: 32%;"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="widget-content">
                                                        <div class="widget-content-outer">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left">
                                                                    <div class="widget-numbers fsize-3 text-muted">71%
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-right">
                                                                    <div class="text-muted opacity-6">Server
                                                                        Allocation
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="widget-progress-wrapper mt-1">
                                                                <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                                    <div class="progress-bar bg-primary"
                                                                         role="progressbar" aria-valuenow="71"
                                                                         aria-valuemin="0" aria-valuemax="100"
                                                                         style="width: 71%;"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="widget-content">
                                                        <div class="widget-content-outer">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left">
                                                                    <div class="widget-numbers fsize-3 text-muted">41%
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-right">
                                                                    <div class="text-muted opacity-6">Generated Leads
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="widget-progress-wrapper mt-1">
                                                                <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                                    <div class="progress-bar bg-warning"
                                                                         role="progressbar" aria-valuenow="41"
                                                                         aria-valuemin="0" aria-valuemax="100"
                                                                         style="width: 41%;"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab-eg-66">
                                        <div class="widget-chart p-0">
                                            <div id="dashboard-sparkline-37"></div>
                                            <div class="widget-chart-content">
                                                <div class="widget-description mt-0 text-success">
                                                    <i class="fa fa-arrow-up"></i>
                                                    <span class="pr-1">37.2%</span>
                                                    <span class="text-muted opacity-8">performance increase</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-2 card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="widget-content">
                                                        <div class="widget-content-outer">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left">
                                                                    <div class="widget-numbers fsize-3 text-muted">23%
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-right">
                                                                    <div class="text-muted opacity-6">Deploys</div>
                                                                </div>
                                                            </div>
                                                            <div class="widget-progress-wrapper mt-1">
                                                                <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                                    <div class="progress-bar bg-warning"
                                                                         role="progressbar" aria-valuenow="23"
                                                                         aria-valuemin="0" aria-valuemax="100"
                                                                         style="width: 23%;"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="widget-content">
                                                        <div class="widget-content-outer">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left">
                                                                    <div class="widget-numbers fsize-3 text-muted">76%
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-right">
                                                                    <div class="text-muted opacity-6">Traffic</div>
                                                                </div>
                                                            </div>
                                                            <div class="widget-progress-wrapper mt-1">
                                                                <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                                    <div class="progress-bar bg-info" role="progressbar"
                                                                         aria-valuenow="76" aria-valuemin="0"
                                                                         aria-valuemax="100" style="width: 76%;"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="widget-content">
                                                        <div class="widget-content-outer">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left">
                                                                    <div class="widget-numbers fsize-3 text-muted">83%
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-right">
                                                                    <div class="text-muted opacity-6">Servers Load</div>
                                                                </div>
                                                            </div>
                                                            <div class="widget-progress-wrapper mt-1">
                                                                <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                                    <div class="progress-bar bg-danger"
                                                                         role="progressbar" aria-valuenow="83"
                                                                         aria-valuemin="0" aria-valuemax="100"
                                                                         style="width: 83%;"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="widget-content">
                                                        <div class="widget-content-outer">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left">
                                                                    <div class="widget-numbers fsize-3 text-muted">48%
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-right">
                                                                    <div class="text-muted opacity-6">Reportd Bugs</div>
                                                                </div>
                                                            </div>
                                                            <div class="widget-progress-wrapper mt-1">
                                                                <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                                    <div class="progress-bar bg-alternate"
                                                                         role="progressbar" aria-valuenow="48"
                                                                         aria-valuemin="0" aria-valuemax="100"
                                                                         style="width: 48%;"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-4 col-xl-4">
                            <div class="card-hover-shadow-2x mb-3 card">
                                <div class="rm-border responsive-center text-left card-header">
                                    <div><h5 class="menu-header-title text-capitalize text-success">Received
                                            Messages</h5></div>
                                </div>
                                <div class="widget-chart widget-chart2 text-left pt-0">
                                    <div class="widget-chat-wrapper-outer">
                                        <div class="widget-chart-content">
                                            <div class="widget-chart-flex">
                                                <div class="widget-numbers">
                                                    <div class="widget-chart-flex">
                                                        <div class="text-success"><span>348</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-chart-wrapper widget-chart-wrapper-lg he-auto opacity-10 m-0">
                                            <div id="dashboard-sparkline-3"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-4">
                            <div class="card-hover-shadow-2x mb-3 card">
                                <div class="rm-border responsive-center text-left card-header">
                                    <div><h5 class="menu-header-title text-capitalize text-danger">Sent Messages</h5>
                                    </div>
                                </div>
                                <div class="widget-chart widget-chart2 text-left pt-0">
                                    <div class="widget-chat-wrapper-outer">
                                        <div class="widget-chart-content">
                                            <div class="widget-chart-flex">
                                                <div class="widget-numbers">
                                                    <div class="widget-chart-flex">
                                                        <div class="text-danger"><span>425</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-chart-wrapper widget-chart-wrapper-lg he-auto opacity-10 m-0">
                                            <div id="dashboard-sparkline-1"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4 col-xl-4">
                            <div class="card-hover-shadow-2x mb-3 card bg-dark">
                                <div class="rm-border bg-dark responsive-center text-left card-header">
                                    <div><h5 class="menu-header-title text-capitalize text-warning">Inbox Total</h5>
                                    </div>
                                </div>
                                <div class="widget-chart widget-chart2 text-left pt-0">
                                    <div class="widget-chat-wrapper-outer">
                                        <div class="widget-chart-content">
                                            <div class="widget-chart-flex">
                                                <div class="widget-numbers">
                                                    <div class="widget-chart-flex">
                                                        <div class="text-warning"><span>274</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-chart-wrapper widget-chart-wrapper-lg he-auto opacity-10 m-0">
                                            <div id="dashboard-sparkline-4"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>




    </div>


</div>

<!--footer            -->
<div class="app-wrapper-footer">
    <div class="app-footer">
        <div class="app-footer__inner">
            <div class="app-footer-left">
                <div class="footer-dots">
                    <label>
                        Copyright © 2019
                    </label>
                    <a href="#">
                        <label> Commercial technologies Plus </label>
                    </a>
                    <label>
                        All right reserved
                    </label>
                </div>
            </div>
            <div class="app-footer-right">
                <ul class="header-megamenu nav">

                </ul>
            </div>
        </div>
    </div>
</div>
<!--footer            -->

<div class="app-drawer-wrapper">
    <div class="drawer-nav-btn">
        <button type="button" class="hamburger hamburger--elastic is-active">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span></span></button>
    </div>
    <div class="drawer-content-wrapper">
        <div class="scrollbar-container">
            <h3 class="drawer-heading">Servers Status</h3>
            <div class="drawer-section">
                <div class="row">
                    <div class="col">
                        <div class="progress-box"><h4>Server Load 1</h4>
                            <div class="circle-progress circle-progress-gradient-xl mx-auto">
                                <small></small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="progress-box"><h4>Server Load 2</h4>
                            <div class="circle-progress circle-progress-success-xl mx-auto">
                                <small></small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="progress-box"><h4>Server Load 3</h4>
                            <div class="circle-progress circle-progress-danger-xl mx-auto">
                                <small></small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="mt-3"><h5 class="text-center card-title">Live Statistics</h5>
                    <div id="sparkline-carousel-3"></div>
                    <div class="row">
                        <div class="col">
                            <div class="widget-chart p-0">
                                <div class="widget-chart-content">
                                    <div class="widget-numbers text-warning fsize-3">43</div>
                                    <div class="widget-subheading pt-1">Packages</div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="widget-chart p-0">
                                <div class="widget-chart-content">
                                    <div class="widget-numbers text-danger fsize-3">65</div>
                                    <div class="widget-subheading pt-1">Dropped</div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="widget-chart p-0">
                                <div class="widget-chart-content">
                                    <div class="widget-numbers text-success fsize-3">18</div>
                                    <div class="widget-subheading pt-1">Invalid</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="text-center mt-2 d-block">
                        <button class="mr-2 border-0 btn-transition btn btn-outline-danger">Escalate Issue</button>
                        <button class="border-0 btn-transition btn btn-outline-success">Support Center</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="app-drawer-overlay d-none animated fadeIn"></div>
<script type="text/javascript" src="assets/scripts/main.cba69814a806ecc7945a.js"></script>
<script type="text/javascript" src="assets/scripts/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="assets/scripts/imgupload.js"></script>

</body>

</html>
