@extends('layouts.admin')
@section('body_right')

                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>STT</th>
                                <th>Email</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $index)
                            <tr class="odd gradeX" align="center">
                                <td>{!! $index->id + 1 !!}</td>
                                <td>{!! $index->email !!}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm_delete('Bạn chắc chắn xóa !')" href="{!! route('admin.customer.getDeleteEmail', $index->id) !!}"> Delete</a></td> 
                            </tr>
                        @endforeach()
                        </tbody>
                    </table>
@endsection