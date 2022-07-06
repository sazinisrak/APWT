
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
    </head>

    <body>
    <div class = "container">
    <br><br>
    <h1>Login Form</h1>
    <form action= "{{route('login')}}" class "form-group" method = "post">
        {{csrf_field()}}
        <div class ="col-md-4 form-group">
            <span>User Name</span>
            <input type="text" name="userName" value = "{{old('userName')}}" class = "form-control"><br>
            @error('userName')
                <span class = "text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class ="col-md-4 form-group">
            <span>Password</span>
            <input type="password" name="password" value = "{{old('password')}}" class = "form-control"><br>
            @error('password')
                <span class = "text-danger">{{$message}}</span>
            @enderror
        </div>
        <input type = "submit" class="btn btn-primary" value = "Login">
        Don't have an account? <a href="{{route('registration')}}">sign-up</a>
    </form>
    </div>
    </body>
</html>
