{!! PageBuilder::section('head') !!}

<section id="second">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>{!! PageBuilder::block('title') !!}</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-9">
                {!! PageBuilder::block('content') !!}
            </div>
            <div class="col-sm-3">
                {!! PageBuilder::block('image', array('class' => 'img-responsive')) !!}
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /.second -->

{!! PageBuilder::section('footer') !!}
