<div class="map-canvas" id="<?= "canvas_map-" . $map_id; ?>" style="width: <?= $width; ?>; height: <?= $height; ?>"></div>
<script type="text/javascript">
    google.maps.event.addDomListener(window, 'load', gMapsInit);
    var map;
    function gMapsInit() {
        var mapOptions = {
            zoom: <?= $zoom ?>,
            scrollwheel: false,
            center: new google.maps.LatLng(<?= $lat; ?>,<?= $lng; ?>),
			styles: [
			  {
			    "featureType": "poi",
			    "stylers": [
			      {
			        "visibility": "off"
			      }
			    ]
			  }
			]
        };
        var mapElement = document.getElementById('<?= "canvas_map-" . $map_id; ?>');
            map = new google.maps.Map(mapElement, mapOptions);
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(<?= $lat; ?>,<?= $lng; ?>),
            map: map,
            icon: '<?= get_template_directory_uri(); ?>/images/icn-pino.png'
        });
    }
</script>