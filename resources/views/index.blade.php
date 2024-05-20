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
            <a class="a-buttons" href="">Создать</a>
        </section>

        <section class="task-list">
            <h2>Список задач</h2>
            <ul>
                <li class="gray">
                    <a href="#" class="detail-task">Задача 1</a>
                    <a href="" class="a-buttons">Редактировать</a>
                    <a href="" class="a-buttons">Удалить</a>
                </li>
                <li>
                    <a href="#" class="detail-task">Задача 2</a>
                    <a href="" class="a-buttons">Редактировать</a>
                    <a href="" class="a-buttons">Удалить</a>
                </li>
                <!-- добавить больше задач -->
            </ul>
        </section>    
    </main>
@endsection