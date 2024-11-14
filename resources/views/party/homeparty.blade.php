<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Party Home</title>
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
    <h1>Parties List</h1>
    @if ($parties->count() > 0)
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name_party</th>                       
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($parties as $party)
                <tr>
                    <td>{{ $party->id }}</td>
                    <td>{{ $party->name_party }}</td>
                    <td>{{ $party->created_at }}</td>
                    <td>{{ $party->updated_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No parties found.</p>
    @endif
</body>
</html>
