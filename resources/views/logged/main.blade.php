@extends('logged.layouts.main') @section('content')
<main id="container">
    <section id="add-new-board-container" class="hidden">
        <article>
            <form action="{{ route('board.store') }}" method="POST">
                {{ csrf_field() }} {{ method_field('POST') }}
                <input title="text" name="title" id="title" placeholder="Podaj tytuł tablicy" required>
                <button type="button" id="add-new-board-cancel">x</button>
                <textarea title="text" name="description" id="description" cols="5" placeholder="Podaj opis tablicy" required></textarea>
                <button type="submit">Dodaj</button>
            </form>
        </article>
    </section>

    <!--
                    <div class="boards-list-element">
                        <a href="#">
                            <span id="add-new-board">
                                Utwórz nową tablicę...
                            </span>
                        </a>
                        <span id="add-new-board-container" class="hidden">
                            <form>
                                <input title="text" name="title" id="title" placeholder="Podaj tytuł tablicy">
                                <button type="button" id="add-new-board-cancel">x</button>
                                <textarea  title="text" name="opis" id="opis" cols="5" placeholder="Podaj opis tablicy (opcjonalnie)"></textarea>
                                <button type="submit">Dodaj</button>
                            </form>
                        </span>
                    </div>
-->

    <article id="boards-container">
        <h1>Twoje tablice</h1>

        <div class="boards-list">
            @foreach($boards as $board)
            <div href="{{ route('board.show', $board) }}" class="boards-list-element">


                <div class="boards-list-board">
                    <a href="{{ route('board.show', $board) }}">
                        <div class="boards-list-menu">
                            <div class="right-side boards-list-element-update"><i class="material-icons">create</i></div>
                            <div class="right-side boards-list-element-delete"><i class="material-icons">delete</i></div>
                        </div>
                        <form class="boards-list-element-deleteform hidden" method="POST" action="{{ route('board.delete', $board) }}">
                            {{ method_field('DELETE') }} {{ csrf_field() }}
                            <button class="right-side form-cancel">Anuluj</button>
                            <button type="submit" class="right-side">Usuń</button>
                        </form>
                        <header class="boards-list-element-title">
                            <div class="title-text">{{ $board->title }}</div><span class="board-tasks-number"> | <span class="board-tasks-number-open">{{ $board->unfinishedTasks->count() }}</span><span>/</span>{{ $board->tasks->count() }}</span>
                        </header>
                        <div class="boards-list-element-description">{{ $board->description }}</div>
                    </a>
                </div>

                <form class="boards-list-element-updateform hidden" method="POST" action="#">
                    <div class="boards-list-menu">
                        <button class="right-side"><i class="material-icons">save</i></button>
                        <div class="right-side boards-list-element-cancel"><i class="material-icons">clear</i></div>
                    </div>
                    <header class="boards-list-element-title"><input title="text" name="title" id="title" placeholder="Podaj tytuł tablicy" required></header>
                    <div class="boards-list-element-description"><textarea title="text" name="opis" id="opis" cols="5" placeholder="Podaj opis tablicy" required></textarea></div>
                </form>

            </div> @endforeach
            <div class="boards-list-element">
                <a href="#">
                    <span id="add-new-board">
                        Utwórz nową tablicę...
                    </span>
                </a>
                <!--          <span id="add-new-board-container" class="hidden">
                    <form action="{{ route('board.store') }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('POST') }}
                        <input title="text" name="title" id="title" placeholder="Podaj tytuł tablicy">
                        <button type="button" id="add-new-board-cancel">x</button>
                        <textarea  title="text" name="opis" id="opis" cols="5" placeholder="Podaj opis tablicy (opcjonalnie)"></textarea>
                        <button type="submit">Dodaj</button>
                    </form>
                </span>-->
            </div>
        </div>
    </article>
</main>
@endsection
