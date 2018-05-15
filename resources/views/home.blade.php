@include('design.header')
<div class="container">
	<div class="row">
		{{-- display session message --}}
		@if(session('response'))
	    	<div class="col-md-8 alert alert-success">
	    		{{session('response')}}
	    	</div>
	    @endif
		<div class="col-md-6">
			<table class="table table-striped table-hover ">
			  <thead>
			    <tr>
			      <th>ID</th>
			      <th>Title</th>
			      <th>Description</th>
			      <th>Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@if(count($articles) > 0)
			  		@foreach($articles->all() as $article)


			    <tr class="success">
			      <td>{{ $article->id }}</td>
			      <td>{{ $article->title }}</td>
			      <td>{{ $article->description }}</td>
			      <td>
			      	<a href='{{ url("/update/{$article->id}") }}' type="label label-success">Update </a>|
			      	<a href="{{ url("/delete/{$article->id}") }}" type="label label-danger">Delete </a>
			    </tr>
			        @endforeach
			    @endif
			  </tbody>
			</table>
		</div>
	</div>
</div>

@include('design.footer')


