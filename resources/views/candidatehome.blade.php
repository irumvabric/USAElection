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
        form {
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

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Create candidate page</h1>
    <form action="/postcandidate" method="post">
        @csrf

        <label for="nom_senateur">Full name:</label>
        <input type="text" id="name_candidate" name="name_candidate" required>
        @error('name_candidate')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
        @error('gender')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="id_etat">State:</label>
        <select id="state_id" name="state_id">
            @foreach ($states as $state)
                <option value="{{ $state->id }}">{{ $state->name }}</option>
            @endforeach
           </select>
           @error('state_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        <label for="id_parti">Party:</label>
        <select id="party_id" name="party_id">
            @foreach ($parties as $party)
                <option value="{{ $party->id }}">{{ $party->name_party}}</option>
            @endforeach
        </select>
        @error('party_id')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button type="submit">Submit</button>
        <button type="reset">Cancel</button>

    </form>
</body>
</html>
