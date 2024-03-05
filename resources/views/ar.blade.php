<!DOCTYPE html>
<html>
    <head>
    <meta charset='utf-8'>
    <title>AR</title>
    <script src="https://aframe.io/releases/1.3.0/aframe.min.js"></script>
      <script src="https://raw.githack.com/AR-js-org/AR.js/master/aframe/build/aframe-ar.js"></script>

      <script>

          AFRAME.registerComponent('markerhandler', {
            init: function () {
              this.el.sceneEl.addEventListener('markerFound', () => {
                var entity = document.querySelector('[sound]');
                entity.components.sound.playSound();
              })

              this.el.sceneEl.addEventListener('markerLost', () => {
                  var entity = document.querySelector('[sound]');
                entity.components.sound.stopSound();
              })
            }
          });
        </script>

    </head>

  <body style="margin : 0px; overflow: hidden;">
    <a-scene embedded arjs>
      <a-marker markerhandler preset="hiro">

        <a-image scale="2 2 2" rotation="-99 0 0" src="{{ Storage::url($element->img) }}"></a-image>
        <a-entity id="river" geometry="primitive: plane" material="color: blue"
          position="-10 0 0" sound="src: url({{ Storage::url($element->sound) }}); autoplay: false;"></a-entity>

<!--
       <a-entity
          position="0 0 0"
          scale="0.005 0.005 0.005"
          rotation="-99 0 0"
          gltf-model="https://cdn.aframe.io/examples/ar/models/triceratops/scene.gltf"
        ></a-entity>

        <a-text
        value="Hello!"
        color="#FF0000"
        scale="1 1 1"
        rotation="-99 0 0"
        ></a-text> -->

      </a-marker>
      <a-entity camera></a-entity>
    </a-scene>


  </body>
</html>
