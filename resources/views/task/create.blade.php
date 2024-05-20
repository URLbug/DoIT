@extends('app')

@section('content')
<header>
    <h1>Создать задачу</h1>
</header>
<main>
    <section class="create-task">
        <form>
            <input type="text" placeholder="Название задачи">
            <textarea placeholder="Описание задачи" cols="100" rows="10"></textarea>
            <input type="date" placeholder="Срок задачи">
            <input type="text" placeholder="Приоритет задачи">

            <input type="submit" value="Создать задачу">
        </form>
    </section>    
</main>
@endsection