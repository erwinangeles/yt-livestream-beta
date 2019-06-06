@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Livestream</div>

                    <div class="card-body">
                        <form method="POST" action="{{route('admin.livestreams.update', $livestream->id)}}">
                           {{method_field('PUT')}}
                            @csrf
                            Name:
                            <input type="text" name="name" value="{{ $livestream->name }}" class="form-control"/>
                            Slug:
                            <input type="text" name="slug" value="{{ $livestream->slug }}" class="form-control"/>
                            Youtube Embed Url - Ex: <em>https://www.youtube.com/embed/KZjealyxwlo</em>
                            <input type="text" name="yt_url" value="{{ $livestream->yt_url }}" class="form-control"/>
                            Start Time:
                            {{ Form::input('dateTime-local', 'start_time', date('Y-m-d\TH:i:s',  strtotime($livestream->start_time)), array('class' => 'form-control')) }}                            End Time:
                            {{ Form::input('dateTime-local', 'end_time', date('Y-m-d\TH:i:s',  strtotime($livestream->end_time)), array('class' => 'form-control')) }}
                            <br/>
                            <input type="submit" value="Save" class="btn btn-primary">

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
