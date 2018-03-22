@extends ('layouts.master')

@section ('content')
<div class="col-sm-8 blog-main">
	<h1>Publish a Post</h1>

	<hr>

	<form method="POST" action="/posts">
		{{ csrf_field() }}
		<div class="form-group">
		@foreach ($tags as $tag)
				<span class="checkbox">{{ $tag->name }}</span>
		@endforeach
		</div>
		<div class="form-group">
			<label for="tags">Tags:</label>
			<input type="text" class="form-control" id="tags" name="tags">
		</div>
		<hr>

	  <div class="form-group">
	    <label for="title">Title:</label>
	    <input type="text" class="form-control" id="title" name="title">
	  </div>

	  <div class="form-group">
	    <label for="body">Body</label>
	    <textarea class="form-control" id="body" name="body"></textarea>
	  </div>

	  <div class="form-group">
	  	<button type="submit" class="btn btn-primary">Publish</button>
	  </div>

	  @include ('layouts.errors')

	</form>

	<script>
	$('.checkbox').on('click', function()
	{
	    $val = $('#tags').val() + ' ' + $(this).text();
	    $('#tags').val($val);
	});
	</script>

</div>
@endsection