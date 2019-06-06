@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Livestreams</div>

                <div class="card-body">
                    <a href="{{route('admin.livestreams.create')}}" class="btn btn-sm btn-primary">Add new</a>
                    <br/> <br/>

                    <table class="table">
                        <tr>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Start Time</th>
                            <th>End Time</th>
                            <th>iFrame Code</th>
                            <th></th>
                        </tr>
                        @forelse($livestreams as $livestream)

                            <tr>
                                <td>{{ $livestream->name }}</td>
                                <td>{{$livestream->slug}}</td>
                            <td>{{$livestream->start_time}}</td>
                            <td>{{$livestream->end_time}}</td>
                                <td width="100" ><pre>&lt;iframe width="100%" height="100%" src="{{URL::to('/')}}/live/{{$livestream->slug}}" frameborder="0" allowfullscreen&gt;&lt;iframe&gt;</pre></td>
                                <td> <a href="{{ route('admin.livestreams.edit', $livestream->id) }}" class="btn btn-sm btn-info">Edit</a>
                                    <form method="POST" action="{{route('admin.livestreams.destroy', $livestream->id)}}">
                                        @csrf
                                        {{method_field('DELETE')}}
                                        <input type="submit" value="Delete" onclick="return confirm('Are you sure?')"
                                               class="btn btn-sm btn-danger" />
                                    </form>


                                </td>
                            </tr>

                            @empty
                            <tr>
                                <td colspan="2">No records found</td>
                            </tr>
                    @endforelse
                    </table>
                    <h2>Welcome!</h2>
                    <p>This Youtube Livestream Tool allows you to obtain iFrame codes for your Youtube videos. Unlike the default iFrame codes you get from YouTube, you have the option to set a specific release date and date for your videos!</p>
                    <p>This gives you the ability to have the iFrame code posted on your site before an event, or during a speicifc time of your choosing. You won't need to come back to remove the iFrame code to stop displaying the youtube video on your page, because the video will automatically stop displaying on your website on the time/date you enter.</p>
                    <p>This will be useful for content or videos you want to build excitement for, or promotions that have deadlines. You can even use this tool to give the illusion of a pre-recorded video event being live.</p>
                    <p>How to use:</p>
                    <p>1) Click on 'Add New'<br />2) Enter the details for a new iFrame code<br />3) Make sure to get the correct embed url from the YouTube video<br />4) Enter the Start Time and End Time that you wish the video to show for<br />5) Click Save and Copy the iFrame code generated on the Dashboard<br /><br />Now you can use this new iFrame code on any of your websites, blogs, or forums!<br /><br />Thank you for checking out this tool. - Erwin</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
