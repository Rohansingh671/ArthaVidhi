<script>
    document.addEventListener("DOMContentLoaded", function() {
        let rowCount = 0; // Track the number of rows added

        function calculateNetAmount(row) {
            let amount = parseFloat(row.querySelector(".customLubricantAmount").value.trim()) || 0;
            let discount = parseFloat(row.querySelector(".customLubricantDiscount").value.trim()) || 0;

            discount = Math.min(100, Math.max(0, discount)); // Ensure discount is valid

            let netAmount = amount - (amount * discount / 100);
            row.querySelector(".customLubricantNetAmount").value = netAmount.toFixed(2);

            updateTotalCustomLubricantNetAmount(); // Update total lubricant amount
        }

        function updateTotalCustomLubricantNetAmount() {
            let totalCustomLubricant = 0;
            document.querySelectorAll(".customLubricantNetAmount").forEach(input => {
                totalCustomLubricant += parseFloat(input.value) || 0;
            });

            document.getElementById("totalCustomLubricant").value = totalCustomLubricant.toFixed(2);
            updateFinalLubricantBillTotal(); // Ensure final lubricant bill amount updates correctly
        }

        function addEventListenersToLubricantRow(row) {
            row.querySelector(".customLubricantAmount").addEventListener("input", function() {
                calculateNetAmount(row);
            });

            row.querySelector(".customLubricantDiscount").addEventListener("input", function() {
                calculateNetAmount(row);
            });

            row.querySelector(".deleteRow").addEventListener("click", function() {
                if (document.querySelectorAll(".lubricantRow").length > 1) {
                    row.remove();
                    updateTotalCustomLubricantNetAmount();
                    rowCount--; // Decrease the row count when a row is deleted
                } else {
                    alert("At least one row is required!");
                }
            });
        }

        document.getElementById("toggleCustomButton").addEventListener("click", function() {
            if (rowCount < 25) { // Check if the number of rows is less than 10
                let container = document.getElementById("lubricantContainer");
                let originalRow = container.querySelector(".lubricantRow"); // Select the first row only

                if (originalRow) {
                    let newRow = originalRow.cloneNode(true);
                    newRow.querySelectorAll("input").forEach(input => {
                        input.value = input.type === "text" ? "" : "0";
                    });

                    container.appendChild(newRow);
                    addEventListenersToLubricantRow(newRow);

                    rowCount++; // Increment the row count after adding a new row
                }
            } else {
                alert("You can add a maximum of 10 rows.");
            }
        });

        function updateFinalLubricantBillTotal() {
            let totalCustomLubricant = parseFloat(document.getElementById("totalCustomLubricant").value) || 0;
            let totalLubricantAjax = parseFloat(document.getElementById("totalLubricantAjax").value) || 0;

            let finalTotal = totalCustomLubricant + totalLubricantAjax;
            document.querySelector("input[name='lubricantBillAmount']").value = finalTotal.toFixed(2);
        }

        let initialRow = document.querySelector(".lubricantRow");
        if (initialRow) addEventListenersToLubricantRow(initialRow);
    });
</script>
