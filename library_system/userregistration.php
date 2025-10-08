<!DOCTYPE html>
<html lang="en">
<head>

    <style>
        body{
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            /*height: 1100px;*/
        }

        header{
            width: 100%;
            background-color: #244a32;
            color: white;
            padding: 13px 32px;
            font-weight: bold;
            font-size: 19px;
            position: absolute;
            top: 0;
            left: 0;
        }

        form{
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
        }

        input[type=text], input[type=password], 
        input[type=email], select{
            width: 100%;
            padding: 12px;
            border-radius: 9px;
            border: none;

        }

    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Library System User-Registration  </title>
</head>
<body>
    <header> Library System-User Registration</header>
     <div class="formcontent">
            <form action="" method="post">

                <input type="text" name="lastname" placeholder="Last Name">
                <input type="text" name="firstname" placeholder="First Name">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                
                <label for="" id="roleselection"> Choose Role: </label>
                <select name="roletype" id="">
                    <option value="student"> Student </option>
                    <option value="teacher"> Teacher </option>
                    <option value="librarian"> Librarian </option>
                    <option value="staff"> Staff </option>
                </select>

                <button type="submit"> Create User </button>

            </form>
        </div>

    
</body>
</html>