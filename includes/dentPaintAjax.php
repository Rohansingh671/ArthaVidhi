<script>
	document.addEventListener("DOMContentLoaded", function() {
		let searchInputs = document.querySelectorAll(".dentTypeSearch");
		let searchResults = document.querySelectorAll(".dentSearchResults");

		searchInputs.forEach((searchInput, index) => {
			let resultContainer = searchResults[index];

			searchInput.addEventListener("input", function() {
				let query = searchInput.value.trim();
				if (query.length > 0) {
					fetch(`./php/fetchDentPaint.php?query=${query}`)
						.then(response => response.json())
						.then(data => {
							resultContainer.innerHTML = "";
							resultContainer.style.display = "block";

							if (data.length === 0) {
								resultContainer.innerHTML = "<div>No matching records found</div>";
							}

							data.forEach(dent => {
								let div = document.createElement("div");
								div.textContent = dent.dentType;
								div.dataset.dentID = dent.dentID;
								div.dataset.dentCharge = dent.dentCharge;

								div.addEventListener("click", function() {
									searchInput.value = dent.dentType;
									resultContainer.style.display = "none";

									let row = searchInput.closest(".row");
									let quantityField = row.querySelector(".dentQuantity");
									let totalPriceField = row.querySelector(".dentTotal");
									let netAmountField = row.querySelector(".dentNetAmount");
									let discountField = row.querySelector(".dentDiscount");

									quantityField.value = 1;
									totalPriceField.value = dent.dentCharge;
									netAmountField.value = dent.dentCharge;

									function updateNetAmount() {
										let discount = parseFloat(discountField.value) || 0;
										let total = parseFloat(totalPriceField.value) || 0;
										let netAmount = total - (total * (discount / 100));
										netAmountField.value = netAmount.toFixed(2);
										updateTotalDentAjaxNetAmount();
									}

									discountField.addEventListener("input", updateNetAmount);
									quantityField.addEventListener("input", function() {
										let quantity = parseInt(this.value) || 1;
										let total = quantity * parseFloat(dent.dentCharge);
										totalPriceField.value = total.toFixed(2);
										updateNetAmount();
									});

									updateTotalDentAjaxNetAmount();
								});

								resultContainer.appendChild(div);
							});
						})
						.catch(error => console.error("Error fetching dent/paint details:", error));
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

		function updateTotalDentAjaxNetAmount() {
			let totalDentAjax = 0;
			document.querySelectorAll(".dentNetAmount").forEach(input => {
				totalDentAjax += parseFloat(input.value) || 0;
			});

			document.getElementById("totalDentAjax").value = totalDentAjax.toFixed(2);
			updateFinalDentBillTotal();
		}
	});
</script>