        	var map;
            var brooklyn = new google.maps.LatLng(40.6743890, -73.9455);

            var stylez = [
                {
                  featureType: "all",
                  elementType: "all",
                  stylers: [
                    { saturation: 0,
                     } // <-- THIS
                  ]
                }
            ];

            var mapOptions = {
                zoom: 11,
                center: brooklyn,
                disableDefaultUI: true,
                mapTypeControlOptions: {
                     mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'tehgrayz']
                }
            };
            
<<<<<<< HEAD
            map = new google.maps.Map(document.getElementById("page-map"), mapOptions);
=======
         //    map = new google.maps.Map(document.getElementById("MapContent"), mapOptions);
>>>>>>> ba777f6b62eb399819871b6d22236a879b5319ec

            var mapType = new google.maps.StyledMapType(stylez, { name:"Grayscale" });    
            map.mapTypes.set('tehgrayz', mapType);
            map.setMapTypeId('tehgrayz');
