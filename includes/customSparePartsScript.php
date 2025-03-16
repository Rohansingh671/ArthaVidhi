<script>
    document.addEventListener("DOMContentLoaded", function() {
        let spareRowCount = 0; // Start with 1 because the first row already exists

        function calculateSparePartsNetAmount(row) {
            let amount = parseFloat(row.querySelector(".customSparePartsAmount").value.trim()) || 0;
            let discount = parseFloat(row.querySelector(".customSparePartsDiscount").value.trim()) || 0;

            discount = Math.min(100, Math.max(0, discount)); // Ensure valid discount range

            let netAmount = amount - (amount * discount / 100);
            row.querySelector(".customSparePartsNetAmount").value = netAmount.toFixed(2);

            updateTotalCustomSpareNetAmount(); // Update custom spare total
        }

        function updateTotalCustomSpareNetAmount() {
            let totalCustomSpare = 0;
            document.querySelectorAll(".customSparePartsNetAmount").forEach(input => {
                totalCustomSpare += parseFloat(input.value) || 0;
            });

            document.getElementById("totalCustomSpare").value = totalCustomSpare.toFixed(2);
            updateFinalBillTotal(); // Update final bill amount
        }

        function addEventListenersToSparePartsRow(row) {
            row.querySelector(".customSparePartsAmount").addEventListener("input", function() {
                calculateSparePartsNetAmount(row);
            });

            row.querySelector(".customSparePartsDiscount").addEventListener("input", function() {
                calculateSparePartsNetAmount(row);
            });

            row.querySelector(".deleteSparePartsRow").addEventListener("click", function() {
                if (document.querySelectorAll(".sparePartsRow").length > 1) {
                    row.remove();
                    spareRowCount--; // Decrease row count when a row is deleted
                    updateTotalCustomSpareNetAmount();
                } else {
                    alert("At least one row is required!");
                }
            });
        }

        document.getElementById("addSparePartsRow").addEventListener("click", function() {
            if (spareRowCount < 5) { // Allow only 5 rows
                let container = document.getElementById("sparePartsContainer");
                let originalRow = container.querySelector(".sparePartsRow");

                if (originalRow) {
                    let newRow = originalRow.cloneNode(true);
                    newRow.querySelectorAll("input").forEach(input => {
                        input.value = input.type === "text" ? "" : "0";
                    });

                    container.appendChild(newRow);
                    addEventListenersToSparePartsRow(newRow);

                    spareRowCount++; // Increment row count when a new row is added
                }
            } else {
                alert("You can add a maximum of 5 rows.");
            }
        });

        function updateFinalBillTotal() {
            let totalCustomSpare = parseFloat(document.getElementById("totalCustomSpare").value) || 0;
            let totalSpareAjax = parseFloat(document.getElementById("totalSpareAjax").value) || 0;

            let finalTotal = totalCustomSpare + totalSpareAjax;
            document.querySelector("input[name='billAmount']").value = finalTotal.toFixed(2);
        }

        let initialRow = document.querySelector(".sparePartsRow");
        if (initialRow) addEventListenersToSparePartsRow(initialRow);
    });
</script>
