@include('header')
<main id="container">
    <article id="main">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <label for="email">E-Mail</label>
            <input input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="np. jan@mail.pl">
            <label for="password">Hasło</label>
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="np. ********">
            <button>Zaloguj</button>
        </form>
    </article>
</main>
@include('footer')