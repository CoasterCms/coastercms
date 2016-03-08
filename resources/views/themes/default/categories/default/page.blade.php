<hr />
<div class="row">
    <div class="col-sm-12">
        <a href="{!! $page->url !!}">{!! $page->name !!}</a>
        <p>{!! PageBuilder::block('content', array('length' => 200)) !!} ...</p>
    </div>
</div>
