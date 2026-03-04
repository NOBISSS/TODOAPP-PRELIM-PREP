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
                    @switch($task['status'])
                        @case('completed')
                            <span style="
                                background:#dcfce7;
                                color:#166534;
                                padding:4px 10px;
                                border-radius:20px;
                                font-size:13px;
                            ">✅ Completed</span>
                            @break
                        @case('pending')
                            <span style="
                                background:#fef9c3;
                                color:#854d0e;
                                padding:4px 10px;
                                border-radius:20px;
                                font-size:13px;
                            ">⏳ Pending</span>
                            @break
                        @default
                            <span style="
                                background:#f1f5f9;
                                color:#475569;
                                padding:4px 10px;
                                border-radius:20px;
                                font-size:13px;
                            ">❓ Unknown</span>
                    @endswitch
                </td> 
                </tr>
            @endforeach
        </table>
@include('partials.footer');