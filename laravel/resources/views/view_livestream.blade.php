<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Live Stream</title>
</head>
<body>
@if($livestream->start_time < date('Y-m-d H:i:s') && $livestream->end_time > date('Y-m-d H:i:s'))
    <div class="player">
        <iframe width="900" height="495" src="{{$livestream->yt_url}}?rel=0" frameborder="0" allowfullscreen include></iframe>
    </div>
    @elseif($livestream->end_time < date('Y-m-d H:i:s'))

@endif


</body>
</html>


