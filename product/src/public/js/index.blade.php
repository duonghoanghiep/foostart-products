<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <link href="{{asset('foostart/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>    
        <link href="{{asset('foostart/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>   
        <link href="{{asset('foostart/css/nivo-slider.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('foostart/css/type-10.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('foostart/css/front.css')}}" rel="stylesheet" type="text/css"/>

       
        <script src="{{asset('//cloud.tinymce.com/stable/tinymce.min.js')}}"></script>
        <script src="{{asset('foostart/js/jquery-1.11.0.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('foostart/js/jquery-migrate.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('foostart/js/jquery.nivo.slider.js')}}" type="text/javascript"></script>
        <script src="{{asset('foostart/js/front.js')}}" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-10">
            <div class="row">
                <div class="heading">
                    <!--TITLE-->
                    <div class="p-title">
                        <h2>Thức ăn gia súc gia cầm</h2>
                    </div>
                    <!--END TITLE-->
                </div>
            </div>
            <div class="row">
                <div class="container">
                    <div class="row"> 
                        <div class="the-content">
                            <div class="table-hiring">
                                <table>
                                    <thead>
                                        <!--TITLE TABLE-->
                                        <tr>
                                            <th>STT</th>
                                            <th>Ngày đăng</th>
                                            <th>Vị trí</th>
                                            <th style="width: 40%;">Mô tả</th>
                                            <th>Địa điểm</th>
                                            <th>Ngày hết hạn</th>
                                            <th style="width:160px;"></th>
                                        </tr>
                                        <!--END TITLE TABLE-->
                                    </thead>
                                    <tbody>
                                        <!--CONTENT TABLE-->
                                        <tr>
                                            <td>1</td>
                                            <td>27/09/2016 </td>
                                            <td class="name">TỔ TRƯỞNG CƠ ĐIỆN</td>
                                            <td>Kinh nghiệm trên 3 năm bảo trì hệ thống trong ngành thức ăn chăn nuôi. Tốt nghiệp Đại Học ngành Cơ khí chế tạo, điện công nghiệp. Biết lên kế hoạch và thực hiện công tác bảo trì ngăn ngừa sự cố, có kinh nghiệm làm việc trong dây chuyền máy móc chính xác. Năng động, nhiệt tình, chịu áp lực, khéo léo, chịu tiếp nhận cách làm mới, sẵn sàng làm việc ngoài giờ khi có yêu cầu. Tôn trọng cấp trên, các đồng nghiệp khác trong và ngoài tổ.
                                                Chi tiết trao đổi khi phỏng vấn. LH: Mr Thức - DĐ: 091 802 0518 - Email: thuc.fau@gmail.com</td>
                                            <td>78/79, Huỳnh Mẫn Đạt, Bình Hóa, Hóa An, Biên Hòa, Đồng Nai.</td>
                                            <td>31/10/2016 </td>
                                            <td>
                                                <a class="link-button" href="/to-truong-co-dien.html">Đơn xin ứng tuyển</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>20/09/2016 </td>
                                            <td class="name">KẾ TOÁN BÁN HÀNG</td>
                                            <td>Tuổi từ 23 - 27. Tốt nghiệp Cao Đẳng trở lên chuyên ngành kế toán, dịch vụ tư vấn, chăm sóc khách hàng… Sử dụng vi tính thành thạo. Giọng nói thuyết phục, vui vẻ, giao tiếp thân thiện với mọi người.
                                                Chi tiết trao đổi khi phỏng vấn. LH: Mr Thức - DĐ: 091 802 0518 - Email: thuc.fau@gmail.com</td>
                                            <td>78/79, Huỳnh Mẫn Đạt, Bình Hóa, Hóa An, Biên Hòa, Đồng Nai.</td>
                                            <td>31/10/2016 </td>
                                            <td>
                                                <a class="link-button" href="/ke-toa-n-ba-n-ha-ng.html">Đơn xin ứng tuyển</a>
                                            </td>
                                        </tr>
                                          
                                        </tr>
                                        <!--END CONTENT TABLE-->
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!DOCTYPE html>

    <h2>Modal Example</h2>

    <!-- Trigger/Open The Modal -->
    <button id="myBtn">Open Modal</button>

    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>Some text in the Modal..</p>
            {!! Form::open([ 'method' => 'post',
            'route' => 'worker',
            'id' => @$work->work_id,
            'files'=>true])!!}
            <!-- SAMPLE NAME TEXT-->
            @include('work::work.elements.text', ['name' => 'work_name',
            'description' => 'work_description',
            'address' => 'work_address', 
            'situation' => 'work_situation',
            'postday' => 'work_postday',
            'expirationday' => 'work_expirationday' ])
            <!-- /END SAMPLE NAME TEXT -->
            {!! Form::hidden('id',@$work->work_id) !!}
            <!-- SAVE BUTTON -->
            {!! Form::submit('Save', array("class"=>"btn btn-info pull-right ")) !!}
            <!-- /SAVE BUTTON -->
            {!! Form::close()!!}
        </div>

    </div>
    <script src="{{asset('foostart/js/tinymce.js')}}" type="text/javascript"></script>
</body>
</html>