@extends('layouts.app')
@section('title','บทความทั้งหมด')
@section('content')
    @if (count($blogs)>0)
    <h2 class="text text-center">บทความทั้งหมด</h2>
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th scope="col">ชื่อบทความ</th>
                <th scope="col">เนื้อหา</th>
                <th scope="col">สถานะ</th>
                <th scope="col">แก้ไขบทความ</th>
                <th scope="col">ลบบทความ</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $item)
                <tr>
                    <td>{{ $item->title }}</td>
                    <td>{{ Str::limit($item->content,10) }}</td>
                    {{-- <td>{{ $item['title'] }}</td> แสดงข้อมูลarray
                    <td>{{ $item['content'] }}</td> --}}
                    <td>
                        @if ($item->status == true)
                            <a href="{{route('change',$item->id)}}" class="btn btn-success">เผยแพร่</a>
                        @else
                            <a href="{{route('change',$item->id)}}" class="btn btn-secondary">ฉบับร่าง</a>
                        @endif
                    </td>
                    <td>
                        <a href="{{route('edit',$item->id)}}" class="btn btn-warning">แก้ไข</a>
                    </td>
                    <td>
                        <a href="{{route('delete',$item->id)}}"
                            class="btn btn-danger" onclick="return confirm('คุณต้องการลบบทความ {{$item->title}} หรือไม่ ?')">ลบ
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$blogs->links()}}
    @else
        <h2 class="text text-center">ไม่มีบทความในระบบ</h2>
    @endif
@endsection
