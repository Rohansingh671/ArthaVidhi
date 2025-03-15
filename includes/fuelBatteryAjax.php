<script>
		document.addEventListener("DOMContentLoaded", function() {
			const fuelOption = document.getElementById("fuelOption");
			const batteryOption = document.getElementById("batteryOption");
			const rangeInput = document.getElementById("fuelBatteryLevel");
			const valueDisplay = document.getElementById("fuelBatteryValue");
			const powerValueInput = document.getElementById("powerValue"); // Hidden input for form submission

			function updateDisplay() {
				if (fuelOption.checked) {
					rangeInput.max = 60;
					rangeInput.step = 1;
					if (rangeInput.value > 60) rangeInput.value = 30; // Reset if out of range
					valueDisplay.innerText = rangeInput.value + "L";
				} else {
					rangeInput.max = 100;
					rangeInput.step = 5;
					if (rangeInput.value > 100) rangeInput.value = 50; // Reset if out of range
					valueDisplay.innerText = rangeInput.value + "%";
				}
				powerValueInput.value = rangeInput.value; // Update hidden input
			}

			function updateHiddenValue() {
				powerValueInput.value = rangeInput.value; // Sync range value with hidden input
				valueDisplay.innerText = rangeInput.value + (fuelOption.checked ? "L" : "%");
			}

			fuelOption.addEventListener("change", updateDisplay);
			batteryOption.addEventListener("change", updateDisplay);
			rangeInput.addEventListener("input", updateHiddenValue);

			updateDisplay(); // Initialize on page load
		});
	</script>