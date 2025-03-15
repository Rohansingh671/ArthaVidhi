<script>
   document.addEventListener("DOMContentLoaded", function() {
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

    function updateFinalDentBillTotal() {
        let totalCustomDent = parseFloat(document.getElementById("totalCustomDent").value) || 0;
        let totalDentAjax = parseFloat(document.getElementById("totalDentAjax").value) || 0;

        let finalTotal = totalCustomDent + totalDentAjax;
        document.querySelector("input[name='dentBillAmount']").value = finalTotal.toFixed(2);
    }

    function addEventListenersToDentPaintRow(row) {
        row.querySelector(".customDentPaintAmount").addEventListener("input", function() {
            calculateDentPaintNetAmount(row);
        });

        row.querySelector(".customDentPaintDiscount").addEventListener("input", function() {
            calculateDentPaintNetAmount(row);
        });
    }

    let initialRow = document.querySelector(".dentPaintRow");
    if (initialRow) addEventListenersToDentPaintRow(initialRow);
});
</script>