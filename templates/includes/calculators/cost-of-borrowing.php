<section class="cost-of-borrowing-calculator">
  <div class="cost-of-borrowing-calculator-wrapper">
    <form>
      <?php // How many applicants? ?>
      <aside class="applicant-numbers">
        <label class="form-label">How many people will be applying for the mortgage?</label>
        <label class="radio">
          <input id="singleApplicant" name="singleApplicant" type="radio" value="1" checked=""><span>Just Me</span>
        </label>
        <label class="radio">
          <input id="dualApplicant" name="dualApplicant" type="radio" value="2"><span>Two of us</span>
        </label>
      </aside>
      <?php // Property Price ?>
      <aside class="property-price">
        <label class="form-label">Property Value</label>
        <span>
          <input type="number" id="property-price">
        </span>
      </aside>
      <?php // Deposit ?>
      <aside class="property-deposit">
        <label class="form-label">Deposit</label>
        <span>
          <input type="number" id="property-deposit">
        </span>
      </aside>
      <?php // Optional Fields ?>
      <aside class="optional-fields">
        <div>
          <label class="form-label">Repayment Period</label>
          <span>
            <input type="number" id="repayment-term" value="25">
          </span>
        </div>
        <div>
          <label class="form-label">Interest Rate</label>
          <span>
            <input type="number" id="interest-rate" value="3.9">
          </span>
        </div>
      </aside>

    </form>
    <button id="calculate-cost" data-toggle="modal" data-target="#borrowingModal">Submit</button>
  </div>

  <?php // Modal popup after submission ?>
  <div class="modal fade" id="borrowingModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">

            <p>Actual loan amounts and affordability criteria will differ across lenders. Your home may be repossessed if you do not keep up repayments on a mortgage.</p>
            <div>
              <b id="monthly"></b>
              <p>On a repayment mortgage of <span class="mortgage-amount"></span> at <span id="interest"></span>
            over <span id="term"></span> years.</p>
              <p>Total interest paid will be approximately <span id="totalInterest"></span> over the mortgage term</p>
            </div>
            <div>
              <p>To qualify for a mortgage of <span class="mortgage-amount"></span>, lenders will typically require
            a gross annual salary of</p>

              <b id="salary"><span id="low"></span> to <span id="high"></span></b>
            </div>

        </div>
      </div>
    </div>
  </div>
<?php // End ?>
</section>
