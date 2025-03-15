<script>
    document.addEventListener("DOMContentLoaded", function() {
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
    }

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
