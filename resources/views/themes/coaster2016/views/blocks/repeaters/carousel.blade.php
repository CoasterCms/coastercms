@if ($is_first)
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

    @if ($total > 1)
    <!-- Indicators -->
    <ol class="carousel-indicators">
        @for ($i = 0; $i < $total; $i++)
        <li data-target="#carousel-example-generic" data-slide-to="{{ $i }}}"{{ ($i==0)?' class="active"':'' }}></li>
        @endfor
    </ol>
    @endif

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
@endif

        <div class="item {{ ($count==1)?'active':'' }}" style="background:url('{{ PageBuilder::block('slide_image', ['view' => 'raw']) }}')">

            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <{{ ($count == 1)?'h1':'h2' }}>{{ PageBuilder::block('slide_title') }}</{{ ($count == 1)?'h1':'h2' }}>
                        <p>{{ PageBuilder::block('slide_text') }}</p>
                        @if (PageBuilder::block('slide_button_link') == '')
                            <button class="btn btn-default" id="scrollbutton">{{ PageBuilder::block('slide_button_text') }}{!! PageBuilder::block('slide_button_icon')?' &nbsp; '.PageBuilder::block('slide_button_icon'):'' !!}</button>
                        @else
                            <a href="{!! PageBuilder::block('slide_button_link') !!}" class="btn btn-default">{{ PageBuilder::block('slide_button_text') }}{!! PageBuilder::block('slide_button_icon')?' &nbsp; '.PageBuilder::block('slide_button_icon'):'' !!}</a>
                        @endif
                    </div>
                </div>
            </div>

        </div>

@if ($is_last)
    </div>

    @if ($total > 1)
    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    @endif

</div>
@endif