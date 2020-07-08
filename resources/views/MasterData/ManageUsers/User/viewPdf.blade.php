<!DOCTYPE html>
<html>
	<head>
		<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
		<style type="text/css">
			table tr td,
			table tr th{
				font-size: 9pt;
			}
		</style>
		<center>
			<h5>{{ $title }}</h5>
		</center>
	
		<table class='table table-bordered'>
			<thead>
				<tr>
					<th class="text-center" width="5%">No</th>
					<th class="text-center">Nama</th>
					<th class="text-center">Email</th>
					<th class="text-center">Status</th>
					<th class="text-center" width="28%">Create Date</th>
				</tr>
			</thead>
			<tbody>
				@foreach($records as $no => $users)
					@php $status = [0 => 'Inactive', 1 => 'Active', 99 => 'Soft Delete'] @endphp
					<tr>
						<td class="text-center">{{ $no+1 }}</td>
						<td>{{ $users->name }}</td>
						<td>{{ $users->email }}</td>
						<td class="text-center">{{ $status[$users->status] }}</td>
						<td class="text-center">{{ date('D, d F Y H:i:s', strtotime($users->created_at)) }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	
	</body>
</html>