<?php
$rootPath = 'C:/xampp/htdocs/doancs2';

include_once $rootPath . '/Model/database.php';
include_once $rootPath . '/Model/homedemo.php';
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$demo = new Homedemo(null, null, null, null, null, null, null);
$articles = $demo->getAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Modern Business - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="index.html">PTE</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="pricing.html">Pricing</a></li>
                        <li class="nav-item"><a class="nav-link" href="faq.html">FAQ</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Blog</a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                                <li><a class="dropdown-item" href="blog-home.html">Blog Home</a></li>
                                <li><a class="dropdown-item" href="blog-post.html">Blog Post</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Portfolio</a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownPortfolio">
                                <li><a class="dropdown-item" href="portfolio-overview.html">Portfolio Overview</a></li>
                                <li><a class="dropdown-item" href="portfolio-item.html">Portfolio Item</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center">
                    <div class="col-lg-8 col-xl-7 col-xxl-6">
                        <div class="my-5 text-center text-xl-start">
                            <h1 class="display-5 fw-bolder text-white mb-2">Môi trường và cộng đồng</h1>
                            <p class="lead fw-normal text-white-50 mb-4">Một thế giới trong sạch, vạn tâm hồn trong xanh</p>
                            <!-- <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                    
                                </div> -->
                        </div>
                    </div>
                    <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="https://cdn.unenvironment.org/unepmap/s3fs-public/2023-10/COP23_Portoroz_01.jpg" alt="..." /></div>
                </div>
            </div>
        </header>
        <!-- Features section-->
        <section class="py-5" id="features">
            <div class="container px-5 my-5">
                <div class="row gx-5">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h2 class="fw-bolder mb-0">Thống kê</h2>
                    </div>
                    <div class="col-lg-8">
                        <div class="row gx-5 row-cols-1 row-cols-md-2">
                            <div class="col mb-5 h-100">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
                                <h2 class="h5">Featured title</h2>
                                <p class="mb-0">Paragraph of text beneath the heading to explain the heading. Here is just a bit more text.</p>
                            </div>
                            <div class="col mb-5 h-100">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"></i></div>
                                <h2 class="h5">Featured title</h2>
                                <p class="mb-0">Paragraph of text beneath the heading to explain the heading. Here is just a bit more text.</p>
                            </div>
                            <div class="col mb-5 mb-md-0 h-100">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                                <h2 class="h5">Featured title</h2>
                                <p class="mb-0">Paragraph of text beneath the heading to explain the heading. Here is just a bit more text.</p>
                            </div>
                            <div class="col h-100">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                                <h2 class="h5">Featured title</h2>
                                <p class="mb-0">Paragraph of text beneath the heading to explain the heading. Here is just a bit more text.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial section-->
        <div class="py-5 bg-light">
            <div class="container px-5 my-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-10 col-xl-7">
                        <div class="text-center">
                            <div class="fs-4 mb-4 fst-italic">"Phần còn lại của thế giới (thiên nhiên) có thể tiếp tục sống mà không có chúng ta, nhưng chúng ta không thể tồn tại nếu thiếu đi chúng"</div>
                            <div class="d-flex align-items-center justify-content-center">
                                <img class="rounded-circle me-3" src="https://upload.wikimedia.org/wikipedia/commons/6/69/Dr._Sylvia_Earle%2C_Construction_Worker%3F_%286666200905%29_%28cropped%29.jpg" alt="..." />
                                <div class="fw-bold">
                                    - Sylvia Alice Earle -

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog preview section-->
        <section class="py-5">
            <div class="container px-5 my-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <div class="text-center">
                            <h2 class="fw-bolder">Tin tức nổi bật</h2>
                            <p class="lead fw-normal text-muted mb-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque fugit ratione dicta mollitia. Officiis ad.</p>
                        </div>
                    </div>

                </div>
                <div class="row gx-5">
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0">
                            <img class="card-img-top" src="<?php echo isset($articles) ? $articles[0]['img'] : "" ?>" alt="..." />
                            <div class="card-body p-4">
                                <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>
                                <a class="text-decoration-none link-dark stretched-link" href="./single-article.php">
                                    <h5 class="card-title mb-3"><?php echo isset($articles) ? $articles[0]['title'] : "" ?></h5>
                                </a>
                                <p class="card-text mb-0"><?php echo isset($articles) ? $articles[0]['content'] : "" ?></p>
                            </div>
                            <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                        <div class="small">
                                            <div class="fw-bold"> <?php echo isset($articles) ? $articles[0]['username'] : "" ?>
                                                <script>
                                                    console.log(<?php echo json_encode($articles); ?>);
                                                </script>

                                            </div>
                                            <div class="text-muted"><?php echo isset($articles) ? $articles[0]['datePosted'] : "" ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0">
                            <img class="card-img-top" src="<?php echo isset($articles) ? $articles[1]['img'] : "" ?>" alt="..." />
                            <div class="card-body p-4">
                                <div class="badge bg-primary bg-gradient rounded-pill mb-2">Media</div>
                                <a class="text-decoration-none link-dark stretched-link" href="#!">
                                    <h5 class="card-title mb-3"><?php echo isset($articles) ? $articles[1]['title'] : "" ?></h5>
                                </a>
                                <p class="card-text mb-0"><?php echo isset($articles) ? $articles[1]['content'] : "" ?></p>
                                </p>
                            </div>
                            <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                        <div class="small">
                                            <div class="fw-bold"> <?php echo isset($articles) ? $articles[1]['username'] : "" ?>
                                                <script>
                                                    console.log(<?php echo json_encode($articles); ?>);
                                                </script>

                                            </div>
                                            <div class="text-muted"><?php echo isset($articles) ? $articles[1]['datePosted'] : "" ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0">
                            <img class="card-img-top" src="<?php echo isset($articles) ? $articles[2]['img'] : "" ?>" alt="..." />
                            <div class="card-body p-4">
                                <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>
                                <a class="text-decoration-none link-dark stretched-link" href="#!">
                                    <h5 class="card-title mb-3"><?php echo isset($articles) ? $articles[2]['title'] : "" ?></h5>
                                </a>
                                <p class="card-text mb-0"><?php echo isset($articles) ? $articles[2]['content'] : "" ?></p>
                            </div>
                            <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                        <div class="small">
                                            <div class="fw-bold"> <?php echo isset($articles) ? $articles[2]['username'] : "" ?>
                                                <script>
                                                    console.log(<?php echo json_encode($articles); ?>);
                                                </script>

                                            </div>
                                            <div class="text-muted"><?php echo isset($articles) ? $articles[2]['datePosted'] : "" ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                    echo ""
                    ?>
                </div>
                <!-- Call to action-->
                <aside class="bg-primary bg-gradient rounded-3 p-4 p-sm-5 mt-5">
                    <div class="d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start">
                        <div class="mb-4 mb-xl-0">
                            <div class="fs-3 fw-bold text-white">Hãy chung tay vì ngôi nhà chung của chúng ta.</div>
                            <div class="text-white-50">Đăng ký nhận bản tin của chúng tôi để biết những cập nhật mới nhất.</div>
                        </div>
                        <div class="ms-xl-4">
                            <div class="input-group mb-2">
                                <input class="form-control" type="text" placeholder="Email..." aria-label="Email address..." aria-describedby="button-newsletter" />
                                <button class="btn btn-outline-light" id="button-newsletter" type="button">Đăng kí</button>
                            </div>
                            <div class="small text-white-50">Chúng tôi sẽ không bao giờ chia sẻ dữ liệu của bạn.</div>
                        </div>
                    </div>
                </aside>
            </div>
        </section>
    </main>
    <!-- Footer-->
    <footer class="bg-dark py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">
                    <div class="small m-0 text-white">Copyright &copy; Your Website 2023</div>
                </div>
                <div class="col-auto">
                    <a class="link-light small" href="#!">Privacy</a>
                    <span class="text-white mx-1">&middot;</span>
                    <a class="link-light small" href="#!">Terms</a>
                    <span class="text-white mx-1">&middot;</span>
                    <a class="link-light small" href="#!">Contact</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>