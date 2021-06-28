@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}  
                        </div>
                    @endif

                   <table class="table table-bordered">
                       <tr><th>ID</th><th>Name</th><th>Email</th></tr>
                       <?php $users= \App\Models\User::all();?>
                       @foreach($users as $user)
                       <tr><td>{{$user->id}}</td><td>{{$user->name}}</td><td>{{$user->email}}</td></tr>
                       @endforeach
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
