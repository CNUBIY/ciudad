  <br>
  <h1>Dirección de la UTC</h1>
  <img src="<?php echo base_url('assets/img/marcador_utc.png'); ?>" alt="Logo UTC">
  <br>
  <div id="mapa1" style="width:100%; height:300px; border:2px solid black;">

  </div>
  <script type="text/javascript">
      function initMap(){
        //creando una coordenada
        var coordenadaCentral=new google.maps.LatLng(-0.9177935901059552, -78.63297814497814);

        var miMapa= new google.maps.Map(
          document.getElementById('mapa1'),
          {
            center: coordenadaCentral,
            zoom:9.5,
            mapTypeId: google.maps.MapTypeId.ROADMAP
          }
        );
        var marcadorUTC=new google.maps.Marker({
          position:new google.maps.LatLng(-0.9177935901059552, -78.63297814497814),
          map:miMapa,
          title:'UTC Matriz',
          icon:'<?php echo base_url('assets/img/marcador_utc.png'); ?>'
        });
        var marcadorSalache=new google.maps.Marker({
          position:new google.maps.LatLng(-0.9992249860315614, -78.61911810846432),
          map:miMapa,
          title:'UTC Campus Salache'
        });

      var marcadorMana=new google.maps.Marker({
        position:new google.maps.LatLng(-0.9371693118759016, -79.22905423909766),
        map:miMapa,
        title:'UTC La Maná',
        icon:'<?php echo base_url('assets/img/marcador_utc.png'); ?>'
      });
      var marcadorPujili=new google.maps.Marker({
        position:new google.maps.LatLng(-0.9189681385737409, -78.68283342435193),
        map:miMapa,
        title:'UTC Extensión Pujilí'
      });
    }
  </script>
