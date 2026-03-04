@extends('layouts.master')
@section('title','Sum of 10 Numbers')
@section('heading','Sum of First 10 Numbers')
@section('content')
    <div classname="flex gap-5 flex-wrap mb-6">
        @foreach ($numbers as $num)
            <div style="
                background: #dbeafe;
                color: #1e40af;
                width: 50px;
                height: 50px;
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 8px;
                font-size: 18px;
                font-weight: bold;
            ">
                {{ $num }}
            </div>
        @endforeach
    </div>
    <div style="
        background: #f8fafc;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 24px;
    ">
        <strong style="color:#475569;">Calculation Steps:</strong>
        <p style="
            font-size: 18px;
            color: #334155;
            margin-top: 10px;
            line-height: 2;
        ">
            @for ($i = 1; $i <= 10; $i++)
                {{ $i }}
                @if ($i < 10)
                    <span style="color:#3b82f6;"> + </span>
                @endif
            @endfor
            <span style="color:#64748b;"> = </span>
            <strong style="color:#16a34a; font-size:22px;">{{ $sum }}</strong>
        </p>
    </div>
    <h3 style="margin-bottom:12px; color:#475569;">
        Running Total
    </h3>
    <table border="1" cellpadding="12" cellspacing="0">
        <tr>
            <th>Step</th>
            <th>Number Added</th>
            <th>Running Sum</th>
        </tr>
        @php $running = 0; @endphp
        @for ($i = 1; $i <= 10; $i++)
            @php $running += $i; @endphp
            <tr style="background: {{ $i%2==0 ? '#f8fafc' : 'white' }}">
                <td>Step {{ $i }}</td>
                <td style="text-align:center;">
                    + {{ $i }}
                </td>
                <td style="
                    text-align:center;
                    font-weight:bold;
                    color: {{ $i == 10 ? '#16a34a' : '#3b82f6' }};
                ">
                    {{ $running }}
                    @if ($i == 10)
                        ✅
                    @endif
                </td>
            </tr>
        @endfor
    </table>
    <div style="
        margin-top: 24px;
        background: #dcfce7;
        border: 2px solid #22c55e;
        border-radius: 12px;
        padding: 20px;
        text-align: center;
    ">
        <p style="font-size:16px; color:#374151;">
            Sum of first 10 numbers
        </p>
        <p style="font-size:42px; font-weight:bold; color:#16a34a;">
            {{ $sum }}
        </p>
        <p style="font-size:13px; color:#64748b;">
            Formula: n(n+1)/2 = 10×11/2 = {{ 10*11/2 }}
        </p>
    </div>
@endsection