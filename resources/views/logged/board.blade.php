@extends('logged.layouts.main') @section('content')
<main id="container">
    <article id="pages-container">
        <header>
            <h1>{{ $board->title }}</h1>
            <div>
                <h2>{{ $board->description }}</h2>
                <span><span>Autor: </span>{{ $board->user->name }}</span>
                <span><span>Utworzony: </span>{{ $board->created_at }}</span>
                <span><span>Ostatnia edycja: </span>{{ $board->updated_at }}</span>
                {{--<span><span>Edytowany przez: </span>Mietek Rembrowski</span>--}}
            </div>
        </header>

        <div class="pages-list">

            @foreach($board->pages as $page)
            <div class="pages-list-element">
                <div class="page-element">
                    <header>
                        <div class="page-element-title">{{ $page->title }}</div>
                        <div class="page-list-menu">
                            <div class="right-side page-list-element-update"><i class="material-icons">create</i></div>
                            <div class="right-side page-list-element-delete"><i class="material-icons">delete</i></div>
                        </div>
                        <form class="boards-list-element-updateform hidden">
                            <div class="boards-list-menu">
                                <button class="right-side"><i class="material-icons">save</i></button>
                                <div class="right-side page-list-element-cancel"><i class="material-icons">clear</i></div>
                            </div>
                            <header class="boards-list-element-title"><input title="text" name="title" id="title" placeholder="Podaj nazwę karty.." required>
                            </header>
                        </form>
                        <form method="POST" action="{{ route('page.delete', $page) }}" class="boards-list-element-deleteform hidden">
                            {{ method_field('DELETE') }} {{ csrf_field() }}
                            <button class="right-side form-cancel">Anuluj</button>
                            <button type="submit" class="right-side">Usuń</button>
                        </form>
                    </header>


                    <ul>
                        @foreach($page->tasks as $task)
                        <li class="task-window">
                            <span>{{ $task->title }}</span>
                            <div class="page-list-menu">
                                <div class="right-side page-list-element-edite"><i class="material-icons">build</i>
                                </div>
                                <div class="right-side page-list-element-update"><i class="material-icons">create</i>
                                </div>
                                <div class="right-side page-list-element-delete"><i class="material-icons">delete</i>
                                </div>
                            </div>
                            <form class="boards-list-element-updateform hidden">
                                <div class="boards-list-menu">
                                    <button class="right-side"><i class="material-icons">save</i></button>
                                    <div class="right-side page-list-element-cancel"><i class="material-icons">clear</i>
                                    </div>
                                </div>
                                <header class="boards-list-element-title"><input title="text" name="title" id="title" placeholder="Podaj nazwę karty..." required>
                                </header>
                            </form>
                            <form action="{{ route('task.delete', $task) }}" method="POST" class="boards-list-element-deleteform hidden">
                                {{ method_field('DELETE') }} {{ csrf_field() }}
                                <button class="right-side form-cancel">Anuluj</button>
                                <button type="submit" class="right-side">Usuń</button>
                            </form>
                            <ul class="users-added-to-task">

                                @foreach($task->collaborators as $collaborator)
                                    <ol class="user-added-to-task">{{ $collaborator->user->name[0] }}</ol>
                                @endforeach


                            </ul>

                            <!--    
                            
                            
                            Okno tasków 
                            
                            
                            -->


                            <div class="task-edit-window hidden">
                                <section class="task-edit-window-section">
                                    <button type="submit" class="user-button close-window">Zamknij</button>
                                    <header>Task - <span> {{ $task->title }}</span></header>

                                    <form action="{{ route('task.finish', $task) }}" method="POST" class="">
                                        {{ csrf_field() }}
                                        {{ method_field('POST') }}
                                        <p>
                                            <label class="user-info">Prace nad taskiem zakończone? </label><button type="submit" class="user-button">Zakończ!</button>
                                        </p>
                                    </form>

                                    <div>
                                        <label class="user-info">Członkowie: </label>
                                        <ul class="users-added-to-task-list">

                                            @foreach($task->collaborators as $collaborator)
                                                <ol class="user-added-to-task-list"><span>{{ $collaborator->user->name[0] }}</span>{{ $collaborator->user->name }}</ol>
                                            @endforeach

                                            <ol class="user-added-to-task-list">
            <form action="{{ route('task.collaborate', $task) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('POST') }}
                <select name="id" class="user-input" required>
                    @foreach($task->notCollaborators() as $notCollaborator)
                        <option value="{{ $notCollaborator->id }}">{{ $notCollaborator->name }}</option>
                    @endforeach
                </select>
                <input type="submit" class="user-button" value="Dodaj!"/>
            </form>
                                            </ol>
                                        </ul>
                                    </div>

                                </section>
                            </div>
                        </li>
                        @endforeach
                        <li>
                            <div class="add-new-task-button">Dodaj nową kartę...</div>
                            <div class="add-new-task-container hidden">
                                <div>
                                    <form action="{{ route('task.store', $page) }}" method="POST">
                                        {{ method_field('POST') }} {{ csrf_field() }}
                                        <label for="title">Podaj tytuł:</label>
                                        <input type="hidden" name="board" value="{{ $board->id }}">
                                        <input type="text" name="title" id="title" placeholder="np. Nowe zadanie" required>
                                        <input type="text" name="description" id="description" placeholder="np. Jest bardzo fajne" required>
                                        <button type="submit">Dodaj</button>
                                        <button type="button" class="add-new-task-cancel">x</button>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            @endforeach

            <div class="pages-list-element">
                <div class="page-element">
                    <header>
                        <div class="add-new-page-button">Utwórz nową listę...</div>
                        <div class="add-new-page-container hidden">
                            <div>
                                <form action="{{ route('page.store', $board) }}" method="POST">
                                    {{ method_field('POST') }} {{ csrf_field() }}
                                    <label for="title">Podaj tytuł:</label>
                                    <input title="text" name="title" id="title" placeholder="np. Nowa lista" autocomplete="off" required>
                                    <input title="text" name="description" id="description" placeholder="np. Jest o pracy." autocomplete="off" required>
                                    <button type="submit">Dodaj</button>
                                    <button type="button" id="add-new-page-cancel">x</button>
                                </form>
                            </div>
                        </div>
                    </header>
                </div>
            </div>
        </div>
    </article>
</main>
@endsection
