<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!--====== Required meta tags ======-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="Foods, Restaurant, Coffee">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--====== Title ======-->
        <title>@yield('title', 'Anh Duong Agri - Phụng sự nhà nông')</title>
        <!--====== Favicon Icon ======-->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/png">
        <!--====== Google Fonts ======-->
        <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
        <!--====== Flaticon css ======-->
        <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon/flaticon_agricko.css') }}">
        <!--====== FontAwesome css ======-->
        <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome/css/all.min.css') }}">
        <!--====== Bootstrap css ======-->
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap.min.css') }}">
        <!--====== Slick-popup css ======-->
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick.css') }}">
        <!--====== Magnific-popup css ======-->
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnific-popup.css') }}">
        <!--====== Nice Select CSS ======-->
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/nice-select.css') }}">
        <!--====== AOS Animation ======-->
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/aos.css') }}">
        <!--====== Spacing CSS  ======-->
        <link rel="stylesheet" href="{{ asset('assets/css/spacings.css') }}">
        <!--====== Common Style css ======-->
        <link rel="stylesheet" href="{{ asset('assets/css/common-style.css') }}">
        <!--====== Style css ======-->
        <link rel="stylesheet" href="{{ asset('assets/css/pages/home-one.css?v=1.0.0.1') }}">
        @stack('styles')
        
        <!-- Custom Search Styles -->
        <style>
            /* Search Container */
            .search-container {
                position: relative;
                display: flex;
                align-items: center;
                background: #f8f9fa;
                border: 1px solid #e9ecef;
                border-radius: 25px;
                box-shadow: 0 2px 10px rgba(0,0,0,0.1);
                overflow: hidden;
                min-width: 300px;
            }
            
            .search-input {
                flex: 1;
                border: none;
                padding: 12px 20px;
                font-size: 14px;
                outline: none;
                background: transparent;
                color: #333;
            }
            
            .search-input::placeholder {
                color: #6c757d;
            }
            
            .search-btn-icon {
                background: #28a745;
                border: none;
                padding: 12px 16px;
                color: white;
                cursor: pointer;
                transition: background 0.3s;
            }
            
            .search-btn-icon:hover {
                background: #218838;
            }
            
            /* Desktop Search */
            .desktop-search {
                margin-right: 20px;
            }
            
            /* Mobile Search - positioned below header */
            @media (max-width: 767.98px) {
                .desktop-search {
                    display: none;
                }
                
                .mobile-search-container {
                    background: #f8f9fa;
                    padding: 15px;
                    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
                    position: sticky;
                    top: 0;
                    z-index: 100; /* Lower z-index than mobile menu */
                }
                
                .mobile-search-container .search-container {
                    min-width: auto;
                    width: 100%;
                }
            }
            
            /* Desktop only */
            @media (min-width: 768px) {
                .mobile-search-container {
                    display: none;
                }
            }
            
            /* Search Results Dropdown */
            .search-results-dropdown {
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: white;
                border: 1px solid #ddd;
                border-radius: 8px;
                box-shadow: 0 4px 20px rgba(0,0,0,0.15);
                z-index: 1000;
                max-height: 400px;
                overflow-y: auto;
            }
            
            .search-results-content {
                padding: 15px;
            }
            
            .search-section {
                margin-bottom: 20px;
            }
            
            .search-section:last-child {
                margin-bottom: 0;
            }
            
            .search-section h6 {
                color: #28a745;
                font-size: 14px;
                font-weight: 600;
                margin-bottom: 10px;
                padding-bottom: 8px;
                border-bottom: 1px solid #eee;
                display: flex;
                align-items: center;
                gap: 8px;
            }
            
            .search-item {
                margin-bottom: 10px;
            }
            
            .search-item:last-child {
                margin-bottom: 0;
            }
            
            .search-item a {
                display: block;
                padding: 10px;
                border-radius: 6px;
                transition: background 0.3s;
                text-decoration: none;
                color: inherit;
            }
            
            .search-item a:hover {
                background: #f8f9fa;
            }
            
            .search-item-content {
                display: flex;
                align-items: center;
                gap: 10px;
            }
            
            .search-item-image {
                width: 50px;
                height: 50px;
                object-fit: cover;
                border-radius: 5px;
                flex-shrink: 0;
            }
            
            .search-item-text {
                flex: 1;
            }
            
            .search-item-text h6 {
                font-size: 14px;
                font-weight: 600;
                margin-bottom: 5px;
                color: #333;
            }
            
            .search-item-text p {
                font-size: 12px;
                color: #666;
                margin: 0;
                line-height: 1.4;
            }
            
            /* Desktop search positioning */
            .desktop-search {
                position: relative;
            }
            
            .desktop-search .search-results-dropdown {
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                margin-top: 5px;
            }
            
            /* Mobile search positioning */
            .mobile-search-bar {
                position: relative;
            }
            
            .mobile-search-bar .search-results-dropdown {
                position: absolute;
                top: 100%;
                left: 15px;
                right: 15px;
                margin-top: 5px;
            }
            
            /* No results message */
            .no-results {
                text-align: center;
                padding: 20px;
                color: #666;
                font-style: italic;
            }
            
            /* Smooth scroll to top button */
            .back-to-top {
                transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                cursor: pointer;
                transform: translateY(0);
            }
            
            .back-to-top:hover {
                transform: translateY(-3px);
                box-shadow: 0 8px 25px rgba(0,0,0,0.15);
            }
            
            .back-to-top:active {
                transform: translateY(-1px);
                transition: all 0.1s ease;
            }
            
            .back-to-top.clicked {
                transform: scale(0.95);
                transition: all 0.1s ease;
            }
            
            .back-to-top.bounce {
                animation: bounceEffect 0.3s ease;
            }
            
            @keyframes bounceEffect {
                0% { transform: scale(1); }
                50% { transform: scale(1.1); }
                100% { transform: scale(1); }
            }
            
            /* Smooth scroll behavior */
            html {
                scroll-behavior: smooth;
            }
            
        </style>
    </head>
    <body>
        <!--====== Start Loader Area ======-->
        <div class="preloader">
            <div class="loader"></div>
        </div><!--====== End Loader Area ======-->
        
        <!--====== Search From ======-->
        <div class="modal fade search-modal" id="search-modal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <form>
                        <div class="form-group">
                            <input type="search" class="form_control" placeholder="Tìm kiếm sản phẩm và bài viết..." name="search" id="search-input-modal">
                            <label><i class="fa fa-search"></i></label>
                        </div>
                    </form>
                </div>
            </div>
        </div><!--====== Search From ======-->
        
        <!--====== Start Overlay ======-->
        <div class="offcanvas__overlay"></div>
        
        <!--======  Start Header Area  ======-->
        <header class="header-area header-one">
            <div class="container-fluid">
                <!--====  Header Navigation  ===-->
                <div class="header-navigation">
                    <!--====  Header Nav Inner  ===-->
                    <div class="nav-inner-menu">
                        <!--====  Primary Menu  ===-->
                        <div class="primary-menu">
                            <!--====  Site Branding  ===-->
                            <div class="site-branding">
                                <a href="{{ route('home') }}" class="brand-logo"><img src="{{ asset('assets/images/home-one/logo/logo-main.png') }}" alt="Brand Logo"></a>
                            </div>
                            <!--=== Theme Main Menu ===-->
                            <div class="theme-nav-menu">
                                <!-- Theme Menu Top -->
                                <div class="theme-menu-top d-flex justify-content-between d-block d-xl-none mb-4">
                                    <div class="site-branding text-center">
                                        <a href="{{ route('home') }}" class="brand-logo"><img src="{{ asset('assets/images/home-one/logo/logo-main.png') }}" alt="Brand Logo"></a>
                                    </div>
                                </div>
                                <!--=== Main Menu ===-->
                                <nav class="main-menu">
                                    <ul>
                                        <li class="menu-item"><a href="{{ route('home') }}">Trang chủ</a></li>
                                        <li class="menu-item"><a href="{{ route('about') }}">Về chúng tôi</a></li>
                                        <li class="menu-item"><a href="{{ route('products') }}">Sản phẩm</a></li>
                                        <li class="menu-item"><a href="{{ route('blogs') }}">Bài viết</a></li>
                                        <li class="menu-item"><a href="{{ route('contact') }}">Liên hệ</a></li>
                                    </ul>
                                </nav>
                                <!--=== Theme Nav Button ===-->
                                <div class="theme-nav-button mt-3 d-block d-lg-none" style="display: none !important;">
                                    <a href="{{ route('contact') }}" class="theme-btn style-one">Liên hệ</a>
                                </div>
                                <!--=== Theme Menu Bottom ===-->
                                <div class="theme-menu-bottom mt-5 d-block d-xl-none">
                                    <h5>Follow Us</h5>
                                    <ul class="social-link">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--=== Header Nav Right ===-->
                            <div class="nav-right-item">
                                <!-- Desktop Search -->
                                <div class="desktop-search d-none d-md-block">
                                    <div class="search-container">
                                        <input type="text" id="desktop-search-input" class="search-input" placeholder="Tìm kiếm sản phẩm và bài viết...">
                                        <button type="button" class="search-btn-icon" id="desktop-search-btn">
                                            <i class="far fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- Mobile Search Icon -->
                                <!-- <div class="search-btn action-btn d-md-none" data-bs-toggle="modal" data-bs-target="#search-modal">
                                    <i class="far fa-search"></i>
                                </div> -->
                                <div class="nav-button d-none d-md-block">
                                    <a href="{{ route('contact') }}" class="theme-btn style-one">Liên hệ</a>
                                </div>
                                <div class="navbar-toggler">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header><!--======  End Header Area  ======-->

        <!-- Mobile Search Container -->
        <div class="mobile-search-container d-md-none">
            <div class="search-container">
                <input type="text" id="mobile-search-input" class="search-input" placeholder="Tìm kiếm sản phẩm và bài viết...">
                <button type="button" class="search-btn-icon" id="mobile-search-btn">
                    <i class="far fa-search"></i>
                </button>
            </div>
        </div>


        <!-- Search Results Dropdown -->
        <div id="search-results" class="search-results-dropdown" style="display: none;">
            <div class="search-results-content">
                <div id="search-products" class="search-section">
                    <h6><i class="fas fa-box"></i> Sản phẩm</h6>
                    <div id="products-list"></div>
                </div>
                <div id="search-blogs" class="search-section">
                    <h6><i class="fas fa-newspaper"></i> Bài viết</h6>
                    <div id="blogs-list"></div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <main>
            @yield('content')
        </main>

        <!--====== Start Footer ======-->
        <footer class="default-footer footer-one bg_cover" style="background-image: url({{ asset('assets/images/home-one/bg/footer-bg.jpg') }});">
            <div class="container">
                <!--=== Footer Newsletter ===-->
                <div class="footer-newsletter">
                    <div class="newsletter-inner-wrap">
                        <div class="row align-items-center">
                            <div class="col-lg-7">
                                <!--=== Section Title ===-->
                                <div class="section-title">
                                    <h3>Join Our Community for Agricultural Updates Newsletter</h3>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <!--=== Newsletter Form ===-->
                                <div class="newsletter-form">
                                    <form autocomplete="off">
                                        <div class="form-group">
                                            <input type="email" class="form_control" placeholder="Your email address" name="email" required>
                                            <button class="submit-btn">Subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--=== Footer Widget area ===-->
                <div class="footer-widget-area pt-100 pb-50">
                    <div class="row">
                        <div class="col-xl-3 col-md-6 col-sm-12 order-1">
                            <!--=== Footer Widget ===-->
                            <div class="footer-widget footer-about-widget mb-40" data-aos="fade-up" data-aos-duration="800">
                                <div class="widget-content">
                                    <img src="{{ asset('assets/images/home-one/logo/logo-white.png') }}" class="mb-25" alt="logo white">
                                    <p> Leading sustainable agriculture with innovative solutions for efficient, eco-friendly farming practices</p>
                                    <div class="social-box">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 order-xl-2 order-3">
                            <div class="row px-xl-5">
                                <div class="col-md-6">
                                    <!--=== Footer Widget ===-->
                                    <div class="footer-widget footer-nav-widget mb-40" data-aos="fade-up" data-aos-duration="1000">
                                        <h4 class="widget-title">Our Link</h4>
                                        <div class="widget-content">
                                            <ul class="widget-nav">
                                                <li><a href="{{ route('contact') }}">Liên hệ</a></li>
                                                <li><a href="{{ route('products') }}">Products</a></li>
                                                <li><a href="{{ route('blogs') }}">Services</a></li>
                                                <li><a href="{{ route('about') }}">FAQ</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!--=== Footer Widget ===-->
                                    <div class="footer-widget footer-contact-info-widget mb-40" data-aos="fade-up" data-aos-duration="1200">
                                        <h4 class="widget-title">Địa chỉ</h4>
                                        <div class="widget-content">
                                            <div class="agricko-info-box mb-25">
                                                <div class="icon">
                                                    <i class="far fa-map-marker-alt"></i>
                                                </div>
                                                <div class="content">
                                                    <span class="title">Location</span>
                                                    <p>Số 68, Đường H4, Khu đô thị mới Vàm Cỏ Đông Southgate, Xã Bến Lức, Tỉnh Tây Ninh</p>
                                                </div>
                                            </div>
                                            <div class="agricko-info-box mb-25">
                                                <div class="icon">
                                                    <i class="far fa-envelope"></i>
                                                </div>
                                                <div class="content">
                                                    <span class="title">Email</span>
                                                    <p><a href="mailto:anhduongagrivn@gmail.com">anhduongagrivn@gmail.com</a></p>
                                                </div>
                                            </div>
                                            <div class="agricko-info-box mb-25">
                                                <div class="icon">
                                                    <i class="far fa-phone-alt"></i>
                                                </div>
                                                <div class="content">
                                                    <span class="title">Điện thoại</span>
                                                    <p><a href="tel:0869275241">0869275241</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 order-2 order-xl-3">
                            <!--=== Footer Widget ===-->
                            <div class="footer-widget footer-recent-post-widget mb-40" data-aos="fade-up" data-aos-duration="1400">
                                <h4 class="widget-title">Resent News</h4>
                                <div class="widget-content">
                                    <div class="recent-post-item">
                                        <div class="thumbnail">
                                            <img src="{{ asset('assets/images/innerpage/footer/post-img1.jpg') }}" alt="footer image">
                                        </div>
                                        <div class="content">
                                            <span>July 14, 2025</span>
                                            <h6><a href="{{ route('blogs') }}">Current Trends in our new Agriculture Solution</a></h6>
                                        </div>
                                    </div>
                                    <div class="recent-post-item">
                                        <div class="thumbnail">
                                            <img src="{{ asset('assets/images/innerpage/footer/post-img2.jpg') }}" alt="footer image">
                                        </div>
                                        <div class="content">
                                            <span>July 14, 2025</span>
                                            <h6><a href="{{ route('blogs') }}">Recent Developments in New Farming Idea</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--=== Copyright Area ===-->
            <div class="copyright-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="copyright-text text-center text-lg-start">
                                <p>&copy; 2025 All rights reserved by Pixelfit</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="copyright-link float-lg-end text-center">
                                <a href="#">Privacy Policy</a>
                                <a href="#">Terms & Condition</a>
                                <a href="#">Legal</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer><!--====== End Footer ======-->
        
        <!--====== Back To Top  ======-->
        <div class="back-to-top" id="backToTop"><i class="far fa-arrow-up"></i></div>
        
        <!--====== Jquery js ======-->
        <script src="{{ asset('assets/js/plugins/jquery-3.7.1.min.js') }}"></script>
        <!--====== Bootstrap js ======-->
        <script src="{{ asset('assets/js/plugins/popper.min.js') }}"></script>
        <!--====== Bootstrap js ======-->
        <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
        <!--====== Waypoint js ======-->
        <script src="{{ asset('assets/js/plugins/jquery.waypoints.js') }}"></script>
        <!--====== CounterUp js ======-->
        <script src="{{ asset('assets/js/plugins/jquery.counterup.min.js') }}"></script>
        <!--====== Slick js ======-->
        <script src="{{ asset('assets/js/plugins/slick.min.js') }}"></script>
        <!--====== Magnific js ======-->
        <script src="{{ asset('assets/js/plugins/jquery.magnific-popup.min.js') }}"></script>
        <!--====== Nice Select js ======-->
        <script src="{{ asset('assets/js/plugins/jquery.nice-select.min.js') }}"></script>
        <!--====== AOS js ======-->
        <script src="{{ asset('assets/js/plugins/aos.js') }}"></script>
        <!--====== Main js ======-->
        <script src="{{ asset('assets/js/common.js') }}"></script>
        <!--====== Home One js ======-->
        <script src="{{ asset('assets/js/home-one.js?v=1.0.0.1') }}"></script>
        
        <!-- Search functionality -->
        <script>
            $(document).ready(function() {
                let searchTimeout;
                
                // Desktop search functionality
                $('#desktop-search-input').on('input', function() {
                    const query = $(this).val().trim();
                    const searchContainer = $('.desktop-search');
                    
                    if (query.length < 2) {
                        searchContainer.find('.search-results-dropdown').hide();
                        return;
                    }
                    
                    clearTimeout(searchTimeout);
                    searchTimeout = setTimeout(function() {
                        performSearch(query, searchContainer);
                    }, 300);
                });
                
                // Mobile search functionality
                $('#mobile-search-input').on('input', function() {
                    const query = $(this).val().trim();
                    const searchContainer = $('.mobile-search-container');
                    
                    if (query.length < 2) {
                        searchContainer.find('.search-results-dropdown').hide();
                        return;
                    }
                    
                    clearTimeout(searchTimeout);
                    searchTimeout = setTimeout(function() {
                        performSearch(query, searchContainer);
                    }, 300);
                });
                
                // Modal search functionality
                $('#search-input-modal').on('input', function() {
                    const query = $(this).val().trim();
                    
                    if (query.length < 2) {
                        $('#search-results').hide();
                        return;
                    }
                    
                    clearTimeout(searchTimeout);
                    searchTimeout = setTimeout(function() {
                        $.get('{{ route("search") }}', { q: query })
                            .done(function(data) {
                                displaySearchResults(data, $('#search-results'));
                            })
                            .fail(function() {
                                console.log('Search failed');
                            });
                    }, 300);
                });
                
                function performSearch(query, container) {
                    $.get('{{ route("search") }}', { q: query })
                        .done(function(data) {
                            displaySearchResults(data, container);
                        })
                        .fail(function() {
                            console.log('Search failed');
                        });
                }
                
                function displaySearchResults(data, container) {
                    let resultsHtml = '';
                    
                    if (data.products.length > 0 || data.blogs.length > 0) {
                        resultsHtml += '<div class="search-results-content">';
                        
                        if (data.products.length > 0) {
                            resultsHtml += '<div class="search-section">';
                            resultsHtml += '<h6><i class="fas fa-box"></i> Sản phẩm</h6>';
                            resultsHtml += '<div class="products-list">';
                            
                            data.products.forEach(function(product) {
                                const productImage = product.img_1 ? `/storage/${product.img_1}` : '/assets/images/home-two/products/product-img1.jpg';
                                resultsHtml += `
                                    <div class="search-item">
                                        <a href="/products/${product.slug}">
                                            <div class="search-item-content">
                                                <img src="${productImage}" alt="${product.name}" class="search-item-image">
                                                <div class="search-item-text">
                                                    <h6>${product.name}</h6>
                                                    <p>${product.short_description || ''}</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                `;
                            });
                            
                            resultsHtml += '</div></div>';
                        }
                        
                        if (data.blogs.length > 0) {
                            resultsHtml += '<div class="search-section">';
                            resultsHtml += '<h6><i class="fas fa-newspaper"></i> Bài viết</h6>';
                            resultsHtml += '<div class="blogs-list">';
                            
                            data.blogs.forEach(function(blog) {
                                resultsHtml += `
                                    <div class="search-item">
                                        <a href="/blogs/${blog.slug}">
                                            <div class="search-item-content">
                                                <h6>${blog.title}</h6>
                                                <p>${blog.short_description || ''}</p>
                                            </div>
                                        </a>
                                    </div>
                                `;
                            });
                            
                            resultsHtml += '</div></div>';
                        }
                        
                        resultsHtml += '</div>';
                    } else {
                        resultsHtml = '<div class="no-results">Không tìm thấy kết quả nào</div>';
                    }
                    
                    // Remove existing dropdown and add new one
                    container.find('.search-results-dropdown').remove();
                    container.append(`<div class="search-results-dropdown">${resultsHtml}</div>`);
                    container.find('.search-results-dropdown').show();
                }
                
                // Hide search results when clicking outside
                $(document).on('click', function(e) {
                    if (!$(e.target).closest('.search-container, .search-results-dropdown').length) {
                        $('.search-results-dropdown').hide();
                    }
                });
                
                // Handle search button clicks
                $('#desktop-search-btn, #mobile-search-btn').on('click', function() {
                    const container = $(this).closest('.search-container').parent();
                    const input = container.find('.search-input');
                    const query = input.val().trim();
                    
                    if (query.length >= 2) {
                        performSearch(query, container);
                    }
                });
                
                // Handle Enter key in search inputs
                $('.search-input').on('keypress', function(e) {
                    if (e.which === 13) {
                        e.preventDefault();
                        const container = $(this).closest('.search-container').parent();
                        const query = $(this).val().trim();
                        
                        if (query.length >= 2) {
                            performSearch(query, container);
                        }
                    }
                });
                
                // Smooth scroll to top functionality
                $('#backToTop').on('click', function(e) {
                    e.preventDefault();
                    
                    // Add click animation
                    $(this).addClass('clicked');
                    setTimeout(() => {
                        $(this).removeClass('clicked');
                    }, 150);
                    
                    // Smooth scroll to top with custom easing
                    $('html, body').animate({
                        scrollTop: 0
                    }, {
                        duration: 600,
                        easing: 'swing',
                        complete: function() {
                            // Optional: Add a subtle bounce effect
                            $('#backToTop').addClass('bounce');
                            setTimeout(() => {
                                $('#backToTop').removeClass('bounce');
                            }, 300);
                        }
                    });
                });
                
                // Show/hide back to top button based on scroll position
                $(window).on('scroll', function() {
                    if ($(this).scrollTop() > 300) {
                        $('#backToTop').fadeIn(300);
                    } else {
                        $('#backToTop').fadeOut(300);
                    }
                });
                
                // Initialize back to top button as hidden
                $('#backToTop').hide();
            });
        </script>
        
        @stack('scripts')
    </body>
</html>
