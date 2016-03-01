<ul class="thumbnails">
    @foreach ($images as $image)
    <li class="span4 thmb">
        <a href="#" class="viewonline">View online</a>
        <a href="#" class="thumbnail"><img src="{!! Croppa::url($image->file, 290, 193) !!}" title="{!! $image->caption !!}" alt="{!! $image->caption !!}"></a>
        <p>{!! $image->caption !!}</p>
    </li>
    @endforeach
</ul>