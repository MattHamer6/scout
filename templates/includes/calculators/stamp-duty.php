<section class="stamp-calculator">
    <div class="stamp-calculator-wrapper">
      <form>
        <?php // Property Price ?>
        <aside class="property-price">
          <label class="form-label">Property Value</label>
          <span>
            <input type="number" id="property-price">
          </span>
        </aside>
        <?php // Location ?>
        <aside class="location">
          <label class="form-label">Property Location</label>
          <select name="property-location" id="property-location">
            <option value="england">England or Northern Ireland</option>
            <option value="wales">Wales</option>
            <option value="scotland">Scotland</option>
          </select>
        </aside>
        <?php // First Time Buyer? ?>
        <aside class="first-time-buyer">
          <label class="form-label">Are you a first time buyer?</label>
          <select name="first-time" id="first-time">
            <option value="1">No</option>
            <option value="2">Yes</option>
          </select>
        </aside>
        <?php // Second Home? ?>
        <aside class="rental-house">
          <label class="form-label">Will this be a second home or rental property?</label>
          <select name="second-home" id="second-home">
            <option value="1">No</option>
            <option value="2">Yes</option>
          </select>
        </aside>
      </form>
      <button id="calculate-stamp">Calculate</button>
      <p class="stamp-amount d-none">You can expect to pay <span id="stamp-amount"></span> stamp duty.</p>
      <p class="stamp-error d-none">Please fill in the property value field</p>
    </div>
</section>
