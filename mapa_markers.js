let app = {
    map: null,
    currentMarker: null,
    defaultPos: {
      coords: {
        latitude: 20.6597756,
        longitude: -103.3846289
      }
    }, //default location to use if geolocation fails
    init: function() {
      document.addEventListener("deviceready", app.ready);
    },
    ready: function() {
      //load the google map script
      let s = document.createElement("script");
      document.head.appendChild(s);
      s.addEventListener("load", app.mapScriptReady);
      s.src = `https://maps.googleapis.com/maps/api/js?key=AIzaSyBId8QPxcART0pYyVoByO-mxDUeMvhlN_s`;
    },
    mapScriptReady: function() {
      //script has loaded. Now get the location
      if (navigator.geolocation) {
        let options = {
          enableHighAccuracy: true,
          timeout: 20000,
          maximumAge: 1000 * 60 * 60
        };
        navigator.geolocation.getCurrentPosition(
          app.gotPosition,
          app.failPosition,
          options
        );
      } else {
        //not supported
        //pass default location to gotPosition
        app.gotPosition(app.defaultPos);
      }
    },
    gotPosition: function(position) {
      console.log("gotPosition", position.coords);
      //build the map - we have deviceready, google script, and geolocation coords
      app.map = new google.maps.Map(document.getElementById("map"), {
        zoom: 12,
        center: {
          lat: position.coords.latitude,
          lng: position.coords.longitude
        },
        disableDoubleClickZoom: true
      });
      //add map event listeners
      app.addMapListeners();
    },
    addMapListeners: function() {
      console.log("addMapListeners");
      //add double click listener to the map object
      app.map.addListener("dblclick", app.addMarker);
    },
    addMarker: function(ev) {
      console.log("addMarker", ev);
      let marker = new google.maps.Marker({
        map: app.map,
        draggable: false,
        position: {
          lat: ev.latLng.lat(),
          lng: ev.latLng.lng()
        }
      });
      //add click listener to Marker
      marker.addListener("click", app.markerClick);
      //add double click listener to Marker
      marker.addListener("dblclick", app.markerDblClick);
    },
    markerClick: function(ev) {
      console.log("Click", ev);
      console.log(this);
      let marker = this; // to use the marker locally
      app.currentMarker = marker; //to use the marker globally
      app.map.panTo(marker.getPosition());
    },
    markerDblClick: function(ev) {
      console.log("Double Click", ev);
      console.log(this);
      let marker = this; //to use the marker locally
      //app.currentMarker = marker; //to use the marker globally
      //remove the marker from the map
      marker.setMap(null);
      app.currentMarker = null;
    },
    failPosition: function(err) {
      console.log("failPosition", err);
      //failed to get the user's location for whatever reason
      app.gotPosition(app.defaultPos);
    }
  };
  
  app.init();
  
  /**
   * google.maps.Marker object can listen to:
   * click
   * dblclick
   * mouseup
   * mousedown
   * mousemove
   * mousecancel... and more
   * See: https: //developers.google.com/maps/documentation/javascript/reference/#Marker
   */