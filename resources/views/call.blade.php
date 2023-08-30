<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
	</head>
	<body class="bg-white d-block d-sm-none jqm-demos" data-role="page" >
    <div class="container"></div>    
      <nav class="navbar navbar-expand-lg" style="background-color: #0D2B5B;">
        <div class="container-fluid">
        <img src="images/logo-nav.png" alt="">
        </div>
      </nav>
      <div class="container-fluid">
        <p class="custom-header">Calling . . .</p>
        <h5 class="text-right">00:00:00</h5>
        <div class="container-fluid">
          <p class="custom-call">Valdy Andrean</p>
          <div class="row custom-icon">
            <div class="col-6 text-center">
              <a href="#">
                <img src="images/microphone-solid 1.png" alt="">
              </a>
              <p>Mute</p>
            </div>
            <div class="col-6 text-center">
              <a href="#">
                <img src="images/play-solid 1.png" alt="">
              </a>
              <p>Hold</p>
            </div>
          </div>
          <div class="row custom-icon">
            <div class="col-6 text-center">
              <a href="#">
                <img src="images/phone-solid (1) 1.png" alt="">
              </a>
              <p>Transfer Call</p>
            </div>
            <div class="col-6 text-center">
              <a href="#">
                <img src="images/keypad.png" style="width: 50px; width: 50px;" alt="">
              </a>
              <p>Keypad</p>
            </div>
          </div>
          <div class="text-center">
            <a href="#">
              <img src="images/phone-call (6) 3.png" alt="">
            </a>
          </div>
        </div>
      </div>
      <footer class="footer py-3 text-white text-center fixed-bottom" style="background-color: #0D2B5B;">
        <div class="container-fluid">
          <span class="">Copyright @2023</span>
        </div>
      </footer>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jssip/0.7.23/jssip.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script type="text/javascript">
        var configuration = {
          'uri': 'sip:1693325242510530f164c2f475-cti@sip-wss-1.b3networks.com', // FILL SIP URI HERE like sip:sip-user@your-domain.bwapp.bwsip.io
          'password': 'HFzXprCME+lFVfN0TgW4Ka7ciZE=', // FILL PASSWORD HERE,
          'ws_servers': 'wss://sip-wss-1.b3networks.com',
          'authorization_user': '1693325242:510530f164c2f475-cti',
          'session_timers': false,
          'user_agent': 'B3networks',
          'no_answer_timeout': 120,
          };

          var incomingCallAudio = new window.Audio();
          incomingCallAudio.loop = true;
          var remoteAudio = new window.Audio();
          remoteAudio.autoplay = true;

          var callOptions = {
          mediaConstraints: {audio: true, video: false}
          };

          var phone;
          JsSIP.debug.enable('JsSIP:*'); // more detailed debug output
          phone = new JsSIP.UA(configuration);
          phone.start();

          phone.on("registered", function(){
          phone.call("6281617315842", callOptions);    
          // phone.call("6281286888155", callOptions);    
        });
      </script>
      <script type="text/javascript">
      
    </script>
  </body>
</html>