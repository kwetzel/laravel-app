@if($errors->count())
<div class="alert alert-danger" role="alert">
	@if($errors->first('title'))
    <p><strong>{{ "* " . $errors->first('title') }}</strong></p>
    @endif
    @if($errors->first('body'))
    <p><strong>{{ "* " . $errors->first('body') }}</strong></p>
    @endif
</div>
@endif