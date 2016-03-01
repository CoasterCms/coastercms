<ul class="thumbnails">
    @foreach ($images as $image)
    <li class="span3 thmb">
        <a href="{!! $image->link !!}" class="thumbnail fancybox" data-fancybox-group="group">
            <img src="{!! Croppa::url($image->file, 290, 193) !!}" title="{!! $image->caption !!}" alt="{!! $image->caption !!}">
            <p>{!! $image->caption !!}</p>
        </a>
    </li>
    @endforeach
</ul>