{!! PageBuilder::section('head') !!}

<div class="container">

<div class="row">
    <div class="col-sm-12">
        {!! PageBuilder::img('404.jpg') !!}
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <p class="errorpage_1">oops, {!! $error !!} ...</p>
        <p class="errorpage_2">Error: 404</p>
        <p>We couldn't find the page you requested on our servers. We're really sorry about that. It's our fault, not yours. We'll work hard to get this page back online as soon as possible.</p>
    </div>
</div>

</div>

{!! PageBuilder::section('footer') !!}