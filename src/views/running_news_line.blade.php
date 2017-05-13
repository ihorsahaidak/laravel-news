<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>letest news</title>
</head>
<body>
<img src="http://media.ticketmaster.co.uk/tm/en-gb/img/mw/images/f0/87/122346p1.jpg"
     alt=""
     style="top: 0; right: 0; position: fixed">
    <marquee style="bottom: 0px; left: 0px; position: fixed"
             onmouseover="this.stop();"
             onmouseout="this.start();"
             behavior="scroll"
             bgcolor="#ccc"
             direction="left"
             scrollamount="6"
             height="20"
             loop="infinite"
             width="100%">

        @foreach($array['channel']['item'] as $item)
                <a href="{{$item['link']}}" target="_blank">{{$item['title']}}</a>
                <strong>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</strong>
            @endforeach
    </marquee>
</body>
</html>