@extends('layouts.appmaster') 
@section('title', 'IoT Weather')

@section('content')
<style>
	th, td {
		padding: 5px;
	}
	
	div.ui-datepicker {
    font-size: 85%;
	}
</style>

<div class="flex-center position-ref full-height">
    <!-- Page Content -->
	<div class="content">
        <!--  Title and Menu Links -->
        <div class="title m-b-md">IoT Weather</div>
		<!-- Report Search Form -->
		<form method="POST" action="doreport">
			<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
			<table style="margin: 0px auto;">
				<tr>
					<td>Report Type:</td>
					<td>
						<select name="report">
							<option value="0" selected>Chart</option>
							<option value="1">Tabular</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>From Date:</td>
					<td><input type="text" id="fromDate" name="fromDate" value="" readonly="1"></td>
				</tr>
				<tr align="center">
					<td colspan="2" style="color:red"><?php echo $errors->first('fromDate')?></td>
				</tr>
				<tr>
					<td>To Date:</td>
					<td><input type="text" id="toDate" name="toDate" value="" readonly="true"></td>
				</tr>
				<tr align="center">
					<td colspan="2" style="color:red"><?php echo $errors->first('toDate')?></td>
				</tr>
				<tr align="center">
					<td colspan="2"><input type="submit" value="Display"></td>
				</tr>
				</tr>
			</table>
		</form>
	</div>
</div>
<script>
	$('#fromDate').datetimepicker({
		dateFormat: 'yy-mm-dd',
		timeFormat: 'HH:mm:ss',
		separator: ' ',
		showTimezone: false
	});
	$('#toDate').datetimepicker({
		dateFormat: 'yy-mm-dd',
		timeFormat: 'HH:mm:ss',
		separator: ' ',
		showTimezone: false
	});
	$('#fromDate').datetimepicker();
	$('#toDate').datetimepicker();
</script>
@endsection

