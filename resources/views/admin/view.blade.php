@extends('layout')
@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <a href="{{redirect()->back()->getTargetUrl()}}" class="btn btn-info">back</a>
        <div class="card-header">          
        </div>
        <!-- /.card-header -->
       
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>Hobbies List</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($array as $item)
                <tr>
                    <td>{{$item}}</td>
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

