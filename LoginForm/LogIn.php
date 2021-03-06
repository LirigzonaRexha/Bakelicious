<!DOCTYPE html>
<html>
  <head>
    <title>Log in</title>
    <link rel="stylesheet" type="text/css" href="../CSS-Files/Homepage.css" >
    <link rel="stylesheet" type="text/css" href="Login.css" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Raleway:wght@500&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap"
      rel="stylesheet"
    />

    <script src="script.js"></script>
  </head>

  <body>
    <?php setcookie('logedInUser', null, 0, '/')?>
    <div id="navbar">
      <a href="../index.php" id="button-form">Home</a>
      <a href="../HTML-Files/Aboutus.php" id="button-form1">About us</a>
      <a href="../HTML-Files/contact.php" id="button-form1">Contact</a>
    </div>
    <div class="container">
      <div class="pannel">
        <div class="centered">
          <h1 class="header">Welcome</h1>
        </div>
        <div class="tab-wrapper">
          <h3 class="tab" onclick="changeTab('login')">Log in</h3>
          <h3 class="tab" onclick="changeTab('sign-up')">Sign up</h3>
        </div>
        <div id="login">
          <div class="login-container">
            <form name="loginForm" action="logindata.php" method="POST">
              <div class="row">
                <div class="row" style="padding: 0 20%">
                  <input
                    type="text"
                    name="username"
                    placeholder="Username"
                  />
                  <input
                    type="password"
                    name="password"
                    placeholder="Password"
                  />
                  <div id="error-message"></div>
                  <button type="submit">Login</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div id="sign-up">
          
          <form 
            name="signupForm"
            action="insert.php"
            onsubmit="return validateForm()"
            method="POST"
          >
            <div class="sign-up-wrapper">
              <label for="name">
                <input type="text" name="name" placeholder="Name" required/>
              </label>
              <label for="username">
                <input type="text" name="username" placeholder="Username" required/>
              </label>
              <label>
                <input type="text" name="email" placeholder="Email" required
              /></label>
              <label>
                <input type="password" name="password" placeholder="Password" required/>
              </label>
              <div class="checkbox-input">
                <label>
                  <input type="checkbox" name="Terms and Condition" />
                  <p>Terms and Condition</p>
                </label>
                <div class="role">
                <label for="browser">Choose your role from the list:</label>
                <input list="browsers" name="browser" id="browser" required/>
                <datalist id="browsers">
                  <option value="Ambasador" >
                  <option value="Donator" >
                </datalist>
               
                <div class="checkbox">
                </div>
              </div>
              </div>
              <div class="sign-up-button-row">
                <button type="submit">Sign up</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
