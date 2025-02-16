<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DUONGCOURSES</title>
    <meta name="msapplication-TileImage" content="{{ route('public/assets/img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">
    @include('layout.style')

</head>


<body>
    <main class="main" id="top">
        <section class="bg-danger py-2 d-none d-sm-block">

            <div class="container"><img src="{{ route('public/assets/img/banner/sales.png') }}" height="51"
                    width="1450px" alt="" />
                <div class="row align-items-center">
                    <div class="col-auto d-none d-lg-block">
                        <p class="my-2 fs--1"><i class="fas fa-map-marker-alt me-3 text-white"></i><span
                                class="text-white">95 Tu Hoang - Ha Noi </span></p>
                    </div>
                    <div class="col-auto ms-md-auto order-md-2 d-none d-sm-block">
                        <ul class="list-unstyled list-inline my-2">
                            <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i
                                        class="fab fa-facebook-f text-900 text-white"></i></a></li>
                            <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i
                                        class="fab fa-pinterest text-900 text-white"></i></a></li>
                            <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i
                                        class="fab fa-twitter text-900 text-white"></i></a></li>
                            <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i
                                        class="fab fa-instagram text-900 text-white"> </i></a></li>
                        </ul>
                    </div>
                    <div class="col-auto">
                        <p class="my-2 fs--1"><i class="fas fa-envelope me-3 text-white"></i><a
                                class="text-white text-900" href="duongmdph40323@fpt.edu.vn ">duongmdph40323@fpt.edu.vn
                            </a></p>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


        <nav class="navbar navbar-expand-lg navbar-light sticky-top-mysetup py-3 d-block"
            data-navbar-on-scroll="data-navbar-on-scroll">
            <div class="container"><a class="navbar-brand" href="{{ route('client/home_page') }}"><img
                        src="{{ route('public/assets/img/gallery/logo-n.png') }}" height="45" alt="logo" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon">
                    </span></button>
                <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
                        <li class="nav-item px-2"><a class="nav-link active" aria-current="page"
                                href="{{ route('client/home_page') }}">Trang
                                chủ</a></li>
                        <li class="nav-item px-2"><a class="nav-link" aria-current="page"
                                href="{{ route('client/product/membership_package') }}">Gói thành viên</a>
                        </li>
                        <li class="nav-item px-2"><a class="nav-link" aria-current="page"
                                href="{{ route('client/product/list_product') }}">Các khóa học</a></li>
                        <li class="nav-item px-2">
                            @if (isset($_SESSION['user']) && is_array($_SESSION['user']))
                                <a class="nav-link" aria-current="page"
                                    href="{{ route('client/product/list_product_by_user/' . $_SESSION['user']['id']) }}">Khóa
                                    đang học</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Chào, {{ $_SESSION['user']['name'] }}
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Quên mật khẩu</a></li>
                                <li><a class="dropdown-item" href="#">Thông tin cá nhân</a></li>
                                <li><a class="dropdown-item" href="#">Khóa học của tôi</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{ route('client/user/logout') }}">Thoát</a></li>
                            </ul>
                        </li>
                    @else
                        <a class="nav-link" aria-current="page"
                            href="{{ route('client/product/list_product_by_user/client') }}">Khóa đang học</a>
                        </li>
                        <a class="btn btn-primary order-1 order-lg-0 mr-3"
                            href="{{ route('client/user/register') }}">Đăng
                            kí</a>
                        <a class="btn btn-primary order-1 order-lg-0" href="{{ route('client/user/login') }}">Đăng
                            nhập</a>
                        @endif
                    </ul>
                    <form class="d-flex my-3 d-block d-lg-none">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                        <button class="btn btn-outline-primary" type="submit">Search</button>
                    </form>
                    <div class="dropdown d-none d-lg-block">
                        <button class="btn btn-outline-light ms-2" id="dropdownMenuButton1" type="submit"
                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                class="fas fa-search text-800"></i></button>
                        <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuButton1"
                            style="top:55px">
                            <form>
                                <input class="form-control" type="search" placeholder="Search"
                                    aria-label="Search" />
                            </form>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <!-- ============================================-->
        <!-- <section> begin ============================-->

        @yield('content')

        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pt-0">

            <div class="container">
                <div class="row h-100 align-items-center">
                    <div class="col-md-12 col-lg-6 h-100">
                        <div class="card card-span text-white h-100"><img class="w-100"
                                src="{{ route('public/assets/img/gallery/student-feedback.png') }}" alt="..." />
                            <div class="card-body px-xl-5 px-md-3 pt-0">
                                <div class="d-flex flex-column align-items-center bg-200" style="margin-top:-2.4rem;">
                                    <h5 class="mt-3 mb-0">Mai Dương</h5>
                                    <p class="text-muted">Full Stack Development</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 h-100">
                        <h1 class="my-4">Học viên của khóa học<br /><span class="text-primary">Bình luận</span></h1>
                        <p>Tham gia các khóa học từ các giảng viên và trường đại học tốt nhất thế giới. Các khóa học bao
                            gồm các bài tập được đánh giá tự động và được đồng nghiệp ghi lại, các bài giảng video và
                            các diễn đàn thảo luận cộng đồng. Khi bạn hoàn thành một khóa học, bạn sẽ đủ điều kiện để
                            nhận Chứng chỉ khóa học điện tử có thể chia sẻ với một khoản phí nhỏ.</p>
                        <div class="mt-6">
                            <h5 class="font-sans-serif fw-bold mb-3">Các khóa học mà Mai Dương đã tham gia</h5>
                            <div class="card card-span bg-600">
                                <div class="card-body">
                                    <div class="row flex-center gx-0">
                                        <div class="col-lg-4 col-xl-3 text-center text-xl-start"><img
                                                src="{{ route('public/assets/img/courses/b2.jpg') }}" width="120"
                                                alt="courses" /></div>

                                        <div class="col-lg-8 col-xl-9">
                                            <a href="{{ route('client/product/product_detail/19') }}">

                                                <h5 class="font-sans-serif fw-bold">Full Stack Web Development with
                                                    Node.js
                                                    and MongoDB</h5>
                                                <p class="text-muted fs--1">Khóa học này tập trung vào việc phát triển
                                                    các
                                                    ứng dụng web full stack sử dụng Node.js và MongoDB.</p>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row flex-center gx-0">
                                        <div class="col-lg-4 col-xl-3 text-center text-xl-start"><img
                                                src="{{ route('public/assets/img/courses/a4.jpg') }}" width="120"
                                                alt="courses" /></div>
                                        <div class="col-lg-8 col-xl-9">
                                            <a href="{{route('client/product/product_detail/1')}}">

                                            <h5 class="font-sans-serif fw-bold">Lập trình Python cơ bản</h5>
                                            <p class="text-muted fs--1">Khóa học này giúp bạn học cách lập trình bằng
                                                ngôn ngữ Python từ cơ bản đến nâng cao.</p>
                                            </a>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


        <section>
            <div class="bg-holder"
                style="background-image:url(assets/img/gallery/funfacts-2-bg.png);background-position:center;background-size:cover;">
            </div>
            <!--/.bg-holder-->

            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3 text-center mb-5"><img
                            src="{{ route('public/assets/img/gallery/published.png') }}" height="100"
                            alt="..." />
                        <h1 class="my-2">768</h1>
                        <p class="text-info fw-bold">KHÓA HỌC ĐÃ XUẤT BẢN</p>
                    </div>
                    <div class="col-sm-6 col-lg-3 text-center mb-5"><img
                            src="{{ route('public/assets/img/gallery/instructors.png') }}" height="100"
                            alt="..." />
                        <h1 class="my-2">120</h1>
                        <p class="text-info fw-bold">GIẢNG VIÊN CHUYÊN GIA</p>
                    </div>
                    <div class="col-sm-6 col-lg-3 text-center mb-5"><img
                            src="{{ route('public/assets/img/gallery/learners.png') }}" height="100"
                            alt="..." />
                        <h1 class="my-2">8300</h1>
                        <p class="text-info fw-bold">HỌC VUI VẺ</p>
                    </div>
                    <div class="col-sm-6 col-lg-3 text-center mb-5"><img
                            src="{{ route('public/assets/img/gallery/awards.png') }}" height="100"
                            alt="..." />
                        <h1 class="my-2">32</h1>
                        <p class="text-info fw-bold">GIẢI THƯỞNG ĐẠT ĐƯỢC</p>
                    </div>
                </div>
            </div>
        </section>


        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section>

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-4 mb-5"><img src="{{ route('public/assets/img/gallery/cta.png') }}"
                            width="280" alt="cta" /></div>
                    <div class="col-md-6 col-lg-5">
                        <h5 class="text-primary font-sans-serif fw-bold">Đăng kí ngay</h5>
                        <h1 class="mb-5">Nhận ngay<br />Mỗi bản cập nhập</h1>
                        <form class="row g-0 align-items-center">
                            <div class="col">
                                <div class="input-group-icon">
                                    <input class="form-control form-little-squirrel-control" type="email"
                                        placeholder="Nhập email" aria-label="email" /><i
                                        class="fas fa-envelope input-box-icon"></i>
                                </div>
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-primary rounded-0" type="submit">Đăng kí ngay</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="bg-footer">

            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-lg-6 mb-4 order-0 order-sm-0"><a class="text-decoration-none"
                            href="#"><img src="assets/img/gallery/footer-logo.png" height="100"
                                alt="" /></a>
                        <p class="my-4"> <i class="fas fa-map-marker-alt me-3"></i><span>95 Tu Hoàng - Hà Nội
                                &nbsp;</span><a href="tel:+84865643858">+84865643858</a><br />Ha Noi, VN 40000</p>
                        <p> <i class="fas fa-envelope me-3"> </i><a
                                href="contact-henry@gmail.com ">duongmdph40323@fpt.edu.vn </a></p>
                        <p> <i class="fas fa-phone-alt me-3"></i><a href="tel:1-800-800-2299">0865 643 858
                                (Support)</a></p>
                    </div>
                    <div class="col-6 col-sm-4 col-lg-2 mb-3 order-2 order-sm-1">
                        <h5 class="lh-lg fw-bold mb-4 font-sans-serif">Cộng đồng </h5>
                        <ul class="list-unstyled mb-md-4 mb-lg-0">
                            <li class="lh-lg"><a href="#!">Người học</a></li>
                            <li class="lh-lg"><a href="#!">Đối tác</a></li>
                            <li class="lh-lg"><a href="#!">Lập trình viên</a></li>
                            <li class="lh-lg"><a href="#!">Người kiểm thử</a></li>
                            <li class="lh-lg"><a href="#!">Phiên dịch viên</a></li>
                            <li class="lh-lg"><a href="#!">Blog</a></li>
                            <li class="lh-lg"><a href="#!">Blog công nghệ</a></li>
                            <li class="lh-lg"><a href="#!">Trung tâm dạy học</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-sm-4 col-lg-2 mb-3 order-3 order-sm-2">
                        <h5 class="lh-lg fw-bold mb-4 font-sans-serif">Thông tin</h5>
                        <ul class="list-unstyled mb-md-4 mb-lg-0">
                            <li class="lh-lg"><a href="#!">Thông tin về chúng tôi</a></li>
                            <li class="lh-lg"><a href="#!">Giá</a></li>
                            <li class="lh-lg"><a href="#!">Blog</a></li>
                            <li class="lh-lg"><a href="#!">Nghề nghiệp</a></li>
                            <li class="lh-lg"><a href="#!">Liên hệ</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-sm-4 col-lg-2 mb-3 order-3 order-sm-2">
                        <h5 class="lh-lg fw-bold mb-4 font-sans-serif"> Hơn nữa</h5>
                        <ul class="list-unstyled mb-md-4 mb-lg-0">
                            <li class="lh-lg"><a href="#!">Nhà đầu tư</a></li>
                            <li class="lh-lg"><a href="#!">Khóa học</a></li>
                            <li class="lh-lg"><a href="#!">Riêng tư</a></li>
                            <li class="lh-lg"><a href="#!">Hỗ trợ</a></li>
                            <li class="lh-lg"><a href="#!">Khả năng tiếp cận</a></li>
                            <li class="lh-lg"><a href="#!">Liên hệ</a></li>
                            <li class="lh-lg"><a href="#!">Bài viết</a></li>
                            <li class="lh-lg"><a href="#!">Danh mục</a></li>
                            <li class="lh-lg"><a href="#!">Chi nhánh</a></li>
                        </ul>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


        <section class="py-0" style="margin-top: -5.8rem;">
            <div class="container bg-danger">
                <div class="row justify-content-md-between justify-content-evenly py-4">
                    <div class="col-12 col-sm-8 col-md-6 col-lg-auto text-center text-md-start">
                        <p class="fs--1 my-2 fw-bold text-white">Bản quyền của &copy; MaiDuong, 2024</p>
                    </div>
                    <div class="col-12 col-sm-8 col-md-6">
                        <p class="fs--1 my-2 text-center text-md-end text-white"> Made with&nbsp;
                            <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="12"
                                height="12" fill="#EB6453" viewBox="0 0 16 16">
                                <path
                                    d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z">
                                </path>
                            </svg>&nbsp;by&nbsp;<a class="fw-bold text-900 text-white">MaiDuong </a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('layout.script')
</body>

</html>
