<script  src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

  <div id="theater">
    <video id="videos" src="https://static.videezy.com/system/resources/previews/000/012/888/original/Pocket_Watch_a30_-_28s_-_4k_res.mp4" controls="false" muted autoplay></video>
  </div>

  <script>
      

$(document).ready(function(){
    $('#videos').on('ended',function(){
        window.open("https://docs.google.com/forms/d/e/1FAIpQLSeMoJ8JNWB1Fy9zxM-kLCbFghB3REew1kK4zshPpK5jOzKiFg/viewform?usp=sf_link");
    });

    var promise = document.querySelector('video').play();

    if (promise !== undefined) {
    promise.then(_ => {
        $("#videos")[0].load();
        $("#videos")[0].play();
    }).catch(error => {
        // Autoplay was prevented.
        // Show a "Play" button so that user can start playback.
        alert(error);
    });
    }
});
  </script>
