<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>BBBK</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Indie+Flower">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pacifico">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
<div id="wrapper">
    <header id="header">
        <nav id="header-nav">
            <div class="left-side">
                <a href="{{ route('main') }}"><img src="/img/logo.png" alt="Strona Główna"></a>
            </div>
            <div class="right-side">
                <a href="{{ route('main') }}" class="header-nav-button">Tablice</a>
                <a href="{{ route('user.show', auth()->user())}}" class="header-nav-button">Profil</a>
                <a href="{{ route('logout') }}" class="header-nav-button">Wyloguj</a>
            </div>
        </nav>
        <nav id="header-nav-mobile">

            <a href="index.html"><i class="material-icons icon">home</i></a>
            <i id="menu-icon" class="material-icons icon">menu</i>

            <div id="nav-list-mobile" class="hidden">
                {{--<a href="#" class="header-nav-button">Profil</a>--}}
                {{--<a href="#" class="header-nav-button">Tablice</a>--}}
                <a href="#" class="header-nav-button">Wyloguj</a>
            </div>
        </nav>
    </header>