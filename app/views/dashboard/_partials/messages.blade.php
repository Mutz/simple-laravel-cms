@if ($errors->any()) 
	<div class="alert alert-danger">
		<ul>
			{{ implode('', $errors->all('<li>:message</li>')) }}
		</ul>
	</div>
@endif
@if (isset($messages)) 
	<div class="alert alert-danger">
		<ul>
			{{ implode('', $messages->all('<li>:message</li>')) }}
		</ul>
	</div>
@endif