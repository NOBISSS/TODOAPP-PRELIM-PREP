@push('messages')
    <div class="page-banner">
        📋 You are on the Task List page — Stay organized!
    </div>
@endpush
@include('partials.header')
        <h1>My Task List</h1>
        <ul>
            @foreach($tasks as $task)
                <li>{{ $task }}</li>
            @endforeach
        </ul>
@include('partials.footer');