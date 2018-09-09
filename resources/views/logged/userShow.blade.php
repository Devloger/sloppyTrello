@extends('logged.layouts.main') @section('content')
<main id="container">
    <article id="profil-container">
        <h1>-Widok Profilu-</h1>
        <p id="user-edit-name"><label class="user-info">Nazwa konta: </label><label class="user-model-info">{{ $user->name }}</label>
            <label class="user-model-edit"><i class="material-icons">create</i></label>
        </p>
        <!-- <label class="user-model-form">-->
        <form action="{{ route('user.update', $user) }}" method="POST" class="hidden">
            {{ csrf_field() }} {{ method_field('PATCH') }}
            <p>
                <label class="user-info">Nazwa konta: </label>
                <label class="user-model-info">
                    <input title="text" name="name" id="name" placeholder="Podaj nową nazwę konta" value="{{ $user->name }}" class="user-input" required>
                    <button type="button" class="user-button user-edit-anuluj">x</button>
                    <button type="submit" class="user-button">Zmień</button>
                </label>
            </p>
        </form>
        <p><label class="user-info">E-mail: </label><label class="user-model-info">{{ $user->email }}</label></p>
        <p><label class="user-info">Data utworzenia: </label><label class="user-model-info">{{ $user->created_at }}</label></p>
        <p><label class="user-info">Id konta: </label><label class="user-model-info">{{ $user->id }}</label></p>
    </article>
</main>
@endsection
