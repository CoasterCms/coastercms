<!DOCTYPE html>
<html lang="en">
<head itemscope>
    <meta charset="utf-8">
    <title>{!! PageBuilder::block('meta_title', array('meta' => true)) !!}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{!! PageBuilder::block('meta_description', array('meta' => true)) !!}">
    <meta name="keywords" content="{!! PageBuilder::block('meta_keywords', array('meta' => true)) !!}">

  	<meta property="og:title" content="{!! PageBuilder::block('meta_title') !!}">
  	<meta property="og:description" content="{!! PageBuilder::block('meta_description') !!}">
  	<meta itemprop="name" content="{!! PageBuilder::block('meta_title') !!}">
  	<meta itemprop="description" content="{!! PageBuilder::block('meta_description') !!}">

  	<meta name="revisit-after" content="7 days">
    <meta name="google-site-verification" content="iOm3RU2-ZpUmsvDRDC3rTavC0uUhB3FuZUpNRqJSm-0" />
    <meta name="msvalidate.01" content="701B6B47E0A450809C3FF2FB9873BA7D" />

    <link href="{!! PageBuilder::css('bootstrap.min') !!}" rel="stylesheet">
    <link href="{!! PageBuilder::css('main') !!}" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Prata|Raleway:400,500,600' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    {!! PageBuilder::block('header_html', array('source' => true)) !!}

</head>

<body>

{!! PageBuilder::menu('main_menu') !!}
