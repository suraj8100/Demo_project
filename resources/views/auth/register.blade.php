<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Page</title>

    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body>

    <div class="card card-info col-md-6 col-sm-10">
        <div class="card-header">
            <h3 class="card-title">Horizontal Form</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" action="/user_signup" method="POST">  
            @csrf
            <div class="card-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" onkeyup="pass()"  class="form-control" name="password" id="password" required placeholder="Password">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                        <div class="form-check">
                            <p id="validation_p"></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer" style="display;">
                <button type="submit"  id="mybutton" onclick="validateData()" class="btn btn-info">Sign in</button>
            </div>
            <!-- /.card-footer -->
        </form>
    </div>

</body>
<script>
  
    function validateData(){
        let name=document.getElementById('name').value;
        let email=document.getElementById('email').value
        let password=document.getElementById('password').value  
        document.getElementById('validation_p').innerHTML=""
        if (name == "" || email== ""|| password== "") {
            document.getElementById('validation_p').innerHTML='all fields must be required'
            return false
        }
        

        return true;

    }

    function pass()
    {   let password=document.getElementById('password').value
    document.getElementById('validation_p').innerHTML=""
        if (password.length<8) {
            document.getElementById('validation_p').innerHTML+="Password must be at least 8 characters long";
            document.getElementById('mybutton').disabled=true
        }
        else
        {
            document.getElementById('mybutton').disabled=false
        }
    }
</script>

</html>
