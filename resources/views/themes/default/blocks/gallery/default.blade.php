<ul class="thumbnails">
    @foreach ($images as $image)
    <li class="col-sm-4">
        <a href="#" class="fancybox"><img src="{!! Croppa::url($image->file, 290, 193) !!}" title="{!! $image->caption !!}" alt="{!! $image->caption !!}"></a>
        <p>{!! $image->caption !!}</p>
    </li>
    @endforeach
</ul>