@push('messsages')
    <div>
        Multiplication
    </div>
@endpush
@include('partials.header')
    <h2>Multiplication Table of {{ $number }}</h2>
    <table border="1" cellpadding="12" cellspacing="0"
        style="min-width:300px;">
        <tr>
            <th>Expression</th>
            <th>Result</th>
        </tr>
        @for ($i = 1; $i <= 10; $i++)
            <tr style="background: {{ $i % 2 == 0 ? '#f8fafc' : 'white' }}">
                <td style="font-size:16px;">
                    {{ $number }} × {{ $i }}
                </td>
                <td style="font-size:16px; font-weight:bold; color:#3b82f6;">
                    {{ $number * $i }}
                </td>
            </tr>
        @endfor
    </table>
    <div style="margin-top:20px; display:flex; gap:10px; flex-wrap:wrap;">
        @for ($i = 1; $i <= 10; $i++)
            <a href="/multiply/{{ $i }}"
               style="
                background: {{ $i == $number ? '#3b82f6' : '#e2e8f0' }};
                color: {{ $i == $number ? 'white' : '#334155' }};
                padding: 8px 16px;
                border-radius: 8px;
                text-decoration: none;
                font-weight: bold;
               ">
               {{ $i }}
            </a>
        @endfor
    </div>
@include('partials.footer')