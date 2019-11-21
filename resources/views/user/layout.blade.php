<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <base href="{{ asset('') }}">
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="css1/bootstrap.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="css1/animate.css">
    <!-- owl carousel css -->
    <link rel="stylesheet" href="css1/owl.carousel.min.css">
    <!-- font awesome css -->
    <link rel="stylesheet" href="css1/all.css">
    <!-- flaticon css -->
    <link rel="stylesheet" href="css1/flaticon.css">
    <link rel="stylesheet" href="css1/themify-icons.css">
    <!-- font awesome css -->
    <link rel="stylesheet" href="css1/magnific-popup.css">
    <!-- swiper css -->
    <link rel="stylesheet" href="css1/slick.css">
    <!-- style css -->
    <link rel="stylesheet" href="css1/style.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="vendor/bootstrap.css">
    <link rel="stylesheet" href="vendor/font-awesome.css">
    <link rel="stylesheet" href="1.css">

        <!-- <style type="text/css" >
                tr{padding: px}
            </style> -->
            <style>
                body {
                    font-family: "Poppins", sans-serif;
                }
                b{
                    color: black;
                }
                li.current{
                    margin-left: 0;
                    padding: 10px 10px;
                    border-top-left-radius: 1rem;
                    border-bottom-left-radius: 1rem;
                    border-top-right-radius: 1rem;
                    border-bottom-right-radius: 1rem;
                    border-color: #feb518;
                    background: #feb518;
                    color: white;
                    text-decoration: none;
                }
            </style>
        </head>

        <body>

            <!-- Đăng ký -->
            <div class="modal fade" id="dangky" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header" style="background-color: #04B4AE">
                            <h4 class="modal-title">Đăng Ký</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>

                        </div>
                        <div class="modal-body">
                            <form action="{{route('dangky')}}" method="post" enctype="multidata/form-data">
                                @csrf
                                <table>
                                    <tr>
                                        <td>Họ và Tên </td>
                                        <td><input type="text" class="form-control"  name="name" value="" required="" placeholder="Họ và Tên..."></td>
                                    </tr>
                                    <tr>
                                        <td>Email </td>
                                        <td><input type="Email" class="form-control" name="email" value="" required="" placeholder="Email..."></td>

                                    </tr>
                                    <tr>
                                        <td>Mật Khẩu </td>
                                        <td><input type="password" class="form-control" name="pass" value="" required="" placeholder="Mật Khẩu...(ít nhất 6 ký tự)"></td>

                                    </tr>
                                    <tr>
                                        <td>Nhập Lại Mật Khẩu</td>
                                        <td> <input type="password" class="form-control" id="cfpass" name="cfpass" value="" placeholder="Nhập Lại Mật Khẩu"></td>

                                    </tr>

                                    <tr>
                                        <td>Số điện thoại </td>
                                        <td><input type="text" class="form-control" name="phone" value="" required=""
                                            placeholder="Số điện thoại..."></td>
                                            <div class="error"></div>
                                        </tr>

                                    </table>
                                    </div>
                                    <div class="modal-footer" style="background-color: #04B4AE">
                                        <button type="submit" class="btn btn-default" name="sub" value="user">Đăng
                                        Ký</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                    <!-- kết thúc đăng ký -->
                    <!-- Đăng Nhập -->
                    <div class="modal fade" id="dangnhap" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: #04B4AE">
                                    <h4 class="modal-title">Đăng Nhập</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                                </div>
                                <div class="modal-body">
                                    <form action={{route('dangnhap')}} method="post" >
                                        @csrf
                                        <table>

                                            <tr>
                                                <td>Tài Khoản </td>
                                                <td><input type="text" class="form-control" name="email" value=""
                                                    placeholder="Tài khoản"></td>

                                                </tr>
                                                <tr>
                                                    <td>Mật Khẩu </td>
                                                    <td><input type="password" class="form-control" name="pass" value=""
                                                        placeholder="Password"></td>

                                                    </tr>


                                                </table>
                                            </div>
                                            <div class="modal-footer" style="background-color: #04B4AE">
                                                <button type="submit" class="btn btn-default" >Đăng Nhập</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>
                                            </div>
                                        </div>
                                    </form>




                                </div>
                            </div>

                            <!-- Kết thúc đăng nhập -->

                @if(Session::has('login'))
                <header class="main_menu home_menu">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <nav class="navbar navbar-expand-lg navbar-light">
                                    <a class="navbar-brand" href="index.html"> <img src="img/logo.png" alt="logo"> </a>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="menu_icon"><i class="fas fa-bars"></i></span>
                                </button>

                                <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('trangchu')}}">Trang Chủ</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link " href="{{route('dodungchiase')}}">
                                                Đồ dùng chia sẻ
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="{{route('getdangdodung')}}"
                                                >
                                                Đăng đồ dùng
                                            </a>

                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="modal" data-target="#dangky">Đăng Ký</a>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="" id="navbarDropdown_3"
                                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                           tài khoản
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                            <a class="dropdown-item" href="">Đồ dùng của tôi</a>
                                            <!-- <a class="dropdown-item" href="yeuthich.html">Yêu Thích<i class="ti-heart"></i></a> -->
                                            <a class="dropdown-item" href="{{route('gettttaikhoan',Session('login'))}}"> Thông tin tài khoản</a>
                                            <a class="dropdown-item" href="{{route('getdoimatkhau')}}">đổi mật khẩu</a>
                                            <a class="dropdown-item" href="{{ route('dangxuat')}}">thoát</a>

                                        </div>
                                    </li>
                                    @if(Session::has('admin'))
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{route('quanly')}}"
                                            >
                                            Quản trị
                                        </a>

                                    </li>
                                    @endif


                                </ul>

                                @else
                                <header class="main_menu home_menu">
                                    <div class="container">
                                        <div class="row align-items-center">
                                            <div class="col-lg-12">
                                                <nav class="navbar navbar-expand-lg navbar-light">
                                                    <a class="navbar-brand" href="index.html"> <img src="img/logo.png" alt="logo"> </a>
                                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                                    aria-expanded="false" aria-label="Toggle navigation">
                                                    <span class="menu_icon"><i class="fas fa-bars"></i></span>
                                                </button>

                                                <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                                                    <ul class="navbar-nav">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{route('trangchu')}}">Trang Chủ</a>
                                                        </li>
                                                        <li class="nav-item dropdown">
                                                            <a class="nav-link " href="{{route('dodungchiase')}}">
                                                                Đồ dùng chia sẻ
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                            <a class="nav-link " href="#" data-toggle="modal" data-target="#dangnhap" id='change'
                            >
                            Đăng Nhập
                        </a>

                    </li>

                                                    <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="modal" data-target="#dangky">Đăng Ký</a>
                                        </li>



                                                </ul>

                                                @endif
                                                <!--::header part start::-->



    <!-- <div class="hearer_icon d-flex">
        <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a> -->
        <!-- <a href=""><i class="ti-heart"></i></a> -->
            <!-- <div class="dropdown cart">
                    <a class="dropdown-toggle" href="#" id="navbarDropdown3" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-cart-plus"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <div class="single_product">

                            </div>
                    </div>

                </div> -->
                <!-- </div> -->
            </nav>
        </div>
    </div>
</div>
    <!-- <div class="search_input" id="search_input_box">
            <div class="container ">
                    <form class="d-flex justify-content-between search-inner">
                            <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                            <button type="submit" class="btn"></button>
                            <span class="ti-close" id="close_search" title="Close Search"></span>
                    </form>
            </div>
        </div> -->
    </header>
    <!-- Header part end-->
    <!-- Nội dung -->
    @yield('content')
    <!--  -->
    <!--::footer_part start::-->
    <footer class="footer_part">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Top Người dùng</h4>
                        <ul class="list-unstyled">
                            <li><a href="">Nguyễn Văn Bình</a></li>
                            <li><a href="">Trịnh Tâm</a></li>
                            <li><a href="">Vũ Hồng</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Góp ý</h4>
                        <ul class="list-unstyled">
                            <li><a href="">Email</a></li>
                            <li><a href="">Facebook</a></li>
                            <!-- <li><a href="">Investor Relations</a></li>
                            <li><a href="">Terms of Service</a></li> -->
                        </ul>
                    </div>
                </div>
                <!-- <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Features</h4>
                        <ul class="list-unstyled">
                            <li><a href="">Jobs</a></li>
                            <li><a href="">Brand Assets</a></li>
                            <li><a href="">Investor Relations</a></li>
                            <li><a href="">Terms of Service</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Resources</h4>
                        <ul class="list-unstyled">
                            <li><a href="">Guides</a></li>
                            <li><a href="">Research</a></li>
                            <li><a href="">Experts</a></li>
                            <li><a href="">Agencies</a></li>
                        </ul>
                    </div>
                </div> -->
                <div class="col-sm-6 col-lg-4">
                    <div class="single_footer_part">
                        <!-- <h4>Newsletter</h4> -->
                        <p>Không có hạnh phúc trong việc sở hữu hay đón nhận, chỉ có hạnh phúc khi cho đi.
                        </p>
                        <div id="mc_embed_signup">
                            <form target="_blank"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="subscribe_form relative mail_part">
                                <input type="email" name="email" id="newsletter-form-email" placeholder="Email... "
                                    class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = ' Email... '">
                                <button type="submit" name="submit" id="newsletter-submit"
                                    class="email_icon newsletter-submit button-contactForm">Đăng ký</button>
                                <div class="mt-10 info"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="copyright_part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="copyright_text">
                            <P>Thực hiện bởi Nhóm 3 ( Hậu, Phương ) - KTPM1 - K11<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            <!-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer_icon social_icon">
                            <ul class="list-unstyled">
                                <li><a href="#" class="single_social_icon"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" class="single_social_icon"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" class="single_social_icon"><i class="fas fa-globe"></i></a></li>
                                <li><a href="#" class="single_social_icon"><i class="fab fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <script src="js1/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js1/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js1/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js1/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js1/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="js1/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="js1/owl.carousel.min.js"></script>
    <script src="js1/jquery.nice-select.min.js"></script>
    <script>
        $(document).ready(function() {
          $('.select-form-index').niceSelect();
        });
    </script>
    <!-- slick js -->
    <script src="js1/slick.min.js"></script>
    <script src="js1/jquery.counterup.min.js"></script>
    <script src="js1/waypoints.min.js"></script>
    <script src="js1/contact.js"></script>
    <script src="js1/jquery.ajaxchimp.min.js"></script>
    <script src="js1/jquery.form.js"></script>
    <script src="js1/jquery.validate.min.js"></script>
    <script src="js1/mail-script.js"></script>
    <!-- custom js -->
    <script src="js1/custom.js"></script>
    <!-- phần thêm cần -->
    <script type="text/javascript" src="js1/filevalidation.js"></script>
    <script src="ckeditor/ckeditor.js"></script>
    <script src="ckfinder/ckfinder.js"></script>
    <script>
            CKEDITOR.replace('des', {
                filebrowserBrowseUrl: '{{asset("")}}ckfinder/ckfinder.html',
                filebrowserImageBrowseUrl: '{{asset("")}}ckfinder/ckfinder.html?type=Images',
                filebrowserFlashBrowseUrl: '{{asset("")}}ckfinder/ckfinder.html?type=Flash',
                filebrowserUploadUrl: '{{asset("")}}ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                filebrowserImageUploadUrl: '{{asset("")}}ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                filebrowserFlashUploadUrl: '{{asset("")}}ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
            });
        </script>

    <!-- bootstrap -->
    <script type="text/javascript" src="vendor/bootstrap.css"></script>
    <script type="text/javascript" src="1.css"></script>
</body>

</html>


