<?php /* Smarty version 3.1.27, created on 2015-10-29 19:39:10
         compiled from "templates\frontPage.html" */ ?>
<?php
/*%%SmartyHeaderCode:24418563267ceea7de7_31459888%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a55be130d05f06a206a2d9516404891cbe9964bc' => 
    array (
      0 => 'templates\\frontPage.html',
      1 => 1446143950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24418563267ceea7de7_31459888',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_563267cef01b76_87597387',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_563267cef01b76_87597387')) {
function content_563267cef01b76_87597387 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '24418563267ceea7de7_31459888';
?>

<?php echo $_smarty_tpl->getSubTemplate ('inc/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<!--  Hero Section  -->
<!--<section class="hero" id="hero">
    <div class="container">
        <div class="caption">
            <h1 class="text-uppercase  animated wow fadeInLeft">Take Photos Like A Pro.</h1>
            <p class="text-lowercase  animated wow fadeInLeft">With only your iphone and capture app you can take stunning image like a professional Photographer.</p>

            <a href="http://pixelhint.com/capture-free-responsive-bootstrap-app-landing-page-theme" class="app_store_btn text-uppercase animated wow fadeInLeft">
                <i class="iphone_icon"></i>
                <span>Iphone App</span>
            </a>

            <a href="http://pixelhint.com/capture-free-responsive-bootstrap-app-landing-page-theme" class="app_store_btn text-uppercase animated wow fadeInLeft">
                <i class="android_icon"></i>
                <span>Android App</span>
            </a>
        </div>
    </div>
</section>-->
<div id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for Slides -->
    <div class="carousel-inner">
        <div class="item active">
            <div class="fill" style="background-image:url('media/img/slider/slider1.jpg');"></div>
            <div class="carousel-caption">
                <h2></h2>
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('media/img/slider/2c.png');"></div>
            <div class="carousel-caption">
                <h2></h2>
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('media/img/slider/3c.png');"></div>
            <div class="carousel-caption">
                <h2></h2>
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('media/img/slider/4c.png');"></div>
            <div class="carousel-caption">
                <h2></h2>
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('media/img/slider/5c.png');"></div>
            <div class="carousel-caption">
                <h2></h2>
            </div>
        </div>
    </div>
</div>

<!--  End Hero Section  -->






<!--  Featured On Section  -->
<section class="featured_on">
    <div class="container">
        <ul class="list-unstyled text-center clearfix">
            <li class="col-xs-6 col-sm-6 col-md-3 animated wow fadeInDown">
                <img src="media/img/google_logo.png" alt="" title="">
            </li>
            <li class="col-xs-6 col-sm-6 col-md-3 animated wow fadeInDown" data-wow-delay=".2s">
                <img src="media/img/facebook_logo.png" alt="" title="">
            </li>
            <li class="col-xs-6 col-sm-6 col-md-3 animated wow fadeInDown" data-wow-delay=".3s">
                <img src="media/img/yahoo_logo.png" alt="" title="">
            </li>
            <li class="col-xs-6 col-sm-6 col-md-3 animated wow fadeInDown" data-wow-delay=".4s">
                <img src="media/img/paypal_logo.png" alt="" title="">
            </li>
        </ul>
    </div>
</section>
<!--  End Featured On Section  -->






<!--  About Section  -->
<section class="about" id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center animated wow fadeInLeft">
                <div class="iphone">
                    <img src="media/img/iphone.png" alt="" titl="">
                </div>
            </div>
            <div class="col-md-6 animated wow fadeInRight">
                <div class="features_list">
                    <h1 class="text-uppercase">Capture unforgettable moments.</h1>
                    <p>Seuismod ligula ipsum vulputate tellus quisque dictum tortor at purus faucibus tincidunt, pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
                    <ul class="list-unstyled">
                        <li class="camera_icon">
                            <span>Euismod ligula ipsum vulputate tellus.</span>
                        </li>
                        <li class="video_icon">
                            <span>Morbi non efficitur nibh sit amet est eros.</span>
                        </li>
                        <li class="eye_icon">
                            <span>Fusce faucibus ante liberonec luctus egestas.</span>
                        </li>
                        <li class="pic_icon">
                            <span>Quisque pretium malesuada ornare.</span>
                        </li>
                        <li class="loc_icon">
                            <span>Cras interdum vestibulum dolor.</span>
                        </li>
                    </ul>

                    <a href="#" class="app_store_btn text-uppercase" id="play_video" data-video="http://www.youtube.com/embed/Bm3NV3gGB2w?autoplay=1&showinfo=0">
                        <i class="play_icon"></i>
                        <span>About Video</span>
                    </a>
                    <a href="#hero" class="app_link">Get the app</a>
                </div>
            </div>
        </div>
    </div>

    <div class="about_video show_video">
        <a href="" class="close_video"></a>
    </div>
</section>
<!--  End About Section  -->






<!--  App Features Section  -->
<section class="app_features" id="app_features">
    <div class="container">

        <div class="row text-center">
            <div class="col-sm-4 col-md-4 details animated wow fadeInDown" data-wow-delay="0s">
                <img src="media/img/f_icon1.png" alt="" title="">
                <h1 class="text-uppercase">malesuada fames turpis.</h1>
                <p class="text-lowercase">vel ultrices mauris libero id diam. Vivamus tellus sagittis facilisis nisi quis mollis risus quisque ultrices elit.</p>
            </div>
            <div class="col-sm-4 col-md-4 details animated wow fadeInDown" data-wow-delay=".1s">
                <img src="media/img/f_icon2.png" alt="" title="">
                <h1 class="text-uppercase">malesuada fames turpis.</h1>
                <p class="text-lowercase">vel ultrices mauris libero id diam. Vivamus tellus sagittis facilisis nisi quis mollis risus quisque ultrices elit.</p>
            </div>
            <div class="col-sm-4 col-md-4 details animated wow fadeInDown" data-wow-delay=".2s">
                <img src="media/img/f_icon3.png" alt="" title="">
                <h1 class="text-uppercase">malesuada fames turpis.</h1>
                <p class="text-lowercase">vel ultrices mauris libero id diam. Vivamus tellus sagittis facilisis nisi quis mollis risus quisque ultrices elit.</p>
            </div>
            <div class="col-sm-4 col-md-4 details animated wow fadeInDown" data-wow-delay="0s">
                <img src="media/img/f_icon4.png" alt="" title="">
                <h1 class="text-uppercase">malesuada fames turpis.</h1>
                <p class="text-lowercase">vel ultrices mauris libero id diam. Vivamus tellus sagittis facilisis nisi quis mollis risus quisque ultrices elit.</p>
            </div>
            <div class="col-sm-4 col-md-4 details animated wow fadeInDown" data-wow-delay=".1s">
                <img src="media/img/f_icon5.png" alt="" title="">
                <h1 class="text-uppercase">malesuada fames turpis.</h1>
                <p class="text-lowercase">vel ultrices mauris libero id diam. Vivamus tellus sagittis facilisis nisi quis mollis risus quisque ultrices elit.</p>
            </div>
            <div class="col-sm-4 col-md-4 details animated wow fadeInDown" data-wow-delay=".2s">
                <img src="media/img/f_icon6.png" alt="" title="">
                <h1 class="text-uppercase">malesuada fames turpis.</h1>
                <p class="text-lowercase">vel ultrices mauris libero id diam. Vivamus tellus sagittis facilisis nisi quis mollis risus quisque ultrices elit.</p>
            </div>
        </div>

    </div>
</section>
<!--  And App Features Section  -->






<!--  Testimonials Section  -->
<section class="testimonials animated wow fadeIn" id="testimonials" data-wow-duration="2s">
    <div class="container">
        <div class="testimonials_list">

            <ul class="list-unstyled text-center slides clearfix" id="tslider">
                <li>
                    <blockquote>
                        <p>Integer pharetra tellus varius, dictum erat vel, maximus tellus. Sed vitae auctor ipsum. Aliquam luctus erat nec pulvinar vehicula donec congue tortor eget sem condimentum, ut tempor massa porttitor. Praesent tincidunt mi orci  in sollicitudin mi dapibus dapibus pellentesque habitant morbi tristique senectus et malesuada fames turpis egestas.</p>
                        <span class="author text-uppercase">John Doe</span>
                        <span class="job">IOS developer</span>

                    </blockquote>
                </li>

                <li>
                    <blockquote>
                        <p>Integer pharetra tellus varius, dictum erat vel, maximus tellus. Sed vitae auctor ipsum. Aliquam luctus erat nec pulvinar vehicula donec congue tortor eget sem condimentum, ut tempor massa porttitor. Praesent tincidunt mi orci  in sollicitudin mi dapibus dapibus pellentesque habitant morbi tristique senectus et malesuada fames turpis egestas.</p>
                        <span class="author text-uppercase">Alex Fredy</span>
                        <span class="job">android developer</span>

                    </blockquote>
                </li>

                <li>
                    <blockquote>
                        <p>Integer pharetra tellus varius, dictum erat vel, maximus tellus. Sed vitae auctor ipsum. Aliquam luctus erat nec pulvinar vehicula donec congue tortor eget sem condimentum, ut tempor massa porttitor. Praesent tincidunt mi orci  in sollicitudin mi dapibus dapibus pellentesque habitant morbi tristique senectus et malesuada fames turpis egestas.</p>
                        <span class="author text-uppercase">Sara Aliba</span>
                        <span class="job">app Designer</span>

                    </blockquote>
                </li>
            </ul>
            <div id="slider_nav">
                <div id="prev_arrow"></div>
                <div id="next_arrow"></div>
            </div>
        </div>
    </div>
</section>
<!--  End Testimonials Section  -->






<!--  Email Subscription Section  -->
<section class="sub_box">
    <p class="cta_text animated wow fadeInDown">Join Our Liste and stay updated!</p>
    <form action="http://pixelhint.us3.list-manage.com/subscribe/post?u=9cf3b8b1cfc597a436b9964d3&amp;id=2449ed590e" metohd="post" class="animated wow fadeIn" data-wow-duration="2s" id="submit_form">
        <input type="email" id="mc-email" placeholder="Enter your email"/>
        <button type="submit" id="mc_submit">
            <i class="icon"></i>
        </button>
    </form>
    <div class="message" id="error_msg">Please Enter A Valid Email.</div>
    <div class="message" id="success_msg">Thank You For Your Subscription.</div>
</section>
<!--  End Email Subscription Section  -->






<!--  Footer Section  -->
<footer>
    <ul class="list-unstyled list-inline app_platform">
        <li class="animated wow fadeInDown" data-wow-delay="0s">
            <a href=""><img src="media/img/android_icon.png" alt="" title=""></a>
        </li>
        <li class="animated wow fadeInDown" data-wow-delay=".1s">
            <a href=""><img src="media/img/ios_icon.png" alt="" title=""></a>
        </li>
        <li class="animated wow fadeInDown" data-wow-delay=".2s">
            <a href=""><img src="media/img/windows_icon.png" alt="" title=""></a>
        </li>
    </ul>
    <p class="copyright animated wow fadeIn" data-wow-duration="2s">© 2015 <a href="http://pixelhint.com" target="_blank"><strong>Pixelhint.com</strong></a>. All Rights Reserved</p>
</footer>
<!--  End Footer Section  -->


</body>
</html>


<?php echo $_smarty_tpl->getSubTemplate ('inc/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>