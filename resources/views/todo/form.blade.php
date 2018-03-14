<div class="form-group {{ $errors->has('titles') ? 'has-error' : ''}}">
    <label for="titles" class="col-md-4 control-label">{{ 'Titles' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="titles" type="text" id="titles" value="{{ $todo->titles or ''}}" >
        {!! $errors->first('titles', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="col-md-4 control-label">{{ 'Description' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="description" type="textarea" id="description" >{{ $todo->description or ''}}</textarea>
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
