<script>
	document.addEventListener("DOMContentLoaded", function() {
    let searchInputs = document.querySelectorAll(".sparePartsSearch");
    let searchResults = document.querySelectorAll(".spareSearchResults");

    searchInputs.forEach((searchInput, index) => {
        let resultContainer = searchResults[index];

        searchInput.addEventListener("input", function() {
            let query = searchInput.value.trim();
            if (query.length > 0) {
                fetch(`./php/fetchSpareParts.php?query=${query}`)
                    .then(response => response.json())
                    .then(data => {
                        resultContainer.innerHTML = "";
                        resultContainer.style.display = "block";

                        if (data.length === 0) {
                            resultContainer.innerHTML = "<div>No matching parts found</div>";
                        }

                        data.forEach(part => {
                            let div = document.createElement("div");
                            div.textContent = part.spareType;
                            div.dataset.spareID = part.spareID;
                            div.dataset.spareCharge = part.spareCharge;

                            div.addEventListener("click", function() {
                                searchInput.value = part.spareType;
                                resultContainer.style.display = "none";

                                let row = searchInput.closest(".row");
                                let quantityField = row.querySelector(".spareQuantity");
                                let totalPriceField = row.querySelector(".spareTotal");
                                let netAmountField = row.querySelector(".spareNetAmount");
                                let discountField = row.querySelector(".spareDiscount");

                                quantityField.value = 1;
                                totalPriceField.value = part.spareCharge;
                                netAmountField.value = part.spareCharge;

                                function updateNetAmount() {
                                    let discount = parseFloat(discountField.value) || 0;
                                    let total = parseFloat(totalPriceField.value) || 0;
                                    let netAmount = total - (total * (discount / 100));
                                    netAmountField.value = netAmount.toFixed(2);
                                    updateTotalSpareAjaxNetAmount();
                                }

                                discountField.addEventListener("input", updateNetAmount);
                                quantityField.addEventListener("input", function() {
                                    let quantity = parseInt(this.value) || 1;
                                    let total = quantity * parseFloat(part.spareCharge);
                                    totalPriceField.value = total.toFixed(2);
                                    updateNetAmount();
                                });

                                updateTotalSpareAjaxNetAmount();
                            });

                            resultContainer.appendChild(div);
                        });
                    })
                    .catch(error => console.error("Error fetching spare parts:", error));
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

    function updateTotalSpareAjaxNetAmount() {
        let totalSpareAjax = 0;
        document.querySelectorAll(".spareNetAmount").forEach(input => {
            totalSpareAjax += parseFloat(input.value) || 0;
        });

        document.getElementById("totalSpareAjax").value = totalSpareAjax.toFixed(2);
        updateFinalBillTotal();
    }
});
</script>