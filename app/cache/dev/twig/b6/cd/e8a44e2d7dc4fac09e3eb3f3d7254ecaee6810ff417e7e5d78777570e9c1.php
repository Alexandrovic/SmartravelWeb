<?php

/* TravelAnnonceBundle::LayoutIndex.html.twig */
class __TwigTemplate_b6cde8a44e2d7dc4fac09e3eb3f3d7254ecaee6810ff417e7e5d78777570e9c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!doctype html>
<!--[if lt IE 7 ]><html lang=\"en\" class=\"no-js ie6\"> <![endif]-->
<!--[if IE 7 ]><html lang=\"en\" class=\"no-js ie7\"> <![endif]-->
<!--[if IE 8 ]><html lang=\"en\" class=\"no-js ie8\"> <![endif]-->
<!--[if IE 9 ]><html lang=\"en\" class=\"no-js ie9\"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang=\"en\" class=\"no-js\"> <!--<![endif]-->
<head>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">

<title>Homepage | Travel Agency</title>
<meta name=\"description\" content=\"\">
<meta name=\"keywords\" content=\"\">

<link href=\"http://fonts.googleapis.com/css?family=Lato:400,400italic,700|Sorts+Mill+Goudy:400,400italic\" rel=\"stylesheet\">

<!-- Mobile viewport optimized: h5bp.com/viewport -->
<meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">

<!-- favicon.ico and apple-touch-icon.png -->
<link rel=\"shortcut icon\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\">
<link rel=\"apple-touch-icon\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/apple-touch-icon-57x57-iphone.png"), "html", null, true);
        echo "\">
<link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/apple-touch-icon-72x72-ipad.png"), "html", null, true);
        echo "\">
<link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/apple-touch-icon-114x114-iphone4.png"), "html", null, true);
        echo "\">

<link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("style.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("screen.css"), "html", null, true);
        echo "\">
<!-- custom CSS -->
<link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("custom.css"), "html", null, true);
        echo "\">

<script>document.cookie='resolution='+Math.max(screen.width,screen.height)+'; path=/';</script>
<!-- JS libs -->
<script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/libs/modernizr-2.5.3.min.js"), "html", null, true);
        echo "\"></script> 
<script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/libs/respond.min.js"), "html", null, true);
        echo "\"></script>\t
<script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/libs/jquery.min.js"), "html", null, true);
        echo "\"></script>\t\t\t 

<!-- scripts -->
<script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.easing.1.3.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/hoverIntent.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/general.js"), "html", null, true);
        echo "\"></script>
<!-- sliders -->
<script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/slides.min.jquery.js"), "html", null, true);
        echo "\"></script>
<!-- range sliders -->
<script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.slider.bundle.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.slider.js"), "html", null, true);
        echo "\"></script>
<link rel=\"stylesheet\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jslider.css"), "html", null, true);
        echo "\">
<!-- custom input -->
<link  href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/customInput.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.customInput.js"), "html", null, true);
        echo "\"></script>
<!-- datepicker -->
<link  href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/custom-theme/jquery-ui-1.8.20.custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui-1.8.20.custom.min.js"), "html", null, true);
        echo "\"></script>
<script>
\tjQuery(document).ready(function(\$) {
\t\t\$(\"#date_in, #date_out\").datepicker({
\t\t\tdateFormat: 'MM dd, yy',
\t\t\tminDate: 0,
\t\t\tshowOtherMonths: true
\t\t});
\t});
</script>
  
</head>
<body>  
<div class=\"body_wrap homepage\">

<div class=\"header\">
\t<div class=\"container_12\">
    \t
        <div class=\"logo\">
   \t    \t<a href=\"index.html\"><img src=\"images/logo.png\" alt=\"\"></a>
            <h1>Travel Agency - Premium WordPress Theme</h1>
        </div>
        
      \t<div class=\"header_right\">
\t        
\t        <div class=\"topsearch\">
            \t<form id=\"searchForm\" action=\"#\" method=\"get\">
                \t<input type=\"submit\" id=\"searchSubmit\" value=\"\" class=\"btn-search\">
                    <input type=\"text\" name=\"stext\" id=\"stext\" value=\"\" class=\"stext\">                    
\t\t\t\t</form>
            </div>  
            
            <div class=\"toplogin\">
\t        \t<p><a href=\"#\">SIGN IN</a> <span class=\"separator\">|</span> <a href=\"#\">REGISTER</a></p>
\t        </div>    
            
            <div class=\"header_phone\">
\t        \t<p>CALL US NOW: &nbsp; <strong>1-800-531-453</strong></p>
\t        </div>\t        
\t        
            <div class=\"clear\"></div>
        </div>
        
        <div class=\"topmenu\">
        \t<ul class=\"dropdown\">
            \t<li class=\"menu-level-0 menu-item-home current-menu-item\"><a href=\"index.html\"><span>Home</span></a></li>
                <li class=\"menu-level-0 mega-nav\"><a href=\"#\"><span>Destinations</span></a>
                \t<ul class=\"submenu-1\">
                    \t<li class=\"menu-level-1\"><a href=\"offers-list.html\"><img src=\"images/icons/continent_1.png\" width=\"80\" height=\"68\" alt=\"\"> <span>North America</span></a>
                        \t<ul class=\"submenu-2\">
                            \t <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>USA MAINLAND</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Canada</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Hawaii</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Alaska</span></a></li>                                 
                            </ul>
                        </li>
                        <li class=\"menu-level-1\"><a href=\"offers-list.html\"><img src=\"images/icons/continent_2.png\" width=\"80\" height=\"68\" alt=\"\"> <span>Central & South America</span></a>
                        \t<ul class=\"submenu-2\">
                            \t <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Argentina</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Belize</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Bolivia</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Brasil</span></a></li>    
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Chile & Easter Island</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Columbia</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Costa Rica</span></a></li>  
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Ecuador</span></a></li>   
                                 <li class=\"menu-level-2 more-nav\"><a href=\"offers-list.html\"><span>See all Destinations</span></a></li>                                                          
                            </ul>
                        </li>
                        <li class=\"menu-level-1\"><a href=\"offers-list.html\"><img src=\"images/icons/continent_3.png\" width=\"80\" height=\"68\" alt=\"\"> <span>Africa & Middle East</span></a>
                        \t<ul class=\"submenu-2\">
                            \t <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>South Africa</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Tanzania</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Tunisia</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Maroco</span></a></li>    
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Egipt</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Kenya</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Dubai & UAE</span></a></li>  
                            </ul>
                        </li>
                        <li class=\"menu-level-1\"><a href=\"offers-list.html\"><img src=\"images/icons/continent_4.png\" width=\"80\" height=\"68\" alt=\"\"> <span>EUROPE</span></a>
                        \t<ul class=\"submenu-2\">
                            \t <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>United Kingdom</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>France</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Greece</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Spain</span></a></li>    
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Germany</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Croatia</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Romania</span></a></li>  
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Cyprus</span></a></li>
                                 <li class=\"menu-level-2 more-nav\"><a href=\"offers-list.html\"><span>See all Destinations</span></a></li>
                            </ul>
                        </li>
                        <li class=\"menu-level-1\"><a href=\"offers-list.html\"><img src=\"images/icons/continent_5.png\" width=\"80\" height=\"68\" alt=\"\"> <span>ASIA & SOUTH PACIFIC</span></a>
                        \t<ul class=\"submenu-2\">
                            \t <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Australia</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>China</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Philipinnes</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>India</span></a></li>    
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Indonesia</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Malaysia</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Singapore</span></a></li>  
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Thailand</span></a></li>
                                 <li class=\"menu-level-2 more-nav\"><a href=\"offers-list.html\"><span>See all Destinations</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class=\"menu-level-0\"><a href=\"#\"><span>Special Offers</span></a></li>
                <li class=\"menu-level-0\"><a href=\"#\"><span>Holidays</span></a>
                \t<ul class=\"submenu-1\">
                    \t<li class=\"menu-level-1\"><a href=\"offers-list.html\"><span>North America</span></a>
                        \t<ul class=\"submenu-2\">
                            \t <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>USA MAINLAND</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Canada</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Hawaii</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Alaska</span></a></li>                                 
                            </ul>
                        </li>
                        <li class=\"menu-level-1\"><a href=\"offers-list.html\"><span>Central & South America</span></a>
                        \t<ul class=\"submenu-2\">
                            \t <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Argentina</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Belize</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Bolivia</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Brasil</span></a></li>    
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Chile & Easter Island</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Columbia</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Costa Rica</span></a></li>  
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Ecuador</span></a></li>                                    
                            </ul>
                        </li>
                        <li class=\"menu-level-1\"><a href=\"offers-list.html\"><span>Africa & Middle East</span></a>
                        \t<ul class=\"submenu-2\">
                            \t <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>South Africa</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Tanzania</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Tunisia</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Maroco</span></a></li>    
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Egipt</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Kenya</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Dubai & UAE</span></a></li>  
                            </ul>
                        </li>
                        <li class=\"menu-level-1\"><a href=\"offers-list.html\"><span>EUROPE</span></a>
                        \t<ul class=\"submenu-2\">
                            \t <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>United Kingdom</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>France</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Greece</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Spain</span></a></li>    
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Germany</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Croatia</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Romania</span></a></li>  
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Cyprus</span></a></li>
                            </ul>
                        </li>
                        <li class=\"menu-level-1\"><a href=\"offers-list.html\"><span>ASIA & SOUTH PACIFIC</span></a>
                        \t<ul class=\"submenu-2\">
                            \t <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Australia</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>China</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Philipinnes</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>India</span></a></li>    
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Indonesia</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Malaysia</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Singapore</span></a></li>  
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Thailand</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class=\"menu-level-0\"><a href=\"#\"><span>City Breaks</span></a></li>
                <li class=\"menu-level-0\"><a href=\"#\"><span>Flights</span></a></li>
                <li class=\"menu-level-0\"><a href=\"blog.html\"><span>Our Blog</span></a></li>
                <li class=\"menu-level-0\"><a href=\"contact.html\"><span>Contact us</span></a></li>
            </ul>
            <div class=\"clear\"></div>
        </div>
        
        <div class=\"clear\"></div>
    </div>
</div>
<!--/ header -->

<!-- header slider -->
<div class=\"header_slider\" style=\"background-image:url(images/pattern_4.png); background-color:#222\">
    \t
        \t<div class=\"slides_container\">
            \t<div class=\"slide\">
\t\t\t\t\t<img src=\"images/temp/top_slide_1.jpg\" alt=\"\">
                    <div class=\"slide_text bottom left\">
\t\t\t\t\t\t<div class=\"slide_title\"><strong>GOLF & TRAVEL</strong></div>
\t                    <p class=\"subtitle\">5 resorts to get your swing back</p>
                    </div>
\t\t\t  \t</div>
                <div class=\"slide\">
\t\t\t\t\t<img src=\"images/temp/top_slide_2.jpg\" alt=\"\">
\t\t\t\t\t<div class=\"slide_text bottom right\">
\t                    <div class=\"slide_title\"><strong>YOSEMITE PARK</strong></div>
\t                    <p class=\"subtitle\">Hike the gorgeous trails of national parks</p>
                    </div>
\t\t\t  \t</div>
                <div class=\"slide\">
\t\t\t\t\t<img src=\"images/temp/top_slide_3.jpg\" alt=\"\">
                    <div class=\"slide_text bottom left\">
\t                    <div class=\"slide_title\"><strong>EXPLORE WILD AFRICA</strong></div>
\t                    <p class=\"subtitle\">Safari is not just a browser anymore</p>
                    </div>
\t\t\t  \t</div>
                <div class=\"slide\">
\t\t\t\t\t<img src=\"images/temp/top_slide_4.jpg\" alt=\"\">
                    <div class=\"slide_text left middle\">
\t                    <div class=\"slide_title\"><strong>Exotic Beaches</strong></div>
\t                    <p class=\"subtitle\">Carribean Paradise at your feet</p>
                    </div>
\t\t\t  \t</div>
                <div class=\"slide\">
\t\t\t\t\t<img src=\"images/temp/top_slide_5.jpg\" alt=\"\">
                    <div class=\"slide_text center top\">
\t                    <div class=\"slide_title\"><strong>Shopping City Breaks</strong></div>
\t                    <p class=\"subtitle\">When money's not an issue, but time is...</p>
                    </div>
\t\t\t  \t</div>
                <div class=\"slide\">
\t\t\t\t\t<img src=\"images/temp/top_slide_6.jpg\" alt=\"\">
                    <div class=\"slide_text right middle\">
\t\t\t\t\t\t<div class=\"slide_title\"><strong>Trails for the history buffs</strong></div>
\t                    <p class=\"subtitle\">Peru's Machu Picchu is out of this world</p>
                    </div>
\t\t\t  \t</div>
          \t</div>
          \t
            <div class=\"pagination_wrap\">
            \t<div class=\"pagination_inner\">
\t\t\t\t<ul class=\"pagination\">
\t\t\t\t\t<li><a href=\"#0\">GOLF & TRAVEL</a></li>
\t                <li><a href=\"#1\">National Parks</a></li>
\t                <li><a href=\"#2\">WILD AFRICA</a></li>
\t                <li><a href=\"#3\">EXOTIC beaches</a></li>
\t                <li><a href=\"#4\">SHOPPING CITIES</a></li>
\t                <li><a href=\"#5\">HistorIC TRAILS</a></li>
\t          \t</ul>
                </div>
            </div>
            
          \t<script>
\t\t\t\tjQuery(document).ready(function(\$) {
\t\t\t\t\t\t\$('.header_slider').slides({
\t\t\t\t\t\t\tgeneratePagination: false,
\t\t\t\t\t\t\tgenerateNextPrev: true,
\t\t\t\t\t\t\tplay: 5000,
\t\t\t\t\t\t\tpause: 3500,
\t\t\t\t\t\t\thoverPause: true,
\t\t\t\t\t\t\teffect: 'fade',
\t\t\t\t\t\t\tcrossfade: true,
\t\t\t\t\t\t\tpreload: true,
\t\t\t\t\t\t\tpreloadImage: 'images/loading.gif'
\t\t\t\t\t\t});
\t\t\t\t});
\t\t\t</script>
        
</div>
<!--/ header slider -->

<!-- before content -->
<div class=\"before_content\">
<div class=\"before_inner\">
\t<div class=\"container_12\">
    \t
        <div class=\"title\">
\t\t\t<h2>WHERE DO YOU WANT TO TRAVEL?</h2>
            <span class=\"title_right\"><a href=\"#\">See all Holiday offers</a></span>
        </div>
        
        <div class=\"search_main\">
        \t<form action=\"#\" method=\"get\" class=\"form_search\">
            \t
                <div class=\"search_col_1\">
                \t
                    <div class=\"row input_styled inlinelist\">
                    ";
        // line 330
        $this->displayBlock('content', $context, $blocks);
        // line 331
        echo "                        
                    </div>
                    
                </div>
                
                <div class=\"search_col_2\">
                \t<div class=\"row rowInput\">
                        <input type=\"text\" name=\"date_in\" class=\"inputField\" value=\"Check-in date\" onfocus=\"if (this.value == 'Check-in date') {this.value = '';}\" onblur=\"if (this.value == '') {this.value = 'Check-in date';}\" id=\"date_in\">
                        <span class=\"input_icon\"></span>
                    </div>
                    
                    <div class=\"row\">
                        <input type=\"text\" name=\"date_out\" class=\"inputField\" value=\"Check-out date\" onfocus=\"if (this.value == 'Check-out date') {this.value = '';}\" onblur=\"if (this.value == '') {this.value = 'Check-out date';}\" id=\"date_out\">
                        <span class=\"input_icon\"></span>
                    </div>
                    
                    <div class=\"row\">
                        <input type=\"text\" name=\"city_from\" class=\"inputField\" value=\"Departure City\" onfocus=\"if (this.value == 'Departure City') {this.value = '';}\" onblur=\"if (this.value == '') {this.value = 'Departure City';}\">
                    </div>
                    
                     <div class=\"row rowSubmit\"><input type=\"submit\" value=\"FIND VACATIONS\" class=\"btn btn-find\"></div>
                    
                </div>
                
                <div class=\"clear\"></div>
            </form>            
        </div>
        
    </div>
</div>
</div>
<!--/ before content -->

<div id=\"middle\" class=\"full_width\">
\t<div class=\"container_12\">
    
\t\t<!-- breadcrumbs -->
        <div class=\"breadcrumbs\"></div>
        <!--/ breadcrumbs -->
        
        <!-- content -->
        <div class=\"content\">
        \t
            <div class=\"post-detail\">
            \t<div class=\"entry\">
                \t
                                
                <!-- LATEST offers list -->                    
\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t<h2>EXPLORE OUR LATEST OFFERS</h2>
\t\t\t            <span class=\"title_right\"><a href=\"#\">See all Latest offers</a></span>
\t\t\t        </div>
        \t\t\t
                    <!-- filter_mid -->
                    <div class=\"block_hr filter_mid\">
\t\t\t\t\t\t<form action=\"#\" method=\"post\" class=\"\">

                        \t<div class=\"row input_styled checklist\">
\t\t\t                  \t<label class=\"label_title\">Show offers from:</label>
\t\t\t                    <div class=\"rowCheckbox\"><input type=\"checkbox\" name=\"filter_offer_1\" id=\"filter_offer_1\" value=\"1\" checked> <label for=\"filter_offer_1\">HOLIDAYS</label></div>
\t\t\t                    <div class=\"rowCheckbox\"><input type=\"checkbox\" name=\"filter_offer_2\" id=\"filter_offer_2\" value=\"2\"> <label for=\"filter_offer_2\">CITY BREAKS</label></div>
\t\t\t                    <div class=\"rowCheckbox\"><input type=\"checkbox\" name=\"filter_offer_3\" id=\"filter_offer_3\" value=\"3\" checked> <label for=\"filter_offer_3\">HOTELS</label></div>
\t\t\t                </div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t        <div class=\"row rangeField\">
                            \t<label class=\"label_title\">Price range:</label>
\t\t\t\t              \t<div class=\"range-slider\">
\t\t\t\t                <input id=\"price_range\" type=\"text\" name=\"price_range\" value=\"400;3900\">
\t\t\t\t                </div>                   
\t\t\t\t                <div class=\"clear\"></div>
\t\t\t\t            </div>
                                
                            <div class=\"row rowSubmit\">
\t\t\t\t             \t<input type=\"submit\" value=\"FILTER NOW\" class=\"btn-submit\">
\t\t\t\t            </div>
\t\t\t\t\t\t\t\t
                            <div class=\"clear\"></div>\t\t\t\t\t\t\t\t\t            
\t\t\t            </form>\t\t
                        <script type=\"text/javascript\" >
\t\t\t\t\t\t\tjQuery(document).ready(function(\$) {\t\t\t\t\t\t
\t\t\t\t\t\t\t\t// Price Range Input
\t                     \t\t\$(\"#price_range\").slider({ 
\t\t\t\t\t\t  \t\t\tfrom: 100,
\t\t\t\t\t\t\t\t\tto: 10000,
\t\t\t\t\t\t\t\t\tlimits: false, 
\t\t\t\t\t\t\t\t\tscale: ['\$100', '\$10k'],
\t\t\t\t\t\t\t\t\theterogeneity: ['50/3000'],
\t\t\t\t\t\t\t\t\tstep: 100,
\t\t\t\t\t\t\t\t\tsmooth: true,
\t\t\t\t\t\t\t\t\tdimension: '\$',
\t\t\t\t\t\t\t\t\tskin: \"round_green\"
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t});
\t            \t\t</script>   \t                
\t\t\t        </div>
\t\t\t        <!--/ filter_mid -->

                    
                    <div class=\"grid_list\">
                    \t
                        <div class=\"list_item\">
                        \t<div class=\"item_img\">                       \t    
                            <img src=\"images/temp/offer_01.jpg\" alt=\"\">                            
                            <p class=\"caption\"><a href=\"offer-details.html\">Miami, Florida - 7 nights</a> <span class=\"price\"><ins>\$</ins><strong>1390</strong></span></p>
                            <a href=\"offer-details.html\" class=\"link-img\">more...</a>
                            </div>
                        </div>
                        
                        <div class=\"list_item\">
                        \t<div class=\"item_img\">                       \t    
                            <img src=\"images/temp/offer_02.jpg\" alt=\"\">                            
                            <p class=\"caption\"><a href=\"offer-details.html\">Buenos Aires, Argentina - 6 nights</a> <span class=\"price\"><ins>\$</ins><strong>2190</strong></span></p>
                            <a href=\"offer-details.html\" class=\"link-img\">more...</a>
                            </div>
                        </div>
                        
                        <div class=\"list_item\">
                        \t<div class=\"item_img\">                       \t    
                            <img src=\"images/temp/offer_03.jpg\" alt=\"\">                            
                            <p class=\"caption\"><a href=\"offer-details.html\">Montego Bay, Jamaica - 4 nights</a> <span class=\"price\"><ins>\$</ins><strong>1645</strong></span></p>
                            <a href=\"offer-details.html\" class=\"link-img\">more...</a>
                            </div>
                        </div>
                        
                        <div class=\"list_item\">
                        \t<div class=\"item_img\">                       \t    
                            <img src=\"images/temp/offer_04.jpg\" alt=\"\">                            
                            <p class=\"caption\"><a href=\"offer-details.html\">Riviera Maya, Mexico - 12 nights</a> <span class=\"price\"><ins>\$</ins><strong>1830</strong></span></p>
                            <a href=\"offer-details.html\" class=\"link-img\">more...</a>
                            </div>
                        </div>
                        
                        <div class=\"list_item\">
                        \t<div class=\"item_img\">                       \t    
                            <img src=\"images/temp/offer_05.jpg\" alt=\"\">                            
                            <p class=\"caption\"><a href=\"offer-details.html\">Koh Phi Phi, Thailand - 9 nights</a> <span class=\"price\"><ins>\$</ins><strong>2100</strong></span></p>
                            <a href=\"offer-details.html\" class=\"link-img\">more...</a>
                            </div>
                        </div>
                        
                        <div class=\"list_item\">
                        \t<div class=\"item_img\">                       \t    
                            <img src=\"images/temp/offer_06.jpg\" alt=\"\">                            
                            <p class=\"caption\"><a href=\"offer-details.html\">Andes Circuit, Chile - 17 nights</a> <span class=\"price\"><ins>\$</ins><strong>3750</strong></span></p>
                            <a href=\"offer-details.html\" class=\"link-img\">more...</a>
                            </div>
                        </div>
                        
                        <div class=\"clear\"></div>
                    </div>
                                        
                <!--/ LATEST offers list -->
                
                \t<div class=\"divider_space\"></div>
                
                <!-- HOLIDAYS offers list -->
\t                <div class=\"title\">
\t\t\t\t\t\t<h2>CHOOSE FROM A WIDE VARIETY OF HOLIDAYS</h2>
\t\t\t\t        <span class=\"title_right\"><a href=\"#\">See all Travel offers</a></span>
\t\t\t\t\t</div>
                    
                    <div class=\"boxed_list\">
                    
                    \t<div class=\"boxed_item\">
                        \t<div class=\"boxed_icon\"><img src=\"images/icons/holidays_icon_1.png\" width=\"48\" height=\"48\" alt=\"SUMMER HOLIDAYS\"></div>
                        \t<div class=\"boxed_title\"><strong>SUMMER HOLIDAYS</strong></div>
                            <span><a href=\"#\">243 offers available</a></span>
                        </div>
                        
                        <div class=\"boxed_item\">
                        \t<div class=\"boxed_icon\"><img src=\"images/icons/holidays_icon_2.png\" width=\"48\" height=\"48\" alt=\"ALL INCLUSIVE\"></div>
                        \t<div class=\"boxed_title\"><strong>ALL INCLUSIVE</strong></div>
                            <span><a href=\"#\">65 offers available</a></span>
                        </div>
                        
                        <div class=\"boxed_item\">
                        \t<div class=\"boxed_icon\"><img src=\"images/icons/holidays_icon_3.png\" width=\"48\" height=\"48\" alt=\"FAMILY HOLIDAYS\"></div>
                        \t<div class=\"boxed_title\"><strong>FAMILY HOLIDAYS</strong></div>
                            <span><a href=\"#\">27 offers available</a></span>
                        </div>
                        
                        <div class=\"boxed_item\">
                        \t<div class=\"boxed_icon\"><img src=\"images/icons/holidays_icon_4.png\" width=\"48\" height=\"48\" alt=\"LUXURY CITY BREAKS\"></div>
                        \t<div class=\"boxed_title\"><strong>LUXURY CITY BREAKS</strong></div>
                            <span><a href=\"#\">78 offers available</a></span>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                    
                    <div class=\"boxed_list boxed_list2\">
                    
                    \t<div class=\"boxed_item\">                        \t
                        \t<div class=\"boxed_title_arrow\"><strong>Last Minute Deals</strong></div>
                        </div>
                        
                        <div class=\"boxed_item\">
                        \t<div class=\"boxed_icon\"><span class=\"price_box\"><ins>\$</ins><strong>579</strong></span></div>
                        \t<div class=\"boxed_title\"><a href=\"#\"><strong>Houda Golf Beach 5*</strong></a></div>
                            <span><a href=\"#\">Tunisia, Sousse</a></span>
                        </div>
                        
                        <div class=\"boxed_item\">
                        \t<div class=\"boxed_icon\"><span class=\"price_box\"><ins>\$</ins><strong>480</strong></span></div>
                        \t<div class=\"boxed_title\"><a href=\"#\"><strong>Hilton Sharks Bay 4*</strong></a></div>
                            <span><a href=\"#\">Egipt, Sharm El Sheik</a></span>
                        </div>
                        
                        <div class=\"boxed_item\">
                        \t<div class=\"boxed_icon\"><span class=\"price_box\"><ins>\$</ins><strong>980</strong></span></div>
                        \t<div class=\"boxed_title\"><a href=\"#\"><strong>JW Marriot Cancun 5*</strong></a></div>
                            <span><a href=\"#\">Mexico, Cancun</a></span>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                    
                
                <!--/ HOLIDAYS offers list -->
                
                \t<div class=\"divider_space_big\"></div>
                                
                <!-- SPECIAL offers list -->                    
\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t<h2>SPECIAL PRICES AND LATEST PROMOS</h2>
\t\t\t            <span class=\"title_right\"><a href=\"#\">See all Special Prices & Promos</a></span>
\t\t\t        </div>
        \t\t\t
                    <!-- filter_mid -->
                    <div class=\"block_hr filter_mid\">
\t\t\t\t\t\t<form action=\"#\" method=\"post\" class=\"\">

                        \t<div class=\"row input_styled checklist\">
\t\t\t                  \t<label class=\"label_title\">Show offers from:</label>
\t\t\t                    <div class=\"rowCheckbox\"><input type=\"checkbox\" name=\"filter_offer_11\" id=\"filter_offer_11\" value=\"1\" checked> <label for=\"filter_offer_11\">HOLIDAYS</label></div>
\t\t\t                    <div class=\"rowCheckbox\"><input type=\"checkbox\" name=\"filter_offer_22\" id=\"filter_offer_22\" value=\"2\" checked> <label for=\"filter_offer_22\">CITY BREAKS</label></div>
\t\t\t                    <div class=\"rowCheckbox\"><input type=\"checkbox\" name=\"filter_offer_33\" id=\"filter_offer_33\" value=\"3\" checked> <label for=\"filter_offer_33\">HOTELS</label></div>
\t\t\t                </div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t        <div class=\"row rangeField\">
                            \t<label class=\"label_title\">Price range:</label>
\t\t\t\t              \t<div class=\"range-slider\">
\t\t\t\t                <input id=\"price_range_promo\" type=\"text\" name=\"price_range_promo\" value=\"100;2500\">
\t\t\t\t                </div>                   
\t\t\t\t                <div class=\"clear\"></div>
\t\t\t\t            </div>
                                
                            <div class=\"row rowSubmit\">
\t\t\t\t             \t<input type=\"submit\" value=\"FILTER NOW\" class=\"btn-submit\">
\t\t\t\t            </div>
\t\t\t\t\t\t\t\t
                            <div class=\"clear\"></div>\t\t\t\t\t\t\t\t\t            
\t\t\t            </form>\t\t
                        <script type=\"text/javascript\" >
\t\t\t\t\t\t\tjQuery(document).ready(function(\$) {\t\t\t\t\t\t
\t\t\t\t\t\t\t\t// Price Range Input
\t                     \t\t\$(\"#price_range_promo\").slider({ 
\t\t\t\t\t\t  \t\t\tfrom: 100,
\t\t\t\t\t\t\t\t\tto: 10000,
\t\t\t\t\t\t\t\t\tlimits: false, 
\t\t\t\t\t\t\t\t\tscale: ['\$100', '\$10k'],
\t\t\t\t\t\t\t\t\theterogeneity: ['50/3000'],
\t\t\t\t\t\t\t\t\tstep: 100,
\t\t\t\t\t\t\t\t\tsmooth: true,
\t\t\t\t\t\t\t\t\tdimension: '\$',
\t\t\t\t\t\t\t\t\tskin: \"round_green\"
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t});
\t            \t\t</script>   \t                
\t\t\t        </div>
\t\t\t        <!--/ filter_mid -->

                    
                    <div class=\"grid_list promo_list\">
                    \t
                        <div class=\"list_item\">
                        \t<div class=\"item_img\">
                            <img src=\"images/temp/offer_07.jpg\" alt=\"\">                            
                            <p class=\"caption\"><a href=\"offer-details.html\">Rincon, Puerto Rico - 7 nights</a> <span class=\"price\"><ins>\$</ins><strong>790</strong></span></p>
                            <span class=\"ribbon off-30\">SALE: 30% OFF</span>
                            <a href=\"offer-details.html\" class=\"link-img\">more...</a>                            
                            </div>
                        </div>
                        
                        <div class=\"list_item\">
                        \t<div class=\"item_img\">                       \t    
                            <img src=\"images/temp/offer_08.jpg\" alt=\"\">                            
                            <p class=\"caption\"><a href=\"offer-details.html\">Chicago, Illinois - 6 nights</a> <span class=\"price\"><ins>\$</ins><strong>647</strong></span></p>
                            <span class=\"ribbon off-25\">SALE: 25% OFF</span>
                            <a href=\"offer-details.html\" class=\"link-img\">more...</a>                            
                            </div>
                        </div>
                        
                        <div class=\"list_item\">
                        \t<div class=\"item_img\">                       \t    
                            <img src=\"images/temp/offer_09.jpg\" alt=\"\">                            
                            <p class=\"caption\"><a href=\"offer-details.html\">Langkawi, Malaysia - 5 nights</a> <span class=\"price\"><ins>\$</ins><strong>645</strong></span></p>
                            <span class=\"ribbon off-65\">SALE: 65% OFF</span>
                            <a href=\"offer-details.html\" class=\"link-img\">more...</a>
                            </div>
                        </div>
                        
                        <div class=\"list_item\">
                        \t<div class=\"item_img\">                       \t    
                            <img src=\"images/temp/offer_10.jpg\" alt=\"\">                            
                            <p class=\"caption\"><a href=\"offer-details.html\">Riviera Maya, Mexico - 12 nights</a> <span class=\"price\"><ins>\$</ins><strong>870</strong></span></p>
                            <span class=\"ribbon off-15\">SALE: 15% OFF</span>
                            <a href=\"offer-details.html\" class=\"link-img\">more...</a>
                            </div>
                        </div>
                        
                        <div class=\"list_item\">
                        \t<div class=\"item_img\">                       \t    
                            <img src=\"images/temp/offer_11.jpg\" alt=\"\">                            
                            <p class=\"caption\"><a href=\"offer-details.html\">Koh Phi Phi, Thailand - 9 nights</a> <span class=\"price\"><ins>\$</ins><strong>2340</strong></span></p>
                            <span class=\"ribbon off-50\">SALE: 50% OFF</span>
                            <a href=\"offer-details.html\" class=\"link-img\">more...</a>
                            </div>
                        </div>
                        
                        <div class=\"list_item\">
                        \t<div class=\"item_img\">                       \t    
                            <img src=\"images/temp/offer_12.jpg\" alt=\"\">                            
                            <p class=\"caption\"><a href=\"offer-details.html\">Andes Circuit, Chile - 17 nights</a> <span class=\"price\"><ins>\$</ins><strong>2450</strong></span></p>
                            <span class=\"ribbon off-35\">SALE: 35% OFF</span>
                            <a href=\"offer-details.html\" class=\"link-img\">more...</a>
                            </div>
                        </div>
                        
                        <div class=\"clear\"></div>
                    </div>
                                        

                <!--/ SPECIAL offers list -->
                    
                <div class=\"clear\"></div>
                </div>
            </div>
        \t
        </div>
        <!--/ content -->
        
        <div class=\"clear\"></div>        
    </div>
</div>
<!--/ middle -->

<!-- after content -->
<div class=\"after_content\">
<div class=\"after_inner\">
\t<div class=\"container_12\">
   \t    
        <!--# widgets area, col 1 -->    
        <div class=\"widgetarea widget_col_1\">
        
        \t<!-- widget_products -->
        \t<div class=\"widget-container widget_products\">
            \t<div class=\"inner\">
               \t  \t<h3>PROMO OF THE DAY:</h3>                    
                    <div class=\"prod_item\">
\t                    <div class=\"prod_image\"><a href=\"offer-details.html\"><img src=\"images/temp/offer_small_01.jpg\" width=\"140\" height=\"98\" alt=\"\"></a></div>
\t                    <span class=\"price_box\"><ins>\$</ins><strong>1579</strong></span>
\t                    <div class=\"prod_title\">
                        \t<a href=\"offer-details.html\"><strong>Hilton Opera House 5* 7 nights, flight included</strong></a><br>
\t                    \t<span><a href=\"offer-details.html\">Sydney, Australia</a></span>
\t                    </div> 
                    </div>                                  
                    <div class=\"clear\"></div>                                                                  
                </div>
            </div>
            <!--/ widget_products -->
            
        </div>
        <!--/ widgets area, col 1 -->    
        
        <!--# widgets area, col 2 -->
        <div class=\"widgetarea widget_col_2\">
        \t
            <!-- widget_newsletter -->
            <div class=\"widget-container newsletterBox\">
\t\t\t\t<div class=\"inner\">
\t\t\t\t\t<h3>NEWSLETTER SIGNUP:</h3>
\t\t\t\t\t<form method=\"get\" action=\"#\">
\t\t\t\t\t\t<input type=\"text\" value=\"Enter your email address\" onfocus=\"if (this.value == 'Enter your email address') {this.value = '';}\" onblur=\"if (this.value == '') {this.value = 'Enter your email address';}\" name=\"email\" class=\"inputField\">\t\t\t\t                    
\t\t\t\t\t\t<div class=\"rowCheckbox input_styled checklist\">
\t\t\t\t\t\t<input type=\"checkbox\" name=\"subscribe\" id=\"subscribe\" value=\"1\"> <label for=\"subscribe\">Subscribe to RSS</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input type=\"submit\" value=\"SUBMIT\" class=\"btn-submit\">
\t\t\t\t\t</form>     
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!--/ widget_newsletter -->
            
        </div>
        <!--/ widgets area, col 2 -->
        
        <!--# widgets area, col 3 -->
        <div class=\"widgetarea widget_col_3\">
        \t
            <!-- widget_twitter -->            
            <div class=\"widget-container widget_twitter\">
\t\t\t\t<h3>TWITTER FEED:</h3>   
               
  \t\t    \t<div class=\"tweet_item\">
                \t<div class=\"tweet_image\"><img src=\"images/temp/twitter_avatar.png\" width=\"30\" height=\"30\" alt=\"\"></div>
                    <div class=\"tweet_text\">
                    \t<div class=\"inner\">
\t\t    \t  \t\tHow the Explosion in Online’s Education can be the Revolution for your Business: <a href=\"#\">ow.ly/aFK40</a>
                        <br><a href=\"#\" class=\"tweet_author\">#blogging</a>
                        </div>
                    </div>
                    <div class=\"clear\"></div>
\t  \t\t  \t</div>   
                                
                <a href=\"#\" class=\"fallow\">Follow us</a>
\t\t\t</div>
            <!--/ widget_twitter -->
        </div>
        <!--/ widgets area, col 3 -->
        
        <div class=\"clear\"></div>
    </div>
</div>
</div>
<!--/ after content -->

<!-- footer -->
<div class=\"footer\">
<div class=\"footer_inner\">
\t<div class=\"container_12\">
    
    \t<!--# footer col 1 -->
        <div class=\"widgetarea f_col_1\">
        \t
            <!-- widget_categories -->
\t        <div class=\"widget-container widget_categories\">
\t\t\t\t<h3 class=\"widget-title\">WORLD DESTINATIONS:</h3>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"#\"><span>AFRICA</span></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><span>NORTH AMERICA</span></a></li>
                        <li><a href=\"#\"><span>AUSTRALIA</span></a></li>
                        <li><a href=\"#\"><span>CENTRAL  AMERICA</span></a></li>
                        <li><a href=\"#\"><span>ASIA & PACIFIC</span></a></li>
                        <li><a href=\"#\"><span>SOUTH AMERICA</span></a></li>
                        <li><a href=\"#\"><span>EUROPE</span></a></li>
                        <li><a href=\"#\"><span>CARRIBEAN</span></a></li>
                        <li><a href=\"#\"><span>MIDDLE EAST</span></a></li>
                        <li class=\"item-search\"><a href=\"#\"><span>Search for more</span></a></li>
\t\t\t\t\t</ul>
\t\t\t</div>  
\t        <!--/ widget_categories -->
           
        </div>
        <!--/ footer col 1 -->
        
        <!--# footer col 2 -->
        <div class=\"widgetarea f_col_2\">
        \t
            <div class=\"widget-container widget_pages\">
\t\t\t\t<h3 class=\"widget-title\">USEFUL LINKS:</h3>
                        <ul>
                            
                \t      <li><a href=\"#\">About us</a></li>
                          <li><a href=\"#\">Contact us</a></li>
                          <li><a href=\"#\">Our Blog</a></li>
                          <li><a href=\"#\">TERMS OF SERVICE</a></li>
                          <li><a href=\"#\">PRIVACY POLICY</a></li>
                        </ul>
\t\t\t</div>
            
           
        </div>
        <!--/ footer col 2 -->
        
        
        <!--# footer col 3 -->
        <div class=\"widgetarea f_col_3\">
        \t            
            <!-- widget_contact -->
\t        <div class=\"widget-container widget_contact\">   
\t\t\t\t<h3 class=\"widget-title\">CONNECT WITH US</h3>
\t            <div class=\"inner\">   
\t            \t
\t\t\t\t\t<div class=\"contact-social\">
\t\t            \t<div><strong>Call us:</strong> <br> <a href=\"#\" class=\"btn btn_skype\">Skype</a></div>
\t\t                <div><strong>Follow us:</strong> <br> <a href=\"#\" class=\"btn btn_twitter\">Twitter</a></div>
\t\t                <div><strong>Join us:</strong> <br> <a href=\"#\" class=\"btn btn_fb\">Facebook</a></div>
\t\t           \t<div class=\"clear\"></div>
\t\t            </div>
                    
                    <div class=\"contact-address\">
\t\t\t\t\t\t<div class=\"phone\"><em>Phone:</em> <span>555-522.326</span></div>
\t                    <div class=\"fax\"><em>Fax:</em> <span>555-345.285</span></div>
\t\t                <div class=\"mail\"><em>Email:</em> <a href=\"mailto:contact@travelagency.com\">contact@travelagency.com</a></div>
\t\t\t\t\t</div>
\t                       
\t\t\t\t</div>     
\t\t\t</div>
\t        <!--/ widget_contact -->
           
        </div>
        <!--/ footer col 3 -->
    \t
        
        <div class=\"copyright\">
        \t<p class=\"alignleft\">copyright 2012 - Travel  Agency WordPress theme</p>
            <p>Created by <a href=\"http://themefuse.com\">Themefuse</a> - Premium WordPress themes</p>
        </div>
        
    </div>
</div>
</div>
<!--/ footer -->
    
</div>
</body>
</html>";
    }

    // line 330
    public function block_content($context, array $blocks = array())
    {
        echo "  ";
    }

    public function getTemplateName()
    {
        return "TravelAnnonceBundle::LayoutIndex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  933 => 330,  415 => 331,  413 => 330,  133 => 53,  129 => 52,  124 => 50,  120 => 49,  115 => 47,  111 => 46,  107 => 45,  102 => 43,  97 => 41,  93 => 40,  89 => 39,  83 => 36,  79 => 35,  75 => 34,  68 => 30,  63 => 28,  59 => 27,  54 => 25,  50 => 24,  46 => 23,  42 => 22,  20 => 2,);
    }
}
