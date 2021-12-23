<html>
    <head>
    <link rel="stylesheet"  href="css/style.css" />
    </head>
    <body>
        <div class="login">
            <div class="login-triangle"></div>

            <h2 class="login-header">Security Question</h2>

            <form class="login-container" method="POST" action="agecheck">
                @csrf
              <p><input type="text" name="age" placeholder="Enter Your Age"></p>
              <p><input type="submit" value="check"></p>
              <div id="alert">
                {{ session('status') }}
             </div>
            </form>
          </div>
    </body>
</html>
