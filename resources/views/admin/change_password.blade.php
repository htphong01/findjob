@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h4 class="text-success" style="font-size: 16px"> {{ session('success') }}</h4>
                <div class="changeNumber-item">
                    <form action="{{ URL::to('admin/change-password-confirm') }}" method="POST">
                        {{ csrf_field() }}
                        <div>
                            Nhập mật khẩu cũ:
                        </div>
                        <div>
                            <input type="password" name="oldPassword" style="width: 100%; margin: 12px 0">
                        </div>
                        <div class="changeNumber-new">
                            Nhập mật khẩu mới:
                        </div>
                        <div>
                            <input type="password" name="newPassword" id="newPassword" style="width: 100%; margin: 12px 0">
                        </div>
                        <div class="changeNumber-new">
                            Nhập lại mật khẩu mới:
                        </div>
                        <div>
                            <input type="password" name="re-newPassword" id="re-newPassword"  class="changeNumber-input" style="width: 100%; margin: 12px 0">
                        </div>

                        <button class="btn btn-success changeNumber-btn" id="cpw-btn" type="submit">Lưu</button>

                        <script>
                            $(".cpw-error").hide();
                            $('#re-newPassword').on('keyup', function() {
                                if($("#newPassword").val() == $(this).val()) {
                                    $(".cpw-error").hide();
                                    $("#cpw-btn").prop('disabled', false);
                                } else {
                                    $(".cpw-error").show();
                                    $("#cpw-btn").prop('disabled', true);
                                }
                            })
                        </script>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection