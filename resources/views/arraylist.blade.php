@push('messages')
    <div>
        Display Array using ForEach
    </div>
@endpush
@include('partials.header')
    <div>
        <h2>Simple Array — 5 Fruits</h2>
        <ul>
            @foreach ($fruits as $fruit)
                    <li style="
                background: #dbeafe;
                color: #1e40af;
                padding: 8px 20px;
                border-radius: 20px;
                font-weight: bold;
            ">
                {{ $loop->iteration }}. {{ $fruit }}
            </li>
            @endforeach   
        </ul>
        <h2 style="margin-top: 30px;">Associative Array — 5 Students</h2>
        <table border=1 cellspacing=10 cellpadding=5>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>City</th>
                <th>Grade</th>
            </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $student['name'] }}</td>
                <td>{{ $student['city'] }}</td>
                <td>
                    @switch($student['grade'])
                        @case('A')
                            <span>⭐A</span>
                            @break
                        @case('B')
                            <span>👍B</span>
                            @break
                        @case('C')
                            <span>📝A</span>
                            @break 
                        @default
                            
                    @endswitch
                </td>
            </tr>
            
        @endforeach
        </table>
    <div style="
        margin-top: 24px;
        background: #f8fafc;
        border-radius: 10px;
        padding: 16px;
        display: flex;
        gap: 20px;
    ">
        <div>
            <strong>Total Fruits:</strong>
            {{ count($fruits) }}
        </div>
        <div>
            <strong>Total Students:</strong>
            {{ count($students) }}
        </div>
        <div>
            <strong>First Fruit:</strong>
            {{ $fruits[0] }}
        </div>
        <div>
            <strong>Last Fruit:</strong>
            {{ $fruits[count($fruits)-1] }}
        </div>
    </div>
    </div>
@include('partials.footer')
