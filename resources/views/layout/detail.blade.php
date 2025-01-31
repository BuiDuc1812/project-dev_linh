@extends('layout')
@section('layout')
    <div class="container lg:w-11/12 w-full lg:mx-auto mx-0 mt-14">

        <main id="main" class="">

            <div class="shop-container">

                <div class="container">
                </div><!-- /.container -->
                <div id="product-371"
                    class="post-371 product type-product status-publish has-post-thumbnail product_cat-ban-ghe-sofa first instock shipping-taxable purchasable product-type-simple">
                    <div class="product-main">
                        <div class="row content-row row-divided row-large row-reverse">
                            <div class="col large-9">
                                <div class="row">
                                    <div class="large-6 col">

                                        <div class="product-images relative mb-half has-hover woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images"
                                            data-columns="4">

                                            <div class="badge-container is-larger absolute left top z-1">
                                            </div>
                                            <div class="image-tools absolute top show-on-hover right z-3">
                                            </div>

                                            <figure
                                                class="woocommerce-product-gallery__wrapper product-gallery-slider slider slider-nav-small mb-half"
                                                data-flickity-options='{
                    "cellAlign": "center",
                    "wrapAround": true,
                    "autoPlay": false,
                    "prevNextButtons":true,
                    "adaptiveHeight": true,
                    "imagesLoaded": true,
                    "lazyLoad": 1,
                    "dragThreshold" : 15,
                    "pageDots": false,
                    "rightToLeft": false       }'>
                                                <div data-thumb="wp-content/uploads/2018/04/5-4-100x100.jpg"
                                                    class="woocommerce-product-gallery__image slide first"><a
                                                        href="{{url('uploads')}}/{{$pro->image}}"><img width="600"
                                                            height="600"
                                                            src="{{url('uploads')}}/{{$pro->image}}"
                                                            class="wp-post-image" alt="" /></a></div>
                                            </figure>
                                        </div>


                                    </div>


                                    <div class="product-info summary entry-summary col col-fit product-summary">
                                        <nav class="woocommerce-breadcrumb breadcrumbs"><a
                                                href="{{route('home')}}">Trang chủ</a> <span
                                                class="divider">&#47;</span> <a
                                                href=""> {{$pro->category->name}}</a></nav>
                                        <h1 class="product-title entry-title">
                                            {{$pro->name}}</h1>

                                        <div class="is-divider small"></div>
                                        <ul class="next-prev-thumbs is-small show-for-medium">
                                            <li class="prod-dropdown has-dropdown">
                                                <a href="" rel="next"
                                                    class="button icon is-outline circle">
                                                    <i class="icon-angle-left"></i> </a>
                                                <div class="nav-dropdown">
                                                    <a title="" href="">
                                                        <img width="100" height="100"src="{{url('uploads')}}/{{$pro->image}}"class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"alt=""/></a>
                                                </div>
                                            </li>
                                            
                                        </ul>
                                        <div class="price-wrapper">
                                            <p class="price product-page-price ">
                                                <span class="woocommerce-Price-amount amount">{{number_format($pro->price)}}<span
                                                        class="woocommerce-Price-currencySymbol">&#8363;</span></span>
                                            </p>
                                        </div>
                                        <div class="product-short-description">
                                            <ul>
                                                <li>{{$pro->description}}</li>
                                            </ul>
                                        </div>


                                        <form class="cart"
                                            action="{{route('cart.add',$pro->id)}}"
                                            method="" enctype='multipart/form-data'>
                                            <div class="quantity buttons_added">
                                                <input type="button" value="-" class="minus button is-form">
                                                <label class="screen-reader-text" for="quantity_640600e41268c">Số lượng</label>
                                                <input type="number" id="quantity_product" class="input-text qty" name="quantity" value="1" min="1">
                                                <input type="button" value="+" class="plus button is-form">
                                            </div>

                                            <button type="submit" name="add-to-cart" value="371"
                                                class="single_add_to_cart_button button alt">Thêm vào giỏ hàng</button>

                                        </form>

                                    </div><!-- .summary -->


                                </div><!-- .row -->
                                <div class="product-footer">

                                    <div class="woocommerce-tabs container tabbed-content">
                                        <ul
                                            class="product-tabs  nav small-nav-collapse tabs nav nav-uppercase nav-tabs nav-normal nav-left">
                                            <li class="description_tab  active">
                                                <a href="#tab-description">Mô tả</a>
                                            </li>
                                            <li class="reviews_tab  ">
                                                <a href="#tab-reviews">Đánh giá</a>
                                            </li>
                                            <li class="ux_global_tab_tab  ">
                                                <a href="#tab-ux_global_tab">Chính sách bảo hành</a>
                                            </li>
            
                                        </ul>
                                        <div class="tab-panels">

                                            <div class="panel entry-content active" id="tab-description">


                                                <p><strong>Mô tả sản phẩm:</strong></p>
                                                <div class="csschitiet">
                                                    <div>
                                                        {{$pro->description}}
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="panel entry-content " id="tab-reviews">
                                                <div class="row" id="reviews">
                                                    <div class="col large-12" id="comments">
                                                        <h3 class="normal">Đánh giá</h3>
                                                        @foreach ($review as $item)
                                                        <?php
                                                        $user = App\Models\User::where('id',$item->user_id)->first();
                                                        $name = $user->name;
                                                        ?>
                                           
                                                            <div class="d-flex align-items-center">
                                                                <span>{{$name}}</span>
                                                            </div>
                                                            <div class="star">
                                                            @for ($i = 1; $i <= $item->rating; $i++)
                                                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                    viewBox="0 0 543 516.4" style="enable-background:new 0 0 543 516.4;" xml:space="preserve">
                                                            <style type="text/css">
                                                                .st0{fill:#FFC901;}
                                                            </style>
                                                            <g>
                                                                <g>
                                                                    <polygon class="st0" points="271.5,0 355.4,170 543,197.3 407.2,329.6 439.3,516.4 271.5,428.2 103.7,516.4 135.8,329.6 0,197.3 
                                                                        187.6,170 		"/>
                                                                </g>
                                                            </g>
                                                            </svg>
                                                            @endfor
                                                            </div>
                                                            <span><b>Ngày đánh giá :</b> {{ $item->created_at }}</span>
                                                            <p>{{ $item->desciption }}</p>
                                                        @endforeach
                                                    </div>
                                                

                                                    <div id="review_form_wrapper" class="large-12 col">
                                                        <div id="review_form" class="col-inner">
                                                            <div class="review-form-inner has-border">
                                                                <div id="respond" class="comment-respond">
                                                                    <h3 id="reply-title" class="comment-reply-title">Đánh giá sản phẩm<small><a rel="nofollow"
                                                                                id="cancel-comment-reply-link"
                                                                                href="index.html#respond"
                                                                                style="display:none;">Hủy</a></small></h3>
                                                                    <form
                                                                        action="{{route('product.review', $pro->id)}}"
                                                                        method="post" id="commentform"
                                                                        class="comment-form" novalidate>
                                                                        @csrf
                                                                        @if (Session::has('error'))
                                                                                    <span class="error">{{ Session::get('error') }}</span>
                                                                        @endif
                                                                        <div class="comment-form-rating"><label
                                                                                for="rating">Đánh giá của
                                                                                bạn</label><select name="rating"
                                                                                id="rating" aria-required="true"
                                                                                required>
                                                                                <option value="">Xếp hạng&hellip;
                                                                                </option>
                                                                                <option value="5">Rất tốt</option>
                                                                                <option value="4">Tốt</option>
                                                                                <option value="3">Trung bình</option>
                                                                                <option value="2">Không tệ</option>
                                                                                <option value="1">Rất tệ</option>
                                                                            </select></div>
                                                                        <p class="comment-form-comment"><label
                                                                                for="comment">Nhận xét của bạn <span
                                                                                    class="required">*</span></label>
                                                                            <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" required></textarea>
                                                                        </p>
                                                                        <p class="form-submit"><input name="submit"
                                                                                type="submit" id="submit"
                                                                                class="submit" value="Gửi đi" /> <input
                                                                                type='hidden' name='comment_post_ID'
                                                                                value='371' id='comment_post_ID' />
                                                                            <input type='hidden' name='comment_parent'
                                                                                id='comment_parent' value='0' />
                                                                        </p>
                                                                    </form>
                                                                </div><!-- #respond -->
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>


                                            <div class="panel entry-content " id="tab-ux_global_tab">
                                                LYN Concept chỉ nhận bảo hành đối với các sản phẩm do chúng tôi trực tiếp phân phối – sản xuất và còn trong thời hạn bảo hành. Việc bảo hành sẽ tùy theo trường hợp cụ thể mà chúng tôi sẽ thay thế mới hoàn toàn hoặc giới hạn việc sửa chữa, thay thế phụ tùng.
                                                Chúng tôi chỉ bảo hành đối với những lỗi gây ra do nhà sản xuất trong quá trình sản xuất như lỗi kỹ thuật.
                                                Thời hạn bảo hành theo phiếu bảo hành do LYN Concept cung cấp cho Quý khách.
                                                Thời gian bảo hành đồ nội thất bằng gỗ là 12 tháng, chỉ bảo hành kỹ thuật, không bảo hành gỗ bị hư do mối mọt, vô nước, biến dạng do va đập mạnh, trầy xước do tiếp xúc vật nhọn trong quá trình sử dụng.
                                                Thời gian bảo hành: 9h-6h00 tất cả các ngày trong tuần  (từ thứ 2 - chủ nhật) Chúng tôi sẽ phản hồi đã tiếp nhận yêu cầu bảo hành của khách hang trong 3 giờ làm việc.Tiến hành bảo hành từ 3-7 ngày làm việc
                                                Đối với những đơn hàng ở tỉnh Khách hàng sẽ mang sản phẩm trực tiếp đến cửa hàng của LYN Concept tại 68/13 Đào Duy Anh, Phường 9, Quận Phú Nhuận, TP.HCM kèm theo Phiếu Giao Hàng hợp lệ có đóng mộc và chữ ký của công ty để được bảo hành 
                                            </div>

                                        </div><!-- .tab-panels -->
                                    </div><!-- .tabbed-content -->


                                    <div class="related related-products-wrapper product-section">

                                        <h3
                                            class="product-section-title container-width product-section-title-related pt-half pb-half uppercase">
                                            Sản phẩm tương tự </h3>



                                        <div class="row large-columns-4 medium-columns- small-columns-2 row-small slider row-slider slider-nav-reveal slider-nav-push"
                                            data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>



                                        @foreach ($product as $item)
                                        <div
                                        class="product-small col has-hover post-369 product type-product status-publish has-post-thumbnail product_cat-ban-ghe-sofa  instock shipping-taxable purchasable product-type-simple">
                                        <div class="col-inner">

                                            <div class="badge-container absolute left top z-1">
                                            </div>
                                            <div class="product-small box ">
                                                <div class="box-image">
                                                    <div class="image-zoom">
                                                        <a href="{{route('detail',['id'=>$item->id])}}">
                                                            <img width="300" height="300"
                                                                src="{{url('uploads')}}/{{$item->image}}"class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"alt=""/> 
                                                        </a>
                                                    </div>
                                                    <div class="image-tools is-small top right show-on-hover">
                                                    </div>
                                                    <div
                                                        class="image-tools is-small hide-for-small bottom left show-on-hover">
                                                    </div>
                                                    <div
                                                        class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                                        <a rel="nofollow" href="{{route('cart.add', $item->id)}}"class="ajax_add_to_cart add_to_cart_button add-to-cart-grid"style="width:0">
                                                            <div class="cart-icon tooltip absolute is-small"
                                                                title="Thêm vào giỏ"><strong>+</strong></div>
                                                        </a>
                                                    </div>
                                                </div><!-- box-image -->

                                                <div class="box-text box-text-products text-center grid-style-2">
                                                    <div class="title-wrapper">
                                                        <p
                                                            class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                            {{$item->category->name}} </p>
                                                        <p class="name product-title">
                                                            <a href="{{route('detail',['id'=>$item->id])}}">{{$item->name}}</a>
                                                        </p>
                                                    </div>
                                                    <div class="price-wrapper">
                                                        <span class="price"><span
                                                                class="woocommerce-Price-amount amount">{{number_format($item->price)}}&nbsp;<span
                                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></span></span>
                                                    </div>
                                                </div><!-- box-text -->
                                            </div><!-- box -->
                                        </div><!-- .col-inner -->
                                    </div><!-- col -->
                                        @endforeach
                                            



                                            


                                        </div>
                                    </div>

                                </div>

                            </div><!-- col large-9 -->

                            {{-- <div id="product-sidebar" class="col large-3 hide-for-medium shop-sidebar ">
                                <aside id="woocommerce_products-2" class="widget woocommerce widget_products"><span
                                        class="widget-title shop-sidebar">Sản phẩm</span>
                                    <div class="is-divider small"></div>
                                    <ul class="product_list_widget">
                                        <li>

                                            <a href="../ke-tivi-phong-khach-ktv96/index.html">
                                                <img width="300" height="300"
                                                    src="../../wp-content/uploads/2018/04/2-3-300x300.jpg"
                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                    alt=""
                                                    srcset="//mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/2-3-300x300.jpg 300w, //mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/2-3-150x150.jpg 150w, //mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/2-3-24x24.jpg 24w, //mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/2-3-36x36.jpg 36w, //mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/2-3-48x48.jpg 48w, //mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/2-3.jpg 600w, //mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/2-3-100x100.jpg 100w"
                                                    sizes="(max-width: 300px) 100vw, 300px" /> <span
                                                    class="product-title">Kệ tivi phòng khách KTV96</span>
                                            </a>


                                            <span class="woocommerce-Price-amount amount">4,759,000&nbsp;<span
                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></span>
                                        </li>
                                        <li>

                                            <a href="../ke-tivi-go-tu-nhien-ktv91/index.html">
                                                <img width="300" height="300"
                                                    src="../../wp-content/uploads/2018/04/7-2-300x300.jpg"
                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                    alt=""
                                                    srcset="//mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/7-2-300x300.jpg 300w, //mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/7-2-150x150.jpg 150w, //mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/7-2-24x24.jpg 24w, //mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/7-2-36x36.jpg 36w, //mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/7-2-48x48.jpg 48w, //mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/7-2.jpg 600w, //mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/7-2-100x100.jpg 100w"
                                                    sizes="(max-width: 300px) 100vw, 300px" /> <span
                                                    class="product-title">Kệ tivi gỗ tự nhiên KTV91</span>
                                            </a>


                                            <span class="woocommerce-Price-amount amount">5,050,000&nbsp;<span
                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></span>
                                        </li>
                                        <li>

                                            <a href="../ke-tivi-cao-cap/index.html">
                                                <img width="300" height="300"
                                                    src="../../wp-content/uploads/2018/04/1-3-300x300.jpg"
                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                    alt=""
                                                    srcset="//mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/1-3-300x300.jpg 300w, //mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/1-3-150x150.jpg 150w, //mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/1-3-24x24.jpg 24w, //mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/1-3-36x36.jpg 36w, //mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/1-3-48x48.jpg 48w, //mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/1-3.jpg 600w, //mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/1-3-100x100.jpg 100w"
                                                    sizes="(max-width: 300px) 100vw, 300px" /> <span
                                                    class="product-title">Kệ tivi cao cấp</span>
                                            </a>


                                            <span class="woocommerce-Price-amount amount">4,550,000&nbsp;<span
                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></span>
                                        </li>
                                        <li>

                                            <a href="../ke-tivi-go-xoan-dao/index.html">
                                                <img width="300" height="300"
                                                    src="../../wp-content/uploads/2018/04/6-2-300x300.jpg"
                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                    alt=""
                                                    srcset="//mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/6-2-300x300.jpg 300w, //mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/6-2-150x150.jpg 150w, //mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/6-2-24x24.jpg 24w, //mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/6-2-36x36.jpg 36w, //mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/6-2-48x48.jpg 48w, //mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/6-2.jpg 600w, //mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/6-2-100x100.jpg 100w"
                                                    sizes="(max-width: 300px) 100vw, 300px" /> <span
                                                    class="product-title">Kệ Tivi Gỗ Xoan Đào</span>
                                            </a>


                                            <span class="woocommerce-Price-amount amount">5,624,000&nbsp;<span
                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></span>
                                        </li>
                                        <li>

                                            <a href="../ke-tivi-go-dinh-huong/index.html">
                                                <img width="300" height="300"
                                                    src="../../wp-content/uploads/2018/04/4-3-300x300.jpg"
                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                    alt=""
                                                    srcset="//mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/4-3-300x300.jpg 300w, //mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/4-3-150x150.jpg 150w, //mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/4-3-24x24.jpg 24w, //mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/4-3-36x36.jpg 36w, //mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/4-3-48x48.jpg 48w, //mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/4-3.jpg 600w, //mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/4-3-100x100.jpg 100w"
                                                    sizes="(max-width: 300px) 100vw, 300px" /> <span
                                                    class="product-title">Kệ Tivi Gỗ Đinh Hương</span>
                                            </a>


                                            <span class="woocommerce-Price-amount amount">8,952,300&nbsp;<span
                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></span>
                                        </li>
                                    </ul>
                                </aside>
                            </div><!-- col large-3 --> --}}
                            <div class="col large-3 hide-for-medium ">
                                <div id="shop-sidebar" class="sidebar-inner col-inner">
                                    <aside id="nav_menu-2" class="widget widget_nav_menu"><span class="widget-title shop-sidebar">Danh mục sản phẩm</span>
                                        <div class="is-divider small"></div>
                                        <div class="menu-danh-muc-san-pham-vertical-menu-container">
                                            <ul id="menu-danh-muc-san-pham-vertical-menu" class="menu">
                                               
                                                @foreach ($category as $value)
                                                <li id="menu-item-488"class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-488">
                                                    <a href="{{route('category',['slug'=> $value->slug])}}" class="menu-image-title-after">
                                                        <span class="menu-image-title">{{$value->name}}</span>
                                                    </a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </aside>
                                    <aside id="woocommerce_products-3" class="widget woocommerce widget_products"><span
                                            class="widget-title shop-sidebar">Sản phẩm</span>
                                        <div class="is-divider small"></div>
                                        <ul class="product_list_widget">
                                           
                                           @foreach ( $ramdomProducts as $item)
                                           <li>
                                            <a href="{{route('detail',['id'=> $item->id])}}">
                                                <img width="300" height="300" src="{{url('uploads')}}/{{$item->image}}"
                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                    alt=""
                                                    /> <span class="product-title">{{$item->name}}</span>
                                            </a>
                                            <span class="woocommerce-Price-amount amount">{{number_format($item->price)}}&nbsp;<span
                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></span>
                                        </li>
                                           @endforeach
                                        </ul>
                                    </aside>
                                </div><!-- .sidebar-inner -->
                            </div>
                        </div><!-- .row -->
                    </div><!-- .product-main -->
                </div>


            </div><!-- shop container -->

        </main><!-- #main -->

    </div>
@endsection