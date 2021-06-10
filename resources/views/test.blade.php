<audio id="audio" preload="auto" tabindex="0" controls="" type="audio/mpeg">
        <source type="audio/mp3" src="http://www.archive.org/download/bolero_69/Bolero.mp3">
        Sorry, your browser does not support HTML5 audio.
</audio>
    <ul id="playlist">
        <li class="active"><div class="column1">
        <a href="http://www.archive.org/download/bolero_69/Bolero.mp3">Ravel Bolero</a></div>
        <div class="column2">
        <a href="#" target="_blank">
        Download
        </a>
        </div>
        </li>
        <li><a href="http://www.archive.org/download/MoonlightSonata_755/Beethoven-MoonlightSonata.mp3">Moonlight Sonata - Beethoven</a></li>
        <li><a href="http://www.archive.org/download/CanonInD_261/CanoninD.mp3">Canon in D Pachabel</a></li>
        <li><a href="http://www.archive.org/download/PatrikbkarlChamberSymph/PatrikbkarlChamberSymph_vbr_mp3.zip">patrikbkarl chamber symph</a></li>

    </ul>
<script>
    var audio;
    var playlist;
    var tracks;
    var current;

    init();
    function init(){
        current = 0;
        audio = $('audio');
        playlist = $('#playlist');
        tracks = playlist.find('li a');
        len = tracks.length - 1;
        audio[0].volume = .10;
        playlist.find('a').click(function(e){
            e.preventDefault();
            link = $(this);
            current = link.parent().index();
            run(link, audio[0]);
        });
        audio[0].addEventListener('ended',function(e){
            current++;
            if(current == len){
                current = 0;
                link = playlist.find('a')[0];
            }else{
                link = playlist.find('a')[current];    
            }
            run($(link),audio[0]);
        });
    }
    function run(link, player){
            player.src = link.attr('href');
            par = link.parent();
            par.addClass('active').siblings().removeClass('active');
            audio[0].load();
            audio[0].play();
    }
</script>