<!DOCTYPE html>
<html lang="ru-ru">
  <head>
    <meta charset="utf-8">
    <title><?php echo $page_title; ?></title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>lib/bootstrap3/dist/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>lib/FontAwesome/css/font-awesome.min.css">
    <script src="<?php echo base_url(); ?>lib/jquery-1.7.2.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>javascripts/site.js" type="text/javascript"></script>
    <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="<?php echo base_url(); ?>lib/fractionslider/css/fractionslider.css">
    <script src="<?php echo base_url(); ?>lib/fractionslider/jquery.fractionslider.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
        jQuery(window).load(function(){
          //if($('.slider').visible()) {
              //$('.slider').fractionSlider({controls:true,pager:true});
              $('.slider').fractionSlider();
          //}
        });
    </script>

    <link rel="stylesheet" type="text/css" href="stylesheets/theme.css">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/ico/favicon.ico">    
  </head>

  <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
  <!--[if IE 7 ]> <body class="ie ie7 index"> <![endif]-->
  <!--[if IE 8 ]> <body class="ie ie8 index"> <![endif]-->
  <!--[if IE 9 ]> <body class="ie ie9 index"> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> 
  <body class="index"> 
  <!--<![endif]-->

    <div class="navbar">

        <div class="container">
            <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                      <i class="icon-align-justify"></i>
                  </button>
                  <a class="navbar-brand" href="index.html">Юристы для бизнеса.рф</a>
            </div>
            <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        
                        <li class=" "><a href="features.html"><span>Главная</span></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                              Услуги
                              <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">                                
                                <li class=" "><a href="components.html"><span>Коммерческие споры</span></a></li>
                                <li class=" "><a href="components.html"><span>Сопровождение бизнеса</span></a></li>
                                <li class=" "><a href="components.html"><span>Проверка контрагентов</span></a></li>
                                <li class=" "><a href="components.html"><span>Банкротство</span></a></li>
                                <li class=" "><a href="components.html"><span>Купля-продажа бизнеса</span></a></li>
                                <li class=" "><a href="components.html"><span>Снижение земельного налога</span></a></li>
                            </ul>
                        </li>                         
                        <li class=" "><a href="about.html"><span>О компании</span></a></li>
                        <li class=" "><a href="about.html"><span>Наши преимущества</span></a></li>
                        <li class=" "><a href="about.html"><span>Контакты</span></a></li>
                        
                    </ul>
            </div>
        </div>
    </div>    
    
    <div class="content">