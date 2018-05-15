@include('design.header')
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<form class="form-horizontal" method="POST" action="{{ url('/edit', array($articles->id)) }}">
				 <br>
				 {{ csrf_field() }}
				  <fieldset>
				    <legend>Note</legend>
				    @if(count($errors) > 0 )
				    	@foreach($errors->all() as $error)
				    		<div class="alert alert-danger">
				    			{{ $error }}
				    		</div>
				    	@endforeach
				    @endif
				    <div class="form-group">
				      <label for="inputEmail" class="col-lg-2 control-label">Title</label>
				      <div class="col-lg-10">
				        <input type="text" name="title" class="form-control" id="inputEmail" value="<?php echo $articles->title; ?>" placeholder="Title">
				      </div>
				    </div>
				    <div class="form-group">
				      <label for="inputPassword" class="col-lg-2 control-label">Description</label>
				      <div class="col-lg-10">

				        <textarea name="description" class="form-control" placeholder="Description"><?php echo $articles->description; ?></textarea>
				    <br>     
				    <div class="form-group">
				      <div class="col-lg-10 col-lg-offset-2">
				      	<button type="submit" class="btn btn-primary">Submit</button>
				        <a href="{{ url('/') }}" class="btn btn-danger">Back</a>  
				      </div>
				    </div>
				  </fieldset>
				</form>
			</div>
		</div>
	</div>
@include('design.footer')