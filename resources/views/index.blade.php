@extends('app')

@section('content')
    <header>
        <h1>Задачи</h1>
        <section class="exit">
            <h2>Выйти из аккаунта</h2>
            <button>Выйти</button>
        </section>
    </header>
    <main>
        <section class="create-task">
            <h2>Создать задачу</h2>
            <button>Создать</button>
        </section>

        <section class="task-list">
            <h2>Список задач</h2>
            <ul>
                <li>
                    <span>Задача 1</span>
                    <button>Редактировать</button>
                    <button>Удалить</button>
                </li>
                <li>
                    <span>Задача 2</span>
                    <button>Редактировать</button>
                    <button>Удалить</button>
                </li>
                <!-- добавить больше задач -->
            </ul>
        </section>    
    </main>
@endsection