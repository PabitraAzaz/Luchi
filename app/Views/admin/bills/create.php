<?= $this->extend('admin/components/assemble') ?>
<?= $this->section('title') ?>Documents|Create<?= $this->endSection() ?>
<?= $this->section('content') ?>


<main>
    <?= $this->include('/admin/components/alert_message'); ?>
    <!-- <form method="post" action=<?= base_url('admin/documents/create') ?> enctype="multipart/form-data">
        <?= csrf_field() ?>

        <div class="mb-3">
            <div id="img-container" class="mb-1 border-danger">
                <label for="image" class="form-label">File</label>
                <input type="file" name="file" class="form-control" accept="image/png, image/jpeg, image/jpg, application/pdf">
            </div>
        </div>



        <div class="mb-3">
            <label for="cars" class="form-label">Choose Place</label>
            <select name="place_id" id="place_id" class="form-control">
                <option selected disabled>---Select---</option>

                <?php foreach ($getPlace as $place) : ?>
                    <option value="<?= $place['id'] ?>"><?= $place['place_name'] ?></option>
                <?php endforeach ?>
            </select>
        </div>


        <div class="mb-3">
            <label for="title" class="form-label">Document Name</label>
            <input type="text" name="document_name" class="form-control" value="<?= esc(set_value('document_name')) ?>">
        </div>


        <div class="mb-3">
            <label for="details" class="form-label">Details</label>
            <textarea class="form-control" name="details" cols="30" rows="10" cols="30" rows="10"><?= esc(set_value('details')); ?></textarea>
            <script>
                CKEDITOR.replace('details');
            </script>
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form> -->
    <div class="container border p-4">

    <!-- Shop Logo Centered -->
    <div class="text-center mb-3">
      <img src="/images/logo.png" class="header-logo mb-2" alt="Shop Logo">
    </div>

    <form action="<?= base_url('admin/documents/create') ?>" method="post">

      <?php if (session()->getFlashdata('errors')): ?>
        <div class="alert alert-danger">
          <ul class="mb-0">
            <?php foreach (session()->getFlashdata('errors') as $error): ?>
              <li><?= esc($error) ?></li>
            <?php endforeach ?>
          </ul>
        </div>
      <?php endif; ?>

      <!-- Invoice Header -->
      <div class="d-flex justify-content-between align-items-center border p-2 mb-3">
        <div style="width: 30%;">
          <div class="d-flex align-items-center">
            <label class="me-2 mb-0 white-space-nowrap"><strong>Invoice&nbsp;No:</strong></label>
            <input type="text" class="form-control form-control-sm" name="invoice_no">
          </div>
        </div>
        <div class="text-center" style="width: 40%;">
          <h5 class="fw-bold mb-0">Tax Invoice</h5>
        </div>
        <div style="width: 30%;">
          <div class="d-flex align-items-center">
            <label class="me-2 mb-0"><strong>Date:</strong></label>
            <input type="date" class="form-control form-control-sm" name="invoice_date">
          </div>
        </div>
      </div>

      <!-- Customer and Store Info -->
      <div class="row mb-4">
        <!-- Customer Details -->
        <div class="col-md-6">
          <h6>Customer Details</h6>
          <table class="table table-sm borderless">
            <tr>
              <td>Customer ID:</td>
              <td><input type="text" class="form-control" name="customer_id"></td>
            </tr>
            <tr>
              <td>Name:</td>
              <td><input type="text" class="form-control" name="customer_name"></td>
            </tr>
            <tr>
              <td>Address:</td>
              <td><textarea class="form-control" name="customer_address"></textarea></td>
            </tr>
            <tr>
              <td>State:</td>
              <td>
                <div class="d-flex gap-2">
                  <input type="text" class="form-control" name="customer_state" placeholder="State">
                  <input type="text" class="form-control" name="customer_state_code" placeholder="Code">
                </div>
              </td>
            </tr>
            <tr>
              <td>GSTIN/No:</td>
              <td><input type="text" class="form-control" name="customer_gstin"></td>
            </tr>
            <tr>
              <td>Card No:</td>
              <td><input type="text" class="form-control" name="customer_card_no"></td>
            </tr>
            <tr>
              <td>Order No:</td>
              <td><input type="text" class="form-control" name="order_no"></td>
            </tr>
          </table>
        </div>

        <!-- Store Details (Read-only) -->
        <div class="col-md-6">
          <h6>Store Details</h6>
          <table class="table table-sm borderless">
            <tr>
              <td>Store:</td>
              <td><input type="text" class="form-control readonly-input" value="Sodepur" readonly></td>
            </tr>
            <tr>
              <td>Address:</td>
              <td>
                <textarea class="form-control readonly-input" readonly>Plot No. 4, Holding No. 14, Burmah Shell, Ward No. 23, Sodepur, Kolkata - 700110</textarea>
              </td>
            </tr>
            <tr>
              <td>State:</td>
              <td>
                <div class="d-flex gap-2">
                  <input type="text" class="form-control readonly-input" value="West Bengal" readonly>
                  <input type="text" class="form-control readonly-input" value="19" readonly>
                </div>
              </td>
            </tr>
            <tr>
              <td>GSTIN/No:</td>
              <td><input type="text" class="form-control readonly-input" value="19AGBCW5985J1ZL" readonly></td>
            </tr>
            <tr>
              <td>CIN No:</td>
              <td><input type="text" class="form-control readonly-input" value="L63111WB1994PLC064637" readonly></td>
            </tr>
            <tr>
              <td>Phone:</td>
              <td><input type="text" class="form-control readonly-input" value="033-2565-6666" readonly></td>
            </tr>
          </table>
        </div>
      </div>
      <hr>
      <!-- Shipping & Delivery Section -->
      <div class="row mb-4">
        <!-- Shipping Address -->
        <div class="col-md-6">
          <h6 class="fw-bold mb-2">Shipping Address</h6>
          <div class="border p-3">
            <table class="table table-sm borderless mb-0">
              <tr>
                <td style="width: 40%;">Address:</td>
                <td><input type="text" class="form-control" name="shipping_address"></td>
              </tr>
              <tr>
                <td>City & ZIP:</td>
                <td>
                  <div class="d-flex gap-2">
                    <input type="text" class="form-control" name="shipping_city" placeholder="Kolkata">
                    <input type="text" class="form-control" name="shipping_zip" placeholder="700000">
                  </div>
                </td>
              </tr>
              <tr>
                <td>State:</td>
                <td><input type="text" class="form-control" name="shipping_state"></td>
              </tr>
              <tr>
                <td>Country:</td>
                <td><input type="text" class="form-control" name="shipping_country" value="IND"></td>
              </tr>
            </table>
          </div>
        </div>

        <!-- Delivery Details -->
        <div class="col-md-6">
          <h6 class="fw-bold mb-2">Delivery Details</h6>
          <div class="border p-3">
            <table class="table table-sm borderless mb-0">
              <tr>
                <td style="width: 40%;">Transport Mode:</td>
                <td><input type="text" class="form-control" name="transport_mode"></td>
              </tr>
              <tr>
                <td>Vehicle No:</td>
                <td><input type="text" class="form-control" name="vehicle_no"></td>
              </tr>
              <tr>
                <td>Place of Supply:</td>
                <td><input type="text" class="form-control" name="place_of_supply"></td>
              </tr>
              <tr>
                <td>Country:</td>
                <td><input type="text" class="form-control" name="delivery_country" value="IND"></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <hr>
      <!-- Items Table -->
      <h6>Items</h6>
      <table class="table table-bordered table-sm text-center">
        <thead class="table-light">
          <tr>
            <th>Tag No</th>
            <th>Description</th>
            <th>HSN</th>
            <th>Fineness</th>
            <th>Qty</th>
            <th>Gross Wt</th>
            <th>Net Wt</th>
            <th>Value</th>
            <th>Discount</th>
            <th>Taxable</th>
            <th>Tax</th>
            <th>Amt (INR)</th>
          </tr>
        </thead>
        <tbody id="item-rows">
          <tr>
            <td><input type="text" class="form-control" name="tag_no[]"></td>
            <td><input type="text" class="form-control" name="description[]"></td>
            <td><input type="text" class="form-control" name="hsn[]"></td>
            <td><input type="text" class="form-control" name="fineness[]"></td>
            <td><input type="text" class="form-control" name="qty[]"></td>
            <td><input type="text" class="form-control" name="gross_wt[]"></td>
            <td><input type="text" class="form-control" name="net_wt[]"></td>
            <td><input type="text" class="form-control" name="value[]"></td>
            <td><input type="text" class="form-control" name="discount[]"></td>
            <td><input type="text" class="form-control" name="taxable[]"></td>
            <td><input type="text" class="form-control" name="tax[]"></td>
            <td><input type="text" class="form-control" name="amt[]"></td>
          </tr>
        </tbody>

        <!-- Total Row -->
        <tr class="table-light fw-bold">
          <td colspan="7" class="text-start">Total</td>
          <td><input type="text" class="form-control" name="total_value" readonly></td>
          <td><input type="text" class="form-control" name="total_discount" readonly></td>
          <td><input type="text" class="form-control" name="total_taxable" readonly></td>
          <td><input type="text" class="form-control" name="total_tax" readonly></td>
          <td><input type="text" class="form-control" name="total_amt" readonly></td>
        </tr>
      </table>

      <button type="button" class="btn btn-sm btn-secondary mb-3" onclick="addRow()">Add Row</button>
      <hr>
      <!-- Payment & Summary Section -->
      <div class="row mb-4">
        <!-- Payment Details / Adjustment Detail (Left 60%) -->
        <div class="col-md-7">
          <h6 class="fw-bold">Payment Details / Adjustment Detail</h6>
          <table class="table table-sm table-bordered" style="min-height: 160px;">
            <thead class="table-light">
              <tr>
                <th style="width: 70%;">Dynamic QR Code</th>
                <th style="width: 30%;">
                  <input type="text" class="form-control form-control-sm" name="payment_amount_heading" placeholder="₹">
                </th>
              </tr>
            </thead>
            <tbody>
              <!-- First Row -->
              <tr>
                <!-- Left Column -->
                <td>
                  <div class="mb-2 d-flex align-items-center">
                    <label class="me-2 mb-0">MODE:</label>
                    <input type="text" class="form-control form-control-sm" name="payment_mode" value="Customer advance adjustment">
                  </div>
                  <div class="mb-2 d-flex align-items-center">
                    <label class="me-2 mb-0">DATETIME:</label>
                    <input type="datetime-local" class="form-control form-control-sm" name="payment_datetime">
                  </div>
                  <div class="d-flex align-items-center">
                    <label class="me-2 mb-0">REF:</label>
                    <input type="text" class="form-control form-control-sm" name="payment_ref" placeholder="C021-C021T2-1742456655871">
                  </div>
                </td>

                <!-- Right Column -->
                <td style="vertical-align: top;">
                  <input type="text" class="form-control" name="payment_amount_1" placeholder="₹">
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <!-- Round Off / Summary (Right 40%) -->
        <div class="col-md-5">
          <table class="table table-sm mb-0">
            <tr>
              <td style="width: 50%;">Round Off:</td>
              <td><input type="text" class="form-control" name="round_off"></td>
            </tr>
            <tr>
              <td>Total Amount:</td>
              <td><input type="text" class="form-control" name="total_amount"></td>
            </tr>
            <tr>
              <td>Amount in Words:</td>
              <td><input type="text" class="form-control" name="amount_words_summary"></td>
            </tr>
          </table>

          <!-- <h6 class="fw-bold mt-3">Tax Summary</h6> -->
          <table class="table table-bordered table-sm text-center">
            <thead class="table-light">
              <tr>
                <th>Tax Details</th>
                <th>Taxable</th>
                <th>Rate</th>
                <th>Tax</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>CGST</td>
                <td><input type="text" class="form-control" name="cgst_taxable"></td>
                <td><input type="text" class="form-control" name="cgst_rate"></td>
                <td><input type="text" class="form-control" name="cgst_tax"></td>
              </tr>
              <tr>
                <td>SGST/UGST</td>
                <td><input type="text" class="form-control" name="sgst_taxable"></td>
                <td><input type="text" class="form-control" name="sgst_rate"></td>
                <td><input type="text" class="form-control" name="sgst_tax"></td>
              </tr>
              <tr>
                <td colspan="3" class="text-end fw-bold">Total</td>
                <td><input type="text" class="form-control" name="total_tax_summary"></td>
              </tr>
            </tbody>
          </table>

          <div class="mb-2 d-flex justify-content-between align-items-center">
            <label class="fw-bold mb-0" for="reverse_charge_amount" style="white-space: nowrap;">
              Amount Payable Under Reverse Charge:
            </label>
            <input type="text" class="form-control ms-2" name="reverse_charge_amount" id="reverse_charge_amount" style="max-width: 180px;">
          </div>

        </div>
      </div>
      <hr>
      <!-- Terms & Conditions Section -->
      <div class="mt-4">
        <h6 class="fw-bold">Terms & Conditions</h6>
        <ul class="small">
          <li>Goods once sold will not be taken back or exchanged.</li>
          <li>Payment must be made in full before delivery.</li>
          <li>Warranty, if any, is as per manufacturer's terms only.</li>
          <li>Subject to Kolkata jurisdiction only.</li>
        </ul>
      </div>
      <hr>
      <!-- Acknowledgment Section -->
      <div class="border p-3 mt-4">
        <div class="form-check mb-3">
          <input class="form-check-input" type="checkbox" id="acknowledgment" required>
          <label class="form-check-label" for="acknowledgment">
            I have read and understood the above information.
          </label>
        </div>

        <!-- Customer Name -->
        <div class="d-flex align-items-center mb-3">
          <label class="me-2 mb-0"><strong>Customer Name:</strong></label>
          <input type="text" class="form-control form-control-sm" name="customer_ack_name" style="max-width: 250px;">
        </div>

        <!-- Signature Fields Side by Side -->
        <div class="row">
          <div class="col-md-6">
            <label><strong>Signature:</strong></label>
            <!-- <div class="border" style="height: 60px;"></div> -->
          </div>
          <div class="col-md-6 text-end">
            <label><strong>Authorised Signature</strong></label>
            <!-- <div class="border" style="height: 60px;"></div> -->
          </div>
        </div>
      </div>
    </form>
  </div>

  <!-- Certificate Note (Centered & Enlarged) -->
  <div class="text-center mt-4">
    <p style="font-size: 1.1rem; font-weight: 500; max-width: 1300px; margin: auto;">
      <strong>Certificate:</strong> We hereby certify that the particulars given above are true and correct to the best of our knowledge and belief. This is a computer-generated invoice and does not require a physical signature.
    </p>
  </div>
</main>

<?= $this->endSection() ?>
<!-- /.content -->