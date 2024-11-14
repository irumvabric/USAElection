<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | State</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f9;
            padding: 20px;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            color: #333;
        }

        table {
            width: 100%;
            max-width: 1000px;
            margin: 0 auto;
            border-collapse: collapse;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
        }

        th,
        td {
            padding: 12px 15px;
            text-align: left;
        }

        th {
            background-color: #007acc;
            color: #ffffff;
            font-weight: 600;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        th,
        td {
            border-bottom: 1px solid #e0e0e0;
        }

        h1 {
            text-align: center;
            font-size: 1.8em;
            color: #007acc;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <h1>State Information</h1>
    @if ($states->count() > 0)
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>PIB</th>
                    <th>Population</th>
                    <th>Area</th>
                    <th>ID Flag</th>
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
