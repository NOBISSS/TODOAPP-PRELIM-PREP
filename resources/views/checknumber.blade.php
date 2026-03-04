@push('messages')
    <div>
        Checking number positive or negative
    </div>
@endpush
@include('partials.header')
        <h2>Number Checker</h2>
        <h2>Number is
        @if($number>0)
            <span>Positive</span>
        @elseif ($number < 0)
            <span>negative</span>
        @else
            <span>Zero</span>
        @endif
        </h2>
@include('partials.footer')