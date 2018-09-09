<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>BBBK</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Indie+Flower">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<div id="wrapper">
    <header id="header">
        <nav id="header-nav">
            <div class="left-side">
                <a href="{{ route('index') }}"><img src="img/logo.png"></a>
            </div>
            <div class="right-side">
                <a href="{{ route('logowanie') }}" class="header-nav-button">Zaloguj się</a>
                <a href="{{ route('rejestracja') }}" class="header-nav-button button-signup">Zarejestruj się</a>
            </div>
        </nav>
    </header>