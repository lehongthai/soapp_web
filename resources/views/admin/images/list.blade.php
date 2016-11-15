@extends('layouts.admin')
@section('body_right')
@if($data)
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>Tên</th>
                                <th>Ảnh</th>
                                
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd gradeX" align="center">
                                <td>{!! $data->name !!}</td>
                                <td><img src="{!! $data->image_thumb !!}"></td>
                                
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! URL::route('admin.image.getEdit', $data->id) !!}">Edit</a></td>
                            </tr>
                        </tbody>
                    </table>
@endif()
@endsection