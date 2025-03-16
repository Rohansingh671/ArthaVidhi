<script>
    document.addEventListener("DOMContentLoaded", function() {
        let dentRowCount = 0; // Start with 1 because the first row already exists

        function calculateDentPaintNetAmount(row) {
            let amount = parseFloat(row.querySelector(".customDentPaintAmount").value.trim()) || 0;
            let discount = parseFloat(row.querySelector(".customDentPaintDiscount").value.trim()) || 0;

            discount = Math.min(100, Math.max(0, discount)); // Ensure discount is valid

            let netAmount = amount - (amount * discount / 100);
            row.querySelector(".customDentPaintNetAmount").value = netAmount.toFixed(2);

            updateTotalCustomDentNetAmount(); // Update total dent/paint amount
        }

        function updateTotalCustomDentNetAmount() {
            let totalCustomDent = 0;
            document.querySelectorAll(".customDentPaintNetAmount").forEach(input => {
                totalCustomDent += parseFloat(input.value) || 0;
            });

            document.getElementById("totalCustomDent").value = totalCustomDent.toFixed(2);
            updateFinalDentBillTotal(); // Ensure final dent bill amount updates correctly
        }

        function addEventListenersToDentPaintRow(row) {
            row.querySelector(".customDentPaintAmount").addEventListener("input", function() {
                calculateDentPaintNetAmount(row);
            });

            row.querySelector(".customDentPaintDiscount").addEventListener("input", function() {
                calculateDentPaintNetAmount(row);
            });

            row.querySelector(".deleteDentPaintRow").addEventListener("click", function() {
                if (document.querySelectorAll(".dentPaintRow").length > 1) {
                    row.remove();
                    dentRowCount--; // Decrease row count when a row is deleted
                    updateTotalCustomDentNetAmount();
                } else {
                    alert("At least one row is required!");
                }
            });
        }

        document.getElementById("addDentPaintRow").addEventListener("click", function() {
            if (dentRowCount < 5) { // Allow only 5 rows
                let container = document.getElementById("dentPaintContainer");
                let originalRow = container.querySelector(".dentPaintRow");

                if (originalRow) {
                    let newRow = originalRow.cloneNode(true);
                    newRow.querySelectorAll("input").forEach(input => {
                        input.value = input.type === "text" ? "" : "0";
                    });

                    container.appendChild(newRow);
                    addEventListenersToDentPaintRow(newRow);

                    dentRowCount++; // Increment row count when a new row is added
                }
            } else {
                alert("You can add a maximum of 5 rows.");
            }
        });

        function updateFinalDentBillTotal() {
            let totalCustomDent = parseFloat(document.getElementById("totalCustomDent").value) || 0;
            let totalDentAjax = parseFloat(document.getElementById("totalDentAjax").value) || 0;

            let finalTotal = totalCustomDent + totalDentAjax;
            document.querySelector("input[name='dentBillAmount']").value = finalTotal.toFixed(2);
        }

        let initialRow = document.querySelector(".dentPaintRow");
        if (initialRow) addEventListenersToDentPaintRow(initialRow);
    });
</script>