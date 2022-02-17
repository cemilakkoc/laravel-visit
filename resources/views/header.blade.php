<div class="mx-4 my-1">
    <div class="m-1 w-full max-w-80">
        <div class="w-full text-white text-center {{ $bgColor }}"></div>
        <div class="w-full text-white {{ $bgColor }}">
        <span class="px-2 text-left w-1/2">
            <span class="uppercase mr-1">{{ $method }}</span>
            <span>{{ $url }}</span>
        </span>
            <span class="px-2 text-right w-1/2">
            {{ $statusCode }}
        </span>
    </div>
    @if(count($headers))
    <div class="my-1 w-full text-white text-center">
        <span class="uppercase mr-1">Headers</span>
        @foreach($headers as $key => $value)
            <div class="w-full text-white {{ $bgColor }}">
                <span class="px-2 text-left w-1/2">
                    <span>{{ $key }}</span>
                </span>
                <span class="px-2 text-right w-1/2">
                    {{ $value }}
                </span>
            </div>
        @endforeach
    </div>
    @endif

    @if(count($data))
    <div class="my-1 w-full text-white text-center">
        <span class="uppercase mr-1">Data</span>
        @foreach($data as $key => $value)
            <div class="w-full text-white {{ $bgColor }}">
                <span class="px-2 text-left w-1/2">
                    <span>{{ $key }}</span>
                </span>
                <span class="px-2 text-right w-1/2">
                    {{ $value }}
                </span>
            </div>
        @endforeach
    </div>
    @endif
</div>
