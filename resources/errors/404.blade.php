{{--@extends('layouts.site.app')--}}
{{--@section('content')--}}
{{--<div id="wrapper" class="wrapper">--}}

{{--    <!-- 404 Error Page Area Start Here -->--}}
{{--    <section class="bg-primary pt-100 pb-100">--}}
{{--        <div class="container">--}}
{{--            <div class="text-center">--}}
{{--                <img src="{{asset('assets/site/img/404.png')}}" alt="404" class="img-fluid m-auto">--}}
{{--                <h2 class="title-regular-light size-c60 mb-60">واای... خطای 404</h2>--}}
{{--                <a href="index.html" class="btn-gtf-ltl-64">رفتن به صفحه خانه</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- 404 Error Page Area End Here -->--}}

{{--    <!-- Modal Start-->--}}
{{--    <div class="modal fade" id="myModal" role="dialog">--}}
{{--        <div class="modal-dialog">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-header">--}}
{{--                    <button type="button" class="close" data-dismiss="modal">×</button>--}}
{{--                    <div class="title-login-form">ورود</div>--}}
{{--                </div>--}}
{{--                <div class="modal-body">--}}
{{--                    <div class="login-form">--}}
{{--                        <form>--}}
{{--                            <label>نام کاربری یا ایمیل *</label>--}}
{{--                            <input type="text" placeholder="نام کاربری یا ایمیل">--}}
{{--                            <label>رمز عبور *</label>--}}
{{--                            <input type="password" placeholder="رمز عبور">--}}
{{--                            <div class="checkbox checkbox-primary">--}}
{{--                                <input id="checkbox" type="checkbox" checked>--}}
{{--                                <label for="checkbox">به خاطر سپاری</label>--}}
{{--                            </div>--}}
{{--                            <button type="submit" value="Login">ورود</button>--}}
{{--                            <button class="form-cancel" type="submit" value="">انصراف</button>--}}
{{--                            <label class="lost-password">--}}
{{--                                <a href="#">رمز عبور خود را فراموش کرده اید؟</a>--}}
{{--                            </label>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- Modal End-->--}}
{{--    <!-- Offcanvas Menu Start -->--}}
{{--    <div id="offcanvas-body-wrapper" class="offcanvas-body-wrapper">--}}
{{--        <div id="offcanvas-nav-close" class="offcanvas-nav-close offcanvas-menu-btn">--}}
{{--            <a href="#" class="menu-times re-point">--}}
{{--                <span></span>--}}
{{--                <span></span>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="offcanvas-main-body">--}}
{{--            <ul id="accordion" class="offcanvas-nav panel-group">--}}
{{--                <li class="panel panel-default">--}}
{{--                    <div class="panel-heading">--}}
{{--                        <a aria-expanded="false" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">--}}
{{--                            <i class="fa fa-home" aria-hidden="true"></i>صفحات خانه</a>--}}
{{--                    </div>--}}
{{--                    <div aria-expanded="false" id="collapseOne" role="tabpanel" class="panel-collapse collapse">--}}
{{--                        <div class="panel-body">--}}
{{--                            <ul class="offcanvas-sub-nav">--}}
{{--                                <li>--}}
{{--                                    <a href="index.html">خانه 1</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="index2.html">خانه 2</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="index3.html">خانه 3</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="index4.html">خانه 4</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="index5.html">خانه 5</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="index6.html">خانه 6</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="index7.html">خانه 7</a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="author-post.html">--}}
{{--                        <i class="fa fa-user" aria-hidden="true"></i>صفحه مطالب نویسنده</a>--}}
{{--                </li>--}}
{{--                <li class="panel panel-default">--}}
{{--                    <div class="panel-heading">--}}
{{--                        <a aria-expanded="false" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">--}}
{{--                            <i class="fa fa-file-text" aria-hidden="true"></i>صفحات مطالب</a>--}}
{{--                    </div>--}}
{{--                    <div aria-expanded="false" id="collapseTwo" role="tabpanel" class="panel-collapse collapse">--}}
{{--                        <div class="panel-body">--}}
{{--                            <ul class="offcanvas-sub-nav">--}}
{{--                                <li>--}}
{{--                                    <a href="post-style-1.html">مطالب طرح 1</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="post-style-2.html">مطالب طرح 2</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="post-style-3.html">مطالب طرح 3</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="post-style-4.html">مطالب طرح 4</a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="panel panel-default">--}}
{{--                    <div class="panel-heading">--}}
{{--                        <a aria-expanded="false" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">--}}
{{--                            <i class="fa fa-info-circle" aria-hidden="true"></i>صفحات جزئیات خبر</a>--}}
{{--                    </div>--}}
{{--                    <div aria-expanded="false" id="collapseThree" role="tabpanel" class="panel-collapse collapse">--}}
{{--                        <div class="panel-body">--}}
{{--                            <ul class="offcanvas-sub-nav">--}}
{{--                                <li>--}}
{{--                                    <a href="single-news-1.html">جزئیات خبر طرح 1</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="single-news-2.html">جزئیات خبر طرح 2</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="single-news-3.html">جزئیات خبر طرح 3</a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="archive.html">--}}
{{--                        <i class="fa fa-archive" aria-hidden="true"></i>صفحه بایگانی</a>--}}
{{--                </li>--}}
{{--                <li class="panel panel-default">--}}
{{--                    <div class="panel-heading">--}}
{{--                        <a aria-expanded="false" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">--}}
{{--                            <i class="fa fa-picture-o" aria-hidden="true"></i>صفحات گالری</a>--}}
{{--                    </div>--}}
{{--                    <div aria-expanded="false" id="collapseFour" role="tabpanel" class="panel-collapse collapse">--}}
{{--                        <div class="panel-body">--}}
{{--                            <ul class="offcanvas-sub-nav">--}}
{{--                                <li>--}}
{{--                                    <a href="gallery-style-1.html">گالری طرح 1</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="gallery-style-2.html">گالری طرح 2</a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="404.html">--}}
{{--                        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>صفحه خطای 404</a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="contact.html">--}}
{{--                        <i class="fa fa-phone" aria-hidden="true"></i>صفحه تماس</a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- Offcanvas Menu End -->--}}
{{--</div>--}}
{{--<!-- Wrapper End -->--}}
{{--<!-- jquery-->--}}
{{--    @endsection--}}
