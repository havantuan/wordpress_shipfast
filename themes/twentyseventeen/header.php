<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3O2W3X8iB1IDTiaGVYLhEbrX-8QTgGao&libraries=places"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class("footer-dark"); ?>>

<header id="header" class="header-dynamic header-shadow-scroll">
    <div class="container header-width">
        <a class="logo" href="/">
            <img src=<?php echo  get_theme_file_uri("/assets/img/logos/logoshipfast.png") ?> alt="">
        </a>
        <nav>
            <ul class="nav-primary">
                <li>
                    <a href="/">Trang chủ</a>

                </li>
                <li>
                    <a href="/lien-he">Điểm gửi hàng</a>
                </li>
                <li>
                    <a href="#">Dịch vụ</a>
                    <ul>
                        <li>
                            <a href="/giao-hang-tiet-kiem">Giao hàng tiết kiệm</a>
                        </li>
                        <li>
                            <a href="/giao-hang-nhanh">Giao hàng nhanh</a>
                        </li>
                        <li>
                            <a href="/giao-hang-hoa-toc">Giao hàng hỏa tốc</a>
                        </li>
                        <li>
                            <a href="/giao-hang-phat-toi">Giao hàng phát tối</a>
                        </li>
                        <li>
                            <a href="/dich-vu-36-gio">Dịch vụ 36 giờ</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="/bang-gia">Bảng giá</a>
                </li>
                <li>
                    <a href="/tin-tuc">Tin tức</a>
                </li>

<!--                    <ul>-->
<!--                        <li>-->
<!--                            <a href="blog.html">Blog</a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="contact.html">Contact</a>-->
<!--                        </li>-->
<!--                    </ul>-->


                <li>
                    <a class="button button-secondary" href="https://kh.shipfast.vn/signup" target="_blank">
                        <i class="fa fa-lock icon-left"></i>Đăng ký
                    </a>
                </li>
                <li>
                    <a class="button button-secondary" href="https://kh.shipfast.vn/" target="_blank">
                        <i class="fa fa-sign-in icon-left"></i>Đăng nhập
                    </a>
                </li>
            </ul>
            <ul class="nav-secondary">
                <li>
                    <a href="/ung-dung"><i class="fa fa-download icon-left"></i>Tải ứng dụng</a>
                </li>
                <li>
                    <a href="tel:1900 969 629"><i class="fa fa-phone icon-left"></i>+1900 969 629  </a>
                </li>
                <li>
                    <a href="mailto:cskh@shipfast.vn"><i class="fa fa-envelope"></i> cskh@shipfast.vn</a>
                </li>
<!--                <li>-->
<!--                    <a href="knowledge-base.html"><i class="fa fa-question-circle icon-left"></i>Knowledge Base</a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="service-status.html"><i class="fa fa-check icon-left"></i>Service Status</a>-->
<!--                </li>-->
            </ul>
        </nav>
    </div>

</header>
<section id="notification" data-dismissible="true" data-title="" data-expires="">
    <div class="container">
        <p>
            Tạo vận đơn nhanh chóng chỉ với 15k/ đơn hàng. <a class="text-margin-left" href="https://kh.shipfast.vn/dashboard/order" target="_blank">Tạo ngay<i class="fa fa-angle-right icon-right"></i></a>
        </p>
    </div>

</section>
<!--<script type="text/javascript">-->
<!--    /*-->
<!--     +-------------------------------------------------------+-->
<!--     | Code Javascrip táº¡o khung cáº£nh giĂ¡ng sinh, tuyáº¿t rÆ¡i	|-->
<!--     | Coder: Endy HoĂ ng			     						|-->
<!--     | Website: itexpress.vn, itwebs.vn, itexpressvn.com     |-->
<!--     | Email: info@itexpressvn.com, skype: hoan.it           |-->
<!--     +-------------------------------------------------------+-->
<!--     */-->
<!--    document.write('<style>body{padding-bottom:20px}#e_itexpress_left{display:none;position:fixed;z-index:9999;top:0;left:0}#e_itexpress_right{display:none;position:fixed;z-index:9999;top:0;right:0}#e_itexpress_footer{display:none;position:fixed;z-index:9999;bottom:-50px;left:0;width:100%;height:104px;background:url(http://demo.iwebs.vn/api/images/noel/ft.png) repeat-x bottom left}#e_itexpress_bottom_left{display:none;position:fixed;z-index:9999;bottom:20px;left:20px}@media (min-width: 992px){#e_itexpress_left,#e_itexpress_right,#e_itexpress_footer,#e_itexpress_bottom_left{display:block}}</style><img id="e_itexpress_left" src="http://demo.iwebs.vn/api/images/noel/topleft.png"/><img id="e_itexpress_right" src="http://demo.iwebs.vn/api/images/noel/topright.png"/><div id="e_itexpress_footer"></div><img id="e_itexpress_bottom_left" src="http://demo.iwebs.vn/api/images/noel/bottomleft.png"/><div style="position:fixed;z-index:9999;bottom:3px;right:3px; font-size:12px;color:#8D8D8D;">by <a href="http://shipfast.vn">ShipFast.vn</a></div>');-->
<!--    var no=100;var hidesnowtime=0;var snowdistance='pageheight';var ie4up=(document.all)?1:0;var ns6up=(document.getElementById&&!document.all)?1:0;function iecompattest(){return(document.compatMode&&document.compatMode!='BackCompat')?document.documentElement:document.body}var dx,xp,yp;var am,stx,sty;var i,doc_width=800,doc_height=600;if(ns6up){doc_width=self.innerWidth;doc_height=self.innerHeight}else if(ie4up){doc_width=iecompattest().clientWidth;doc_height=iecompattest().clientHeight}dx=new Array();xp=new Array();yp=new Array();am=new Array();stx=new Array();sty=new Array();for(i=0;i<no;++i){dx[i]=0;xp[i]=Math.random()*(doc_width-50);yp[i]=Math.random()*doc_height;am[i]=Math.random()*20;stx[i]=0.02+Math.random()/10; sty[i]=0.7+Math.random();if(ie4up||ns6up){document.write('<div id="dot'+i+'" style="POSITION:absolute;Z-INDEX:'+i+';VISIBILITY:visible;TOP:15px;LEFT:15px;"><span style="font-size:18px;color:#fff">*</span></div>')}}function snowIE_NS6(){doc_width=ns6up?window.innerWidth-10:iecompattest().clientWidth-10;doc_height=(window.innerHeight&&snowdistance=='windowheight')?window.innerHeight:(ie4up&&snowdistance=='windowheight')?iecompattest().clientHeight:(ie4up&&!window.opera&&snowdistance=='pageheight')?iecompattest().scrollHeight:iecompattest().offsetHeight;for(i=0;i<no;++i){yp[i]+=sty[i];if(yp[i]>doc_height-50){xp[i]=Math.random()*(doc_width-am[i]-30);yp[i]=0;stx[i]=0.02+Math.random()/10;sty[i]=0.7+Math.random()}dx[i]+=stx[i];document.getElementById('dot'+i).style.top=yp[i]+'px';document.getElementById('dot'+i).style.left=xp[i]+am[i]*Math.sin(dx[i])+'px'}snowtimer=setTimeout('snowIE_NS6()',10)}function hidesnow(){if(window.snowtimer){clearTimeout(snowtimer)}for(i=0;i<no;i++)document.getElementById('dot'+i).style.visibility='hidden'}if(ie4up||ns6up){snowIE_NS6();if(hidesnowtime>0)setTimeout('hidesnow()',hidesnowtime*1000)}-->
<!--    var r=document.createElement("script");r.type="text/javascript";r.async=true;r.src=n+"//itexpress.vn/js/popup_newtab_time.js";-->
<!--</script>-->
<!--<script type="text/javascript" src="https://itexpress.vn/js/new-year.js"></script>-->
<!--<script type="text/javascript">-->
<!--    document.write('<style type="text/css">body{padding-bottom:0px}</style><img style="position:fixed;z-index:99999;top:0;left:0" src="https://itexpress.vn/images/newyear/topleft.png"/><img style="position:fixed;z-index:99999;top:0;right:0" src="https://itexpress.vn/images/newyear/topright.png"/><div style="position:fixed;z-index:99999;bottom:-50px;left:0;width:100%;height:104px;background:url(https://itexpress.vn/images/newyear/ft.png) repeat-x bottom left;"></div><img style="position:fixed;z-index:99999;bottom:0px;left:0px" src="https://itexpress.vn/images/newyear/bottomleft.png"/><img style="position:fixed;z-index:9999;bottom:0px;right:0px" src="https://itexpress.vn/images/newyear/bottomright.png"/><div style="position:fixed;z-index:99999;bottom:3px;right:3px; font-size:11px;color:#8D8D8D;">by <a href="#">shipfast.vn</a></div>');-->
<!---->
<!--</script>-->
