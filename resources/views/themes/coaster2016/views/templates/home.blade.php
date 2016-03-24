{!! PageBuilder::section('head') !!}

{!! PageBuilder::block('carousel') !!}

<section id="sec1">
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <h2>{{ PageBuilder::block('title') }}</h2>
                <p class="lead">{{ PageBuilder::block('lead_text') }}</p>
            </div>
        </div>
        <hr />
        @if ($pageId = PageBuilder::block_selectpage('sections_of'))
        {!! PageBuilder::category(['page_id' => $pageId]) !!}
        @endif
    </div>
</section>

{!! PageBuilder::block('banner') !!}

<section id="sec2">
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-10 col-sm-offset-1">
                <h2>{{ PageBuilder::block('features_title') }}</h2>
                <p class="lead">{{ PageBuilder::block('features_lead_text') }}</p>
            </div>
        </div>
        <hr />
        {!! PageBuilder::block('feature') !!}
    </div>
</section>

{!! PageBuilder::section('footer') !!}