@extends('layout')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Emp Page</title>

    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body>

    <div class="card card-info col-md-6 col-sm-10">
        <div class="card-header">
            <h3 class="card-title">Horizontal Form</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" action="/store_info" method="POST">  
            @csrf
            <div class="card-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">role</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="role" id="role" placeholder="role" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Contect No</label>
                    <div class="col-sm-10">
                        <input type="text"  class="form-control" name="contect" id="contect" required placeholder="contect">
                        @error('contect')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="custom-control custom-radio">
                        <div class="form-group">
                            <label>Select Hobbies</label>
                            <br>
                            @foreach ($data as $item)
                            <input type="checkbox"  name="hobbi[]" value="{{$item->hobbie_name}}">{{$item->hobbie_name}}<br>
                            @endforeach
                        </div>
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
            <div class="card-footer" style="display:flex;">
                <button type="submit"  id="mybutton" onclick="validateData()" class="btn btn-info">Submit</button>
                
            </div>
            <!-- /.card-footer -->
        </form>
    </div>

</body>
<script>
  
    function validateData(){
        let name=document.getElementById('name').value;
        let email=document.getElementById('email').value
        
        document.getElementById('validation_p').innerHTML=""
        if (name == "" || email== "") {
            document.getElementById('validation_p').innerHTML='all fields must be required'
            document.getElementById('mybutton').disabled=true;
            return false
        }
        else
        {
            document.getElementById('mybutton').disabled=false;
        }
        

        return true;

    }

</script>

</html>

@endsection