@extends('layouts.appmaster') 
@section('title', 'IoT Weather Error Page') 

@section('content')
<div class="flex-center position-ref full-height">
	<!-- Page Content -->
	<div class="content">
		<!--  Title and Menu Links -->
		<div class="title m-b-md">Report Error</div>
		<div class="links">
			<a href="weather">Run Another Report</a>
		</div>
		<br>
		<!-- Display Error -->
		Error Status Code: $error
	</div>
</div>
@endsection
