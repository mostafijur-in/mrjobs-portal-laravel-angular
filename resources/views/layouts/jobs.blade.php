<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" type="image/png" href="{{ asset('img/favicon-32x32.png') }}">

    <!-- Bootstrap Version 4.6 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600&family=Roboto:wght@300;400;500&family=Tajawal:wght@500;700&display=swap" rel="stylesheet">
    
    <!-- App Style -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Custom Style -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" media="(max-width: 1330px)">
    
    <!-- Scripts -->
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-animate.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-sanitize.js"></script>
    <script src="//angular-ui.github.io/bootstrap/ui-bootstrap-tpls-2.5.0.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

    <script src="{{ asset('js/app.js') }}"></script>
    
</head>

<body ng-app="MrJobsApp">
    <div id="app">
        {{-- Header --}}
        @include('layouts.header')

        <div class="main-body">
            <div class="filteration-container">
                <a href=""> <img class="filter-icon" src="{{ asset('img/Path 48997.svg') }}" alt="filter-icon" srcset=""></a>
                <ul class="list-of-choices">
                    <li><a href="" class="sort-choice sort-small">Date Modified</a></li>
                    <li><a href="" class="sort-choice sort-small">Date Modified</a></li>
                    <li><a href="" class="sort-choice sort-small">Date Modified</a></li>
                    <li><a href="" class="sort-choice sort-small">Date Modified</a></li>
                    <li><a href="" class="sort-choice sort-small">Date Modified</a></li>
                    <li><a href="" class="sort-choice sort-small">Date Modified</a></li>
                    <li><a href="" class="sort-choice sort-small">Date Modified</a></li>
                    <li><a href="" class="sort-choice sort-small">Date Modified</a></li>
                    <li><a href="" class="sort-choice sort-small">Date Modified</a></li>
                </ul>
            </div>

            <div class="container">
                
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <section class="header-title">
                            <h3 class=" title-h3">
                                1000+ Part Time Jobs in Dubai
                            </h3>
                            <p class="articl-p">
                                Browse 1654 jobs in Dubai
                            </p>
                            <div class="location-of-job show-small-sort">
                                <div>
                                    <h6 class="job-found-location">Jobs in Dubai</h6>
                                </div>
                                <div>
                                    <h6 class="sorting">sort by</h6>

                                    <a href="" class="sort-choice active">Relvance</a>
                                    <img src="{{ asset('img/Group 15629.svg') }}" alt="sort-icon-sm" srcset="" class="sort-icon-sm">

                                </div>
                            </div>
                        </section>
                    </div>
                </div>

                <div class="row">

                    {{-- Aside --}}
                    @include('layouts.jobs.aside')


                    <!-- End of Aside left  -->

                    <div class="col-lg-9 col-md-12 col-sm-12 sm-fullwidth">

                        <div class="search-form">
                            <div class="search-input">
                                <img src="{{ asset('img/Group 13107.svg') }}" class="form-icon" alt="" srcset="">
                                <input type="text" class="searchTerm right-border" placeholder="location">
                            </div>
                            <div class="search-input">
                                <img src="{{ asset('img/Group 13107.svg') }}" class="form-icon" alt="" srcset="">
                                <input type="text" class="searchTerm" class="form-icon" placeholder="location">
                            </div>
                            <button class="search-submit">Search</button>
                        </div>
                        <!-- End of Search form -->

                        @yield('content')

                        <div class="bread-crumb sm-bc">
                            <span class="active-span">Home / Job Search /</span><span class="non-active-span"> Jobs In Dubai</span>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        {{-- Footer --}}
        @include('layouts.footer')
    </div>
</body>

</html>