jQuery(function ($) {
	// Add commas to large numbers (add .digits() to end of string)
	$.fn.digits = function () {
		return this.each(function () {
			$(this).text(
				$(this)
					.text()
					.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")
			);
		});
	};

	$("#calculate-cost").click(function () {
		// If single applicant
		if ($("input[name='singleApplicant']").is(":checked")) {
			var propertyValue = $("input#property-price").val();
			var deposit = $("input#property-deposit").val();
			var term = $("input#repayment-term").val() * 12;
			var interest = $("input#interest-rate").val();
			var mortgageAmount = propertyValue - deposit;
			var interestAmount = (mortgageAmount / 100) * interest;
			var totalAmount = mortgageAmount + interestAmount;
			var high = mortgageAmount / 3.2;
			var low = mortgageAmount / 4.5;

			$("#monthly")
				.text("£" + (totalAmount / term).toFixed(0))
				.digits();
			$("span.mortgage-amount")
				.text("£" + mortgageAmount)
				.digits();
			$("#interest").text($("input#interest-rate").val() + "%");
			$("#term").text($("input#repayment-term").val());
			$("#totalInterest")
				.text("£" + interestAmount.toFixed(0))
				.digits();
			$("#low")
				.text("£" + low.toFixed(0))
				.digits();
			$("#high")
				.text("£" + high.toFixed(0))
				.digits();
		}

		// If two applicants
		if ($("input[name='dualApplicant']").is(":checked")) {
			var propertyValue = $("input#property-price").val();
			var deposit = $("input#property-deposit").val();
			var term = $("input#repayment-term").val() * 12;
			var interest = $("input#interest-rate").val();
			var mortgageAmount = propertyValue - deposit;
			var interestAmount = (mortgageAmount / 100) * interest;
			var totalAmount = mortgageAmount + interestAmount;
			var high = mortgageAmount / 2.5;
			var low = mortgageAmount / 3.5;

			$("#monthly")
				.text("£" + (totalAmount / term).toFixed(0))
				.digits();
			$("span.mortgage-amount")
				.text("£" + mortgageAmount)
				.digits();
			$("#interest").text($("input#interest-rate").val() + "%");
			$("#term").text($("input#repayment-term").val());
			$("#totalInterest")
				.text("£" + interestAmount.toFixed(0))
				.digits();
			$("#low")
				.text("£" + low.toFixed(0))
				.digits();
			$("#high")
				.text("£" + high.toFixed(0))
				.digits();
		}
	});
	// End jQuery
});
