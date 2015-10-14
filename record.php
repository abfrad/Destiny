<?php
include 'config.php'; 

$sname =$_GET['sname'];
$sql2 = "SELECT * FROM library where songname ='$sname' ";
$result2=mysqli_query($con,$sql2);
$row2 = mysqli_fetch_assoc($result2);
$url= $row2["url"];
$lyrics=$row2["lyrics"];

?>

<html>
<head>
<link rel='stylesheet' type='text/css' href='style/style.css'>
<script src='js/jquery-1.10.2.js'></script>
<script src='js/recorder.js'></script>

<link rel='shortcut icon' href='img/favicon.ico'>
</head>

<body>

<div id='container'>
<div id='screen'>
<?php
echo "
<audio id='instrum' >
<source src='$url' >
</audio>
<script>
var instr='$sname';

</script>
";


?>
<img   value='sdsdsd' id='gamer' src='img/inf.fw.png'>
<div class='gamer' id='inf'> Recording Studio <a href='index.php' id='right'> MAP </a> </div> 
<img class='gamer' id='frame' src='img/record.fw.png'>


<div class='gamer' id='recpan'>
<p id='stat'> Please put on your headphone before Recording!</p>
  <img src='img/rec.fw.png' id='rec' onclick='startRecording();'>
  <img src='img/stop.fw.png' id='stop' onclick='stopRecording();' hidden>
  <div id='rectemp' >
  
  <img src='img/reload.fw.png' id='reload' hidden>
  
  
  <ul id='recordingslist'></ul>
  <pre id='log'></pre>

  <script>
 
$(document).ready(function(){
   $('#reload').click(function(){
    location.reload();
   });
  
 });

  
  
  
  function __log(e, data) {
    log.innerHTML += '\n' + e + ' ' + (data || '');
  }

  var audio_context;
  var recorder;
  var instrum = document.getElementById("instrum");
  var stat= document.getElementById("stat");

  
  function startUserMedia(stream) {
    var input = audio_context.createMediaStreamSource(stream);
  //  __log('Media stream created.');
    
  //  input.connect(audio_context.destination);
//    __log('Input connected to audio context destination.');
    
    recorder = new Recorder(input);
 //   __log('Recorder initialised.');
  }

  function startRecording() {
    recorder && recorder.record();
   
	$('#rec').hide();
	$('#stop').show();
	
    instrum.play();
     stat.innerHTML='Recording...';
  }

  function stopRecording() {
  
    $('#stop').hide();
	$('#reload').show();
    recorder && recorder.stop();
	instrum.pause();
    CreatePreview();
   // recorder.clear();
	
  }
  
var sname = document.createElement('input');
       var rectemp= document.getElementById('rectemp');
//var sav = document.createElement('img');
sname.type='text';
//sav.OnClick='UploadB();'

  function CreatePreview() {
      
    //recorder && recorder.exportWAV(function(blob) {
      
	 // console.log(url);
    stat.innerHTML='Producing...';
    
     var au=document.createElement('audio');
     var sav=document.createElement('img');
	 var br=document.createElement('br');
	 var inf=document.createElement('p');

      au.controls = true;
    
      sav.src='img/sav.fw.png';
    inf.innerHTML='Pease enter a name for your Song!';
      rectemp.appendChild(au);
	 rectemp.appendChild(inf);
	  rectemp.appendChild(sname);
	 
	 sname.style.width="300px";
	 rectemp.appendChild(br);
	 rectemp.appendChild(sav);
        var url = URL.createObjectURL(blob);
          au.src = url;
	 sav.addEventListener("click", UploadB, false); 
 
	 
    //});
  }
      
function UploadB(){

 recorder && recorder.exportWAV(function(blob) {
      var url = URL.createObjectURL(blob);

 var fd = new FormData();
 var fname=sname.value+'.wav';
 
fd.append('fname', fname);
fd.append('data', blob);
 
 
  var xhr = new XMLHttpRequest();
        xhr.open('POST', 'upload.php');

        xhr.upload.onprogress = function(e) 
        {
                 /* values that indicate the progression
                 e.loaded);
             e.total);*/
        };

        xhr.onload = function()
        {
            stat.innerHTML='Congratulations! Your Song has been publised successfully.';
        };


        xhr.send(fd);
 
 
 
	
	
	
	/*  $.ajax({
    type: 'POST',
    url: 'upload.php',
    data: fd,
    processData: false,
    contentType: false
}).done(function(data) {
       console.log(data);
}); */

});	
$.post( "publish.php", { instrum:instr, url:'wav/'+window.sname.value+'.wav', name: window.sname.value } );
// you cant run php code on client save it for server  just post here ....

 //Working Point !!!! !!! !!!!.....
document.getElementById("rectemp").innerHTML = "";
 //Alert is making ajax send nothing!
 //alert('Congratulations! Your Song has been published.');     
stat.innerHTML='Please wait while your song is being published. <br/> Uploading...';
}
 
    try {
      // webkit shim
      window.AudioContext = window.AudioContext || window.webkitAudioContext;
      navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia;
      window.URL = window.URL || window.webkitURL;
      
      audio_context = new AudioContext;
  //    __log('Audio context set up.');
  //    __log('navigator.getUserMedia ' + (navigator.getUserMedia ? 'available.' : 'not present!'));
    } catch (e) {
      alert('No web audio support in this browser!');
    }
    
    navigator.getUserMedia({audio: true}, startUserMedia, function(e) {
     __log('No live audio input: ');
    });
  
  </script>
 </div>
    </div>

  <div class='gamer' id='lyricpan'>
  <?php
//$lyr = file_get_contents($lyrics);
//echo $lyr;
echo "
 <p>$sname Lyrics</p>
 <p>";
$lyr = fopen($lyrics, 'r');

    $lyrb = fread($lyr, 25000);

    echo nl2br($lyrb);
echo "</p>";
?>
  </div>
  </div>
</div>
</body>
</html>
