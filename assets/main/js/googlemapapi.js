function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition, showError);
  } else {
    alert("Geolocation is not supported by this browser.");
  }
}

function showPosition(position) {
  const lat = position.coords.latitude;
  const lng = position.coords.longitude;
  const latlng = new google.maps.LatLng(lat, lng);
  const geocoder = new google.maps.Geocoder();

  geocoder.geocode({ location: latlng }, function (results, status) {
    if (status === "OK") {
      if (results[0]) {
        document.getElementById("location").value =
          results[0].formatted_address;
        const placeName =
          results[0].address_components.filter((component) =>
            component.types.includes("locality")
          )[0]?.long_name || "Unknown place";
        document.getElementById("placeInput").value = placeName;
        document.getElementById("rsor_location").innerHTML =
          results[0].formatted_address;
        document.getElementById("latitude").value = lat;
        document.getElementById("longitude").value = lng;

        document.getElementById("LocationForm").submit();
      } else {
        alert("No results found");
      }
    } else {
      alert("Geocoder failed due to: " + status);
    }
  });
}

function showError(error) {
  switch (error.code) {
    case error.PERMISSION_DENIED:
      alert("User denied the request for Geolocation.");
      break;
    case error.POSITION_UNAVAILABLE:
      alert("Location information is unavailable.");
      break;
    case error.TIMEOUT:
      alert("The request to get user location timed out.");
      break;
    case error.UNKNOWN_ERROR:
      alert("An unknown error occurred.");
      break;
  }
}
