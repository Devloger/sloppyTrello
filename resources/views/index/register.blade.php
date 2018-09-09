@include('header')
<main id="container">
    <article id="login">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <label for="name">Nazwa</label>
            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="np. Jan Kowalski">
            <label for="email">E-Mail</label>
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="np. jan@mail.pl">
            <label for="password">Hasło</label>
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="np. ********">
            <label for="password">Powtórz Hasło</label>
            <input id="password2" type="password" name="password2" required placeholder="np. ********">
            <input type="submit" value="Zarejestruj"/>
        </form>
    </article>
</main>
@include('footer')