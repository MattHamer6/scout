document.getElementById("calculate-stamp").onclick = function () {
	var t = parseInt(document.getElementById("property-price").value),
		e = document.getElementById("property-location").value,
		s = document.getElementById("first-time").value,
		n = document.getElementById("second-home").value,
		r = 0;
	switch (e) {
		case "england":
			if ("1" === n)
				for (
					var i = [
							{ startsAt: 0, endsAt: 500000, unitPrice: 0 },
							{ startsAt: 500001, endsAt: 925000, unitPrice: 0.05 },
							{ startsAt: 925001, endsAt: 1500000, unitPrice: 0.1 },
							{ startsAt: 1500001, endsAt: 9999999999, unitPrice: 0.12 }
						],
						A = 0;
					A < i.length && t >= i[A].startsAt;
					A++
				)
					console.log("Stamp Duty Payable: " + r),
						t > i[A].endsAt
							? (r += (i[A].endsAt - i[A].startsAt) * i[A].unitPrice)
							: (r += (t - i[A].startsAt) * i[A].unitPrice);
			else if ("2" === n)
				for (
					i = [
						{ startsAt: 0, endsAt: 500000, unitPrice: 0.03 },
						{ startsAt: 500001, endsAt: 925000, unitPrice: 0.08 },
						{ startsAt: 925001, endsAt: 1500000, unitPrice: 0.13 },
						{ startsAt: 1500001, endsAt: 9999999999, unitPrice: 0.15 }
					],
						A = 0;
					A < i.length && t >= i[A].startsAt;
					A++
				)
					console.log("Stamp Duty Payable: " + r),
						t > i[A].endsAt
							? (r += (i[A].endsAt - i[A].startsAt) * i[A].unitPrice)
							: (r += (t - i[A].startsAt) * i[A].unitPrice);
			break;
		case "wales":
			if ("1" === n)
				for (
					i = [
						{ startsAt: 0, endsAt: 18e4, unitPrice: 0 },
						{ startsAt: 180001, endsAt: 25e4, unitPrice: 0.035 },
						{ startsAt: 250001, endsAt: 4e5, unitPrice: 0.05 },
						{ startsAt: 400001, endsAt: 75e4, unitPrice: 0.075 },
						{ startsAt: 750001, endsAt: 15e5, unitPrice: 0.1 },
						{ startsAt: 1500001, endsAt: 9999999999, unitPrice: 0.12 }
					],
						A = 0;
					A < i.length && t >= i[A].startsAt;
					A++
				)
					console.log("Stamp Duty Payable: " + r),
						t > i[A].endsAt
							? (r += (i[A].endsAt - i[A].startsAt) * i[A].unitPrice)
							: (r += (t - i[A].startsAt) * i[A].unitPrice);
			else if ("2" === n)
				for (
					i = [
						{ startsAt: 0, endsAt: 18e4, unitPrice: 0.03 },
						{ startsAt: 180001, endsAt: 25e4, unitPrice: 0.065 },
						{ startsAt: 250001, endsAt: 4e5, unitPrice: 0.08 },
						{ startsAt: 400001, endsAt: 75e4, unitPrice: 0.105 },
						{ startsAt: 750001, endsAt: 15e5, unitPrice: 0.13 },
						{ startsAt: 1500001, endsAt: 9999999999, unitPrice: 0.15 }
					],
						A = 0;
					A < i.length && t >= i[A].startsAt;
					A++
				)
					console.log("Stamp Duty Payable: " + r),
						t > i[A].endsAt
							? (r += (i[A].endsAt - i[A].startsAt) * i[A].unitPrice)
							: (r += (t - i[A].startsAt) * i[A].unitPrice);
			break;
		case "scotland":
			if ("1" === s && "1" === n)
				for (
					i = [
						{ startsAt: 0, endsAt: 145e3, unitPrice: 0 },
						{ startsAt: 145001, endsAt: 25e4, unitPrice: 0.02 },
						{ startsAt: 250001, endsAt: 325e3, unitPrice: 0.05 },
						{ startsAt: 325001, endsAt: 75e4, unitPrice: 0.1 },
						{ startsAt: 750001, endsAt: 9999999999, unitPrice: 0.12 }
					],
						A = 0;
					A < i.length && t >= i[A].startsAt;
					A++
				)
					console.log("Stamp Duty Payable: " + r),
						t > i[A].endsAt
							? (r += (i[A].endsAt - i[A].startsAt) * i[A].unitPrice)
							: (r += (t - i[A].startsAt) * i[A].unitPrice);
			else if ("2" === s && "1" === n)
				for (
					i = [
						{ startsAt: 0, endsAt: 175e3, unitPrice: 0 },
						{ startsAt: 175001, endsAt: 25e4, unitPrice: 0.02 },
						{ startsAt: 250001, endsAt: 325e3, unitPrice: 0.05 },
						{ startsAt: 325001, endsAt: 75e4, unitPrice: 0.1 },
						{ startsAt: 750001, endsAt: 9999999999, unitPrice: 0.12 }
					],
						A = 0;
					A < i.length && t >= i[A].startsAt;
					A++
				)
					console.log("Stamp Duty Payable: " + r),
						t > i[A].endsAt
							? (r += (i[A].endsAt - i[A].startsAt) * i[A].unitPrice)
							: (r += (t - i[A].startsAt) * i[A].unitPrice);
			else if ("2" === n)
				for (
					i = [
						{ startsAt: 0, endsAt: 145e3, unitPrice: 0.04 },
						{ startsAt: 145001, endsAt: 25e4, unitPrice: 0.06 },
						{ startsAt: 250001, endsAt: 325e3, unitPrice: 0.09 },
						{ startsAt: 325001, endsAt: 75e4, unitPrice: 0.14 },
						{ startsAt: 750001, endsAt: 9999999999, unitPrice: 0.16 }
					],
						A = 0;
					A < i.length && t >= i[A].startsAt;
					A++
				)
					console.log("Stamp Duty Payable: " + r),
						t > i[A].endsAt
							? (r += (i[A].endsAt - i[A].startsAt) * i[A].unitPrice)
							: (r += (t - i[A].startsAt) * i[A].unitPrice);
	}

	// Calculate Stamp Duty
	document.getElementById("stamp-amount").innerHTML =
		"&pound;" +
		Math.round(r)
			.toString()
			.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
};

jQuery(function ($) {
	$("#calculate-stamp").click(function () {
		if ($("input#property-price").val()) {
			$(".stamp-amount").removeClass("d-none");
			$(".stamp-error").addClass("d-none");
		} else {
			$(".stamp-amount").addClass("d-none");
			$(".stamp-error").removeClass("d-none");
		}
	});
});
