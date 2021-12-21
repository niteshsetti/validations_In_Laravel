<html>
    <head>
    <link rel="stylesheet"  href="css/style.css" />
    </head>
    <body>
        <div class="login">
            <div class="login-triangle"></div>

            <h2 class="login-header">Register Here</h2>

            <form class="login-container" method="POST" action="register">
                @csrf
              <p><input type="email" name="email" placeholder="Email"></p>
              <h4 id="error">@error('email')
                    {{$message}}
              @enderror</h4>
              <p><input type="password" name="password" placeholder="Password"></p>
              <h4 id="error">@error('password')
                {{$message}}
               @enderror</h4>
              <p><input type="submit" value="Register"></p>
              <div id="alert">
                {{ session('status') }}
             </div>
              <h2 class="login-footer"><a href="/login">Login-Here</a></h2>
            </form>
          </div>
    </body>
</html>
