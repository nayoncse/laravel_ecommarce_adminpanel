@extends('layouts.backend.master')
@section('content')
    <div class="row">
        <div class="col-xl-3 col-md-6 col-12">
            <div class="box box-body">
                <h6 class="text-uppercase">Unactivated Ads</h6>
                <div class="flexbox mt-2">
                    <span class="fa fa-warning text-danger font-size-40"></span>
                    <span class=" font-size-30">553</span>
                </div>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col-12">
            <div class="box box-body">
                <h6 class="text-uppercase">Activated Ads</h6>
                <div class="flexbox mt-2">
                    <span class="fa fa-picture-o text-info font-size-40"></span>
                    <span class=" font-size-30">4105</span>
                </div>
            </div>
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-xl-3 col-md-6 col-12">
            <div class="box box-body">
                <h6 class="text-uppercase">User registration</h6>
                <div class="flexbox mt-2">
                    <span class="fa fa-user-plus font-size-40 text-primary"></span>
                    <span class=" font-size-30">1250</span>
                </div>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col-12">
            <div class="box box-body">
                <h6 class="text-uppercase">Listed Companies</h6>
                <div class="flexbox mt-2">
                    <span class="fa fa-building font-size-40 text-success"></span>
                    <span class=" font-size-30">2150</span>
                </div>
            </div>
        </div>
        <!-- /.col -->
    </div>

    <div class="row">

        <div class="col-12 col-lg-6">
            <!-- AREA CHART -->
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Job Statistics</h4>
                    <ul class="box-controls pull-right">
                        <li><a class="box-btn-close" href="#"></a></li>
                        <li><a class="box-btn-slide" href="#"></a></li>
                        <li><a class="box-btn-fullscreen" href="#"></a></li>
                    </ul>
                </div>
                <div class="box-body">
                    <div class="chart">
                        <canvas id="chart_2" height="120"></canvas>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>

        <div class="col-12 col-lg-6">
            <!-- AREA CHART -->
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Ads Stats</h4>
                    <ul class="box-controls pull-right">
                        <li><a class="box-btn-close" href="#"></a></li>
                        <li><a class="box-btn-slide" href="#"></a></li>
                        <li><a class="box-btn-fullscreen" href="#"></a></li>
                    </ul>
                </div>
                <div class="box-body">
                    <div class="">
                        <canvas id="satatistics1" height="120" style="position: absolute;"></canvas>
                        <canvas id="satatistics2" height="120"></canvas>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>


        <div class="col-12 col-lg-6">
            <!-- AREA CHART -->
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Job Statistics</h4>
                    <ul class="box-controls pull-right">
                        <li><a class="box-btn-close" href="#"></a></li>
                        <li><a class="box-btn-slide" href="#"></a></li>
                        <li><a class="box-btn-fullscreen" href="#"></a></li>
                    </ul>
                </div>
                <div class="box-body">
                    <div class="chart-responsive">
                        <div class="chart" id="bar-chart" style="height: 300px;"></div>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>

        <div class="col-12 col-lg-6">
            <!-- AREA CHART -->
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Revenue Statistics</h4>

                    <ul class="box-controls pull-right">
                        <li><a class="box-btn-close" href="#"></a></li>
                        <li><a class="box-btn-slide" href="#"></a></li>
                        <li><a class="box-btn-fullscreen" href="#"></a></li>
                    </ul>
                </div>
                <div class="box-body chart-responsive">
                    <div class="chart" id="revenue-chart" style="height: 300px;"></div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </div>

        <div class="col-12 col-xl-4">
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Latest Job Opning</h4>
                </div>
                <div class="box-body p-0">
                    <div class="media-list media-list-hover">

                        <a class="media media-single" href="#">
                            <span class="avatar avatar-lg bg-info rounded-circle"><img src="../images/logo/logo-5.jpg" alt=""></span>
                            <div class="media-body">
                                <h5 class="text-fade">Developre</h5>
                                <span class="text-fade"><i class="fa fa-map-marker"></i> Miami</span>
                            </div>
                            <p class="media-right text-right text-fade">Last Date<br> 10th May 2018</p>
                        </a>

                        <a class="media media-single" href="#">
                            <span class="avatar avatar-lg bg-info rounded-circle"><img src="../images/logo/logo-4.jpg" alt=""></span>
                            <div class="media-body">
                                <h5 class="text-fade">Designer</h5>
                                <span class="text-fade"><i class="fa fa-map-marker"></i> Brazil</span>
                            </div>
                            <p class="media-right text-right text-fade">Last Date<br> 18th Oct 2018</p>
                        </a>

                        <a class="media media-single" href="#">
                            <span class="avatar avatar-lg bg-info rounded-circle"><img src="../images/logo/logo-3.jpg" alt=""></span>
                            <div class="media-body">
                                <h5 class="text-fade">Managner</h5>
                                <span class="text-fade"><i class="fa fa-map-marker"></i> London</span>
                            </div>
                            <p class="media-right text-right text-fade">Last Date<br> 10th Jan 2019</p>
                        </a>

                        <a class="media media-single" href="#">
                            <span class="avatar avatar-lg bg-info rounded-circle"><img src="../images/logo/logo-2.jpg" alt=""></span>
                            <div class="media-body">
                                <h5 class="text-fade">PHP</h5>
                                <span class="text-fade"><i class="fa fa-map-marker"></i> Abud habi</span>
                            </div>
                            <p class="media-right text-right text-fade">Last Date<br> 15th Nav 2018</p>
                        </a>

                        <a class="media media-single" href="#">
                            <span class="avatar avatar-lg bg-info rounded-circle"><img src="../images/logo/logo-1.jpg" alt=""></span>
                            <div class="media-body">
                                <h5 class="text-fade">Developre</h5>
                                <span class="text-fade"><i class="fa fa-map-marker"></i> New York</span>
                            </div>
                            <p class="media-right text-right text-fade">Last Date<br> 20th Oct 2018</p>
                        </a>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-6 col-xl-4">
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Top Applicants Filds</h4>
                    <div class="box-tools pull-right">
                        <ul class="card-controls">
                            <li class="dropdown">
                                <a data-toggle="dropdown" href="#"><i class="ion-android-more-vertical"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item active" href="#">Today</a>
                                    <a class="dropdown-item" href="#">Yesterday</a>
                                    <a class="dropdown-item" href="#">Last week</a>
                                    <a class="dropdown-item" href="#">Last month</a>
                                </div>
                            </li>
                            <li><a href="#" class="link card-btn-reload" data-toggle="tooltip" title="" data-original-title="Refresh"><i class="fa fa-circle-thin"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="box-body">
                    <div class="text-center py-20">
                        <div class="donut" data-peity='{ "fill": ["#7460ee", "#26c6da", "#fc4b6c"], "radius": 108, "innerRadius": 50  }' >6,4,2</div>
                    </div>

                    <ul class="flexbox flex-justified text-center mt-70">
                        <li class="br-1">
                            <div class="font-size-20 text-primary">65%</div>
                            <small class="font-size-12 text-fade">Computer</small>
                        </li>

                        <li class="br-1">
                            <div class="font-size-20 text-success">40%</div>
                            <small class="font-size-12 text-fade">Auto Mobile</small>
                        </li>

                        <li>
                            <div class="font-size-20 text-danger">20%</div>
                            <small class="font-size-12 text-fade">Management</small>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-6 col-xl-4">
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Overview Status</h4>
                </div>
                <div class="box-body px-0 pt-0 pb-30">
                    <div class="media-list media-list-hover media-list-divided">
                        <a class="media media-single" href="#">
                            <span class="title font-size-16 text-fade">New Applicants</span>
                            <span class="badge badge-lg badge-secondary">3259</span>
                        </a>

                        <a class="media media-single" href="#">
                            <span class="title font-size-16 text-fade">Active Applicants</span>
                            <span class="badge badge-lg badge-primary">12458</span>
                        </a>

                        <a class="media media-single" href="#">
                            <span class="title font-size-16 text-fade">Active Postings</span>
                            <span class="badge badge-lg badge-info">9658</span>
                        </a>

                        <a class="media media-single" href="#">
                            <span class="title font-size-16 text-fade">Postings Expiring Expired</span>
                            <span class="badge badge-lg badge-success">1524</span>
                        </a>

                        <a class="media media-single" href="#">
                            <span class="title font-size-16 text-fade">Totle Job Opening</span>
                            <span class="badge badge-lg badge-danger">41582</span>
                        </a>

                        <a class="media media-single" href="#">
                            <span class="title font-size-16 text-fade">Active Job Seekar</span>
                            <span class="badge badge-lg badge-warning">1548</span>
                        </a>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-12">
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Current Visitors</h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div id="world-map-markers" style="height: 302px"></div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>


        <div class="col-xl-4 col-12">
            <div class="box box-inverse pull-up bg-facebook">
                <div class="box-header no-border">
                    <span class="fa fa-facebook font-size-30"></span>
                    <div class="box-tools pull-right">
                        <h4 class="box-title">Facebook feed</h4>
                    </div>
                </div>

                <blockquote class="blockquote blockquote-inverse no-border m-0 py-15">
                    <p class="font-weight-300">Holisticly benchmark plug imperatives for multifunctional deliverables.</p>
                    <div class="flexbox font-size-16 font-weight-300">
                        <span class="text-fade"><small>21 November, 2018</small></span>
                        <span><i class="fa fa-heart"></i> 75</span>
                    </div>
                </blockquote>
            </div>

            <div class="box box-inverse box-carousel slide pull-up bg-twitter" data-ride="carousel">
                <div class="box-header no-border">
                    <span class="fa fa-twitter font-size-30"></span>
                    <div class="box-tools pull-right">
                        <h4 class="box-title">Carousel feed</h4>
                    </div>
                </div>

                <div class="carousel-inner">
                    <blockquote class="blockquote blockquote-inverse no-border m-0 py-15 carousel-item active">
                        <p class="font-weight-300">Holisticly benchmark plug imperatives for multifunctional deliverables.</p>
                        <div class="flexbox font-size-16 font-weight-300">
                            <span class="text-fade"><small>21 November, 2018</small></span>
                            <span><i class="fa fa-heart"></i> 62</span>
                        </div>
                    </blockquote>

                    <blockquote class="blockquote blockquote-inverse no-border m-0 py-15 carousel-item">
                        <p class="font-weight-300">Holisticly benchmark plug imperatives for multifunctional deliverables.</p>
                        <div class="flexbox font-size-16 font-weight-300">
                            <span class="text-fade"><small>21 November, 2018</small></span>
                            <span><i class="fa fa-heart"></i> 45</span>
                        </div>
                    </blockquote>

                    <blockquote class="blockquote blockquote-inverse no-border m-0 py-15 carousel-item">
                        <p class="font-weight-300">Holisticly benchmark plug imperatives for multifunctional deliverables.</p>
                        <div class="flexbox font-size-16 font-weight-300">
                            <span class="text-fade"><small>21 November, 2018</small></span>
                            <span><i class="fa fa-heart"></i> 65</span>
                        </div>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-12">
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">USA</h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div id="usa" style="height: 302px"></div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection
@push('library-css')
    <link href="{{ asset('vendors/jvectormap/lib2/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />

    <!-- Morris charts -->
    <link rel="stylesheet" href="{{ asset('vendors/morris.js/morris.css') }}">

@endpush
@push('library-js')

    <script src="{{ asset('vendors/chart.js-master/Chart.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('vendors/jquery-ui/jquery-ui.js') }}"></script>
    <!-- peity -->
    <script src="{{ asset('vendors/jquery.peity/jquery.peity.js') }}"></script>
    <script src="{{ asset('vendors/morris.js/morris.min.js') }}"></script>
    <!-- Vector map JavaScript -->
    <script src="{{ asset('vendors/jvectormap/lib2/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('vendors/jvectormap/lib2/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('vendors/jvectormap/lib2/jquery-jvectormap-us-aea-en.js') }}"></script>
    <script src="{{ asset('assets/backend/js/pages/dashboard.js') }}"></script>
@endpush
@push('custom-js')
    <script>
        $(function () {

            console.log('from page');
        })
    </script>
@endpush