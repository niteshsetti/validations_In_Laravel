<html>
    <head>
    <link rel="stylesheet"  href="css/style.css" />
    </head>
    <body>
        <div class="login">
            <div class="login-triangle"></div>

            <h2 class="login-header">Log in</h2>

            <form class="login-container" method="POST" action="dashboard">
                @csrf
              <p><input type="email" name="email" placeholder="Email"></p>
              <h4 id="error">@error('email')
                {{$message}}
               @enderror</h4>
              <p><input type="password" name="password" placeholder="Password"></p>
              <h4 id="error">@error('password')
                {{$message}}
               @enderror</h4>
              <p><input type="submit" value="Log in"></p>
              <div id="alert">
                {{ session('status') }}
             </div>
              <h2 class="login-footer"><a href="/register">Register Here</a></h2>
            </form>
          </div>
    </body>
</html>
