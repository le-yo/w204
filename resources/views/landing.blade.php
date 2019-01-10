@extends('nowui.layouts.main')
@section('title','welcome')
@section('content')
    <div class="page-header" filter-color="orange">
        <div class="page-header-image" style="background-image:url({{URL::asset('nowui/assets/img/moyale.jpg')}})"></div>
        <div class="container">
            <div class="col-md-4 content-center">
                <div class="card card-login card-plain">
                    <form class="form" method="" action="">
                        <div class="header header-primary text-center">
                            <h1 class="h1-seo">*483*9#</h1>
                            <h3>Start the journey...</h3>
                            <br>
                            {{--<div class="logo-container">--}}
                            {{--<img src="{{URL::asset('nowui/assets/img/now-logo.png')}}" alt="">--}}
                            {{--</div>--}}

                        </div>
                        <div class="content">
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons users_circle-08"></i>
                                </span>
                                <input type="text" class="form-control" placeholder="search yourname.com/.co.ke...">
                            </div>
                            {{--<div class="input-group form-group-no-border input-lg">--}}
                            {{--<span class="input-group-addon">--}}
                            {{--<i class="now-ui-icons text_caps-small"></i>--}}
                            {{--</span>--}}
                            {{--<input type="text" placeholder="Last Name..." class="form-control" />--}}
                            {{--</div>--}}
                        </div>
                        <div class="footer text-center">
                            <a href="#pablo" class="btn btn-primary btn-round btn-lg btn-block">Search</a>
                        </div>
                        {{--<div class="pull-left">--}}
                        {{--<h6>--}}
                        {{--<a href="#pablo" class="link">Create Account</a>--}}
                        {{--</h6>--}}
                        {{--</div>--}}
                        {{--<div class="pull-right">--}}
                        {{--<h6>--}}
                        {{--<a href="#pablo" class="link">Need Help?</a>--}}
                        {{--</h6>--}}
                        {{--</div>--}}
                    </form>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <nav>
                    {{--<ul>--}}
                    {{--<li>--}}
                    {{--<a href="https://www.creative-tim.com">--}}
                    {{--Creative Tim--}}
                    {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                    {{--<a href="http://presentation.creative-tim.com">--}}
                    {{--About Us--}}
                    {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                    {{--<a href="http://blog.creative-tim.com">--}}
                    {{--Blog--}}
                    {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                    {{--<a href="https://github.com/creativetimofficial/now-ui-kit/blob/master/LICENSE.md">--}}
                    {{--MIT License--}}
                    {{--</a>--}}
                    {{--</li>--}}
                    {{--</ul>--}}
                </nav>
                {{--<div class="copyright">--}}
                {{--&copy;--}}
                {{--<script>--}}
                {{--document.write(new Date().getFullYear())--}}
                {{--</script>, Designed by--}}
                {{--<a href="http://www.invisionapp.com" target="_blank">Invision</a>. Coded by--}}
                {{--<a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.--}}
                {{--</div>--}}
            </div>
        </footer>
    </div>
@endsection