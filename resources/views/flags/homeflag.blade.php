<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flag Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #ddd;
        }

        th, td {
            text-align: left;
            padding: 8px;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {  
            background-color: #ddd;
        }

        h1 {
            text-align: center;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Flags List</h1>
    @if ($flags->count() > 0)
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>                       
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($flags as $flag)
                <tr>
                    <td>{{ $flag->id }}</td>
                    <td><img src="data:image/png;base64, {{ base64_encode($flag->image) }}" alt="Flag Image"></td>
                    <td>{{ $flag->created_at }}</td>
                    <td>{{ $flag->updated_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No flags found.</p>
    @endif
</body>
</html>
