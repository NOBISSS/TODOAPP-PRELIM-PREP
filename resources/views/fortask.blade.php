@push('messages')
    <div>
        for loop - Generating 5 sample tasks
    </div>
@endpush
@include('partials.header');
    <h2>5 Sample Tasks using for</h2>
    <table border=1 cellpadding=12 cellspacing=0>
        <tr>
            <th>Task Number</th>
            <th>Task Title</th>
            <th>Priority</th>
        </tr>

        @for($i=1;$i<=5;$i++)
            <tr>
                <td>Task {{ $i }}</td>
                <td>Sample Task Number {{ $i }}</td>
                <td>
                    @if ($i == 1)
                        <span style="color:red">🔴 High</span>
                    @elseif ($i == 2 || $i == 3)
                        <span style="color:orange">🟠 Medium</span>
                    @else
                        <span style="color:green">🟢 Low</span>
                    @endif
                </td>
            </tr>
        @endfor
    </table>

    <h2 style="margin-top:30px">Loop Counter Demo</h2>
    <div style="display:flex; gap:10px; flex-wrap:wrap;">
        @for ($i = 1; $i <= 5; $i++)
            <div style="
                background:#3b82f6;
                color:white;
                width:80px;
                height:80px;
                display:flex;
                align-items:center;
                justify-content:center;
                border-radius:10px;
                font-size:24px;
                font-weight:bold;
            ">
                {{ $i }}
            </div>
        @endfor
    </div>
@include('partials.footer');