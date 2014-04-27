<?php

/* TravelAnnonceBundle::layout.html.twig */
class __TwigTemplate_07e5db51955a722f8401e95c55ea0fe34f64aecc63b5755188d06caa0ea7e429 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
  \t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<title>Travel Agency - HTML5 Booking template</title>
\t
    <!-- Bootstrap -->
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">

    <!-- Carousel -->
\t<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("examples/carousel/carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/html5shiv.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/respond.min.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->
\t
    <!-- Fonts -->\t
\t<link href='http://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
\t<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,400,300,300italic' rel='stylesheet' type='text/css'>\t
\t<!-- Font-Awesome -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/font-awesome.css"), "html", null, true);
        echo "\" media=\"screen\" />
    <!--[if lt IE 7]><link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/font-awesome-ie7.css"), "html", null, true);
        echo "\" media=\"screen\" /><![endif]-->
\t
    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/fullwidth.css"), "html", null, true);
        echo "\" media=\"screen\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("rs-plugin/css/settings2.css"), "html", null, true);
        echo "\" media=\"screen\" />

    <!-- Picker UI-->\t
\t<link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/jquery-ui.css"), "html", null, true);
        echo "\" />\t\t
\t
    <!-- jQuery -->\t
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.v2.0.3.js"), "html", null, true);
        echo "\"></script>

\t
  </head>
  <body id=\"top\">
    
\t<!-- Top wrapper -->\t
\t<div class=\"navbar-wrapper2 navbar-fixed-top\">
      <div class=\"container\">
\t\t<div class=\"navbar mtnav\">

\t\t\t<div class=\"container\">
\t\t\t  <!-- / Navigation -->\t\t\t
\t\t\t  <div class=\"navbar-header\">
\t\t\t\t<button data-target=\".navbar-collapse\" data-toggle=\"collapse\" class=\"navbar-toggle\" type=\"button\">
\t\t\t\t  <span class=\"icon-bar\"></span>
\t\t\t\t  <span class=\"icon-bar\"></span>
\t\t\t\t  <span class=\"icon-bar\"></span>
\t\t\t\t</button>
\t\t\t\t<a href=\"index.html\" class=\"navbar-brand\"><img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"Travel Agency Logo\" class=\"logo\"/></a>
\t\t\t  </div>
\t\t\t  <div class=\"navbar-collapse collapse\">
\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t  <li class=\"dropdown active\">
\t\t\t\t\t<a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"index.html\">Home<b class=\"lightcaret mt-2\"></b></a>
\t\t\t\t\t<ul class=\"dropdown-menu posright-0\">
\t\t\t\t\t  <li class=\"dropdown-header\">Intro</li>
\t\t\t\t\t  <li><a href=\"intro.html\">Intro 1</a></li>
\t\t\t\t\t  <li><a href=\"intro2.html\">Intro 2 - slides</a></li>

\t\t\t\t\t  <li class=\"dropdown-header\">Homepages</li>\t\t\t\t\t  
\t\t\t\t\t  <li><a href=\"index.html\">Home 1 minimal</a></li>
\t\t\t\t\t  <li><a href=\"index2.html\">Home 2 offers</a></li>
\t\t\t\t\t  <li><a href=\"index3.html\">Home 3 full search</a></li>
\t\t\t\t\t  <li><a href=\"index4.html\">Home 4 presentation</a></li>
\t\t\t\t\t  <li><a href=\"index5.html\">Home 5 footer2</a></li>
\t\t\t\t\t  <li><a href=\"index6.html\">Home 6 full</a></li>
\t\t\t\t\t  <li><a href=\"index7.html\">Home 7 </a></li>
\t\t\t\t\t</ul>
\t\t\t\t  </li>
\t\t\t\t  <li class=\"dropdown\">
\t\t\t\t\t<a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">Pages<b class=\"lightcaret mt-2\"></b></a>
\t\t\t\t\t<ul class=\"dropdown-menu posright-0\">
\t\t\t\t\t  <li><a href=\"list.html\">List page 1</a></li>
\t\t\t\t\t  <li><a href=\"list2.html\">List page 2</a></li>
\t\t\t\t\t  <li><a href=\"list3.html\">List page 3</a></li>
\t\t\t\t\t  <li><a href=\"list4.html\">List page 4</a></li>
\t\t\t\t\t  <li><a href=\"details.html\">Details page</a></li>
\t\t\t\t\t  <li><a href=\"payment.html\">Payment</a></li>
\t\t\t\t\t  <li><a href=\"profile.html\">User Profile</a></li>
\t\t\t\t\t  <li><a href=\"login.html\">Login</a></li>
\t\t\t\t\t</ul>
\t\t\t\t  </li>
\t\t\t\t  <li><a href=\"#\">Hotels</a></li>
\t\t\t\t  <li><a href=\"#about\">Flights</a></li>
\t\t\t\t  <li><a href=\"#contact\">Vacations</a></li>
\t\t\t\t  <li><a href=\"#contact\">Cars</a></li>\t\t\t  
\t\t\t\t  <li><a href=\"#contact\">Cruises</a></li>\t\t\t  
\t\t\t\t  <li><a href=\"#contact\">Things to do</a></li>\t\t\t  
\t\t\t\t  <li><a href=\"#contact\">Last minute</a></li>\t\t\t  
\t\t\t\t  <li><a href=\"#contact\">Early booking</a></li>\t\t\t  
\t\t\t\t  <li><a href=\"#contact\">Deals</a></li>\t\t\t  
\t\t\t\t</ul>
\t\t\t  </div>
\t\t\t  <!-- / Navigation -->
\t\t\t</div>
\t\t
        </div>
      </div>
    </div>
\t<!-- / Top wrapper -->

\t<!-- Blue background -->
\t<div class=\"mtslide2 sliderbg2\"></div>
\t<!-- / Blue background -->

    <!-- WRAP -->
\t<div class=\"wrap ctup\" >
\t\t
\t\t<div class=\"slideup\">
\t\t\t<div class=\"container z-index100\">\t\t
\t\t\t\t<div class=\"slidercontainer\">
\t\t\t\t
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-4 scolleft\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"w50percent\">
\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t  <label>
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked>
\t\t\t\t\t\t\t\t\t<span class=\"hotel-ico\"></span> Hotels
\t\t\t\t\t\t\t\t  </label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t  <label>
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"option2\">
\t\t\t\t\t\t\t\t\t<span class=\"flight-ico\"></span> Flights
\t\t\t\t\t\t\t\t  </label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t  <label>
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios3\" value=\"option2\">
\t\t\t\t\t\t\t\t\t<span class=\"suitcase-ico\"></span> Vacations
\t\t\t\t\t\t\t\t  </label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t  <label>
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios4\" value=\"option2\">
\t\t\t\t\t\t\t\t\t<span class=\"car-ico\"></span> Cars
\t\t\t\t\t\t\t\t  </label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t  <label>
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios5\" value=\"option2\">
\t\t\t\t\t\t\t\t\t<span class=\"cruise-ico\"></span>Cruises
\t\t\t\t\t\t\t\t  </label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"w50percentlast\">
\t\t\t\t\t\t\t\t<p class=\"cstyle08\">Packages:</p>
\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t  <label>
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios6\" value=\"option2\">
\t\t\t\t\t\t\t\t\tFlight + Hotel + Car
\t\t\t\t\t\t\t\t  </label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t  <label>
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios7\" value=\"option2\">
\t\t\t\t\t\t\t\t\tFlight + Hotel
\t\t\t\t\t\t\t\t  </label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t  <label>
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios8\" value=\"option2\">
\t\t\t\t\t\t\t\t\tFlight + Car
\t\t\t\t\t\t\t\t  </label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t  <label>
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios9\" value=\"option2\">
\t\t\t\t\t\t\t\t\tHotel + Car
\t\t\t\t\t\t\t\t  </label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"clearfix\"></div><br/>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- HOTELS TAB -->
\t\t\t\t\t\t\t<div class=\"hotelstab none\">
\t\t\t\t\t\t\t\t<span class=\"opensans size18\">Where do you want to go?</span>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Greece\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"w50percent\">
\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft\">
\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Check in date</b></span>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control mySelectCalendar\" id=\"datepicker\" placeholder=\"mm/dd/yyyy\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"w50percentlast\">
\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft right\">
\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Check in date</b></span>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control mySelectCalendar\" id=\"datepicker2\" placeholder=\"mm/dd/yyyy\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"room1 margtop15\">
\t\t\t\t\t\t\t\t\t<div class=\"w50percent\">
\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>ROOM 1</b></span><br/>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"addroom1 block\"><a href=\"#room2\" onclick=\"addroom2()\" class=\"grey\">+ Add room</a></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"w50percentlast\">\t
\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft right ohidden\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"w50percent\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Adult</b></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control mySelectBoxClass\">
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option selected>2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"w50percentlast\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft right ohidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Child</b></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control mySelectBoxClass\">
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>0</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option selected>1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"room2 none\">
\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div><div class=\"line1\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"w50percent\">
\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>ROOM 2</b></span><br/>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"addroom2 block grey\"><a href=\"#\" onclick=\"addroom3()\" class=\"grey\">+ Add room</a> | <a href=\"#\" onclick=\"removeroom2()\" class=\"orange\"><img src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/delete.png"), "html", null, true);
        echo "\" alt=\"delete\"/></a></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"w50percentlast\">\t
\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft right\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"w50percent\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Adult</b></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control mySelectBoxClass\">
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option selected>3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"w50percentlast\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft right\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Child</b></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control mySelectBoxClass\">
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option selected>0</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>\t\t

\t\t\t\t\t\t\t\t<div class=\"room3 none\">
\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div><div class=\"line1\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"w50percent\">
\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>ROOM 3</b></span><br/>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"addroom3 block grey\"><a href=\"#\" onclick=\"addroom3()\" class=\"grey\">+ Add room</a> | <a href=\"#\" onclick=\"removeroom3()\" class=\"orange\"><img src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/delete.png"), "html", null, true);
        echo "\" alt=\"delete\"/></a></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"w50percentlast\">\t
\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft right\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"w50percent\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Adult</b></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control mySelectBoxClass\">
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option selected>1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"w50percentlast\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft right\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Child</b></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control mySelectBoxClass\">
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option selected>0</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div><div class=\"clearfix\"></div>
\t\t\t\t\t\t\t\t<form action=\"http://demo.titanicthemes.com/travel/list4.html\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn-search3\">Search</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- END OF HOTELS TAB -->
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- FLIGHTS TAB -->
\t\t\t\t\t\t\t<div class=\"flightstab none\">
\t\t\t\t\t\t\t\t<div class=\"w50percent\">
\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft\">
\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Flying from</b></span>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"City or airport\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"w50percentlast\">
\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft right\">
\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>To</b></span>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"City or airport\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div><br/>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"w50percent\">
\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft\">
\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Departing</b></span>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control mySelectCalendar\" id=\"datepicker3\" placeholder=\"mm/dd/yyyy\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"w50percentlast\">
\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft right\">
\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Returning</b></span>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control mySelectCalendar\" id=\"datepicker4\" placeholder=\"mm/dd/yyyy\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"room1 margtop15\">
\t\t\t\t\t\t\t\t\t<div class=\"w50percent\">
\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Adult</b></span>
\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control mySelectBoxClass\">
\t\t\t\t\t\t\t\t\t\t\t  <option>1</option>
\t\t\t\t\t\t\t\t\t\t\t  <option selected>2</option>
\t\t\t\t\t\t\t\t\t\t\t  <option>3</option>
\t\t\t\t\t\t\t\t\t\t\t  <option>4</option>
\t\t\t\t\t\t\t\t\t\t\t  <option>5</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"w50percentlast\">\t
\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft right\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Child</b></span>
\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control mySelectBoxClass\">
\t\t\t\t\t\t\t\t\t\t\t  <option>0</option>
\t\t\t\t\t\t\t\t\t\t\t  <option selected>1</option>
\t\t\t\t\t\t\t\t\t\t\t  <option>2</option>
\t\t\t\t\t\t\t\t\t\t\t  <option>3</option>
\t\t\t\t\t\t\t\t\t\t\t  <option>4</option>
\t\t\t\t\t\t\t\t\t\t\t  <option>5</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div><div class=\"clearfix\"></div>
\t\t\t\t\t\t\t\t<form action=\"http://demo.titanicthemes.com/travel/list4.html\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn-search3\">Search</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- END OF FLIGHTS TAB -->
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- VACATIONS TAB -->
\t\t\t\t\t\t\t<div class=\"vacationstab none\">
\t\t\t\t\t\t\t\t<div class=\"w50percent\">
\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft\">
\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Flying from</b></span>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"City or airport\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"w50percentlast\">
\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft right\">
\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>To</b></span>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"City or airport\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div><br/>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"w50percent\">
\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft\">
\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Check in date</b></span>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control mySelectCalendar\" id=\"datepicker7\" placeholder=\"mm/dd/yyyy\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"w50percentlast\">
\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft right\">
\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Check in date</b></span>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control mySelectCalendar\" id=\"datepicker8\" placeholder=\"mm/dd/yyyy\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"room1 margtop15\">
\t\t\t\t\t\t\t\t\t<div class=\"w50percent\">
\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>ROOM 1</b></span><br/>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"addroom1 block\"><a href=\"#room2\" onclick=\"addroom2()\" class=\"grey\">+ Add room</a></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"w50percentlast\">\t
\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft right\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"w50percent\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Adult</b></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control mySelectBoxClass\">
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option selected>2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"w50percentlast\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft right\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Child</b></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control mySelectBoxClass\">
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>0</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option selected>1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"room2 none\">
\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div><div class=\"line1\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"w50percent\">
\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>ROOM 2</b></span><br/>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"addroom2 block grey\"><a href=\"#\" onclick=\"addroom3()\" class=\"grey\">+ Add room</a> | <a href=\"#\" onclick=\"removeroom2()\" class=\"orange\"><img src=\"";
        // line 481
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/delete.png"), "html", null, true);
        echo "\" alt=\"delete\"/></a></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"w50percentlast\">\t
\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft right\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"w50percent\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Adult</b></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control mySelectBoxClass\">
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option selected>3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"w50percentlast\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft right\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Child</b></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control mySelectBoxClass\">
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option selected>0</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>\t\t

\t\t\t\t\t\t\t\t<div class=\"room3 none\">
\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div><div class=\"line1\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"w50percent\">
\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>ROOM 3</b></span><br/>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"addroom3 block grey\"><a href=\"#\" onclick=\"addroom3()\" class=\"grey\">+ Add room</a> | <a href=\"#\" onclick=\"removeroom3()\" class=\"orange\"><img src=\"";
        // line 521
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/delete.png"), "html", null, true);
        echo "\" alt=\"delete\"/></a></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"w50percentlast\">\t
\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft right\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"w50percent\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Adult</b></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control mySelectBoxClass\">
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option selected>1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"w50percentlast\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft right\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Child</b></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control mySelectBoxClass\">
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option selected>0</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div><div class=\"clearfix\"></div>
\t\t\t\t\t\t\t\t<form action=\"http://demo.titanicthemes.com/travel/list4.html\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn-search3\">Search</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- END OF VACATIONS TAB -->
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- CARS TAB -->
\t\t\t\t\t\t\t<div class=\"carstab none\">
\t\t\t\t\t\t\t\t<div class=\"w50percent\">
\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft\">
\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Picking up</b></span>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Airport, address\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"w50percentlast\">
\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft right\">
\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Dropping off</b></span>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Airport, address\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div><br/>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"w50percent\">
\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft\">
\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Pick up date</b></span>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control mySelectCalendar\" id=\"datepicker5\" placeholder=\"mm/dd/yyyy\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"w50percentlast\">
\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft right\">
\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Hour</b></span>
\t\t\t\t\t\t\t\t\t\t<select class=\"form-control mySelectBoxClass\">
\t\t\t\t\t\t\t\t\t\t  <option>12:00 AM</option>
\t\t\t\t\t\t\t\t\t\t  <option>12:30 AM</option>
\t\t\t\t\t\t\t\t\t\t  <option>01:00 AM</option>
\t\t\t\t\t\t\t\t\t\t  <option>01:30 AM</option>
\t\t\t\t\t\t\t\t\t\t  <option>02:00 AM</option>
\t\t\t\t\t\t\t\t\t\t  <option>02:30 AM</option>
\t\t\t\t\t\t\t\t\t\t  <option>03:00 AM</option>
\t\t\t\t\t\t\t\t\t\t  <option>03:30 AM</option>
\t\t\t\t\t\t\t\t\t\t  <option>04:00 AM</option>
\t\t\t\t\t\t\t\t\t\t  <option>04:30 AM</option>
\t\t\t\t\t\t\t\t\t\t  <option>05:00 AM</option>
\t\t\t\t\t\t\t\t\t\t  <option>05:30 AM</option>
\t\t\t\t\t\t\t\t\t\t  <option>06:00 AM</option>
\t\t\t\t\t\t\t\t\t\t  <option>06:30 AM</option>
\t\t\t\t\t\t\t\t\t\t  <option>07:00 AM</option>
\t\t\t\t\t\t\t\t\t\t  <option>07:30 AM</option>
\t\t\t\t\t\t\t\t\t\t  <option>08:00 AM</option>
\t\t\t\t\t\t\t\t\t\t  <option>08:30 AM</option>
\t\t\t\t\t\t\t\t\t\t  <option>09:00 AM</option>
\t\t\t\t\t\t\t\t\t\t  <option>09:30 AM</option>
\t\t\t\t\t\t\t\t\t\t  <option>10:00 AM</option>
\t\t\t\t\t\t\t\t\t\t  <option selected>10:30 AM</option>
\t\t\t\t\t\t\t\t\t\t  <option>11:00 AM</option>
\t\t\t\t\t\t\t\t\t\t  <option>11:30 AM</option>
\t\t\t\t\t\t\t\t\t\t  <option>12:00 PM</option>
\t\t\t\t\t\t\t\t\t\t  <option>12:30 PM</option>\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t  <option>01:00 PM</option>
\t\t\t\t\t\t\t\t\t\t  <option>01:30 PM</option>
\t\t\t\t\t\t\t\t\t\t  <option>02:00 PM</option>
\t\t\t\t\t\t\t\t\t\t  <option>02:30 PM</option>
\t\t\t\t\t\t\t\t\t\t  <option>03:00 PM</option>
\t\t\t\t\t\t\t\t\t\t  <option>03:30 PM</option>
\t\t\t\t\t\t\t\t\t\t  <option>04:00 PM</option>
\t\t\t\t\t\t\t\t\t\t  <option>04:30 PM</option>
\t\t\t\t\t\t\t\t\t\t  <option>05:00 PM</option>
\t\t\t\t\t\t\t\t\t\t  <option>05:30 PM</option>
\t\t\t\t\t\t\t\t\t\t  <option>06:00 PM</option>
\t\t\t\t\t\t\t\t\t\t  <option>06:30 PM</option>
\t\t\t\t\t\t\t\t\t\t  <option>07:00 PM</option>
\t\t\t\t\t\t\t\t\t\t  <option>07:30 PM</option>
\t\t\t\t\t\t\t\t\t\t  <option>08:00 PM</option>
\t\t\t\t\t\t\t\t\t\t  <option>08:30 PM</option>
\t\t\t\t\t\t\t\t\t\t  <option>09:00 PM</option>
\t\t\t\t\t\t\t\t\t\t  <option>09:30 PM</option>
\t\t\t\t\t\t\t\t\t\t  <option>10:00 PM</option>
\t\t\t\t\t\t\t\t\t\t  <option>10:30 PM</option>
\t\t\t\t\t\t\t\t\t\t  <option>11:00 PM</option>
\t\t\t\t\t\t\t\t\t\t  <option>11:30 PM</option>\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"room1 margtop15\">
\t\t\t\t\t\t\t\t\t<div class=\"w50percent\">
\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Drop off date</b></span>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control mySelectCalendar\" id=\"datepicker6\" placeholder=\"mm/dd/yyyy\"/>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"w50percentlast\">\t
\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft right\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Hour</b></span>
\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control mySelectBoxClass\">
\t\t\t\t\t\t\t\t\t\t\t  <option>12:00 AM</option>
\t\t\t\t\t\t\t\t\t\t\t  <option>12:30 AM</option>
\t\t\t\t\t\t\t\t\t\t\t  <option>01:00 AM</option>
\t\t\t\t\t\t\t\t\t\t\t  <option>01:30 AM</option>
\t\t\t\t\t\t\t\t\t\t\t  <option>02:00 AM</option>
\t\t\t\t\t\t\t\t\t\t\t  <option>02:30 AM</option>
\t\t\t\t\t\t\t\t\t\t\t  <option>03:00 AM</option>
\t\t\t\t\t\t\t\t\t\t\t  <option>03:30 AM</option>
\t\t\t\t\t\t\t\t\t\t\t  <option>04:00 AM</option>
\t\t\t\t\t\t\t\t\t\t\t  <option>04:30 AM</option>
\t\t\t\t\t\t\t\t\t\t\t  <option>05:00 AM</option>
\t\t\t\t\t\t\t\t\t\t\t  <option>05:30 AM</option>
\t\t\t\t\t\t\t\t\t\t\t  <option>06:00 AM</option>
\t\t\t\t\t\t\t\t\t\t\t  <option>06:30 AM</option>
\t\t\t\t\t\t\t\t\t\t\t  <option>07:00 AM</option>
\t\t\t\t\t\t\t\t\t\t\t  <option>07:30 AM</option>
\t\t\t\t\t\t\t\t\t\t\t  <option>08:00 AM</option>
\t\t\t\t\t\t\t\t\t\t\t  <option>08:30 AM</option>
\t\t\t\t\t\t\t\t\t\t\t  <option>09:00 AM</option>
\t\t\t\t\t\t\t\t\t\t\t  <option>09:30 AM</option>
\t\t\t\t\t\t\t\t\t\t\t  <option>10:00 AM</option>
\t\t\t\t\t\t\t\t\t\t\t  <option selected>10:30 AM</option>
\t\t\t\t\t\t\t\t\t\t\t  <option>11:00 AM</option>
\t\t\t\t\t\t\t\t\t\t\t  <option>11:30 AM</option>
\t\t\t\t\t\t\t\t\t\t\t  <option>12:00 PM</option>
\t\t\t\t\t\t\t\t\t\t\t  <option>12:30 PM</option>\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t\t  <option>01:00 PM</option>
\t\t\t\t\t\t\t\t\t\t\t  <option>01:30 PM</option>
\t\t\t\t\t\t\t\t\t\t\t  <option>02:00 PM</option>
\t\t\t\t\t\t\t\t\t\t\t  <option>02:30 PM</option>
\t\t\t\t\t\t\t\t\t\t\t  <option>03:00 PM</option>
\t\t\t\t\t\t\t\t\t\t\t  <option>03:30 PM</option>
\t\t\t\t\t\t\t\t\t\t\t  <option>04:00 PM</option>
\t\t\t\t\t\t\t\t\t\t\t  <option>04:30 PM</option>
\t\t\t\t\t\t\t\t\t\t\t  <option>05:00 PM</option>
\t\t\t\t\t\t\t\t\t\t\t  <option>05:30 PM</option>
\t\t\t\t\t\t\t\t\t\t\t  <option>06:00 PM</option>
\t\t\t\t\t\t\t\t\t\t\t  <option>06:30 PM</option>
\t\t\t\t\t\t\t\t\t\t\t  <option>07:00 PM</option>
\t\t\t\t\t\t\t\t\t\t\t  <option>07:30 PM</option>
\t\t\t\t\t\t\t\t\t\t\t  <option>08:00 PM</option>
\t\t\t\t\t\t\t\t\t\t\t  <option>08:30 PM</option>
\t\t\t\t\t\t\t\t\t\t\t  <option>09:00 PM</option>
\t\t\t\t\t\t\t\t\t\t\t  <option>09:30 PM</option>
\t\t\t\t\t\t\t\t\t\t\t  <option>10:00 PM</option>
\t\t\t\t\t\t\t\t\t\t\t  <option>10:30 PM</option>
\t\t\t\t\t\t\t\t\t\t\t  <option>11:00 PM</option>
\t\t\t\t\t\t\t\t\t\t\t  <option>11:30 PM</option>\t\t
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div><div class=\"clearfix\"></div>
\t\t\t\t\t\t\t\t<form action=\"http://demo.titanicthemes.com/travel/list4.html\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn-search3\">Search</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- END OF CARS TAB -->
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- CRUISE TAB -->
\t\t\t\t\t\t\t<div class=\"cruisestab none\">
\t\t\t\t\t\t\t\t<div class=\"fullwidth\">
\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Going to</b></span>
\t\t\t\t\t\t\t\t\t<select class=\"form-control mySelectBoxClass\">
\t\t\t\t\t\t\t\t\t  <option selected>Show all</option>
\t\t\t\t\t\t\t\t\t  <optgroup label=\"Most Popular\">
\t\t\t\t\t\t\t\t\t\t  <option>Caribbean</option>
\t\t\t\t\t\t\t\t\t\t  <option>Bahamas</option>
\t\t\t\t\t\t\t\t\t\t  <option>Mexico</option>
\t\t\t\t\t\t\t\t\t\t  <option>Alaska</option>
\t\t\t\t\t\t\t\t\t\t  <option>Europe</option>
\t\t\t\t\t\t\t\t\t\t  <option>Bermuda</option>
\t\t\t\t\t\t\t\t\t\t  <option>Hawaii</option>
\t\t\t\t\t\t\t\t\t  </optgroup>
\t\t\t\t\t\t\t\t\t  <optgroup label=\"Other Destinations\">
\t\t\t\t\t\t\t\t\t\t  <option>Africa</option>
\t\t\t\t\t\t\t\t\t\t  <option>Arctic/Antartctic</option>
\t\t\t\t\t\t\t\t\t\t  <option>Asia</option>
\t\t\t\t\t\t\t\t\t\t  <option>Australia/New Zealand</option>
\t\t\t\t\t\t\t\t\t\t  <option>Central America</option>
\t\t\t\t\t\t\t\t\t\t  <option>Cruise to Nowhere</option>
\t\t\t\t\t\t\t\t\t\t  <option>Galapagos</option>
\t\t\t\t\t\t\t\t\t\t  <option>Greenland/Iceland</option>
\t\t\t\t\t\t\t\t\t\t  <option>Middle East</option>
\t\t\t\t\t\t\t\t\t\t  <option>Pacific Coastal</option>
\t\t\t\t\t\t\t\t\t\t  <option>Panama Canal</option>
\t\t\t\t\t\t\t\t\t\t  <option>South Africa</option>
\t\t\t\t\t\t\t\t\t\t  <option>South Pacific</option>
\t\t\t\t\t\t\t\t\t\t  <option>Tahiti</option>
\t\t\t\t\t\t\t\t\t\t  <option>Transatlantic</option>
\t\t\t\t\t\t\t\t\t\t  <option>World Cruises</option>
\t\t\t\t\t\t\t\t\t  </optgroup>
\t\t\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Departure</b></span>
\t\t\t\t\t\t\t\t\t<select class=\"form-control mySelectBoxClass\">
\t\t\t\t\t\t\t\t\t  <option selected>Show all</option>
\t\t\t\t\t\t\t\t\t  <option>October 2013</option>
\t\t\t\t\t\t\t\t\t  <option>November 2013</option>
\t\t\t\t\t\t\t\t\t  <option>December 2013</option>
\t\t\t\t\t\t\t\t\t  <option>January 2014</option>
\t\t\t\t\t\t\t\t\t  <option>February 2014</option>
\t\t\t\t\t\t\t\t\t  <option>March 2014</option>
\t\t\t\t\t\t\t\t\t  <option>April 2014</option>
\t\t\t\t\t\t\t\t\t  <option>May 2014</option>
\t\t\t\t\t\t\t\t\t  <option>June 2014</option>
\t\t\t\t\t\t\t\t\t  <option>July 2014</option>
\t\t\t\t\t\t\t\t\t  <option>August 2014</option>
\t\t\t\t\t\t\t\t\t  <option>September 2014</option>
\t\t\t\t\t\t\t\t\t  <option>October 2014</option>
\t\t\t\t\t\t\t\t\t  <option>November 2014</option>
\t\t\t\t\t\t\t\t\t  <option>December 2014</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div><div class=\"clearfix\"></div>
\t\t\t\t\t\t\t\t<form action=\"http://demo.titanicthemes.com/travel/list4.html\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn-search3\">Search</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- END OF CRUISE TAB -->\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- FLIGHT+HOTEL+CAR TAB -->\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"flighthotelcartab none\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"w50percent\">
\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft\">
\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Flying from</b></span>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"City or airport\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"w50percentlast\">
\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft right\">
\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>To</b></span>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"City or airport\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div><br/>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"w50percent\">
\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft\">
\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Departing</b></span>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control mySelectCalendar\" id=\"datepicker13\" placeholder=\"mm/dd/yyyy\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"w50percentlast\">
\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft right\">
\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Returning</b></span>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control mySelectCalendar\" id=\"datepicker14\" placeholder=\"mm/dd/yyyy\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div><br/>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"room1\" >
\t\t\t\t\t\t\t\t\t<div class=\"w50percent\">
\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>ROOM 1</b></span><br/>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"addroom1 block\"><a href=\"#room2\" onclick=\"addroom2()\" class=\"grey\">+ Add room</a></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"w50percentlast\">\t
\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft right ohidden\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"w50percent\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Adult</b></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control mySelectBoxClass\">
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option selected>2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"w50percentlast\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft right ohidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Child</b></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control mySelectBoxClass\">
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>0</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option selected>1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"room2 none\">
\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div><div class=\"line1\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"w50percent\">
\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>ROOM 2</b></span><br/>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"addroom2 block grey\"><a href=\"#\" onclick=\"addroom3()\" class=\"grey\">+ Add room</a> | <a href=\"#\" onclick=\"removeroom2()\" class=\"orange\"><img src=\"";
        // line 860
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/delete.png"), "html", null, true);
        echo "\" alt=\"delete\"/></a></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"w50percentlast\">\t
\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft right\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"w50percent\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Adult</b></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control mySelectBoxClass\">
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option selected>3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"w50percentlast\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft right\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Child</b></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control mySelectBoxClass\">
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option selected>0</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>\t\t

\t\t\t\t\t\t\t\t<div class=\"room3 none\">
\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div><div class=\"line1\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"w50percent\">
\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>ROOM 3</b></span><br/>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"addroom3 block grey\"><a href=\"#\" onclick=\"addroom3()\" class=\"grey\">+ Add room</a> | <a href=\"#\" onclick=\"removeroom3()\" class=\"orange\"><img src=\"";
        // line 900
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/delete.png"), "html", null, true);
        echo "\" alt=\"delete\"/></a></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"w50percentlast\">\t
\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft right\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"w50percent\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Adult</b></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control mySelectBoxClass\">
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option selected>1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"w50percentlast\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft right\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Child</b></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control mySelectBoxClass\">
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option selected>0</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div><div class=\"clearfix\"></div>
\t\t\t\t\t\t\t\t<div class=\"center size10 ca03\">! An economy car will be added to your search. (You may change your car options later.)</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<form action=\"http://demo.titanicthemes.com/travel/list4.html\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn-search3\">Search</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- END OF FLIGHT+HOTE+CAR TAB -->
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- FLIGHT+HOTEL TAB -->\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"flighthoteltab none\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"w50percent\">
\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft\">
\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Flying from</b></span>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"City or airport\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"w50percentlast\">
\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft right\">
\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>To</b></span>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"City or airport\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div><br/>
\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t<div class=\"w50percent\">
\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft\">
\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Departing</b></span>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control mySelectCalendar\" id=\"datepicker10\" placeholder=\"mm/dd/yyyy\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"w50percentlast\">
\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft right\">
\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Returning</b></span>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control mySelectCalendar\" id=\"datepicker9\" placeholder=\"mm/dd/yyyy\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div><br/>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"room1\" >
\t\t\t\t\t\t\t\t\t<div class=\"w50percent\">
\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>ROOM 1</b></span><br/>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"addroom1 block\"><a href=\"#room2\" onclick=\"addroom2()\" class=\"grey\">+ Add room</a></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"w50percentlast\">\t
\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft right ohidden\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"w50percent\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Adult</b></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control mySelectBoxClass\">
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option selected>2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"w50percentlast\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft right ohidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Child</b></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control mySelectBoxClass\">
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>0</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option selected>1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"room2 none\">
\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div><div class=\"line1\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"w50percent\">
\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>ROOM 2</b></span><br/>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"addroom2 block grey\"><a href=\"#\" onclick=\"addroom3()\" class=\"grey\">+ Add room</a> | <a href=\"#\" onclick=\"removeroom2()\" class=\"orange\"><img src=\"";
        // line 1024
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/delete.png"), "html", null, true);
        echo "\" alt=\"delete\"/></a></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"w50percentlast\">\t
\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft right\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"w50percent\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Adult</b></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control mySelectBoxClass\">
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option selected>3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"w50percentlast\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft right\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Child</b></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control mySelectBoxClass\">
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option selected>0</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>\t\t

\t\t\t\t\t\t\t\t<div class=\"room3 none\">
\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div><div class=\"line1\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"w50percent\">
\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>ROOM 3</b></span><br/>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"addroom3 block grey\"><a href=\"#\" onclick=\"addroom3()\" class=\"grey\">+ Add room</a> | <a href=\"#\" onclick=\"removeroom3()\" class=\"orange\"><img src=\"";
        // line 1064
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/delete.png"), "html", null, true);
        echo "\" alt=\"delete\"/></a></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"w50percentlast\">\t
\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft right\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"w50percent\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Adult</b></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control mySelectBoxClass\">
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option selected>1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"w50percentlast\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft right\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Child</b></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control mySelectBoxClass\">
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option selected>0</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t\t<form action=\"http://demo.titanicthemes.com/travel/list4.html\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn-search3\">Search</button>
\t\t\t\t\t\t\t\t</form>\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- END OF FLIGHT+HOTE TAB -->\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- FLIGHT+CAR TAB -->\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"flightcartab none\">
\t\t\t\t\t\t\t\t<div class=\"w50percent\">
\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft\">
\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Flying from</b></span>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"City or airport\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"w50percentlast\">
\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft right\">
\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>To</b></span>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"City or airport\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div><br/>
\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t<div class=\"w50percent\">
\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft\">
\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Departing</b></span>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control mySelectCalendar\" id=\"datepicker11\" placeholder=\"mm/dd/yyyy\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"w50percentlast\">
\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft right\">
\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Returning</b></span>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control mySelectCalendar\" id=\"datepicker12\" placeholder=\"mm/dd/yyyy\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div><br/>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"center size10 ca03\">! An economy car will be added to your search. (You may change your car options later.)</div>
\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t\t<form action=\"http://demo.titanicthemes.com/travel/list4.html\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn-search3\">Search</button>
\t\t\t\t\t\t\t\t</form>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- END OF FLIGHT+CAR TAB -->\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- HOTEL+CAR TAB -->\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"hotelcartab none\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"opensans size18\">Where do you want to go?</span>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Greece\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"w50percent\">
\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft\">
\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Check in date</b></span>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control mySelectCalendar\" id=\"datepicker15\" placeholder=\"mm/dd/yyyy\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"w50percentlast\">
\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft right\">
\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Check in date</b></span>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control mySelectCalendar\" id=\"datepicker16\" placeholder=\"mm/dd/yyyy\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"room1 margtop15\">
\t\t\t\t\t\t\t\t\t<div class=\"w50percent\">
\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>ROOM 1</b></span><br/>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"addroom1 block\"><a href=\"#room2\" onclick=\"addroom2()\" class=\"grey\">+ Add room</a></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"w50percentlast\">\t
\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft right ohidden\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"w50percent\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Adult</b></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control mySelectBoxClass\">
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option selected>2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"w50percentlast\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft right ohidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Child</b></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control mySelectBoxClass\">
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>0</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option selected>1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"room2 none\">
\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div><div class=\"line1\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"w50percent\">
\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>ROOM 2</b></span><br/>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"addroom2 block grey\"><a href=\"#\" onclick=\"addroom3()\" class=\"grey\">+ Add room</a> | <a href=\"#\" onclick=\"removeroom2()\" class=\"orange\"><img src=\"";
        // line 1218
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/delete.png"), "html", null, true);
        echo "\" alt=\"delete\"/></a></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"w50percentlast\">\t
\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft right\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"w50percent\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Adult</b></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control mySelectBoxClass\">
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option selected>3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"w50percentlast\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft right\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Child</b></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control mySelectBoxClass\">
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option selected>0</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>\t\t

\t\t\t\t\t\t\t\t<div class=\"room3 none\">
\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div><div class=\"line1\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"w50percent\">
\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>ROOM 3</b></span><br/>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"addroom3 block grey\"><a href=\"#\" onclick=\"addroom3()\" class=\"grey\">+ Add room</a> | <a href=\"#\" onclick=\"removeroom3()\" class=\"orange\"><img src=\"";
        // line 1258
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/delete.png"), "html", null, true);
        echo "\" alt=\"delete\"/></a></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"w50percentlast\">\t
\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft right\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"w50percent\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Adult</b></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control mySelectBoxClass\">
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option selected>1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"w50percentlast\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wh90percent textleft right\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"opensans size13\"><b>Child</b></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control mySelectBoxClass\">
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option selected>0</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <option>5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div><div class=\"clearfix\"></div><br/>
\t\t\t\t\t\t\t\t<div class=\"center size10 ca03\">! An economy car will be added to your search. (You may change your car options later.)</div>
\t\t\t\t\t\t\t\t<form action=\"http://demo.titanicthemes.com/travel/list4.html\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn-search3\">Search</button>
\t\t\t\t\t\t\t\t</form>\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- END OF HOTEL+CAR TAB -->\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-8 scolright\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t<!--
\t\t\t\t\t\t\t#################################
\t\t\t\t\t\t\t\t- THEMEPUNCH BANNER -
\t\t\t\t\t\t\t#################################
\t\t\t\t\t\t\t-->

\t\t\t\t\t\t\t<div class=\"fullwidthbanner\">
\t\t\t\t\t\t\t\t<ul >

\t\t\t\t\t\t\t\t\t<!-- papercut fade turnoff flyin slideright slideleft slideup slidedown-->
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- FADE -->
\t\t\t\t\t\t\t\t\t<li data-transition=\"fade\" data-slotamount=\"1\" data-masterspeed=\"300\"> \t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 1315
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider/bahamas.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t<div class=\"tp-caption  sfl\"
\t\t\t\t\t\t\t\t\t\t\t data-x=\"0\"
\t\t\t\t\t\t\t\t\t\t\t data-y=\"10\"
\t\t\t\t\t\t\t\t\t\t\t data-speed=\"1000\"
\t\t\t\t\t\t\t\t\t\t\t data-start=\"800\"
\t\t\t\t\t\t\t\t\t\t\t data-easing=\"easeOutExpo\"  >
\t\t\t\t\t\t\t\t\t\t\t<div class=\"slidecouple\"></div>
\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t<div class=\"tp-caption sfb\"
\t\t\t\t\t\t\t\t\t\t\t data-x=\"left\"
\t\t\t\t\t\t\t\t\t\t\t data-y=\"371\"
\t\t\t\t\t\t\t\t\t\t\t data-speed=\"1000\"
\t\t\t\t\t\t\t\t\t\t\t data-start=\"800\"
\t\t\t\t\t\t\t\t\t\t\t data-easing=\"easeOutExpo\"  >
\t\t\t\t\t\t\t\t\t\t\t<div class=\"blacklable\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"lato bold white\">Bahamas from <span class=\"green\">\$1.500</span> per week</h4>
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"lato grey mt-10\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ut egestas ligula</h5>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tp-caption scrolleffect sfr\"
\t\t\t\t\t\t\t\t\t\t\t data-x=\"right\"
\t\t\t\t\t\t\t\t\t\t\t data-y=\"100\"
\t\t\t\t\t\t\t\t\t\t\t data-speed=\"1000\"
\t\t\t\t\t\t\t\t\t\t\t data-start=\"800\"
\t\t\t\t\t\t\t\t\t\t\t data-easing=\"easeOutExpo\"  >
\t\t\t\t\t\t\t\t\t\t\t <div class=\"sboxpurple textcenter\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lato size18 slim caps white\">Islands</span><br/><br/><br/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lato size65 slim caps white\">Bahamas</span><br/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lato size13 normal caps white\">from</span><br/><br/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lato size40 slim caps yellow\">\$1500</span><br/>
\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- FADE -->
\t\t\t\t\t\t\t\t\t<li data-transition=\"fade\" data-slotamount=\"1\" data-masterspeed=\"300\"> \t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 1352
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider/rome.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t<div class=\"tp-caption scrolleffect sft\"
\t\t\t\t\t\t\t\t\t\t\t data-x=\"center\"
\t\t\t\t\t\t\t\t\t\t\t data-y=\"100\"
\t\t\t\t\t\t\t\t\t\t\t data-speed=\"1000\"
\t\t\t\t\t\t\t\t\t\t\t data-start=\"800\"
\t\t\t\t\t\t\t\t\t\t\t data-easing=\"easeOutExpo\"  >
\t\t\t\t\t\t\t\t\t\t\t <div class=\"sboxpurple textcenter\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lato size28 slim caps white\">Italy</span><br/><br/><br/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lato size100 slim caps white\">Rome</span><br/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lato size20 normal caps white\">from</span><br/><br/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lato size48 slim uppercase yellow\">\$1500</span><br/>
\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t<div class=\"tp-caption sfb\"
\t\t\t\t\t\t\t\t\t\t\t data-x=\"left\"
\t\t\t\t\t\t\t\t\t\t\t data-y=\"371\"
\t\t\t\t\t\t\t\t\t\t\t data-speed=\"1000\"
\t\t\t\t\t\t\t\t\t\t\t data-start=\"800\"
\t\t\t\t\t\t\t\t\t\t\t data-easing=\"easeOutExpo\"  >
\t\t\t\t\t\t\t\t\t\t\t<div class=\"blacklable\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"lato bold white\">Rome from <span class=\"green\">\$1.500</span> per week</h4>
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"lato grey mt-10\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ut egestas ligula</h5>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t</li>\t

\t\t\t\t\t\t\t\t\t<!-- FADE -->
\t\t\t\t\t\t\t\t\t<li data-transition=\"fade\" data-slotamount=\"1\" data-masterspeed=\"300\"> \t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 1382
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider/paris.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t<div class=\"tp-caption scrolleffect sft\"
\t\t\t\t\t\t\t\t\t\t\t data-x=\"center\"
\t\t\t\t\t\t\t\t\t\t\t data-y=\"100\"
\t\t\t\t\t\t\t\t\t\t\t data-speed=\"1000\"
\t\t\t\t\t\t\t\t\t\t\t data-start=\"800\"
\t\t\t\t\t\t\t\t\t\t\t data-easing=\"easeOutExpo\"  >
\t\t\t\t\t\t\t\t\t\t\t <div class=\"sboxpurple textcenter\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lato size28 slim caps white\">France</span><br/><br/><br/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lato size100 slim caps white\">Paris</span><br/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lato size20 normal caps white\">from</span><br/><br/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lato size48 slim uppercase yellow\">\$1500</span><br/>
\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t<div class=\"tp-caption sfb\"
\t\t\t\t\t\t\t\t\t\t\t data-x=\"left\"
\t\t\t\t\t\t\t\t\t\t\t data-y=\"371\"
\t\t\t\t\t\t\t\t\t\t\t data-speed=\"1000\"
\t\t\t\t\t\t\t\t\t\t\t data-start=\"800\"
\t\t\t\t\t\t\t\t\t\t\t data-easing=\"easeOutExpo\" >
\t\t\t\t\t\t\t\t\t\t\t<div class=\"blacklable\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"lato bold white\">Paris from <span class=\"green\">\$1.500</span> per week</h4>
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"lato grey mt-10\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ut egestas ligula</h5>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t</li>\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- FADE -->
\t\t\t\t\t\t\t\t\t<li data-transition=\"fade\" data-slotamount=\"1\" data-masterspeed=\"300\"> \t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 1411
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider/zakynthos.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t<div class=\"tp-caption scrolleffect sft\"
\t\t\t\t\t\t\t\t\t\t\t data-x=\"center\"
\t\t\t\t\t\t\t\t\t\t\t data-y=\"100\"
\t\t\t\t\t\t\t\t\t\t\t data-speed=\"1000\"
\t\t\t\t\t\t\t\t\t\t\t data-start=\"800\"
\t\t\t\t\t\t\t\t\t\t\t data-easing=\"easeOutExpo\"  >
\t\t\t\t\t\t\t\t\t\t\t <div class=\"sboxpurple textcenter\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lato size28 slim caps white\">Greece</span><br/><br/><br/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lato size100 slim caps white\">Zakynthos</span><br/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lato size20 normal caps white\">from</span><br/><br/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lato size48 slim uppercase yellow\">\$1500</span><br/>
\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t<div class=\"tp-caption sfb\"
\t\t\t\t\t\t\t\t\t\t\t data-x=\"left\"
\t\t\t\t\t\t\t\t\t\t\t data-y=\"371\"
\t\t\t\t\t\t\t\t\t\t\t data-speed=\"1000\"
\t\t\t\t\t\t\t\t\t\t\t data-start=\"800\"
\t\t\t\t\t\t\t\t\t\t\t data-easing=\"easeOutExpo\"  >
\t\t\t\t\t\t\t\t\t\t\t<div class=\"blacklable\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"lato bold white\">Zakynthos from <span class=\"green\">\$1.500</span> per week</h4>
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"lato grey mt-10\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ut egestas ligula</h5>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- FADE -->
\t\t\t\t\t\t\t\t\t<li data-transition=\"fade\" data-slotamount=\"1\" data-masterspeed=\"300\"> \t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 1440
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider/santorini.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t<div class=\"tp-caption scrolleffect sft\"
\t\t\t\t\t\t\t\t\t\t\t data-x=\"center\"
\t\t\t\t\t\t\t\t\t\t\t data-y=\"100\"
\t\t\t\t\t\t\t\t\t\t\t data-speed=\"1000\"
\t\t\t\t\t\t\t\t\t\t\t data-start=\"800\"
\t\t\t\t\t\t\t\t\t\t\t data-easing=\"easeOutExpo\"  >
\t\t\t\t\t\t\t\t\t\t\t <div class=\"sboxpurple textcenter\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lato size28 slim caps white\">Greece</span><br/><br/><br/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lato size100 slim caps white\">Santorini</span><br/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lato size20 normal caps white\">from</span><br/><br/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lato size48 slim uppercase yellow\">\$1500</span><br/>
\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t<div class=\"tp-caption sfb\"
\t\t\t\t\t\t\t\t\t\t\t data-x=\"left\"
\t\t\t\t\t\t\t\t\t\t\t data-y=\"371\"
\t\t\t\t\t\t\t\t\t\t\t data-speed=\"1000\"
\t\t\t\t\t\t\t\t\t\t\t data-start=\"800\"
\t\t\t\t\t\t\t\t\t\t\t data-easing=\"easeOutExpo\"  >
\t\t\t\t\t\t\t\t\t\t\t<div class=\"blacklable\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"lato bold white\">Santorini from <span class=\"green\">\$1.500</span> per week</h4>
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"lato grey mt-10\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ut egestas ligula</h5>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tp-bannertimer none\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<!--
\t\t\t\t\t\t##############################
\t\t\t\t\t\t - ACTIVATE THE BANNER HERE -
\t\t\t\t\t\t##############################
\t\t\t\t\t\t-->
\t\t\t\t\t\t<script type=\"text/javascript\">

\t\t\t\t\t\t\tvar tpj=jQuery;
\t\t\t\t\t\t\ttpj.noConflict();

\t\t\t\t\t\t\ttpj(document).ready(function() {

\t\t\t\t\t\t\tif (tpj.fn.cssOriginal!=undefined)
\t\t\t\t\t\t\t\ttpj.fn.css = tpj.fn.cssOriginal;

\t\t\t\t\t\t\t\tvar api = tpj('.fullwidthbanner').revolution(
\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\tdelay:9000,
\t\t\t\t\t\t\t\t\t\tstartwidth:960,
\t\t\t\t\t\t\t\t\t\tstartheight:446,

\t\t\t\t\t\t\t\t\t\tonHoverStop:\"on\",\t\t\t\t\t\t// Stop Banner Timet at Hover on Slide on/off

\t\t\t\t\t\t\t\t\t\tthumbWidth:100,\t\t\t\t\t\t\t// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
\t\t\t\t\t\t\t\t\t\tthumbHeight:50,
\t\t\t\t\t\t\t\t\t\tthumbAmount:3,

\t\t\t\t\t\t\t\t\t\thideThumbs:0,
\t\t\t\t\t\t\t\t\t\tnavigationType:\"bullet\",\t\t\t\t// bullet, thumb, none
\t\t\t\t\t\t\t\t\t\tnavigationArrows:\"solo\",\t\t\t\t// nexttobullets, solo (old name verticalcentered), none

\t\t\t\t\t\t\t\t\t\tnavigationStyle:\"round\",\t\t\t\t// round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom


\t\t\t\t\t\t\t\t\t\tnavigationHAlign:\"right\",\t\t\t\t// Vertical Align top,center,bottom
\t\t\t\t\t\t\t\t\t\tnavigationVAlign:\"bottom\",\t\t\t\t\t// Horizontal Align left,center,right
\t\t\t\t\t\t\t\t\t\tnavigationHOffset:30,
\t\t\t\t\t\t\t\t\t\tnavigationVOffset:30,

\t\t\t\t\t\t\t\t\t\tsoloArrowLeftHalign:\"left\",
\t\t\t\t\t\t\t\t\t\tsoloArrowLeftValign:\"center\",
\t\t\t\t\t\t\t\t\t\tsoloArrowLeftHOffset:20,
\t\t\t\t\t\t\t\t\t\tsoloArrowLeftVOffset:0,

\t\t\t\t\t\t\t\t\t\tsoloArrowRightHalign:\"right\",
\t\t\t\t\t\t\t\t\t\tsoloArrowRightValign:\"center\",
\t\t\t\t\t\t\t\t\t\tsoloArrowRightHOffset:20,
\t\t\t\t\t\t\t\t\t\tsoloArrowRightVOffset:0,

\t\t\t\t\t\t\t\t\t\ttouchenabled:\"on\",\t\t\t\t\t\t// Enable Swipe Function : on/off


\t\t\t\t\t\t\t\t\t\tstopAtSlide:-1,\t\t\t\t\t\t\t// Stop Timer if Slide \"x\" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
\t\t\t\t\t\t\t\t\t\tstopAfterLoops:-1,\t\t\t\t\t\t// Stop Timer if All slides has been played \"x\" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic

\t\t\t\t\t\t\t\t\t\thideCaptionAtLimit:0,\t\t\t\t\t// It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
\t\t\t\t\t\t\t\t\t\thideAllCaptionAtLilmit:0,\t\t\t\t// Hide all The Captions if Width of Browser is less then this value
\t\t\t\t\t\t\t\t\t\thideSliderAtLimit:0,\t\t\t\t\t// Hide the whole slider, and stop also functions if Width of Browser is less than this value


\t\t\t\t\t\t\t\t\t\tfullWidth:\"on\",

\t\t\t\t\t\t\t\t\t\tshadow:1\t\t\t\t\t\t\t\t//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)

\t\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t// TO HIDE THE ARROWS SEPERATLY FROM THE BULLETS, SOME TRICK HERE:
\t\t\t\t\t\t\t\t\t// YOU CAN REMOVE IT FROM HERE TILL THE END OF THIS SECTION IF YOU DONT NEED THIS !
\t\t\t\t\t\t\t\t\t\tapi.bind(\"revolution.slide.onloaded\",function (e) {


\t\t\t\t\t\t\t\t\t\t\tjQuery('.tparrows').each(function() {
\t\t\t\t\t\t\t\t\t\t\t\tvar arrows=jQuery(this);

\t\t\t\t\t\t\t\t\t\t\t\tvar timer = setInterval(function() {

\t\t\t\t\t\t\t\t\t\t\t\t\tif (arrows.css('opacity') == 1 && !jQuery('.tp-simpleresponsive').hasClass(\"mouseisover\"))
\t\t\t\t\t\t\t\t\t\t\t\t\t  arrows.fadeOut(300);
\t\t\t\t\t\t\t\t\t\t\t\t},3000);
\t\t\t\t\t\t\t\t\t\t\t})

\t\t\t\t\t\t\t\t\t\t\tjQuery('.tp-simpleresponsive, .tparrows').hover(function() {
\t\t\t\t\t\t\t\t\t\t\t\tjQuery('.tp-simpleresponsive').addClass(\"mouseisover\");
\t\t\t\t\t\t\t\t\t\t\t\tjQuery('body').find('.tparrows').each(function() {
\t\t\t\t\t\t\t\t\t\t\t\t\tjQuery(this).fadeIn(300);
\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t}, function() {
\t\t\t\t\t\t\t\t\t\t\t\tif (!jQuery(this).hasClass(\"tparrows\"))
\t\t\t\t\t\t\t\t\t\t\t\t\tjQuery('.tp-simpleresponsive').removeClass(\"mouseisover\");
\t\t\t\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t// END OF THE SECTION, HIDE MY ARROWS SEPERATLY FROM THE BULLETS

\t\t\t\t\t\t});
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\tjQuery(document).ready(function(\$){
\t\t\t\t\t\t\t// gets the width of black bar at the bottom of the slider
\t\t\t\t\t\t\tvar \$gwsr = \$('.scolright').outerWidth();
\t\t\t\t\t\t\t\$('.blacklable').css({'width' : \$gwsr +'px'});
\t\t\t\t\t\t});
\t\t\t\t\t\tjQuery(window).resize(function() {
\t\t\t\t\t\t\tjQuery(document).ready(function(\$){

\t\t\t\t\t\t\t\t// gets the width of black bar at the bottom of the slider
\t\t\t\t\t\t\t\tvar \$gwsr = \$('.scolright').outerWidth();
\t\t\t\t\t\t\t\t\$('.blacklable').css({'width' : \$gwsr +'px'});

\t\t\t\t\t\t\t});
\t\t\t\t\t\t});
\t\t\t\t\t\t
\t\t\t\t\t\t




\t\t\t\t\t\t</script>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t
\t\t\t\t\t</div><!-- end of row -->
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"deals4\">
\t\t\t<div class=\"container\">\t
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<div class=\"lbl\">
\t\t\t\t\t\t\t<a href=\"list4.html\"><img src=\"";
        // line 1609
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/egypt-thumb.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"fwimg\"/></a>
\t\t\t\t\t\t\t<div class=\"smallblacklabel\">Last Minute</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"deal\">
\t\t\t\t\t\t\t<a href=\"details.html\"><img src=\"";
        // line 1613
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/thumb-img.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"dealthumb\"/></a>
\t\t\t\t\t\t\t<div class=\"dealtitle\">
\t\t\t\t\t\t\t\t<p><a href=\"details.html\" class=\"dark\">Diana Hotel</a></p>
\t\t\t\t\t\t\t\t<img src=\"";
        // line 1616
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/smallrating-4.png"), "html", null, true);
        echo "\" alt=\"\" class=\"mt-10\"/><span class=\"size13 grey mt-9\">Zakynthos</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"dealprice\">
\t\t\t\t\t\t\t\t<p class=\"size12 grey lh2\">from<span class=\"price\">\$35</span><br/>per night</p>
\t\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"deal\">
\t\t\t\t\t\t\t<a href=\"details.html\"><img src=\"";
        // line 1623
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/thumb-img.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"dealthumb\"/></a>
\t\t\t\t\t\t\t<div class=\"dealtitle\">
\t\t\t\t\t\t\t\t<p><a href=\"details.html\" class=\"dark\">Village Inn Studios & Family Apartments</a></p>
\t\t\t\t\t\t\t\t<img src=\"";
        // line 1626
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/smallrating-3.png"), "html", null, true);
        echo "\" alt=\"\" class=\"mt-10\"/><span class=\"size13 grey mt-9\">Zakynthos</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"dealprice\">
\t\t\t\t\t\t\t\t<p class=\"size12 grey lh2\">from<span class=\"price\">\$49</span><br/>per night</p>
\t\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t<div class=\"deal\">
\t\t\t\t\t\t\t<a href=\"details.html\"><img src=\"";
        // line 1633
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/thumb-img.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"dealthumb\"/></a>
\t\t\t\t\t\t\t<div class=\"dealtitle\">
\t\t\t\t\t\t\t\t<p><a href=\"details.html\" class=\"dark\">Palatino Hotel</a></p>
\t\t\t\t\t\t\t\t<img src=\"";
        // line 1636
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/smallrating-4.png"), "html", null, true);
        echo "\" alt=\"\" class=\"mt-10\"/><span class=\"size13 grey mt-9\">Zakynthos</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"dealprice\">
\t\t\t\t\t\t\t\t<p class=\"size12 grey lh2\">from<span class=\"price\">\$90</span><br/>per night</p>
\t\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<!-- End of first row-->
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<div class=\"lbl\">
\t\t\t\t\t\t\t<a href=\"list4.html\"><img src=\"";
        // line 1647
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/rome-thumb.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"fwimg\"/></a>
\t\t\t\t\t\t\t<div class=\"smallblacklabel\">Early Booking</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"deal\">
\t\t\t\t\t\t\t<a href=\"details.html\"><img src=\"";
        // line 1651
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/thumb-img.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"dealthumb\"/></a>
\t\t\t\t\t\t\t<div class=\"dealtitle\">
\t\t\t\t\t\t\t\t<p><a href=\"details.html\" class=\"dark\">Comfort Suites Paradise Island</a></p>
\t\t\t\t\t\t\t\t<img src=\"";
        // line 1654
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/smallrating-4.png\""), "html", null, true);
        echo " alt=\"\" class=\"mt-10\"/><span class=\"size13 grey mt-9\">Bahamas</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"dealprice\">
\t\t\t\t\t\t\t\t<p class=\"size12 grey lh2\">from<span class=\"price\">\$29</span><br/>per night</p>
\t\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"deal\">
\t\t\t\t\t\t\t<a href=\"details.html\"><img src=\"";
        // line 1661
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/thumb-img.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"dealthumb\"/></a>
\t\t\t\t\t\t\t<div class=\"dealtitle\">
\t\t\t\t\t\t\t\t<p><a href=\"details.html\" class=\"dark\">Barcelo Malaga</a></p>
\t\t\t\t\t\t\t\t<img src=\"";
        // line 1664
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/smallrating-3.png"), "html", null, true);
        echo "\" alt=\"\" class=\"mt-10\"/><span class=\"size13 grey mt-9\">Spain</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"dealprice\">
\t\t\t\t\t\t\t\t<p class=\"size12 grey lh2\">from<span class=\"price\">\$32</span><br/>per night</p>
\t\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t<div class=\"deal\">
\t\t\t\t\t\t\t<a href=\"details.html\"><img src=\"";
        // line 1671
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/thumb-img.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"dealthumb\"/></a>
\t\t\t\t\t\t\t<div class=\"dealtitle\">
\t\t\t\t\t\t\t\t<p><a href=\"details.html\" class=\"dark\">Palatino Hotel</a></p>
\t\t\t\t\t\t\t\t<img src=\"";
        // line 1674
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/smallrating-3.png"), "html", null, true);
        echo "\" alt=\"\" class=\"mt-10\"/><span class=\"size13 grey mt-9\">Zakynthos</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"dealprice\">
\t\t\t\t\t\t\t\t<p class=\"size12 grey lh2\">from<span class=\"price\">\$90</span><br/>per night</p>
\t\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<!-- End of first row-->
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<div class=\"lbl\">
\t\t\t\t\t\t\t<a href=\"list4.html\"><img src=\"";
        // line 1685
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/surfer-thumb.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"fwimg\"/></a>
\t\t\t\t\t\t\t<div class=\"smallblacklabel\">Hot Deals</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"deal\">
\t\t\t\t\t\t\t<a href=\"details.html\"><img src=\"";
        // line 1689
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/thumb-img.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"dealthumb\"/></a>
\t\t\t\t\t\t\t<div class=\"dealtitle\">
\t\t\t\t\t\t\t\t<p><a href=\"details.html\" class=\"dark\">Parayso Hotel And Spa</a></p>
\t\t\t\t\t\t\t\t<img src=\"";
        // line 1692
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/smallrating-4.png"), "html", null, true);
        echo "\" alt=\"\" class=\"mt-10\"/><span class=\"size13 grey mt-9\">Zakynthos</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"dealprice\">
\t\t\t\t\t\t\t\t<p class=\"size12 grey lh2\">from<span class=\"price\">\$49</span><br/>per night</p>
\t\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"deal\">
\t\t\t\t\t\t\t<a href=\"details.html\"><img src=\"";
        // line 1699
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/thumb-img.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"dealthumb\"/></a>
\t\t\t\t\t\t\t<div class=\"dealtitle\">
\t\t\t\t\t\t\t\t<p><a href=\"details.html\" class=\"dark\">Village Inn Studios & Family Apartments</a></p>
\t\t\t\t\t\t\t\t<img src=\"";
        // line 1702
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/smallrating-3.png"), "html", null, true);
        echo "\" alt=\"\" class=\"mt-10\"/><span class=\"size13 grey mt-9\">Zakynthos</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"dealprice\">
\t\t\t\t\t\t\t\t<p class=\"size12 grey lh2\">from<span class=\"price\">\$79</span><br/>per night</p>
\t\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t<div class=\"deal\">
\t\t\t\t\t\t\t<a href=\"details.html\"><img src=\"";
        // line 1709
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/thumb-img.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"dealthumb\"/></a>
\t\t\t\t\t\t\t<div class=\"dealtitle\">
\t\t\t\t\t\t\t\t<p><a href=\"details.html\" class=\"dark\">Diana Hotel</a></p>
\t\t\t\t\t\t\t\t<img src=\"";
        // line 1712
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/smallrating-3.png"), "html", null, true);
        echo "\" alt=\"\" class=\"mt-10\"/><span class=\"size13 grey mt-9\">Zakynthos</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"dealprice\">
\t\t\t\t\t\t\t\t<p class=\"size12 grey lh2\">from<span class=\"price\">\$299</span><br/>per night</p>
\t\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<!-- End of first row-->\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"lastminute4\">
\t\t\t ";
        // line 1725
        $this->displayBlock('content', $context, $blocks);
        // line 1728
        echo "\t\t</div>\t
\t\t
\t\t<div class=\"container cstyle06\">\t

\t\t\t<div class=\"row anim2\">
\t\t\t  <div class=\"col-md-3\">
\t\t\t\t<h2>Today's Top<br/>Deals</h2><br/>
\t\t\t\tStart your search with a look at the best rates on our site. 
\t\t\t  </div>
\t\t\t  <div class=\"col-md-9\">
\t\t\t  
\t\t\t  
\t\t\t  
\t\t\t\t<!-- Carousel -->
\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t<div class=\"list_carousel\">
\t\t\t\t\t\t<ul id=\"foo\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"list.html\"><img src=\"";
        // line 1746
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/thumb-hawaii.jpg"), "html", null, true);
        echo "\" alt=\"\"/></a>
\t\t\t\t\t\t\t\t<div class=\"m1\">
\t\t\t\t\t\t\t\t\t<h6 class=\"lh1 dark\"><b>Visit the Hawaii Beaches</b></h6>
\t\t\t\t\t\t\t\t\t<h6 class=\"lh1 green\">Save up to 30%</h6>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"list.html\"><img src=\"";
        // line 1753
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/thumb-santorini.jpg"), "html", null, true);
        echo "\" alt=\"\"/></a>
\t\t\t\t\t\t\t\t<div class=\"m1\">
\t\t\t\t\t\t\t\t\t<h6 class=\"lh1 dark\"><b>Santorini - Greece</b></h6>
\t\t\t\t\t\t\t\t\t<h6 class=\"lh1 green\">Save up to 30%</h6>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"list.html\"><img src=\"";
        // line 1760
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/thumb-dubai.jpg"), "html", null, true);
        echo "\" alt=\"\"/></a>
\t\t\t\t\t\t\t\t<div class=\"m1\">
\t\t\t\t\t\t\t\t\t<h6 class=\"lh1 dark\"><b>Dubai</b></h6>
\t\t\t\t\t\t\t\t\t<h6 class=\"lh1 green\">Save up to 30%</h6>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"list.html\"><img src=\"";
        // line 1767
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/thumb-hawaii.jpg"), "html", null, true);
        echo "\" alt=\"\"/></a>
\t\t\t\t\t\t\t\t<div class=\"m1\">
\t\t\t\t\t\t\t\t\t<h6 class=\"lh1 dark\"><b>Visit the Hawaii Beaches</b></h6>
\t\t\t\t\t\t\t\t\t<h6 class=\"lh1 green\">Save up to 30%</h6>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"list.html\"><img src=\"";
        // line 1774
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/thumb-santorini.jpg"), "html", null, true);
        echo "\" alt=\"\"/></a>
\t\t\t\t\t\t\t\t<div class=\"m1\">
\t\t\t\t\t\t\t\t\t<h6 class=\"lh1 dark\"><b>Santorini - Greece</b></h6>
\t\t\t\t\t\t\t\t\t<h6 class=\"lh1 green\">Save up to 30%</h6>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"list.html\"><img src=\"";
        // line 1781
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/thumb-dubai.jpg"), "html", null, true);
        echo "\" alt=\"\"/></a>
\t\t\t\t\t\t\t\t<div class=\"m1\">
\t\t\t\t\t\t\t\t\t<h6 class=\"lh1 dark\"><b>Dubai</b></h6>
\t\t\t\t\t\t\t\t\t<h6 class=\"lh1 green\">Save up to 30%</h6>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t<a id=\"prev_btn\" class=\"prev\" href=\"#\"><img src=\"";
        // line 1789
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/spacer.png"), "html", null, true);
        echo "\" alt=\"\"/></a>
\t\t\t\t\t\t<a id=\"next_btn\" class=\"next\" href=\"#\"><img src=\"";
        // line 1790
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/spacer.png"), "html", null, true);
        echo "\" alt=\"\"/></a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t  
\t\t\t  </div>
\t\t\t</div>\t
\t\t
\t\t\t<hr class=\"featurette-divider2\">

\t\t\t<div class=\"row anim3\">
\t\t\t  <div class=\"col-md-3\">
\t\t\t\t<h2>Featured<br/>Offers</h2><br/>
\t\t\t\tStart your search with a look at the best rates on our site. 
\t\t\t  </div>
\t\t\t  <div class=\"col-md-9\">
\t\t\t  
\t\t\t\t<!-- Carousel -->
\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t<div class=\"list_carousel\">\t\t
\t\t\t\t\t\t<ul id=\"foo2\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"list2.html\"><img src=\"";
        // line 1812
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/thumb-africa.jpg"), "html", null, true);
        echo "\" alt=\"\"/></a>
\t\t\t\t\t\t\t\t<div class=\"m1\">
\t\t\t\t\t\t\t\t\t<h6 class=\"lh1 dark\"><b>South Africa Adventures</b></h6>
\t\t\t\t\t\t\t\t\t<h6 class=\"lh1 green\">Save up to 30%</h6>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"list2.html\"><img src=\"";
        // line 1819
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/thumb-egipt.jpg"), "html", null, true);
        echo "\" alt=\"\"/></a>
\t\t\t\t\t\t\t\t<div class=\"m1\">
\t\t\t\t\t\t\t\t\t<h6 class=\"lh1 dark\"><b>Egipt</b></h6>
\t\t\t\t\t\t\t\t\t<h6 class=\"lh1 green\">Save up to 30%</h6>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"list2.html\"><img src=\"";
        // line 1826
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/thumb-machupicchu.jpg"), "html", null, true);
        echo "\" alt=\"\"/></a>
\t\t\t\t\t\t\t\t<div class=\"m1\">
\t\t\t\t\t\t\t\t\t<h6 class=\"lh1 dark\"><b>Machu Picchu</b></h6>
\t\t\t\t\t\t\t\t\t<h6 class=\"lh1 green\">Save up to 30%</h6>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t</li>\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"list2.html\"><img src=\"";
        // line 1833
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/thumb-africa.jpg"), "html", null, true);
        echo "\" alt=\"\"/></a>
\t\t\t\t\t\t\t\t<div class=\"m1\">
\t\t\t\t\t\t\t\t\t<h6 class=\"lh1 dark\"><b>South Africa Adventures</b></h6>
\t\t\t\t\t\t\t\t\t<h6 class=\"lh1 green\">Save up to 30%</h6>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"list2.html\"><img src=\"";
        // line 1840
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/thumb-egipt.jpg"), "html", null, true);
        echo "\" alt=\"\"/></a>
\t\t\t\t\t\t\t\t<div class=\"m1\">
\t\t\t\t\t\t\t\t\t<h6 class=\"lh1 dark\"><b>Egipt</b></h6>
\t\t\t\t\t\t\t\t\t<h6 class=\"lh1 green\">Save up to 30%</h6>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"list2.html\"><img src=\"";
        // line 1847
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/thumb-machupicchu.jpg"), "html", null, true);
        echo "\" alt=\"\"/></a>
\t\t\t\t\t\t\t\t<div class=\"m1\">
\t\t\t\t\t\t\t\t\t<h6 class=\"lh1 dark\"><b>Machu Picchu</b></h6>
\t\t\t\t\t\t\t\t\t<h6 class=\"lh1 green\">Save up to 30%</h6>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t</li>\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t<a id=\"prev_btn2\" class=\"prev\" href=\"#\"><img src=\"";
        // line 1855
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/spacer.png"), "html", null, true);
        echo "\" alt=\"\"/></a>
\t\t\t\t\t\t<a id=\"next_btn2\" class=\"next\" href=\"#\"><img src=\"";
        // line 1856
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/spacer.png"), "html", null, true);
        echo "\" alt=\"\"/></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t  
\t\t\t  </div>
\t\t\t</div>\t\t\t

\t\t</div>
\t\t


\t\t<!-- FOOTER -->
\t\t<div class=\"container none\">\t\t
\t\t\t<footer>
\t\t\t<p class=\"pull-right\"><a href=\"#\">Back to top</a></p>
\t\t\t<p>&copy; 2013 Company, Inc. &middot; <a href=\"#\">Privacy</a> &middot; <a href=\"#\">Terms</a></p>
\t\t\t</footer>
\t\t</div>\t\t
\t\t
\t\t<div class=\"footerbg\">
\t\t\t<div class=\"container\">\t\t
\t\t\t\t
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<span class=\"ftitle\">Let's socialize</span>
\t\t\t\t\t<div class=\"scont\">
\t\t\t\t\t\t<a href=\"#\" class=\"social1b\"><img src=\"";
        // line 1881
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icon-facebook.png"), "html", null, true);
        echo "\" alt=\"\"/></a>
\t\t\t\t\t\t<a href=\"#\" class=\"social2b\"><img src=\"";
        // line 1882
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icon-twitter.png"), "html", null, true);
        echo "\" alt=\"\"/></a>
\t\t\t\t\t\t<a href=\"#\" class=\"social3b\"><img src=\"";
        // line 1883
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icon-gplus.png"), "html", null, true);
        echo "\" alt=\"\"/></a>
\t\t\t\t\t\t<a href=\"#\" class=\"social4b\"><img src=\"";
        // line 1884
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icon-youtube.png"), "html", null, true);
        echo "\" alt=\"\"/></a>
\t\t\t\t\t\t<br/><br/><br/>
\t\t\t\t\t\t<img src=\"";
        // line 1886
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logosmal.png"), "html", null, true);
        echo "\" alt=\"\" /><br/>
\t\t\t\t\t\t&copy; 2013  |  <a href=\"#\">Privacy Policy</a><br/>
\t\t\t\t\t\tAll Rights Reserved 
\t\t\t\t\t\t<br/><br/>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- End of column 1-->
\t\t\t\t
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<span class=\"ftitle\">Travel Specialists</span>
\t\t\t\t\t<br/><br/>
\t\t\t\t\t<ul class=\"footerlist\">
\t\t\t\t\t\t<li><a href=\"#\">Golf Vacations</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Ski & Snowboarding</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Disney Parks Vacations</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Disneyland Vacations</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Disney World Vacations</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Vacations As Advertised</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<!-- End of column 2-->\t\t
\t\t\t\t
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<span class=\"ftitle\">Travel Specialists</span>
\t\t\t\t\t<br/><br/>
\t\t\t\t\t<ul class=\"footerlist\">
\t\t\t\t\t\t<li><a href=\"#\">Weddings</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Accessible Travel</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Disney Parks</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Cruises</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Round the World</a></li>
\t\t\t\t\t\t<li><a href=\"#\">First Class Flights</a></li>
\t\t\t\t\t</ul>\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<!-- End of column 3-->\t\t
\t\t\t\t
\t\t\t\t<div class=\"col-md-3 grey\">
\t\t\t\t\t<span class=\"ftitle\">Newsletter</span>
\t\t\t\t\t<div class=\"relative\">
\t\t\t\t\t\t<input type=\"email\" class=\"form-control fccustom2\" id=\"exampleInputEmail1\" placeholder=\"Enter email\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default btncustom\">Submit<img src=\"";
        // line 1927
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/arrow.png"), "html", null, true);
        echo "\" alt=\"\"/></button>
\t\t\t\t\t</div>
\t\t\t\t\t<br/><br/>
\t\t\t\t\t<span class=\"ftitle\">Customer support</span><br/>
\t\t\t\t\t<span class=\"pnr\">1-866-599-6674</span><br/>
\t\t\t\t\toffice@travel.com
\t\t\t\t</div>\t\t\t
\t\t\t\t<!-- End of column 4-->\t\t\t
\t\t\t
\t\t\t

\t\t\t\t
\t\t\t\t
\t\t\t</div>\t
\t\t</div>
\t\t
\t\t<div class=\"footerbg3\">
\t\t\t<div class=\"container center grey\"> 
\t\t\t<a href=\"#\">Home</a> | 
\t\t\t<a href=\"#\">About</a> | 
\t\t\t<a href=\"#\">Last minute</a> | 
\t\t\t<a href=\"#\">Early booking</a> | 
\t\t\t<a href=\"#\">Special offers</a> | 
\t\t\t<a href=\"#\">Blog</a> | 
\t\t\t<a href=\"#\">Contact</a>
\t\t\t<a href=\"#top\" class=\"gotop scroll\"><img src=\"";
        // line 1952
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/spacer.png"), "html", null, true);
        echo "\" alt=\"\"/></a>
\t\t\t</div>
\t\t</div>
\t\t

\t\t
\t</div>
\t<!-- WRAP -->
\t
\t
    <!-- Javascript -->
\t
    <!-- This page JS -->
\t<script src=\"";
        // line 1965
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/js-index7.js"), "html", null, true);
        echo "\"></script>\t
\t
    <!-- Custom functions -->
    <script src=\"";
        // line 1968
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/functions.js"), "html", null, true);
        echo "\"></script>
\t
    <!-- Picker UI-->\t
\t<script src=\"";
        // line 1971
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery-ui.js"), "html", null, true);
        echo "\"></script>\t\t
\t
\t<!-- Easing -->
    <script src=\"";
        // line 1974
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.easing.js"), "html", null, true);
        echo "\"></script>
\t
    <!-- jQuery KenBurn Slider  -->
    <script type=\"text/javascript\" src=\"";
        // line 1977
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("rs-plugin/js/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script>
\t
   <!-- Nicescroll  -->\t
\t<script src=\"";
        // line 1980
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.nicescroll.min.js"), "html", null, true);
        echo "\"></script>
\t
    <!-- CarouFredSel -->
    <script src=\"";
        // line 1983
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.carouFredSel-6.2.1-packed.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1984
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/helper-plugins/jquery.touchSwipe.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 1985
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/helper-plugins/jquery.mousewheel.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 1986
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/helper-plugins/jquery.transit.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 1987
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/helper-plugins/jquery.ba-throttle-debounce.min.js"), "html", null, true);
        echo "\"></script>
\t
    <!-- Custom Select -->
\t<script type='text/javascript' src='assets/js/jquery.customSelect.js'></script>\t

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"";
        // line 1993
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script><script>  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)  })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');  ga('create', 'UA-43203432-1', 'titanicthemes.com');  ga('send', 'pageview');</script>
  </body>
</html>
";
    }

    // line 1725
    public function block_content($context, array $blocks = array())
    {
        echo "  
     
 ";
    }

    public function getTemplateName()
    {
        return "TravelAnnonceBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2269 => 1725,  2261 => 1993,  2252 => 1987,  2248 => 1986,  2244 => 1985,  2240 => 1984,  2236 => 1983,  2230 => 1980,  2224 => 1977,  2218 => 1974,  2212 => 1971,  2206 => 1968,  2200 => 1965,  2184 => 1952,  2156 => 1927,  2112 => 1886,  2107 => 1884,  2103 => 1883,  2099 => 1882,  2095 => 1881,  2067 => 1856,  2063 => 1855,  2052 => 1847,  2042 => 1840,  2032 => 1833,  2022 => 1826,  2012 => 1819,  2002 => 1812,  1977 => 1790,  1973 => 1789,  1962 => 1781,  1952 => 1774,  1942 => 1767,  1932 => 1760,  1922 => 1753,  1912 => 1746,  1892 => 1728,  1890 => 1725,  1874 => 1712,  1868 => 1709,  1858 => 1702,  1852 => 1699,  1842 => 1692,  1836 => 1689,  1829 => 1685,  1815 => 1674,  1809 => 1671,  1799 => 1664,  1793 => 1661,  1783 => 1654,  1777 => 1651,  1770 => 1647,  1756 => 1636,  1750 => 1633,  1740 => 1626,  1734 => 1623,  1724 => 1616,  1718 => 1613,  1711 => 1609,  1539 => 1440,  1507 => 1411,  1475 => 1382,  1442 => 1352,  1402 => 1315,  1342 => 1258,  1299 => 1218,  1142 => 1064,  1099 => 1024,  972 => 900,  929 => 860,  587 => 521,  544 => 481,  353 => 293,  310 => 253,  108 => 54,  86 => 35,  80 => 32,  74 => 29,  70 => 28,  64 => 25,  60 => 24,  50 => 17,  46 => 16,  40 => 13,  34 => 10,  30 => 9,  20 => 1,);
    }
}
