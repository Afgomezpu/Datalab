

const getLocations = () => {

        if(navigator.geolocation){
            navigator.geolocation.getCurrentPosition((data)=>{
                let currentPosition = {
                    lat: data.coords.latitude,
                    lng: data.coords.longitude      
                }
                dibujarMapa(currentPosition)
                peticion(currentPosition.lat, currentPosition.lng)
            })
        }
 //   })
}

const dibujarMapa = (obj,data) => {
   let map = new google.maps.Map(document.getElementById('map'),{
        zoom: 8,
        center: obj
    })

    let marker = new google.maps.Marker({
        position: obj,
        title: 'Tu ubicacion'
    })
     marker.setMap(map)
}


function append_json(data, table_name){
    var table = document.getElementById(table_name);
    tr = document.createElement('tr');
    tr.innerHTML = '<th>CUENTA</th><th>TRAFO</th><th>LATITUD</th><th>LONGITUD</th>';
    table.appendChild(tr);
    data.forEach(function(object) {
        var tr = document.createElement('tr');
        tr.innerHTML = '<td>' + object.cuenta + '</td>' +
        '<td>' + object.cod_trafo + '</td>' +
        '<td>' + object.Latitud + '</td>' +
        '<td>' + object.Longitud + '</td>';
        table.appendChild(tr);
    });

}


function peticion(lat, long) {    
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var data = JSON.parse(this.responseText);
            append_json(data, 'tabla');
           
        }
    };
    var lat_metros=parseInt(lat*111.32*1000)
    var long_metros=parseInt(((40075*Math.cos(lat))/360)*1000)
    xmlhttp.open("GET", "peticiones.php?lati="+ lat_metros +"&long=" + long_metros, true);
    xmlhttp.send();

  }


window.addEventListener('load',getLocations)
