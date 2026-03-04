@push('message')
    <div>
        Factorial
    </div>
@endpush
@include('partials.header')
    <div>
        <h1>Factorial Calculator</h1>
        <div style="
        background:#f0fdf4;
        border:2px solid #22c55e;
        border-radius:12px;
        padding:24px;
        max-width:400px;
        text-align:center;
    ">
        <p style="font-size:18px; color:#374151;">
            Entered Number:
            <strong style="color:#3b82f6; font-size:24px;">
                {{ $number }}
            </strong>
        </p>

        <p style="font-size:18px; color:#374151;">
            Factorial ({{ $number }}!):
            <strong style="color:#16a34a; font-size:28px;">
                {{ $factorial }}
            </strong>
        </p>
        </div>
        
    </div>
@include('partials.footer')