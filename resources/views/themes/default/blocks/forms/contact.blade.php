<h3>Contact Form:</h3>

<div class="form-group {!! FormMessage::get_class('email') !!}">
    {!! Form::text('email', Request::get('email'), array('class' => 'form-control', 'placeholder' => 'Enter your email')) !!}
    <span class="help-block">{!! FormMessage::get_message('email') !!}</span>
</div>

<div class="form-group {!! FormMessage::get_class('name') !!}">
    {!! Form::text('name', Request::get('name'), array('class' => 'form-control', 'placeholder' => 'Enter your Name')) !!}
    <span class="help-block">{!! FormMessage::get_message('name') !!}</span>
</div>

<div class="form-group {!! FormMessage::get_class('message') !!}">
    {!! Form::textarea('message', Request::get('message'),  array('rows' => 3, 'class' => 'form-control', 'placeholder' => 'Your Message ...')) !!}
    <span class="help-block">{!! FormMessage::get_message('message') !!}</span>
</div>

@if ($form_data->captcha)
<div class="form-group {!! FormMessage::get_class('captcha_code') !!}">
    <div class="clearfix"></div>
    <div class="pull-left">
        <img id="captcha" src="{!! URL::to('packages/webfeet/cms/securimage/securimage_show.php') !!}" alt="CAPTCHA Image"  />
    </div>
    <div class="pull-left" style="padding-left: 20px">
        <a href="#" onclick="document.getElementById('captcha').src = '{!! URL::to('packages/webfeet/cms/securimage/securimage_show.php') !!}?' + Math.random(); return false">[ Refresh Captcha ]</a>
        <object type="application/x-shockwave-flash" data="{!! URL::to('packages/webfeet/cms/securimage/securimage_play.swf') !!}?audio_file={!! URL::to('/packages/webfeet/cms/securimage/securimage_play.php') !!}" width="19" height="19">
            <param name="movie" value="{!! URL::to('packages/webfeet/cms/securimage/securimage_play.swf') !!}?audio_file={!! URL::to('/packages/webfeet/cms/securimage/securimage_play.php') !!}&amp;bgColor1=#fff&amp;bgColor2=#fff&amp;iconColor=#777&amp;borderWidth=1&amp;borderColor=#000" />
        </object>
        <p><input id="captcha_code" class="form-control" type="text" name="captcha_code" size="10" maxlength="6" style="width:100px" /> <span class="help-block">{!! FormMessage::get_message('captcha_code') !!}</span></p>
    </div>
</div>
@endif

<div class="control-group">
    <div class="controls">
        {!! Form::submit('Submit', array('class' => 'btn btn-default')) !!}
    </div>
</div>