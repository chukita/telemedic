<div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            @foreach ($segments as $segment)
                @if ($loop->last)
                    <li class="breadcrumb-item active" aria-current="page">{{ $segment['name'] }}</li>
                @else
                    <li class="breadcrumb-item"><a href="{{ $segment['url'] }}">{{ $segment['name'] }}</a></li>
                @endif
            @endforeach
        </ol>
    </nav>
</div>
