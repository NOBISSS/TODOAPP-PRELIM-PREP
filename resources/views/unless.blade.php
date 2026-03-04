
@push('messages')
    <div class="page-banner">
        Task List — unless demonstration 
    </div>
@endpush
@include('partials.header')
    <h2>My Task List</h2>
    @unless(count($tasks)>0)
        <div style="
            background: #fee2e2;
            border-left: 4px solid #ef4444;
            padding: 12px 20px;
            border-radius: 4px;
            color: #991b1b;
        ">
            ❌ No tasks found! Please add some tasks.
        </div>
        @endunless

        @if(count($tasks)>0)
            <table border="1" cellpadding="10" cellspacing="0">
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
                        @if ($task['status'] == 'completed')
                            <span style="color:green">✅ Completed</span>
                        @else
                            <span style="color:red">⏳ Pending</span>
                        @endif
                    </td>
                </tr>
            @endforeach
            </table>
            @endif
@include('partials.footer')