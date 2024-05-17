window.onload = function() {
    // Load ESP32 status using AJAX
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("status").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "../../includes/device.php", true);
    xhttp.send();
}
