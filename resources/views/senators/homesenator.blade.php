<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senator Home</title>
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
    <h1>Senators List</h1>
    @if ($senators->count() > 0)
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name_senator</th>
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
                @foreach ($senators as $senator)
                <tr>
                    <td>{{ $senator->id }}</td>
                    <td>{{ $senator->name_senator }}</td>
                    <td>{{ $senator->id_party }}</td>
                    <td>{{ $senator->id_state }}</td>
                    <td>{{ $senator->gender }}</td>
                    <td>{{ $senator->state->name }}</td>
                    <td>{{ $senator->party->name_party }}</td>
                    <td>{{ $senator->created_at }}</td>
                    <td>{{ $senator->updated_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No senator found.</p>
    @endif
</body>
</html>
