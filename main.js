/* pk.eyJ1IjoiYWlseW5lbmNpbmFzIiwiYSI6ImNsdXN6OXltZjAzNHMyam9nNHR2bGk3dmgifQ.a1eP122SNX_g_e2EbskphA */
mapboxgl.accessToken='pk.eyJ1IjoiYWlseW5lbmNpbmFzIiwiYSI6ImNsdXN6OXltZjAzNHMyam9nNHR2bGk3dmgifQ.a1eP122SNX_g_e2EbskphA'

let map= new mapboxgl.Map({
    container:'map',
    style: 'mapbox://styles/mapbox/navigation-night-v1',
    center:[-68.100767,-16.522871],
    zoom:15
})
// Realizar una solicitud GET a un archivo PHP para obtener los datos
fetch('obtener_datos.php')
    .then(response => response.json())
    .then(data => {
        data.forEach(point => {
            new mapboxgl.Marker()
                .setLngLat([point.lng, point.lat])
                .addTo(map);
        });
    })
    .catch(error => console.error('Error:', error));
