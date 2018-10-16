@extends('storm.layouts.master')

@section('title','Create Posts')

@section('content')
    <div class="row">
        <div class="col-sm-5">
            <h3>This is Create</h3>
            {{--@include('ferror')--}}
            <form action="{{ route('storm.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <input class="form-control" type="text" name="age" placeholder="age here">
                    @if($errors->has('age'))
                        <span class="text-danger">122121 {{ $errors->first('age') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="f_email" placeholder="email here">
                    <span class="text-danger">{{--122121 --}}{{ $errors->first('f_email') }}</span>

                </div>
                <input class="btn btn-primary" type="submit" value="Create Post">
            </form>
        </div>
        <div class="col-sm-7">
            <div class="result-post">

            </div>
        </div>
    </div>

@stop