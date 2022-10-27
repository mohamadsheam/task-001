
<div class="container-fluid">
    <div class="row">

        <div class="col-md-12">
            <div class="card">
              <div class="card-header text-bg-primary">
                <h5>Currency Table

                    <button class="btn btn-dark" onclick="reloadDataFn()">
                        Fetch Again
                    </button>

                </h5>

              </div>
              <div id='loader' style="display: none;">
                <img src='<?php echo base_url('assets/images/spinner.gif'); ?>'>
              </div>

              <div class="card-body">
                <table class="display table table-bordered table-responsive" id="myTable">
                <thead>
                    <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Num code</th>
                    <th>Char code</th>
                    <th>Nominal</th>
                    <th>Value</th>
                    </tr>
                </thead>

            </table>
              </div>
            </div>
        </div>

    </div>
</div>

<script type="text/javascript" src="<?php echo base_url('assets/js/app.js?'.time()) ?>"></script>
