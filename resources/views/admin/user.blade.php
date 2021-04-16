@extends('layouts.admin')

@section('content')
    </br></br>
    <div class="row">
        <div class="col-12">
        <div class="card">
            <div class="card-header">
            <h3 class="card-title"><b>Danh sách người dùng</b></h3>
            </div>
            
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap table-bordered">
                <thead>
                <tr>
                    <th class="text-center" style="padding-left: 12px;">STT</th>
                    <th>Tên người dùng</th>
                    <th class="text-center">Vai trò</th>
                    <th class="text-center">Trạng thái</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($users as $index=>$user)
                        <tr>
                            <td>{{ $index+1 }}</td>
                            <td>{{ $user->name }}</td>
                            <td class="text-center" style="width: 20%;">
                                <form action="{{ URL::to('/admin/change-role/' .$user->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                    <div class="form-group">
                                        <select name="admin_user_role"  class="form-control" onchange="this.form.submit()"> 
                                            <option value="{{ $user->privacy }}">{{ $user->role }}</option>
                                            @foreach ($privacies as $privacy)
                                                @if ($privacy->id == $user->old_role)
                                                <option value="{{ $privacy->id }}">
                                                    {{ $privacy->role }}
                                                </option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </form>
                            </td>
                            <td class="text-center" style="width: 15%;">
                                <label class="switch">
                                    @if ($user->trashed())
                                        <input class="activity-input " type="checkbox">
                                    @else
                                        <input class="activity-input " type="checkbox" checked>
                                    @endif
                                    <span class="slider round {{ $user->id }}" data-userId="{{ $user->id }}"></span>
                                </label>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        </div>
        <div class="col-12">
            <div style="display: flex; justify-content: center">
                {!! $users->render() !!}
            </div>
        </div>
    </div>
@endsection