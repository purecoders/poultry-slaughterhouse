<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="" name="description">
  <meta name="google" content="notranslate" />
  <meta name="csrf-token" content="{{@csrf_token()}}">
  <meta content="Mashup templates have been developped by Orson.io team" name="author">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">
  
  
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/apple-icon-180x180.png">
  <link href="./assets/favicon.ico" rel="icon">
  <link href="{{asset('css/app.css')}}" rel="stylesheet">
  <link href="{{asset('css/all.min.css')}}" rel="stylesheet">

</head>

<body>