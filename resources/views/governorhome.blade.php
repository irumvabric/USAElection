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
    <form action="submit_senateur.php" method="post">

        <label for="id_senateur">ID Governor:</label>
        <input type="number" id="id_senateur" name="id_senateur" required>

        <label for="nom_senateur">Full name:</label>
        <input type="text" id="nom_senateur" name="nom_senateur" required>

        <label for="genre_senateur">Gender:</label>
        <select id="genre_senateur" name="genre_senateur" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>

        <label for="id_etat">State:</label>
        <input type="number" id="id_etat" name="id_etat" required>

        <label for="id_parti">Party:</label>
        <input type="number" id="id_parti" name="id_parti" required>

        <button type="submit">Submit</button>
        <button type="reset">Cancel</button>

    </form>
</body>
</html>
