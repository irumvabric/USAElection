<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidate Home</title>
    <style>
          body {
            font-family: Arial, sans-serif;
        }
        h1{
            text-align: center;
        }
        table {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <h1>Candidate Home</h1>
    @if (count($candidates) > 0)
    <table>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Party</th>
                <th>State</th>
                <th>Recorded</th>
                <th>Updated</th>
                <th>Action</th>
            </tr>
            @foreach($candidates as $candidate)
                <tr>
                    <td>{{ $candidate->id }}</td>
                    <td>{{ $candidate->name_candidate }}</td>
                    <td>{{ $candidate->gender }}</td>
                    <td>{{ $candidate->party->name }}</td>
                    <td>{{ $candidate->state->name }}</td>
                    <td>{{ $candidate->created_at }}</td>
                    <td>{{ $candidate->updated_at }}</td>
                    <td>
                        <a href="/edcandidate/{{$candidate->id}}">Edit</a>
                        <a
                            href="/delcandidate/{{$candidate->id}}"
                            onclick="return confirm('Are you sure you want to delete candidate?')"
                        >Delete
                        </a>
                    </td>
                </tr>
    @endforeach
    </table>
    @endif
</body>
</html>
