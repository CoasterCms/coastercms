<li class="dropdown {{ ($item->active)?' active':'' }}">
    <a href="{{ $item->url }}" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{ $item->name }}<b class="caret" data-toggle="dropdown"></b>
    </a>
    <ul class="dropdown-menu">
        {!! $items !!}
    </ul>
</li>
