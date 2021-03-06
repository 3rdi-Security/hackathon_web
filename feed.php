<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Focus Admin: Admin UI</title>

        <!-- ================= Favicon ================== -->
        <!-- Standard -->
        <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
        <!-- Retina iPad Touch Icon-->
        <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
        <!-- Retina iPhone Touch Icon-->
        <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
        <!-- Standard iPad Touch Icon-->
        <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
        <!-- Standard iPhone Touch Icon-->
        <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

        <!-- Styles -->
        <link href="assets/css/lib/weather-icons.css" rel="stylesheet" />
        <link href="assets/css/lib/owl.carousel.min.css" rel="stylesheet" />
        <link href="assets/css/lib/owl.theme.default.min.css" rel="stylesheet" />
        <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
        <link href="assets/css/lib/themify-icons.css" rel="stylesheet">
        <link href="assets/css/lib/menubar/sidebar.css" rel="stylesheet">
        <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">

        <link href="assets/css/lib/helper.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
        
        <link href="assets/css/feed.css" rel="stylesheet">
        
        <!--scrollFeed-->
        <style type="text/css">
            
            #feedBox{
                height:500px;
                position:fixed;
                width:25%;
            
            }
            #scrollNav{
                position:sticky;
            }
        
h3 {
  margin-top: 30px;
  font-size: 18px;
  color: #555;
}

p { padding-left: 10px; }

.btn {
  box-shadow: 1px 1px 0 rgba(255,255,255,0.5) inset;
  border-radius: 3px;
  border: 1px solid;
  display: inline-block;
  height: 18px;
  line-height: 18px;
  padding: 0 8px;
  position: relative;

  font-size: 12px;
  text-decoration: none;
  text-shadow: 0 1px 0 rgba(255,255,255,0.5);
}
       
.btn-counter { margin-right: 39px; }
.btn-counter:after,
.btn-counter:hover:after { text-shadow: none; }
.btn-counter:after {
  border-radius: 3px;
  border: 1px solid #d3d3d3;
  background-color: #eee;
  padding: 0 8px;
  color: #777;
  content: attr(data-count);
  left: 100%;
  margin-left: 8px;
  margin-right: -13px;
  position: absolute;
  top: -1px;
}
.btn-counter:before {
  transform: rotate(45deg);
  filter: progid:DXImageTransform.Microsoft.Matrix(M11=0.7071067811865476, M12=-0.7071067811865475, M21=0.7071067811865475, M22=0.7071067811865476, sizingMethod='auto expand');

  background-color: #eee;
  border: 1px solid #d3d3d3;
  border-right: 0;
  border-top: 0;
  content: '';
  position: absolute;
  right: -13px;
  top: 5px;
  height: 6px;
  width: 6px;
  z-index: 1;
  zoom: 1;
}
/*
 * Custom styles
 */
.btn {
  background-color: #dbdbdb;
  border-color: #bbb;
  color: #666;
}
.btn:hover,
.btn.active {
  text-shadow: 0 1px 0 #b12f27;
  background-color: #373757;
  border-color: #000;
}
.btn:active { box-shadow: 0 0 5px 3px rgba(0,0,0,0.2) inset; }
.btn span { color: #373757; }
.btn:hover, .btn:hover span,
.btn.active, .btn.active span { color: #eeeeee; }
.btn:active span {
  color: #b12f27;
  text-shadow: 0 1px 0 rgba(255,255,255,0.3);
}
    </style>
    
        
        
    </head>

    <body>

        <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
            <div class="nano">
                <div class="nano-content">
                    <div class="logo"><a href="index.html"><!-- <img src="assets/images/logo.png" alt="" /> --><span>Focus</span></a></div>
                    <ul>
                        <li class="label">Main</li>
                        <li class="active"><a class="sidebar-sub-toggle"><i class="ti-home"></i> Dashboard <span class="badge badge-primary">2</span> <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                            <ul>
                                <li><a href="index.html">Dashboard 1</a></li>
                                <li><a href="index1.html">Dashboard 2</a></li>
                                
                            </ul>
                        </li>

                        <li><a href="app-profile.html"><i class="ti-user"></i> Profile</a></li>
                        <li><a class="sidebar-sub-toggle"><i class="ti-layout-grid4-alt"></i> Table <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                            <ul>
                                <li><a href="table-basic.html">Basic</a></li>

                                <li><a href="table-export.html">Datatable Export</a></li>
                                <li><a href="table-row-select.html">Datatable Row Select</a></li>
                                <li><a href="table-jsgrid.html">Editable </a></li>
                            </ul>
                        </li>
                        <li><a class="sidebar-sub-toggle"><i class="ti-heart"></i> Icons <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                            <ul>
                                <li><a href="font-themify.html">Themify</a></li>
                            </ul>
                        </li>
                        <li><a class="sidebar-sub-toggle"><i class="ti-map"></i> Maps <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                            <ul>
                                <li><a href="gmaps.html">Basic</a></li>
                                <li><a href="vector-map.html">Vector Map</a></li>
                            </ul>
                        </li>
                        <li class="label">Form</li>
                        <li><a href="form-basic.html"><i class="ti-view-list-alt"></i> Basic Form </a></li>
                        <li class="label">Extra</li>
                        <li><a class="sidebar-sub-toggle"><i class="ti-files"></i> Invoice <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                            <ul>
                                <li><a href="invoice.html">Basic</a></li>
                                <li><a href="invoice-editable.html">Editable</a></li>
                            </ul>
                        </li>
                        <li><a class="sidebar-sub-toggle"><i class="ti-target"></i> Pages <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                            <ul>
                                <li><a href="page-login.html">Login</a></li>
                                <li><a href="page-register.html">Register</a></li>
                                <li><a href="page-reset-password.html">Forgot password</a></li>
                            </ul>
                        </li>
                        <li><a href="../documentation/index.html"><i class="ti-file"></i> Documentation</a></li>
                        <li><a><i class="ti-close"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /# sidebar -->


        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="float-left">
                            <div class="hamburger sidebar-toggle">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span>
                            </div>
                        </div>
                        <div class="float-right">
                            <ul>

                                <li class="header-icon dib"><i class="ti-bell"></i>
                                    <div class="drop-down">
                                        <div class="dropdown-content-heading">
                                            <span class="text-left">Recent Notifications</span>
                                        </div>
                                        <div class="dropdown-content-body">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34 PM</small>
                                                    <div class="notification-heading">Mr. John</div>
                                                    <div class="notification-text">5 members joined today </div>
                                                </div>
                                            </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34 PM</small>
                                                    <div class="notification-heading">Mariam</div>
                                                    <div class="notification-text">likes a photo of you</div>
                                                </div>
                                            </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34 PM</small>
                                                    <div class="notification-heading">Tasnim</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34 PM</small>
                                                    <div class="notification-heading">Mr. John</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                                </li>
                                                <li class="text-center">
                                                    <a href="#" class="more-link">See All</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="header-icon dib"><i class="ti-email"></i>
                                    <div class="drop-down">
                                        <div class="dropdown-content-heading">
                                            <span class="text-left">2 New Messages</span>
                                            <a href="email.html"><i class="ti-pencil-alt pull-right"></i></a>
                                        </div>
                                        <div class="dropdown-content-body">
                                            <ul>
                                                <li class="notification-unread">
                                                    <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/1.jpg" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34 PM</small>
                                                    <div class="notification-heading">Michael Qin</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                                </li>
                                                <li class="notification-unread">
                                                    <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/2.jpg" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34 PM</small>
                                                    <div class="notification-heading">Mr. John</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34 PM</small>
                                                    <div class="notification-heading">Michael Qin</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/2.jpg" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34 PM</small>
                                                    <div class="notification-heading">Mr. John</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                                </li>
                                                <li class="text-center">
                                                    <a href="#" class="more-link">See All</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="header-icon dib"><span class="user-avatar">John <i class="ti-angle-down f-s-10"></i></span>
                                    <div class="drop-down dropdown-profile">
                                        <div class="dropdown-content-heading">
                                            <span class="text-left">Upgrade Now</span>
                                            <p class="trial-day">30 Days Trail</p>
                                        </div>
                                        <div class="dropdown-content-body">
                                            <ul>
                                                <li><a href="#"><i class="ti-user"></i> <span>Profile</span></a></li>

                                                <li><a href="#"><i class="ti-email"></i> <span>Inbox</span></a></li>
                                                <li><a href="#"><i class="ti-settings"></i> <span>Setting</span></a></li>

                                                <li><a href="#"><i class="ti-lock"></i> <span>Lock Screen</span></a></li>
                                                <li><a href="#"><i class="ti-power-off"></i> <span>Logout</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        
        <div class="content-wrap">
            <div class="main">
                <div class="container-fluid">
                    <!-- /# row -->
                    <section id="main-content">
                        
                        <!--delete here-->
                        <!-- /# row -->

                        <div class="row">
                            <!-- column -->
                        <div class="col-sm-12 float-left">
                        
                        <div class="card" >
                                    
                        <div class="card-body" >
                                        <!--
                                        <div data-spy="scroll" data-target="#scrollNav" data-offset="0">-->
                                            <!--<div id="morris-bar-chart"></div>
                                            -->
                            <div id="feeder">
                            <div class="facebook-box">
                            <div class="content">
                                <div class="row header">
                                    <div class="avatar">
                                        <img src="http://placehold.it/40x40" alt="" />
                                    </div>
                                    <div class="name">
                                        <h5><a href="http://khoipro.com" target="_blank">Adarsh</a></h5>
                                        <span class="sub">10 October 2015 at 15:00</span>
                                    </div>
                                </div>
                                <div class="row text">Sed tristique dapibus velit. Sed at mauris porttitor, aliquam erat eu, mollis quam. Morbi sit amet dignissim turpis. Proin sed dui nisl. Quisque lorem risus, cursus eget metus nec, lobortis varius massa.
                                </div>
                            </div>
                            <div class="footer">
                                <div class="row text">
                                    <div class="col-lg-6">
                                        <a href="#" title="Applaud" class="btn btn-counter" data-count="5"><span><i class="fa fa-thumbs-up"></i></span> Appreciate</a>
                                    </div>
                                    <div class="col-lg-6">
                                    <div class="float-right">
                                        <a href="#" title="Comment" class="btn btn-counter" data-count="5"><span><i class="fa fa-comment"></i></span> Comment</a>
                                    </div>
                                    </div>
                                    <div class="col-lg-12" style="border-top: 1px solid #000;">
                                    </div>
                                </div>
                                <div class="messag">
                                <ul>
                                <li class="contact">
                                    <img class="small-avatar" src="http://placehold.it/32x32" alt="" />
                                    <p>Hiiiii</p>
                                </li>
                                </ul>
                                <div class="small-avatar">
                                    <img src="http://placehold.it/32x32" alt="" />
                                </div>
                                <div class="write-comment">
                                    <input type="text" placeholder="Write your comment...">
                                    <button class="submit"></button>	
                                </div>
                                </div>
                            </div>
                                    
                        </div>
                        </div>
                    </div>
                </div>
                            <!-- column -->
                            <!--<div class="col-sm-4">
                                <div class="card text-center" id="feedBox">
                                    <div class="m-t-10">
                                        <p>Customer Feedback</p>
                                        <h5>385749</h5>
                                    </div>
                                    <div class="widget-card-circle pr m-t-20 m-b-20" id="info-circle-card">
                                        <i class="ti-control-shuffle pa"></i>
                                    </div>
                                    <ul class="widget-line-list m-b-15">
                                        <li class="border-right">92% <br><span class="color-success"><i class="ti-hand-point-up"></i> Positive</span></li>
                                        <li>8% <br><span class="color-danger"><i class="ti-hand-point-down"></i>Negative</span></li>
                                    </ul>
                                </div>
                            </div>-->
                        </div>
                    </div>

                        <!--delete-->
                    </section>
                </div>
            </div>
        </div>
        <!-- jquery vendor -->
        
        <script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script>
var catagories = new Array();
    
 function caller(name, date, text, like, com)
 {
    console.log("done");
    var feeder = document.getElementById("feeder");

    var div1 = document.createElement("div");
    div1.setAttribute("class", "facdebook-box");
    feeder.appendChild(div1);
    
    var div11 = document.createElement("div");
    div11.setAttribute("class", "content");
    div1.appendChild(div11);
   

    var div111 = document.createElement("div");
    div111.setAttribute("class", "row header");
    div11.appendChild(div111);

    var div1111 = document.createElement("div");
    div1111.setAttribute("class", "avatar");
    div111.appendChild(div1111);

    var img = document.createElement("img");
    img.setAttribute("src","http://placehold.it/40x40");
    img.setAttribute("alt","");
    div1111.appendChild(img);

    var div1112 = document.createElement("div");
    div1112.setAttribute("class", "name");
    div111.appendChild(div1112);

    var h5 = document.createElement("h5");
    div1112.appendChild(h5);
    
    var a = document.createElement("a");
    a.setAttribute("target", "_blank");
    a.setAttribute("href", "http://khoipro.com");
    h5.appendChild(a);    
    
    a.innerHTML = name;

    var span = document.createElement("span");
    span.setAttribute("class", "sub");
    div1112.appendChild(span);
    
    span.innerHTML = date;

    var div112 = document.createElement("div");
    div112.setAttribute("class", "row text");
    div11.appendChild(div112);
     
    div111.innerHTML = text;
    
    var div12 = document.createElement("div");
    div12.setAttribute("class", "footer");
    div1.appendChild(div12);

    var div121 = document.createElement("div");
    div121.setAttribute("class", "row text");
    div12.appendChild(div121);
     
    var div1211 = document.createElement("div");
    div1211.setAttribute("class", "col-lg-6");
    div121.appendChild(div1211);

    var div1212 = document.createElement("div");
    div1212.setAttribute("class", "col-lg-6");
    div121.appendChild(div1212);

    var aa = document.createElement("a");
    aa.setAttribute("class", "btn btn-counter");
    aa.setAttribute("href", "#");
    aa.setAttribute("title", "Love it");
    aa.setAttribute("dat-count", "5");
    div1211.appendChild(aa);    

    aa.innerHTML="Comment";

    var span1 = document.createElement("span");
    aa.appendChild(span1);

    var ii = document.createElement("i");
    ii.setAttribute("class", "fa fa-thumbs-up");
    span1.appendChild(ii);

    var div12121 = document.createElement("div");
    div12121.setAttribute("class", "float-right");
    div1212.appendChild(div12121);

    var div1213 = document.createElement("div");
    div1213.setAttribute("class", "col-lg-12");
    div1213.setAttribute("style","border-top: 1px solid #000;");
    div121.appendChild(div1213);

    var div122 = document.createElement("div");
    div122.setAttribute("class", "messag");
    div12.appendChild(div122);

    
    var ul = document.createElement("ul");
    div122.appendChild(ul);    
    
    var li = document.createElement("li");
    li.setAttribute("class", "contact");
    ul.appendChild(li);

    var img1 = document.createElement("img");
    img1.setAttribute("src","http://placehold.it/32x32");
    img1.setAttribute("class", "small-avatar");
    img1.setAttribute("alt","");
    li.appendChild(img1);

    var p = document.createElement("p");
    li.appendChild(p);

    p.innerHTML="Bye...";

    var div1221 = document.createElement("div");
    div1221.setAttribute("class", "small-avatar");
    div122.appendChild(div1221);

    var img2 = document.createElement("img");
    img2.setAttribute("src","http://placehold.it/32x32");
    div1221.appendChild(img2);

    var div1222 = document.createElement("div");
    div1222.setAttribute("class", "write-comment");
    div122.appendChild(div1222);

    var input = document.createElement("input");
    input.setAttribute("type", "text");
    input.setAttribute("placeholder", "Write your comment...");
    div1222.appendChild(input);

    var button = document.createElement("button");
    button.setAttribute("class", "submit");
    div1222.appendChild(button);
 
 }

 caller();
    
</script>
<script>
    
            /* div.setAttribute("class", "col-sm-4 col-xs-6 filtr-item");
			div.setAttribute("data-category", catag);
			div.setAttribute("data-sort", "Luminous night");
			parent.appendChild(div);
            */
    
$('.btn-counter').on('click', function(event, count) {
  event.preventDefault();
  
  var $this = $(this),
      count = $this.attr('data-count'),
      active = $this.hasClass('active'),
      multiple = $this.hasClass('multiple-count');
  
  $.fn.noop = $.noop;
  $this.attr('data-count', ! active || multiple ? ++count : --count  )[multiple ? 'noop' : 'toggleClass']('active');
  
});
    
function newMessage() {
	message = $(".write-comment input").val();
	if($.trim(message) == '') {
		return false;
	}
    $('<li><img class="small-avatar"src="http://placehold.it/32x32" alt="" /><p>' + message + '<p></li>').appendTo($('.messag ul'));
	$('.write-comment input').val(null);
	$('.contact.active .preview').html('<span>You: </span>' + message);
	$(".messages").animate({ scrollTop: $(document).height() }, "fast");
};

$('.submit').click(function() {
  newMessage();
});

$(window).on('keydown', function(e) {
  if (e.which == 13) {
    newMessage();
    return false;
  }
});
    
    
</script>
        <script src="assets/js/lib/jquery.min.js"></script>
        <script src="assets/js/lib/jquery.nanoscroller.min.js"></script>
        <!-- nano scroller -->
        <script src="assets/js/lib/menubar/sidebar.js"></script>
        <script src="assets/js/lib/preloader/pace.min.js"></script>
        <!-- sidebar -->
        <script src="assets/js/lib/bootstrap.min.js"></script>

        <!-- bootstrap -->

        <script src="assets/js/lib/circle-progress/circle-progress.min.js"></script>
        <script src="assets/js/lib/circle-progress/circle-progress-init.js"></script>

        <script src="assets/js/lib/morris-chart/raphael-min.js"></script>
        <script src="assets/js/lib/morris-chart/morris.js"></script>
        <script src="assets/js/lib/morris-chart/morris-init.js"></script>

        <!--  flot-chart js -->
        <script src="assets/js/lib/flot-chart/jquery.flot.js"></script>
        <script src="assets/js/lib/flot-chart/jquery.flot.resize.js"></script>
        <script src="assets/js/lib/flot-chart/flot-chart-init.js"></script>
        <!-- // flot-chart js -->


        <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/country/jquery.vmap.algeria.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/country/jquery.vmap.argentina.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/country/jquery.vmap.brazil.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/country/jquery.vmap.france.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/country/jquery.vmap.germany.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/country/jquery.vmap.greece.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/country/jquery.vmap.iran.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/country/jquery.vmap.iraq.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/country/jquery.vmap.russia.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/country/jquery.vmap.tunisia.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/country/jquery.vmap.europe.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/country/jquery.vmap.usa.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/vector.init.js"></script>

        <script src="assets/js/lib/weather/jquery.simpleWeather.min.js"></script>
        <script src="assets/js/lib/weather/weather-init.js"></script>
        <script src="assets/js/lib/owl-carousel/owl.carousel.min.js"></script>
        <script src="assets/js/lib/owl-carousel/owl.carousel-init.js"></script>
        <script src="assets/js/scripts.js"></script>
        <!-- scripit init-->

    </body>

</html>
