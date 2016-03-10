@if ($is_first)
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  @if($total > 1)
    <!-- Indicators -->
    <ol class="carousel-indicators">

        @for ($i = 0; $i < $total; $i++)
        <li data-target="#carousel-example-generic" data-slide-to="{!! $i !!}"{!! ($i==0)?' class="active"':'' !!}></li>
        @endfor
    </ol>
  @endif

    <!-- Wrapper for slides -->
    <div class="carousel-inner dupa">
@endif

        <div class="item {!! ($count==1)?'active':'' !!} car{!! $count !!}" style="background-image: url({{ PageBuilder::block('slide_image', array('view' => 'src')) }})">
            <div class="carousel-caption">
                <h1>{!! PageBuilder::block('slide_title') !!}</h1>
                <a href="{!! PageBuilder::block('slide_link') !!}" class="btn btn-primary" >Find out more</a>
            </div>
        </div>

@if ($is_last)
    </div>
  @if($total > 1)
    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
    @endif
</div>
@endif
