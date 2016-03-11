@if ($is_first || $count % 4 == 1)
<div class="row">
@endif
    <div class="col-sm-3">
        {!! PageBuilder::block('icon') !!}
        <h3>{{ PageBuilder::block('title') }}</h3>
        <p>{{ PageBuilder::block('content') }}</p>
        <a href="{!! $page->url !!}" class="btn btn-default">More info</a>
    </div>
@if ($is_last || $count % 4 == 0)
</div>
@endif