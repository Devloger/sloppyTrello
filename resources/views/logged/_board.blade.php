@extends('logged.layouts.main')

@section('content')
    <main id="container">
        <article id="pages-container">
            <h1>{{ $board->title }}</h1>

            <div class="pages-list">
                <div class="pages-list-element">
                    <div class="page-element">
                        <header>ABC</header>
                        <ul>
                            <li>1 ABC</li>
                            <li>2 EFG</li>
                            <li>3 XCV</li>
                            <li>4 BVC</li>
                            <li>
                                <a href="#" class="add-new-task-button">Dodaj nową kartę...</a>
                                <section class="add-new-task-container hidden">
                                    <article>
                                        <form>
                                            <label for="title">Podaj tytuł:</label>
                                            <input title="text" name="title" id="title" placeholder="np. Nowe zadanie">
                                            <button type="submit">Dodaj</button>
                                            <button type="button" class="add-new-task-cancel">x</button>
                                        </form>
                                    </article>
                                </section>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="pages-list-element">
                    <div class="page-element">
                        <header>ABC</header>
                        <ul>
                            <li>1 ABC</li>
                            <li>2 EFG</li>
                            <li>
                                <a href="#" class="add-new-task-button">Dodaj nową kartę...</a>
                                <section class="add-new-task-container hidden">
                                    <article>
                                        <form>
                                            <label for="title">Podaj tytuł:</label>
                                            <input title="text" name="title" id="title" placeholder="np. Nowe zadanie">
                                            <button type="submit">Dodaj</button>
                                            <button type="button" class="add-new-task-cancel">x</button>
                                        </form>
                                    </article>
                                </section>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="pages-list-element">
                    <div class="page-element">
                        <header>
                            <a href="#" class="add-new-page-button">Utwórz nową listę...</a>
                            <section class="add-new-page-container hidden">
                                <article>
                                    <form>
                                        <label for="title">Podaj tytuł:</label>
                                        <input title="text" name="title" id="title" placeholder="np. Nowa lista">
                                        <button type="submit">Dodaj</button>
                                        <button type="button" id="add-new-page-cancel">x</button>
                                    </form>
                                </article>
                            </section>
                        </header>
                    </div>
                </div>
            </div>
        </article>
    </main>
@endsection