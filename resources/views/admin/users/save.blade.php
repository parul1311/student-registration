@extends('layouts.app')
@section('title','Save User')
@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-9 mx-auto">
                <form action="{{ route('admin.users.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ old('id',$user->id)}}">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div>
                                <h4>Save</h4>
                                <span>Save record for user</span>
                            </div>
                            <div class="text-right">
                                <a href="{{ route('admin.users.index') }}" class="btn btn-primary btn-sm">View All</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Full Name <span class="text-danger">*</span></label>
                                        <input required type="text" minlength="8" name="name" class="form-control" value="{{ old('name',$user->name) }}" placeholder="Enter Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Email <span class="text-danger">*</span></label>
                                        <input required type="email" minlength="8" name="email" class="form-control" value="{{ old('email',$user->email) }}" placeholder="Enter Email">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Phone</label>
                                        <input type="number" minlength="8" name="phone" class="form-control" value="{{ old('phone',$user->phone) }}" placeholder="Enter Phone">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Role @if(!$user->id) <span class="text-danger">*</span> @endif</label>
                                        <select name="role" class="form-control" id="role" @if($user->id) disabled @else required @endif>
                                            <option value="">Select Role</option>
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->name }}"@if(old('role')) {{ old('role') == $role->name ? 'selected' : '' }} @else  @isset($user->roles) {{ in_array($role->id,$user->roles()->pluck('id')->toArray()) ? 'selected' : '' }} @endif>
                                                    {{ $role->display_name }} @endisset>{{ $role->display_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Password @if(!$user->id) <span class="text-danger">*</span> @endif</label>
                                        <input id="password" @if(!$user->id) required @endif type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Confirm Password @if(!$user->id) <span class="text-danger">*</span> @endif</label>
                                        <input id="password-confirm" @if(!$user->id) required @endif type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Image @if(!$user->id) <span class="text-danger user-req">*</span> @endif</label>
                                        <input id="image" accept="image/*" type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Date of Birth @if(!$user->id) <span class="text-danger user-req">*</span> @endif </label>
                                        <input type="date" class="form-control" name="dob" value="{{ old('dob',$user->dob) }}" max="{{ now()->format('Y-m-d') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Address @if(!$user->id) <span class="text-danger user-req">*</span> @endif </label>
                                        <textarea name="address" class="form-control" id="" cols="30" rows="10">{{ old('address',$user->address) }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary btn-sm">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
<script>
    $('[name="role"]').change(function(){
        if($(this).val() == 'admin'){
            $('.user-req').addClass('d-none');
            $('[name="dob"]').removeAttr('required');
            $('[name="address"]').removeAttr('required');
            $('[name="image"]').removeAttr('required');
        }else{
            $('.user-req').removeClass('d-none');
            $('[name="dob"]').prop('required',true);
            $('[name="address"]').prop('required',true);
            @if(empty($user->id) || empty($user->avatar))
            $('[name="image"]').prop('required',true);
            @else
            $('[name="image"]').removeAttr('required');
            @endif
        }
    });
</script>
@endsection
