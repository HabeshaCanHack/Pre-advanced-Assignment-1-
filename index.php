
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HabeshaCanHack</title>
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
    <h1>Welcome to HabeshaCanHack !</h1>
    <div class="container">
      <header>
        <form action="server.php" method="post">
          <fieldset>
            <legend>Registration</legend>
            Name:             <input type="text" name="name" placeholder="name" required> <br> <br>
            Email:            <input type="email" name="email" placeholder="email" required> <br> <br>
            Gender: <input type="radio" name="gender" value="m" required>Male
            <input type="radio" name="gender" value="f" required>Female
            Country: <select name="phone" required>
              <option selected hidden value="">Select phone code</option>
              <option value="Ethiopia">+251</option>
              <option value="USA">+1</option>
              <option value="Eritrea">+291</option>
                      </select>
                      <input type="phone" name="phone" placeholder="phone number" required>
            Password:         <input type="password" name="password" placeholder="password" required> <br> <br>
            <input type="submit" value="submit">
          </fieldset>
        </form>
      </header>
    </div>
    <section>
      <button type="button" name="question-btn" onclick="questionFunction()">click here to see the homework</button>
      <pre id="question"></pre>
    </section>

    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>
