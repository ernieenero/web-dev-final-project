@extends('templates.base')
@section('cssLinks')
<link rel="stylesheet" href="{{ asset('css/subject-list.css') }}">
@endsection
@section('content')
<div id="subject-list" class="content">
    <a class="user__profile__button" href="{{route('profile', ['id'=>Auth::user()->user_id])}}"><img class="profile" src="{{asset('images/user.png') }}" alt=""><span><h3 style="color: black;">{{Auth::user()->name}}</h3></span></a>
    
    <h1>Task Master</h1>
    <form class="subject__form" method="post" action="">
            <input class="subject__input" type="text" name='subject_name' placeholder="Enter Subject Name">
            <input class="subject__input"type="text" name='subject_detail' placeholder="Enter Subject Description">
            <input class="subject__input"type="submit" name='submit' value="Add Subject">
        </form>

    <div class="subject__list__content">
    <div class="subject__content">
            <div class="card__content">
                <h2 class="subject__name">Subject Name</h2>
                <h3 class="subject__desc">Subject Description</h3>
                <a class="edit__subject" href=""><img src="{{asset('images/pen.png')}}" alt=""></a>
                <a class="delete__subject" href=""><img src="{{asset('images/trash.png')}}" alt=""></a>
            </div>
        </div>
        <div class="subject__content">
            <div class="card__content">
                <h2 class="subject__name">Subject Name</h2>
                <h3 class="subject__desc">Subject Description</h3>
                <a class="edit__subject" href=""><img src="{{asset('images/pen.png')}}" alt=""></a>
                <a class="delete__subject" href=""><img src="{{asset('images/trash.png')}}" alt=""></a>
            </div>
        </div>
        <div class="subject__content">
            <div class="card__content">
                <h2 class="subject__name">Subject Name</h2>
                <h3 class="subject__desc">Subject Description</h3>
                <a class="edit__subject" href=""><img src="{{asset('images/pen.png')}}" alt=""></a>
                <a class="delete__subject" href=""><img src="{{asset('images/trash.png')}}" alt=""></a>
            </div>
        </div>
    </div>
</div>
@endsection