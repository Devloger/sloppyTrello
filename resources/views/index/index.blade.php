@include('header')
<main id="container">
    <article id="main">
        <div>
            <img src="img/logo.png" alt="BBBK" class="logo">

            <p>Zmęczony ciągłą wymianą informacji przez e-mail? Znudzony staromodnym arkuszem kalkulacyjnym czy karteczkami samoprzylepnymi? Nie chcesz zaśmiecać komputera programem do zarządzania projektrami?</p>
            <h1><span>BBBK</span> jest odpowiedzią na Twoje problemy!</h1>
            <p>Całkowicie darmowy, niezwykle funkcjonalny i&nbsp;prosty w użyciu. Jedyne czego potrzebujesz, to swojej ulubionej przeglądarki!</p>
            <a href="{{ route('rejestracja') }}" class="header-nav-button button-signup">Zarejestruj się</a>
        </div>
    </article>
    <article id="mobile">
        <div>
            <h2>Mobile BBBK</h2>
            <p>
                Aplikacja BBBK jest w&nbsp;pełni zsynchronizowana z&nbsp;urządzeniami mobilnymi. Bez problemu możesz z&nbsp;niej korzystać czy to ze smartfonów, czy z&nbsp;tabletów. Ponad to dla urządzeń z&nbsp;systemem Android dostępna jest mobilna aplikacja - do pobrania z&nbsp;Google Play.
            </p>
            <a href="#"><img src="https://play.google.com/intl/en_us/badges/images/badge_new.png" alt="Google Play"></a>
        </div>
    </article>
</main>
@include('footer')
