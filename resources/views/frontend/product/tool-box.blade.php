<main class="main">
    <div class="page-header text-center" style="background-image: url('{{asset('images/page-header-bg.jpg')}}')">
        <div class="container">
            <h1 class="page-title">Sản phẩm của chúng tôi<span>Shop</span></h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->

    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="products">Products</a></li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="container">
            <div class="toolbox">
                <div class="toolbox-left">
                    <a href="#" class="sidebar-toggler"><i class="icon-bars"></i>Filters</a>
                </div><!-- End .toolbox-left -->

                <div class="toolbox-center">
                    <div class="toolbox-info">
                        Showing <span>12 of 56</span> Products
                    </div><!-- End .toolbox-info -->
                </div><!-- End .toolbox-center -->

                <div class="toolbox-right">
                    <div class="toolbox-sort">
                        <label for="sortby">Sort by:</label>
                        <div class="select-custom">
                            <select name="sortby" id="sortby" class="form-control">
                                <option value="popularity" selected="selected">Most Popular</option>
                                <option value="rating">Most Rated</option>
                                <option value="date">Date</option>
                            </select>
                        </div>
                    </div><!-- End .toolbox-sort -->
                </div><!-- End .toolbox-right -->
            </div><!-- End .toolbox -->
