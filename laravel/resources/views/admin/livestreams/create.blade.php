@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add new Livestream</div>

                <div class="card-body">
                 <form method="POST" action="{{route('admin.livestreams.store')}}">
                     @csrf
                     Name:
                     <input type="text" name="name" class="form-control"/>
                     Slug:
                     <input type="text" name="slug" class="form-control"/>
                     Youtube Embed Url - ex: <em>https://www.youtube.com/embed/KZjealyxwlo</em>
                     <input type="text" name="yt_url" class="form-control"/>
Start Time:
                     <input type='datetime-local' class='form-control' name='start_time' required/>
End Time:
                     <input type='datetime-local' class='form-control' name='end_time' required/>

                     <br/>
                     <input type="submit" value="Save" class="btn btn-primary">
                 </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
