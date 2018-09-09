@extends('logged.layouts.main')

@section('content')
    <main id="container">
        <section id="add-new-board-container" class="hidden">
            <article>
                <form action="{{ route('board.store') }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('POST') }}
                    <label for="title">Podaj tytuł:</label>
                    <input title="text" name="title" id="title" placeholder="np. Mój Tytuł">
                    <input title="description" name="description" id="description" placeholder="Jest bardzo fajny"
                           required>
                    <button type="button" id="add-new-board-cancel">x</button>
                    <button type="submit">Dodaj</button>
                </form>
            </article>
        </section>

        <article id="boards-container">
            <h1>Twoje tablice</h1>

            <div class="boards-list">
                @foreach($boards as $board)
                    <a href="{{ route('board.show', $board) }}" class="boards-list-element">{{ $board->title }}</a>
                @endforeach
                <a href="#" id="add-new-board" class="boards-list-element">Utwórz nową tablicę...</a>
            </div>
        </article>
    </main>
@endsection