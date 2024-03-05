<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form</title>
  </head>
  <body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>

    <form method="POST" action="/welcome">
        @csrf
    
        <label>First name</label> <br /><br />
        <input type="text" name="name" /><br /><br />
        
        <label for="">Last name</label> <br /><br />
        <input type="text" name="last" /><br /><br />
        
        <label for="">Gender: </label><br /><br />
        <input type="radio" name="gender" value="male" />Male <br />
        <input type="radio" name="gender" value="female" />Female <br />
        
        <label for="">Nationality: </label><br /><br />
        <select name="nationality">
            <option value="Singapure">Singapure</option>
            <option value="Laos">Laos</option>
            <option value="Indonesian" selected>Indonesian</option>
            <option value="Thailand">Thailand</option>
        </select><br /><br />
        
        <label for="">Language Spoken: </label><br /><br />
        <input type="checkbox" name="language[]" value="Bahasa Indonesia" />Bahasa Indonesia <br />
        <input type="checkbox" name="language[]" value="English" />English <br />
        <input type="checkbox" name="language[]" value="Other" />Other <br /><br />
        
        <label for="">Bio:</label><br /><br />
        <textarea name="bio" id="" cols="30" rows="10"></textarea><br />
        
        <button type="submit">Submit</button>
    </form>
    

  </body>
</html>
