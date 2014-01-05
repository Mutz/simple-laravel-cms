<!DOCTYPE html>
<html lang="pt-Br">
  
<head>
    <title>@yield('page_title')</title>
    

    @section('meta')
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">    
        <meta itemprop="name" content="Sportbook.com.vc" />
    @show

    {{HTML::style(asset('assets/stylesheets/frontend.css'))}}
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">    
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300|Roboto+Slab:400,300' rel='stylesheet' type='text/css'>

    @yield('head')
</head>
 