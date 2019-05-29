<div class="col-md-9">

	{{ $title }}
	<p></p>
	{!! $script !!}
	@{{ var  }}
<p></p>
	{{ isset($bvar) ? : $title}}
	<p></p>
	{{ $data['one'] }}
	<p></p>
	@if(count($data) < 3)
		In Masse < 3
	@elseif(count($data) > 10)
		More >3
	@else
		 x
	@endif
	<p></p>
	<ul>
		@for($i=0;$i < count($dataI); $i++)
			<li>
				{{ $dataI[$i] }}
			</li>
		@endfor
	</ul>

	<ul>
		@foreach($data as $k => $v)

			<li>
				{{$k.'=>'.$v}}
			</li>

		@endforeach
	</ul>

	<ul>
		@forelse($data as $k=>$v)	
		<li>
			{{ $k.'=>'.$v }}
		</li>
		@empty
			<p>No Items</p>
		@endforelse
	</ul>

	@each('default.list',$dataI, 'value')
	<p></p>
	@myDir('Hello')
      	<div class="row">
      		
      		 <div class="col-md-6">
	        <h2>Heading1</h2>
	        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
	        <p>
	        	Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	        </p>
	        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
	      </div>

	      <div class="col-md-6">
	        <h2>Heading1</h2>
	        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
	        <p>
	        	Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	        </p>
	        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
	      </div>

      	</div>
      	<div class="row">
      		<div class="col-md-12">
      			<h2>Heading1</h2>
	        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
	        <p>
	        	Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	        </p>
	        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      		</div>
      	</div>

      </div>