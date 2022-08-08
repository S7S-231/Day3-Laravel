@extends('layouts.app')

@section('title' , 'Home')

@section('content')

<table style="margin-top: 30px;" class="table table-striped table-hover">
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Body</th>
        <th>Enabled</th>
        <th>Pusblished At</th>
        <th>User ID</th>
        <th>Created At</th>
        <th>Updated At</th>
        
        <th>Actions</th>

    </tr>

    <tr>
     @foreach ($users as $user )
        @if($user['id'] == "0")
    @continue
    @endif
        <td>{{$user['id']}}</td>
        <td><a href="{{ Route('users.show',['id'=>$user['id'] ]) }}">{{$user['title']}}</a></td>
        <td>{{$user['body']}}</td>
        <td>{{$user['enabled']}}</td>
        <td>{{$user['published_at']}}</td>
        <td>{{$user['user_id']}}</td>
        <td>{{$user['created_at']}}</td>
        <td>{{$user['updated_at']}}</td>

        <td><div class="row text-center">
            <div class="col-md-6 "><a href="{{ Route('posts.edit',['id'=>$user['id'] ]) }}" class="btn btn-primary">Edit</a>

                <form method="POST" action="{{ Route('posts.destroy',['id'=>$user['id'] ]) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>

        </div>
    </td>

        </tr>


     @endforeach




  </table>
  <center>
  {{ $users->links() }}
</center>

@endsection

