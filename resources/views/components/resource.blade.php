<div class="form-group">
  <label for="resource{{ $name }}" class="col-sm-2 control-label">{{ $name }}</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="resource{{ $name }}" placeholder="{{ $placeholder }}">
    <p>{{ $description }}</p>
  </div>
</div>