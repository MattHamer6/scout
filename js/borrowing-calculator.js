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

	// Only select one checkbox at a time
	$(document).on("click", 'input[type="radio"]', function () {
		$('input[type="radio"]').not(this).prop("checked", false);
	});

	// Default select option to 'Yearly'
	$('select.income-duration option[value="yearly"]').attr("selected", true);

	// Hide income inputs based on applicants selected
	$(document).ready(function () {
		// One Applicant
		$("input#oneApplicant").click(function () {
			if ($(this).is(":checked")) {
				$("#app-2").addClass("hidden");
				$("#app-3").addClass("hidden");
				$("#app-4").addClass("hidden");
			}
		});
		// Two Applicants
		$("input#twoApplicants").click(function () {
			if ($(this).is(":checked")) {
				$("#app-1").removeClass("hidden");
				$("#app-2").removeClass("hidden");
				$("#app-3").addClass("hidden");
				$("#app-4").addClass("hidden");
			}
		});
		// Three Applicants
		$("input#threeApplicants").click(function () {
			if ($(this).is(":checked")) {
				$("#app-1").removeClass("hidden");
				$("#app-2").removeClass("hidden");
				$("#app-3").removeClass("hidden");
				$("#app-4").addClass("hidden");
			}
		});
		// Four Applicants
		$("input#fourApplicants").click(function () {
			if ($(this).is(":checked")) {
				$("#app-1").removeClass("hidden");
				$("#app-2").removeClass("hidden");
				$("#app-3").removeClass("hidden");
				$("#app-4").removeClass("hidden");
			}
		});
	});

	// Change Deposit / Value Text dependant on option selected
	$(document).ready(function () {
		$("#mortgage-reason").change(function () {
			if ($(this).val() == 4 || $(this).val() == 5) {
				$("#deposit").text("Estimated property value");
			} else {
				$("#deposit").text("My deposit");
			}
		});
	});

	// Calculations :L

	$("#calculate-borrowing").click(function () {
		// If 1 Applicant is checked
		if ($("input[name='oneApplicant']").is(":checked")) {
			var incomeOne = $("input#income-one").val();
			var totalIncomeOne = 0;

			if ($("#duration-one option:selected").val() == "monthly") {
				var totalIncomeOne = incomeOne * 12;
			} else {
				var totalIncomeOne = incomeOne * 1;
			}

			var low = totalIncomeOne * 3.2;
			var high = totalIncomeOne * 4.5;
			var years = 25;
			var months = years * 12;
			var interest = 3.9;
			var totalAmount = (high / 100) * interest + high;
			var monthlyPayments = totalAmount / months;

			$("#borrow-amount .low")
				.text("£" + low.toFixed(0))
				.digits();
			$("#borrow-amount .high")
				.text("£" + high.toFixed(0))
				.digits();
			$("#high")
				.text("£" + high)
				.digits();
			$("#years").text(years);
			$("#interest").text(interest + "%");
			$("#monthly-payments").text("£" + monthlyPayments.toFixed(2));
		}

		// If 2 Applicants is checked
		if ($("input[name='twoApplicants']").is(":checked")) {
			var incomeOne = $("input#income-one").val();
			var totalIncomeOne = 0;
			var incomeTwo = $("input#income-two").val();
			var totalIncomeTwo = 0;

			if ($("#duration-one option:selected").val() == "monthly") {
				var totalIncomeOne = incomeOne * 12;
			} else {
				var totalIncomeOne = incomeOne * 1;
			}
			if ($("#duration-two option:selected").val() == "monthly") {
				var totalIncomeTwo = incomeTwo * 12;
			} else {
				var totalIncomeTwo = incomeTwo * 1;
			}

			var totalIncome = totalIncomeOne + totalIncomeTwo;
			var low = totalIncome * 2.5;
			var high = totalIncome * 3.5;
			var years = 25;
			var months = years * 12;
			var interest = 3.9;
			var totalAmount = (high / 100) * interest + high;
			var monthlyPayments = totalAmount / months;

			$("#borrow-amount .low")
				.text("£" + low.toFixed(0))
				.digits();
			$("#borrow-amount .high")
				.text("£" + high.toFixed(0))
				.digits();
			$("#high")
				.text("£" + high)
				.digits();
			$("#years").text(years);
			$("#interest").text(interest + "%");
			$("#monthly-payments").text("£" + monthlyPayments.toFixed(2));
		}
	});
	// End jQuery
});
