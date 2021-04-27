<section class="mortgage-calculator">
    <div class="mortgage-calculator-wrapper">
      <form>
        <aside class="applicant-numbers">
          <?php include "mortgage/applicants.php"; ?>
        </aside>
        <aside class="applicant-income">
          <?php include "mortgage/income.php"; ?>
        </aside>
        <aside class="regular-spending">
          <?php include "mortgage/spending.php"; ?>
        </aside>
        <aside class="reason">
          <?php include "mortgage/reason.php"; ?>
        </aside>
      </form>
      <button id="calculate-borrowing" data-toggle="modal" data-target="#mortgageModal">Calculate</button>
    </div>
</section>

<div class="modal fade" id="mortgageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">

        <aside class="amount">
          <h3>How Much Can You Borrow?</h3>
          <p>Typical upper range of mortgage:</p>
          <span>Based on typical bank's lending criteria</span>
          <b id="borrow-amount"><span class="low"></span> - <span class="high"></span></b>
        </aside>
        <aside class="cost">
          <p>A mortage of <b id="high">£99</b> at <span id="interest"></span> over <span id="years"></span> years would cost you <b id="monthly-payments"></b> per month.</p>
        </aside>
      </div>
    </div>
  </div>
</div>