<hr />
<div class="row">
    <div class="span9">
        <a href="{!! $page->url !!}">{!! $page->name !!}</a>
        <p>{!! PageBuilder::block('content', array('length' => 200, 'page_id' => $page->page)) !!} ...</p>
    </div>
</div>
