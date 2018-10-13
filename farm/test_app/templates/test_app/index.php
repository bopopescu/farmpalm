<!DOCTYPE html>
{% load staticfiles %}
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript" src="{% static '/js/vxgplayer-1.7.44.min.js' %}"></script>
{# <script type="text/javascript" src="assets/vxgplayer-1.7.44.min.js"></script> #}<!-- include JS-->
{# <link href="assets/vxgplayer-1.7.44.min.css" rel="stylesheet"/> #}<!-- include css -->
<link rel="stylesheet" href="{% static '/css/vxgplayer-1.7.44.min.css' %}">

    
</head>

<body>

<div class="vxgplayer"
    id="vxg_media_player1" 
    width="720"
    height="480"
    url="rtsp://admin:Farmpalm!@211.205.5.125:554/Streaming/Channels/101"
    nmf-src="{% static '/pnacl/Release/media_player.nmf' %}"
    nmf-path="{% static '/pnacl/Release/media_player.nmf' %}"
    useragent-prefix="MMP/3.0"
    latency="10000"
    autohide="2"
    volume="0.7"
    autostart=true
    avsync
    mute
    aspect-ratio
    aspect-ratio-mode="1"
    auto-reconnect></div>
</body>


</html>