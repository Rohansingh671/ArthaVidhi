<script>
	document.addEventListener("DOMContentLoaded", function() {
    let searchInputs = document.querySelectorAll(".labourCodeSearch");
    let searchResults = document.querySelectorAll(".labourSearchResults");

    searchInputs.forEach((searchInput, index) => {
        let resultContainer = searchResults[index];

        searchInput.addEventListener("input", function() {
            let query = searchInput.value.trim();
            if (query.length > 0) {
                fetch(`./php/fetchLabour.php?query=${query}`)
                    .then(response => response.json())
                    .then(data => {
                        resultContainer.innerHTML = "";
                        resultContainer.style.display = "block";

                        if (data.length === 0) {
                            resultContainer.innerHTML = "<div>No matching records found</div>";
                        }

                        data.forEach(labour => {
                            let div = document.createElement("div");
                            div.textContent = labour.labourCode;
                            div.dataset.labourID = labour.labourID;
                            div.dataset.labourCharge = labour.labourCharge;

                            div.addEventListener("click", function() {
                                searchInput.value = labour.labourCode;
                                resultContainer.style.display = "none";

                                let row = searchInput.closest(".row");
                                let quantityField = row.querySelector(".labourQuantity");
                                let totalPriceField = row.querySelector(".labourTotal");
                                let netAmountField = row.querySelector(".labourNetAmount");
                                let discountField = row.querySelector(".labourDiscount");

                                quantityField.value = 1;
                                totalPriceField.value = labour.labourCharge;
                                netAmountField.value = labour.labourCharge;

                                function updateNetAmount() {
                                    let discount = parseFloat(discountField.value) || 0;
                                    let total = parseFloat(totalPriceField.value) || 0;
                                    let netAmount = total - (total * (discount / 100));
                                    netAmountField.value = netAmount.toFixed(2);
                                    updateTotalLabourAjaxNetAmount(); // Update total labour amount for ajax
                                    updateFinalLabourBillTotal(); // Update final total labour amount
                                }

                                discountField.addEventListener("input", updateNetAmount);
                                quantityField.addEventListener("input", function() {
                                    let quantity = parseInt(this.value) || 1;
                                    let total = quantity * parseFloat(labour.labourCharge);
                                    totalPriceField.value = total.toFixed(2);
                                    updateNetAmount();
                                });

                                updateTotalLabourAjaxNetAmount(); // Initial update
                            });

                            resultContainer.appendChild(div);
                        });
                    })
                    .catch(error => console.error("Error fetching labour details:", error));
            } else {
                resultContainer.style.display = "none";
            }
        });

        document.addEventListener("click", function(e) {
            if (!searchInput.contains(e.target) && !resultContainer.contains(e.target)) {
                resultContainer.style.display = "none";
            }
        });
    });

    function updateTotalLabourAjaxNetAmount() {
        let totalLabourAjax = 0;
        document.querySelectorAll(".labourNetAmount").forEach(input => {
            totalLabourAjax += parseFloat(input.value) || 0;
        });

        document.getElementById("totalLabourAjax").value = totalLabourAjax.toFixed(2);
        updateFinalLabourBillTotal(); // Update the final bill total
    }
});
</script>