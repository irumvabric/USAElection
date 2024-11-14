<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elector Home</title>
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
    <h1>Electors List</h1>
    @if ($electors->count() > 0)
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name_elector</th>
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
                @foreach ($electors as $elector)
                <tr>
                    <td>{{ $elector->id }}</td>
                    <td>{{ $elector->name_elector }}</td>
                    <td>{{ $elector->id_party }}</td>
                    <td>{{ $elector->id_state }}</td>
                    <td>{{ $elector->gender }}</td>
                    <td>{{ $elector->state->name }}</td>
                    <td>{{ $elector->party->name_party }}</td>
                    <td>{{ $elector->created_at }}</td>
                    <td>{{ $elector->updated_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No elector found.</p>
    @endif
</body>
</html>
