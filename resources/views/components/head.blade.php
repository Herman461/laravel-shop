@props([
    'title',
    'css-file',
    'css-plugins'
])

<!doctype html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @php
        $cssArrayPlugins = explode(',', $cssPlugins);
    @endphp
    @if (count($cssArrayPlugins) > 0)
        @foreach($cssArrayPlugins as $filename)
            <link rel="stylesheet" href="{{asset('css/plugins/' . $filename . '.css')}}">
        @endforeach
    @endif
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @isset($cssFile)
        <link rel="stylesheet" href="{{asset('css/pages/' . $cssFile . '.css')}}">
    @endisset
    <title>{{$title}}</title>
</head>

<body>

<div class="wrapper">
    <x-header />

