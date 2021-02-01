@extends('layouts.admin')

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ドラ実</title>

        <link href="https:fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>ドラ実</h1>
         <a class="" href="{{ url('/login') }}">ログイン</a>
    </body>
</html>