{{-- TASK 8 --}}

@push('messages')
    <div class="page-banner">
        🎓 You are on the Student Information page!
    </div>
@endpush
@include('partials.header')
        <h1>Student Information</h1>
        <table border="1" cellpadding="10">
            <tr>
                <th>Field</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>Name</td>
                <td>{{ $name }}</td>
            </tr>
            <tr>
                <td>City</td>
                <td>{{ $city }}</td>
            </tr>
            <tr>
                <td>Course</td>
                <td>{{ $course }}</td>
            </tr>
            <tr>
                <th>Method Used</th>
                <th>{{ $method }}</th>
            </tr>
        </table>
@include('partials.footer')