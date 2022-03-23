@extends('layouts.jobs')

@section('content')
    <div ng-controller="JobController">

        <div ng-if="jobs.data.length > 0">
            <!-- Jobs -->
            <section class="job-box" ng-repeat="(index, job) in jobs.data">
                <div class="job-info">
                    <div class="title-job-company">
                        <h4 class="job">@{{ job.job_type +" "+ job.job_title }}</h4>
                        <span class="desc"><img src="{{ asset('img/Path 49046.svg') }}" alt="right-mark" srcset=""> Premium</span>
                        <h4 class="company-name">@{{ job.job_type +" - "+ job.job_title }}</h4>
                        <p class="post-time show-small">posted on @{{ job.posted_date }}</p>

                        <div class="more-details">
                            <ul>
                                <li><img src="{{ asset('img/Group 11462.svg') }}" alt="time-icon" srcset=""><span class="small-desc">@{{ job.experience }}-0</span></li>
                                <li><img src="{{ asset('img/Coin.svg') }}" alt="dolar-coin" srcset=""><span class="small-desc">@{{ job.salary }}</span></li>
                            </ul>
                        </div>

                    </div>
                    <div class="info-favourite">
                        <div class="time-like">
                            <p class="post-time hide-small">posted on @{{ job.posted_date }}</p>
                            <img src="{{ asset('/img/Saved-3.svg') }}" alt="star-icon" class="ml-15">
                        </div>
                        <div class="company-logo">
                            <img src="{{ asset('img/FedEx_Express_logo@2x.png') }}" alt="Fedex-job">
                        </div>
                    </div>

                </div>
                <div class="short-description">
                    <p class="description-p">@{{ job.description }}<a href="#" class="more">More</a></p>
                </div>
            </section>
            
        </div>

        <div>
            <ul uib-pagination total-items="totalItems" ng-model="currentPage" ng-change="pageChanged()" items-per-page="numPerPage" max-size="maxSize" class="pagination-md" boundary-links="true" force-ellipses="true"></ul>
        </div>


        <!-- Pagination -->
        {{-- <div class="pagination">
            <ul class="pages">
                <li class="page-number"><span class="nav-page diasbled">First</span></li>
                <li class="page-number"><span class="diasbled">Previous</span></li>
                <li class="page-number"><a class="nav-page active" href="">1</a></li>
                <li class="page-number"><a class="nav-page" href="">2</a></li>
                <li class="page-number"><a class="nav-page" href="">3</a></li>
                <li class="page-number"><a class="nav-page" href="">4</a></li>
                <li class="page-number"><a class="nav-page" href="">5</a></li>
                <li class="page-number"><span class="nav-page diasbled">First</span></li>
                <li class="page-number"><a class="nav-page" href="">...</a></li>
                <li class="page-number"><a class="nav-page" href="">Last</a></li>
            </ul>
        </div>

        <div class="pagination-mobile">
            <ul class="pages">
                <li class="page-number"><span class="diasbled">
                        << </span>
                </li>
                <li class="page-number"><span class="nav-page diasbled">
                        < </span>
                </li>
                <li class="page-number"><a class="nav-page active" href="">1</a></li>
                <li class="page-number"><a class="nav-page" href="">2</a></li>
                <li class="page-number"><a class="nav-page" href="">3</a></li>
                <li class="page-number"><a class="nav-page" href="">4</a></li>
                <li class="page-number"><span class="nav-page diasbled">...</span></li>
                <li class="page-number"><a class="nav-page" href=""> > </a></li>
                <li class="page-number"><a class="nav-page" href=""> >></a></li>
            </ul>
        </div> --}}
    </div>
    
@endsection