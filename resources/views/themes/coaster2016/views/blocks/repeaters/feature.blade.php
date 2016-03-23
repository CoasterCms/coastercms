@if ($is_first || $count % 2 == 1)
<div class="row">
@endif

    <div class="col-sm-6">
        <div class="row">
            <div class="col-sm-2">
                {!! PageBuilder::block('feature_icon') !!}
            </div>
            <div class="col-sm-10">
                <h3>{{ PageBuilder::block('feature_title') }}</h3>
                <p>{{ PageBuilder::block('feature_text') }}</p>
            </div>
        </div>
    </div>

@if ($is_last || $count % 2 == 0)
</div>
@endif

