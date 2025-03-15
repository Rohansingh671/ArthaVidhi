<script>
    document.addEventListener("DOMContentLoaded", function() {
        let searchInputs = document.querySelectorAll(".lubricantSearch");
        let searchResults = document.querySelectorAll(".lubricantSearchResults");

        searchInputs.forEach((searchInput, index) => {
            let resultContainer = searchResults[index];

            searchInput.addEventListener("input", function() {
                let query = searchInput.value.trim();
                if (query.length > 0) {
                    fetch(`./php/fetchLubricant.php?query=${query}`)
                        .then(response => response.json())
                        .then(data => {
                            resultContainer.innerHTML = "";
                            resultContainer.style.display = "block";

                            if (data.length === 0) {
                                resultContainer.innerHTML = "<div>No matching records found</div>";
                            }

                            data.forEach(lubricant => {
                                let div = document.createElement("div");
                                div.textContent = lubricant.lubricantType;
                                div.dataset.lubricantID = lubricant.lubricantID;
                                div.dataset.lubricantCharge = lubricant.lubricantCharge;

                                div.addEventListener("click", function() {
                                    searchInput.value = lubricant.lubricantType;
                                    resultContainer.style.display = "none";

                                    let row = searchInput.closest(".row");
                                    let quantityField = row.querySelector(".lubricantQuantity");
                                    let totalPriceField = row.querySelector(".lubricantTotal");
                                    let netAmountField = row.querySelector(".lubricantNetAmount");
                                    let discountField = row.querySelector(".lubricantDiscount");

                                    quantityField.value = 1;
                                    totalPriceField.value = lubricant.lubricantCharge;
                                    netAmountField.value = lubricant.lubricantCharge;

                                    function updateNetAmount() {
                                        let discount = parseFloat(discountField.value) || 0;
                                        let total = parseFloat(totalPriceField.value) || 0;
                                        let netAmount = total - (total * (discount / 100));
                                        netAmountField.value = netAmount.toFixed(2);
                                        updateTotalLubricantAjaxNetAmount();  // Ensure total is updated
                                    }

                                    discountField.addEventListener("input", updateNetAmount);
                                    quantityField.addEventListener("input", function() {
                                        let quantity = parseInt(this.value) || 1;
                                        let total = quantity * parseFloat(lubricant.lubricantCharge);
                                        totalPriceField.value = total.toFixed(2);
                                        updateNetAmount();
                                    });

                                    updateTotalLubricantAjaxNetAmount();  // Ensure total is updated initially
                                });

                                resultContainer.appendChild(div);
                            });
                        })
                        .catch(error => console.error("Error fetching lubricant details:", error));
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

        function updateTotalLubricantAjaxNetAmount() {
			let totalLubricantAjax = 0;
			document.querySelectorAll(".lubricantNetAmount").forEach(input => {
				totalLubricantAjax += parseFloat(input.value) || 0;
			});

			document.getElementById("totalLubricantAjax").value = totalLubricantAjax.toFixed(2);
			updateFinalLubricantBillTotal();
		}
    });
</script>