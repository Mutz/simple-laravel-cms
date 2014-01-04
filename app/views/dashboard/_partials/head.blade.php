<!DOCTYPE html>
<html>

<head>
    <title>@yield('page_title')</title>
    <meta name="description" content="Casa de Pedra - Vale do Capão">
    <meta name="author" content="Elena Kolevska:: www.elenakolevska.com">


    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    @section('stylesheets')
      {{ HTML::style('assets/stylesheets/backend.css') }}
    @show

    <!-- open Roboto fonts -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Roboto:400,300|Roboto+Slab:400,300' rel='stylesheet' type='text/css'> -->
    <!-- Font awesome CDN -->
    <!-- <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"> -->


    <!-- open sans font -->
<!--     <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,300&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
 -->
    <!-- lato font -->
<!--     <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
 -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>
