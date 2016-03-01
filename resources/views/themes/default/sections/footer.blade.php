<footer>
    <div class="container" >
        <div class="row">
            <div class="col-sm-7">
                <p class="dupa">&copy; {!! date("Y") !!} {!! PageBuilder::block('footer_left') !!} | <a href="http://www.web-feet.co.uk/services/website-design" target="_blank">Web design</a> and <a href="http://www.web-feet.co.uk/services/development" target="_blank">Web development</a> by WebFeet.co.uk | <a href="#toptop">Back to top</a></p>
            </div>
            <div class="col-sm-5">
                <p class="text-right"> {!! PageBuilder::block('footer_right') !!}<br>
                    E-mail: <a href="mailto:{!! PageBuilder::block('email') !!}">{!! PageBuilder::block('email') !!}</a> | Phone: +44 {!! str_replace(" ", "-", PageBuilder::block('phone')) !!} </p>
            </div>
        </div>
        <!--/. row -->
    </div>
    <!-- /.container -->
</footer>

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="{!! PageBuilder::js('bootstrap.min') !!}"></script>
@yield('scripts')

{!! PageBuilder::block('footer_html', array('source' => true)) !!}

</body>
</html>
