<?php $class = ($item->active) ? 'active' : ''?>
<li class="{!! $class !!}">{!! HTML::link($item->url, $item->name) !!}</li>