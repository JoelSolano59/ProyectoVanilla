let map;
                      document.addEventListener("DOMContentLoaded", () => {
                          let s = document.createElement("script");
                          document.head.appendChild(s);
                          s.addEventListener("load", () => {
                              //script has loaded
                              console.log("script has loaded. About to load the map");
                              map = new google.maps.Map(document.getElementById("map"), {
                                  center: {
                                      lat: 45.4496711,
                                      lng: -75.6569551
                                  },
                                  zoom: 15,
                                  mapTypeId: google.maps.MapTypeId.ROADMAP,
                                  restriction: {
                                      latLngBounds: {
                                          north: 50.00,
                                          south: 40.00,
                                          west: -100.00,
                                          east: -60.00,
                                      }
                                  },
                                  minZoom: 10,
                                  maxZoom: 17,
                                  disableDoubleClickZoom: false,
                                  clickableIcons: false,
                                  disableDefaultUI: true,
                                  zoomControl: true,
                                  zoomControlOptions: {
                                      position: google.maps.ControlPosition.RIGHT_CENTER
                                  },
                                  mapTypeControl: true,
                                  mapTypeControlOptions: {
                                      style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
                                      mapTypeIds: ["roadmap", "terrain", "satellite"],
                                      position: google.maps.ControlPosition.LEFT_TOP
                                  },
                                  fullscreenControl: true,
                                  fullscreenControlOptions: {
                                      position: google.maps.ControlPosition.RIGHT_TOP
                                  },
                                  scaleControl: false,
                                  streetViewControl: true,
                                  streetViewControlOptions: {
                                      position: google.maps.ControlPosition.RIGHT_BOTTOM
                                  },
                                  rotateControl: true
                              });
                          });
                            s.src = `https://maps.googleapis.com/maps/api/js?key=AIzaSyB6go4M7I4BjnbhK_Oi12v-Ac-vnDSjBm4`;
                        });