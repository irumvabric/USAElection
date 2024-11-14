<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>State Home</title>
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
    <h1>States List</h1>
    @if ($states->count() > 0)
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>PIB</th>
                    <th>Population</th>
                    <th>Area</th>
                    <th>ID FLAG</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($states as $state)
                <tr>
                    <td>{{ $state->id }}</td>
                    <td>{{ $state->name }}</td>
                    <td>{{ $state->pib }}</td>
                    <td>{{ $state->population }}</td>
                    <td>{{ $state->area }}</td>
                    <td>{{ $state->id_flag }}</td>
                    <td>{{ $state->created_at }}</td>
                    <td>{{ $state->updated_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No states found.</p>
    @endif
</body>
</html>
