@push('messages')
    <div class="page-banner">
        📋 You are on the Task List page — Stay organized!
    </div>
@endpush
@include('partials.header')
        <h1>My Task List</h1>
        <table border=1 cellpadding=10 cellspacing=0>
            <tr>
                <th>#</th>
                <th>Task</th>
                <th>Status</th>
            </tr>
            @foreach ($tasks as $task)
                <tr>
                   <td>{{ $loop->iteration }}</td> 
                   <td>{{ $task['title'] }}</td> 
                   <td>
                    @if ($task['status']=="completed")
                        <span style="color:green">✔️Completed</span>
                    @else
                        <span style="color:red">⏳Pending</span>
                    @endif    
                </td> 
                </tr>
            @endforeach
        </table>
@include('partials.footer');