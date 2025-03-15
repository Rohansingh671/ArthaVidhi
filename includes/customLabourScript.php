<script>
    document.addEventListener("DOMContentLoaded", function() {
        function calculateLabourNetAmount(row) {
            let amount = parseFloat(row.querySelector(".customLabourAmount").value.trim()) || 0;
            let discount = parseFloat(row.querySelector(".customLabourDiscount").value.trim()) || 0;

            discount = Math.min(100, Math.max(0, discount)); // Ensure discount is within 0-100%

            let netAmount = amount - (amount * discount / 100);
            row.querySelector(".customLabourNetAmount").value = netAmount.toFixed(2);

            updateTotalCustomLabourNetAmount(); // Update total labour net amount
            updateFinalDentBillTotal(); // Update final labour bill amount
        }

        function updateTotalCustomLabourNetAmount() {
            let totalCustomLabour = 0;
            document.querySelectorAll(".customLabourNetAmount").forEach(input => {
                totalCustomLabour += parseFloat(input.value) || 0;
            });

            document.getElementById("totalCustomLabour").value = totalCustomLabour.toFixed(2);
            updateFinalDentBillTotal(); // Update final labour bill amount
        }

        function addEventListenersToLabourRow(row) {
            row.querySelector(".customLabourAmount").addEventListener("input", function() {
                calculateLabourNetAmount(row);
            });

            row.querySelector(".customLabourDiscount").addEventListener("input", function() {
                calculateLabourNetAmount(row);
            });

            row.querySelector(".deleteLabourRow").addEventListener("click", function() {
                if (document.querySelectorAll(".labourRow").length > 1) {
                    row.remove();
                    updateTotalCustomLabourNetAmount();
                } else {
                    alert("At least one row is required!");
                }
            });
        }

        function updateFinalDentBillTotal() {
            let totalCustomLabour = parseFloat(document.getElementById("totalCustomLabour").value) || 0;
            let totalLabourAjax = parseFloat(document.getElementById("totalLabourAjax").value) || 0;

            let finalLabourBillAmount = totalCustomLabour + totalLabourAjax;

            document.querySelector("[name='labourBillAmount']").value = finalLabourBillAmount.toFixed(2);
        }

        let initialRow = document.querySelector(".labourRow");
        if (initialRow) addEventListenersToLabourRow(initialRow);
    });
</script>
