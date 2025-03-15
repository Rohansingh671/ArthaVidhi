<script>
    document.addEventListener("DOMContentLoaded", function() {
        const carCanvas = document.getElementById("carCanvas");
        const ctx = carCanvas.getContext("2d");
        const carImage = new Image();
        carImage.src = "./images/images.jpg";

        let selectedMarkerType = "";
        let markersData = [];

        carImage.onload = function() {
            carCanvas.width = carImage.width;
            carCanvas.height = carImage.height;
            ctx.drawImage(carImage, 0, 0);
        };

        document.querySelectorAll(".marker-btn").forEach(button => {
            button.addEventListener("click", function(event) {
                event.preventDefault();
                selectedMarkerType = this.getAttribute("data-type");
            });
        });

        carCanvas.addEventListener("click", function(event) {
            if (!selectedMarkerType) return;

            const rect = carCanvas.getBoundingClientRect();
            const x = event.clientX - rect.left;
            const y = event.clientY - rect.top;

            ctx.fillStyle = "red";
            ctx.font = "bold 14px Arial";
            ctx.fillText(selectedMarkerType, x, y);

            markersData.push({
                type: selectedMarkerType,
                x,
                y
            });
        });

        document.querySelector(".clear-markers").addEventListener("click", function() {
            ctx.clearRect(0, 0, carCanvas.width, carCanvas.height);
            ctx.drawImage(carImage, 0, 0);
            markersData = [];
        });

        document.getElementById("saveDataButton").addEventListener("click", function(event) {
            event.preventDefault();

            // Ensure the image is drawn
            ctx.drawImage(carImage, 0, 0);

            // Capture the canvas image
            const markedImage = carCanvas.toDataURL("image/png");

            if (!markedImage) {
                alert("Error: No image data found.");
                return;
            }

            console.log("Sending Image Data:", markedImage.substring(0, 100));

            fetch("save_vehicle_report.php", {
                    method: "POST",
                    body: JSON.stringify({
                        image: markedImage
                    }),
                    headers: {
                        "Content-Type": "application/json"
                    }
                })
                .then(response => response.json())
                .then(data => {
                    console.log("Response from server:", data);
                    alert(data.message);
                })
                .catch(error => console.error("Error:", error));
        });
    });
</script>

<style>
.clear-markers:hover {
    background-color: darkred;
}
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const carCanvas = document.getElementById("carCanvas");
        const ctx = carCanvas.getContext("2d");
        const carImage = new Image();
        carImage.src = "./images/images.jpg";

        let selectedMarkerType = "";
        let markersData = [];

        carImage.onload = function() {
            carCanvas.width = carImage.width;
            carCanvas.height = carImage.height;
            ctx.drawImage(carImage, 0, 0);
        };

        document.querySelectorAll(".marker-btn").forEach(button => {
            button.addEventListener("click", function(event) {
                event.preventDefault();
                selectedMarkerType = this.getAttribute("data-type");
            });
        });

        carCanvas.addEventListener("click", function(event) {
            if (!selectedMarkerType) return;

            const rect = carCanvas.getBoundingClientRect();
            const x = event.clientX - rect.left;
            const y = event.clientY - rect.top;

            ctx.fillStyle = "red";
            ctx.font = "bold 14px Arial";
            ctx.fillText(selectedMarkerType, x, y);

            markersData.push({
                type: selectedMarkerType,
                x,
                y
            });
        });

        document.querySelector(".clear-markers").addEventListener("click", function() {
            ctx.clearRect(0, 0, carCanvas.width, carCanvas.height);
            ctx.drawImage(carImage, 0, 0);
            markersData = [];
        });

        document.getElementById("saveDataButton").addEventListener("click", function(event) {
            event.preventDefault();

            // Ensure the image is drawn
            ctx.drawImage(carImage, 0, 0);

            // Capture the canvas image
            const markedImage = carCanvas.toDataURL("image/png");

            if (!markedImage) {
                alert("Error: No image data found.");
                return;
            }

            console.log("Sending Image Data:", markedImage.substring(0, 100));

            fetch("save_vehicle_report.php", {
                    method: "POST",
                    body: JSON.stringify({
                        image: markedImage
                    }),
                    headers: {
                        "Content-Type": "application/json"
                    }
                })
                .then(response => response.json())
                .then(data => {
                    console.log("Response from server:", data);
                    alert(data.message);
                })
                .catch(error => console.error("Error:", error));
        });
    });
</script>