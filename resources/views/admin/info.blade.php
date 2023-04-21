@extends('layout')
@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Responsive Hover Table</h3>

          <div class="card-tools">
            <form action="" method="GET">
                
                <div class="input-group input-group-sm" style="width: 150px;">
    
                  <input type="text" name="search"  class="form-control float-right" placeholder="Search" value="{{$search}}">
    
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
            </form>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Role</th>
                <th>Contact</th>
                <th>Email</th>
                <th>Hobbies</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->emp_name}}</td>
                    <td>{{$item->role}}</td>
                    <td>{{$item->contect}}</td>
                    <td>{{$item->email}}</td>
                    <td>
                       <a href="/view_hobbie/{{$item->id}}">View</a>
                    </td>
                </tr>
                  
                @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
@endsection