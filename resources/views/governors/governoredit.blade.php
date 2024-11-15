<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Governor Home</title>
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
    <h1>Create or edit governor page</h1>
    <form action="/edgovernor/{{$governor->id}}" method="post">
        @csrf
        @method("PUT")

        <label for="nom_senateur">Full name:</label>
        <input type="text" id="name_governor" name="name_governor" required value="{{$governor->name_governor}}">
        @error('name_governor')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="genre_senateur">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
        @error('gender')
         <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="id_etat">State:</label>
        <input type="number" id="id_etat" name="id_etat" required>

        <label for="id_parti">Party:</label>
        <input type="number" id="id_parti" name="id_parti" required>

        <button type="submit">Submit</button>
        <button type="reset">Cancel</button>

    </form>
</body>
</html>
