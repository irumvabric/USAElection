<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Governor Home</title>
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
    <h1>Governor List</h1>
    @if ($governors->count() > 0)
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name_governor</th>
                    <th>ID PARTY</th>
                    <th>ID STATE</th>
                    <th>Gender</th>
                    <th>State Name</th>
                    <th>Party Name</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($governors as $governor)
                <tr>
                    <td>{{ $governor->id }}</td>
                    <td>{{ $governor->name_governor }}</td>
                    <td>{{ $governor->id_party }}</td>
                    <td>{{ $governor->id_state }}</td>
                    <td>{{ $governor->gender }}</td>
                    <td>{{ $governor->state->name }}</td>
                    <td>{{ $governor->party->name_party }}</td>
                    <td>{{ $governor->created_at }}</td>
                    <td>{{ $governor->updated_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No governor found.</p>
    @endif
</body>
</html>
