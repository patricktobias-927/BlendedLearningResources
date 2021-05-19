<!-- SWEET ALERT EXAMPLE JS 1-->
<!-- <a href="javascript:void(0);" class="btn btn-outline-primary waves-effect waves-themed" id="js-sweetalert2-example-1" style="display: none;">Try me!</a> -->

<!-- DEFAULT PASSWORD MODAL -->
          <div class="modal fade" id="default-example-modal-sm-center" tabindex="-1" role="dialog" aria-hidden="true"  data-backdrop="static" data-keyboard="false">
              <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h1 class="modal-title">
                              <small class="m-0 text-muted">
                                  You are using a default password
                              </small>
                          </h1>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true"><i class="fal fa-times"></i></span>
                          </button>
                      </div>
                      <div class="modal-body">
                      <h2 class="modal-title">
                              Change Default Password
                          </h2>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary waves-effect waves-themed" data-dismiss="modal">Close</button>
                          <a href="<?= base_url();?>changePassword" class="btn btn-primary waves-effect waves-themed">Go</a>
                      </div>
                  </div>
              </div>
          </div>

<!-- DEFAULT PASSWORD MODAL BUTTON -->
<button type="button" class="btn btn-default waves-effect waves-themed" data-toggle="modal" data-target="#default-example-modal-sm-center" id="modal1" style="display: none;">Centered Small</button>


  <script src="assets/js/vendors.bundle.js" aria-hidden="true"></script>
  <script src="assets/js/notifications/sweetalert2/sweetalert2.bundle.js" aria-hidden="true"></script>
  <script src="assets/js/app.bundle.js" aria-hidden="true"></script>

  <!-- SWEET ALERT EXAMPLE1 JS-->
  <script aria-hidden="true">

            // $(document).ready(function()
            // {
            //     "use strict";

            //     //A basic message
            //     $("#js-sweetalert2-example-1").on("click", function()
            //     {
            //         Swal.fire("asdfsd");
                   
            //     }); //A title with a text under
            // });
           
        </script>
 
  </body>
</html>



