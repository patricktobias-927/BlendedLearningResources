    <?php if($this->session->logged_in){?>

                   </main>   
                </div>
            </div>
        </div>
    
        <!-- to add more items, please make sure to change the variable '$menu-items: number;' in your _page-components-shortcut.scss -->
        <nav class="shortcut-menu d-none d-sm-block">
            <input type="checkbox" class="menu-open" name="menu-open" id="menu_open" />
            <label for="menu_open" class="menu-open-button ">
                <span class="app-shortcut-icon d-block"></span>
            </label>
            <a href="#" class="menu-item btn" data-toggle="tooltip" data-placement="left" title="Scroll Top">
                <i class="fal fa-arrow-up"></i>
            </a>
            <a href="<?= base_url();?>logout" class="menu-item btn" data-toggle="tooltip" data-placement="left" title="Logout">
                <i class="fal fa-sign-out"></i>
            </a>
            <a href="#" class="menu-item btn" data-action="app-fullscreen" data-toggle="tooltip" data-placement="left" title="Full Screen">
                <i class="fal fa-expand"></i>
            </a>
            <!-- <a href="#" class="menu-item btn" data-action="app-print" data-toggle="tooltip" data-placement="left" title="Print page">
                <i class="fal fa-print"></i>
            </a>
            <a href="#" class="menu-item btn" data-action="app-voice" data-toggle="tooltip" data-placement="left" title="Voice command">
                <i class="fal fa-microphone"></i>
            </a> -->
        </nav>

        

        <style>
        .custom-menu {
            display: none;
            z-index: 1000;
            position: absolute;
            overflow: hidden;
            border: 1px solid #CCC;
            white-space: nowrap;
            font-family: sans-serif;
            background: #FFF;
            color: #333;
            border-radius: 5px;
            padding: 0;
        }

        /* Each of the items in the list */
        .custom-menu li {
            padding: 8px 12px;
            cursor: pointer;
            list-style-type: none;
            transition: all .3s ease;
            user-select: none;
        }

        .custom-menu li:hover {
            background-color: #DEF;
        }
        </style>

        <ul class='custom-menu'>
            <li data-action="first">First thing</li>
            <li data-action="second">Second thing</li>
            <li data-action="third">Third thing</li>
        </ul>
     
    <?php } ?>
<!-- END OF PAGE -->

<!-- SWEET ALERT EXAMPLE JS 1-->
<!-- <a href="javascript:void(0);" class="btn btn-outline-primary waves-effect waves-themed" id="js-sweetalert2-example-1" style="display: none;">Try me!</a> -->

<!-- DEFAULT PASSWORD MODAL -->
          <div class="modal fade" id="default-example-modal-sm-center" tabindex="-1" role="dialog" aria-hidden="true"  data-backdrop="static" data-keyboard="false">
              <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h1 class="modal-title">
                              <small class="m-0 ">
                              You are using a default password.
                              </small>
                          </h1>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true"><i class="fal fa-times"></i></span>
                          </button>
                      </div>
                      <div class="modal-body">
                      <h3 class="modal-title">
                              <small class="m-0 ">
                              Please Click 'Okay' to Change Your Password.
                              </small>
                          </h3>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary waves-effect waves-themed" data-dismiss="modal">Close</button>
                          <a href="<?= base_url();?>changePassword" class="btn btn-primary waves-effect waves-themed">Okay</a>
                      </div>
                  </div>
              </div>
          </div>

<!-- DEFAULT PASSWORD MODAL BUTTON -->
<button type="button" class="btn btn-default waves-effect waves-themed" data-toggle="modal" data-target="#default-example-modal-sm-center" id="modal1" style="display: none;">Centered Small</button>

  
  <script src="assets/js/vendors.bundle.js" aria-hidden="true"></script>
  <script src="assets/js/notifications/sweetalert2/sweetalert2.bundle.js" aria-hidden="true"></script>
  <script src="assets/js/app.bundle.js" aria-hidden="true"></script>
  <script src="js/datagrid/datatables/datatables.bundle.js"></script>
  <!-- SWEET ALERT EXAMPLE1 JS-->
  <script>

          
$(document).ready(function(){

"use strict";


$("#js-sweetalert2-example-6").on("click", function(e)
{

    $.ajax({
    url: '<?php echo base_url(); ?>submitPassword',
    type: "POST",
    cache: false,
    data: {
        password : $('#confirmed_password').val(),
        },
        success: function () {
                        Swal.fire(
                    {
                        icon: 'success',
                        position: "center",
                        title: "Your New Password Has Been Saved",
                        showConfirmButton: false,
                        timer: 1500
                    });
                    // $("#js-login-btn").click()
            },
            error: function (xhr, ajaxOptions, thrownError) {
                swal.fire("Error Updating!", "Please try again", "error");
            }
                    });
                    e.preventdefault();
});
});
     //A confirm dialog, with a function attached to the "Confirm"-button...


    
        var toggler = document.getElementsByClassName("caret");
        var i;

        for (i = 0; i < toggler.length; i++) {
        toggler[i].addEventListener("click", function() {
            this.parentElement.querySelector(".nested").classList.toggle("active");
            this.classList.toggle("caret-down");
        });
        }


        //DATATABLES
    


// // JAVASCRIPT (jQuery)

// // Trigger action when the contexmenu is about to be shown
// $(document).bind("contextmenu", function (event) {
    
//     // Avoid the real one
//     event.preventDefault();
    
//     // Show contextmenu
//     $(".custom-menu").finish().toggle(100).
    
//     // In the right position (the mouse)
//     css({
//         top: event.pageY + "px",
//         left: event.pageX + "px"
//     });
// });


// // If the document is clicked somewhere
// $(document).bind("mousedown", function (e) {
    
//     // If the clicked element is not the menu
//     if (!$(e.target).parents(".custom-menu").length > 0) {
        
//         // Hide it
//         $(".custom-menu").hide(100);
//     }
// });


// // If the menu element is clicked
// $(".custom-menu li").click(function(){
    
//     // This is the triggered action name
//     switch($(this).attr("data-action")) {
        
//         // A case for each action. Your actions here
//         case "first": alert("first"); break;
//         case "second": alert("second"); break;
//         case "third": alert("third"); break;
//     }
  
//     // Hide it AFTER the action was triggered
//     $(".custom-menu").hide(100);
//   });
            
        </script>
 
  </body>
</html>
     