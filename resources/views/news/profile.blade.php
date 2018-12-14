@extends('layouts.front')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        <h1>プロフィール一覧</h1>
        <div class="row">
            <div class="profiles col-md-8 mx-auto mt-3">
                @foreach($profiles as $profile)
                    <ul>
                      <li>お名前：{{ $profile->name }}</li>
                      <li>性別：{{ $profile->gender }}</li>
                      <li>趣味：{{ $profile->hobby }}</li>
                      <li>自己紹介：{{ $profile->introduction }}</li>
                    </ul>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
@endsection
