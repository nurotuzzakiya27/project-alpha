
<!-- Start Footer area-->
    <footer>
        <div class="footer-copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2022. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<!-- End Footer area-->
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/flot-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="js/knob/jquery.knob.js"></script>
    <script src="js/knob/jquery.appear.js"></script>
    <script src="js/knob/knob-active.js"></script>
    <!--  Chat JS
		============================================ -->
    <script src="js/chat/jquery.chat.js"></script>
    <!--  wave JS
		============================================ -->
    <script src="js/wave/waves.min.js"></script>
    <script src="js/wave/wave-active.js"></script>
    <!--  notification JS
        ============================================ -->
    <script src="js/notification/bootstrap-growl.min.js"></script>
    <script src="js/notification/notification-active.js"></script>
    <!-- bootstrap select JS
        ============================================ -->
    <script src="js/bootstrap-select/bootstrap-select.js"></script>
    <!-- Input Mask JS
        ============================================ -->
    <script src="js/jasny-bootstrap.min.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="js/icheck/icheck.min.js"></script>
    <script src="js/icheck/icheck-active.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="js/todo/jquery.todo.js"></script>
    <!-- Data Table JS
        ============================================ -->
    <script src="js/data-table/jquery.dataTables.min.js"></script>
    <script src="js/data-table/data-table-act.js"></script>
    <!-- Login JS
		============================================ -->
    <script src="js/login/login-action.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
    <!-- dropzone JS
        ============================================ -->
    <script src="js/dropzone/dropzone.js"></script>
    <!--  Dialog JS
        ============================================ -->
    <script src="js/dialog/sweetalert2.min.js"></script>
    <script src="js/dialog/dialog-active.js"></script>
    <!-- datapicker JS
        ============================================ -->
    <script src="js/datapicker/bootstrap-datepicker.js"></script>
    <script src="js/datapicker/datepicker-active.js"></script>
    <!-- My Own Script -->
    <script src="js/my-script.js"></script>
    <script src="js/my-transaction-script.js"></script>

    <!-- Autocomplete
        ============================================ -->
    <script src="js/jquery/jquery-ui.js"></script>


    <!-- <link href="https://repo.rachmat.id/jquery-ui-1.12.1/jquery-ui.css" rel="stylesheet"> -->
    <!-- <script type="text/javascript" src="https://repo.rachmat.id/jquery-1.12.4.js"></script> -->
    <!-- <script type="text/javascript" src="https://repo.rachmat.id/jquery-ui-1.12.1/jquery-ui.js"></script> -->
    <!--   <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script> -->
    <!-- <script src="js/jquery.min.js" type="text/javascript"></script> -->
    <!-- <script src="js/jquery.dataTables.min.js" type="text/javascript"></script> -->
   <!--  <script src="js/jquery.autocomplete.js"></script>
    <script src="js/jquery.autocomplete.min.js"></script> -->
    <script type="text/javascript">
       
    /* Area Filter SO */
    function filterSO(ID, ID2){
        var element = document.getElementById(ID);
        var element2 = document.getElementById(ID2);

        if(element.style.display === "none"){
            if(element2.style.display === "none"){
                element.style.display = "block";
            } else {
                element.style.display = "block";
                element2.style.display = "none";
            }
        } else {
            if(element2.style.display === "none"){
                element.style.display = "none";
            } else {
                element.style.display = "block";
                element2.style.display = "none";
            }
        }
    }
    /* End of Area Filter SO */

    /* Area Import Excel CSV */
    function formToggle2(ID, ID2){
        var element = document.getElementById(ID);
        var element2 = document.getElementById(ID2);

        if(element.style.display === "none"){
            if(element2.style.display === "none"){
                element.style.display = "block";
            } else {
                element.style.display = "block";
                element2.style.display = "none";
            }
        } else {
            if(element2.style.display === "none"){
                element.style.display = "none";
            } else {
                element.style.display = "block";
                element2.style.display = "none";
            }
        }
    }

    function formToggle(ID){
        var element = document.getElementById(ID);
        if(element.style.display === "none"){
            element.style.display = "block";
        } else {
            element.style.display = "none";
        }
    }

    <?php
    if(!empty($_GET['status'])){
        switch ($_GET['status']) {
            case 'false_file':
                ?>
                var message = "Format Isi File CSV Berbeda. Silakan Periksa Kembali";
                var nFrom = 'top';
                var nAlign = 'center';
                var nIcons = $(this).attr('data-icon');
                var nType = 'danger';
                var nAnimIn = $(this).attr('data-animation-in');
                var nAnimOut = $(this).attr('data-animation-out');
                
                notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut, message);
                <?php
                break;
            case 'success_import':
                ?>
                var message = "Data Berhasil di Import";
                var nFrom = 'top';
                var nAlign = 'center';
                var nIcons = $(this).attr('data-icon');
                var nType = 'success';
                var nAnimIn = $(this).attr('data-animation-in');
                var nAnimOut = $(this).attr('data-animation-out');
                
                notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut, message);
                <?php
                break;
            case 'error_import':
                ?>
                var message = "Data Gagal di Import";
                var nFrom = 'top';
                var nAlign = 'center';
                var nIcons = $(this).attr('data-icon');
                var nType = 'danger';
                var nAnimIn = $(this).attr('data-animation-in');
                var nAnimOut = $(this).attr('data-animation-out');
                
                notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut, message);
                <?php
                break;
            case 'over_file_size':
                ?>
                var message = "File Yang di Upload Maksimal 5MB";
                var nFrom = 'top';
                var nAlign = 'center';
                var nIcons = $(this).attr('data-icon');
                var nType = 'danger';
                var nAnimIn = $(this).attr('data-animation-in');
                var nAnimOut = $(this).attr('data-animation-out');
                
                notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut, message);
                <?php
                break;
            case 'invalid_file':
                ?>
                var message = "File Yang di Import harus Format CSV";
                var nFrom = 'top';
                var nAlign = 'center';
                var nIcons = $(this).attr('data-icon');
                var nType = 'danger';
                var nAnimIn = $(this).attr('data-animation-in');
                var nAnimOut = $(this).attr('data-animation-out');
                
                notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut, message);
                <?php
                break;
            default:
                $message = "";
                break;
        }
    }
    ?>

    function Cancel_Attachment(e){
        document.getElementById("upload_file").value = null;
    }
    /* Area Import Excel CSV */
    
    </script>
</body>

</html>