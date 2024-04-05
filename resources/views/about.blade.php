@extends('layout')
@section('title')
    เกี่ยวกับเรา
@endsection
@section('content')
    <h2>เกี่ยวกับเรา</h2>
    <hr>
    <p>ผู้พัฒนาระบบ : {{$name}}</p> {{-- แสดงข้อมูล --}}
    <p>วันเริ่มต้นโปรเจกต์ : {{$date}}</p>
    {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint neque vero at atque nihil fugiat necessitatibus enim, asperiores aut ex odio tempore doloribus fuga ad expedita quia! Magni, maiores voluptatibus?</p> --}}
    {{-- <a href="/">หน้าแรก</a>
    <a href="/blog">บทความทั้งหมด</a> --}}
@endsection
