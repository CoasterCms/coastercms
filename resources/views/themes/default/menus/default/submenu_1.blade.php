<?php $class = ($item->active) ? 'active' : ''?>

<li class="dropdown {!! $class !!}">
    
    <a href="{!! $item->url !!}" class="dropdown-toggle" data-toggle="dropdown">{!! $item->name !!}<b class="caret"></b></a>
    <ul class="dropdown-menu">
        {!! $items !!}
    </ul>
</li>