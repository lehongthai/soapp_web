@extends('layouts.admin')
@section('body_right')

                    <table class="table table-striped table-bordered table-hover" id="dataTables-example-tags">
                        <thead>
                            <tr align="center">
                                <th>STT</th>
                                <th>Mã Đơn Hàng</th>
                                <th>Tên</th>
                                <th>SĐT</th>
                                <th>Email</th>
                                <th>Tiền</th>
                                <th>Trạng Thái</th>
                                <th>Xem</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($listCustomer as $index => $customer)
                            <tr class="odd gradeX" align="center">
                                <td>{!! $index + 1 !!}</td>
                                <td>{!! $customer->code !!}</td>
                                <td>{!! $customer->fullname .' '. $customer->lastname !!}</td>
                                <td>{!! $customer->phone !!}</td>
                                <td>{!! $customer->email !!}</td>
                                <td>{!! number_format($customer->price) !!}</td>
                                @if($customer->active != '0' && $customer->active != '1')
                                <td>Chưa kích hoạt</td>
                                @elseif($customer->active != '0' && $customer->active == '1')
                                <td class="center"><i class="glyphicon glyphicon-ok-circle"></i><a onclick="return confirm_delete('Bạn chắc chắn kích hoạt !')" href="{!! route('admin.customer.getActive', $customer->id) !!}">Thanh Toán</a></td>
                                @elseif($customer->active == '0')
                                <td>Đã Thanh Toán</td>
                                @else
                                <td>Không Xác Định</td>
                                @endif 

                                @if($customer->viewed == 1)
                                <td>Xem</td>
                                @elseif($customer->viewed == 0)
                                <td><a href="{!! route('admin.customer.getView', $customer->id) !!}">Chưa</a></td>
                                @endif
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm_delete('Bạn chắc chắn xóa !')" href="{!! URL::route('admin.customer.getDelete', $customer->id) !!}"> Delete</a></td>
                            </tr>
                        @endforeach()
                        </tbody>
                    </table>
@endsection