<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3 text-center">
        <h2>Website Templates</h2>
        <br>
        <!-- Nav pills -->
        <ul class="nav nav-pills justify-content-center" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="pill" href="#Website">Website</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " data-bs-toggle="pill" href="#Admin">Admin</a>
            </li>

        </ul>
        <div>
            <div class="tab-content">

                <div id="Website" class="container tab-pane active"><br>
                    <a href="{{ asset('index') }}">1</a>
                    <a href="{{ asset('index-2') }}">2</a>
                    <a href="{{ asset('index-3') }}">3</a>
                    <a href="{{ asset('index-4') }}">4</a>
                    <a href="{{ asset('about-us') }}">5</a>
                    <a href="{{ asset('404') }}">6</a>
                    <a href="{{ asset('blog-2') }}">7</a>
                    <a href="{{ asset('blog-3') }}">8</a>
                    <a href="{{ asset('blog-audio') }}">9</a>
                    <a href="{{ asset('details-left-sidebar') }}">10</a>
                    <a href="{{ asset('details-right-sidebar') }}">11</a>
                    <a href="{{ asset('blog-details') }}">12</a>
                    <a href="{{ asset('blog-gallery') }}">13</a>
                    <a href="{{ asset('blog-left') }}">14</a>
                    <a href="{{ asset('left-sidebar') }}">15</a>
                    <a href="{{ asset('right-sidebar') }}">16</a>
                    <a href="{{ asset('blog-list') }}">17</a>
                    <a href="{{ asset('blog-right') }}">18</a>
                    <a href="{{ asset('blog-video') }}">19</a>
                    <a href="{{ asset('cart') }}">20</a>
                    <a href="{{ asset('blog-left') }}">21</a>
                    <a href="{{ asset('checkout') }}">22</a>
                    <a href="{{ asset('contact') }}">23</a>
                    <a href="{{ asset('faq') }}">24</a>
                    <a href="{{ asset('login-register') }}">25</a>
                    <a href="{{ asset('product-datails') }}">26</a>
                    <a href="{{ asset('shop-3') }}">27</a>
                    <a href="{{ asset('shop-4') }}">28</a>
                    <a href="{{ asset('shop-left') }}">29</a>
                    <a href="{{ asset('shop-list-left') }}">30</a>
                    <a href="{{ asset('shop-right') }}">31</a>
                    <a href="{{ asset('shop-list') }}">32</a>
                    <a href="{{ asset('shop-right-sidebar') }}">33</a>
                    <a href="{{ asset('shopping-cart') }}">34</a>
                    <a href="{{ asset('product-affiliate') }}">35</a>
                    <a href="{{ asset('product-carousel') }}">36</a>
                    <a href="{{ asset('product-gallery-left') }}">37</a>
                    <a href="{{ asset('product-gallery-right') }}">38</a>
                    <a href="{{ asset('product-group') }}">39</a>
                    <a href="{{ asset('product-normal') }}">40</a>
                    <a href="{{ asset('product-sale') }}">41</a>
                    <a href="{{ asset('product-tab-style-left') }}">42</a>
                    <a href="{{ asset('product-tab-style-right') }}">43</a>
                    <a href="{{ asset('product-tab-style-top') }}">44</a>
                    <a href="{{ asset('single-product') }}">45</a>
                    <a href="{{ asset('wishlist') }}">46</a>
                </div>
                <div id="Admin" class="container tab-pane  fade  "><br>
                    <a href=""></a>
                </div>

            </div>
        </div>
    </div>

</body>

</html>
