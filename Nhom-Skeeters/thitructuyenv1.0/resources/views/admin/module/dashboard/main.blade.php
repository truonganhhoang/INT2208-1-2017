@extends('admin.master')
@section('title', 'Trang chính')
@section('content')
<table class="function_table" style="margin: 0px auto;">
    <tr>
        <td class="function_item user_add"><a href="{!! route('getUserAdd') !!}">Thêm user</a></td>
        <td class="function_item user_list"><a href="{!! route('getUserList') !!}">Quản lý user</a></td>
        <td rowspan="3" class="statistics_panel">
            <h3>Thống kê:</h3>
            <ul>
                <li>Tổng số user: {!! $totalUsers !!}</li>
                <li>Tổng số danh mục:</li>
                <li>Tổng số tin:</li>
            </ul>
        </td>
    </tr>
    <tr>
        <td class="function_item cate_add"><a href="">Thêm môn học</a></td>
        <td class="function_item cate_list"><a href="">Quản lý môn học</a></td>
    </tr>
    <tr>
        <td class="function_item news_add"><a href="">Thêm đề thi</a></td>
        <td class="function_item news_list"><a href="">Quản lý đề thi</a></td>
    </tr>
</table>
@endsection