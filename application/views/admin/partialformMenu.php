
    <!-- switchery -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/switchery/switchery.min.css" />
<div class="x_content">
                                    <br />
                                    <form class="form-horizontal form-label-left input_mask">

                                         <div class="form-group">
                                        <label>Parent Menu ?:</label>
                                        <p>
                                            Yes:
                                            <input type="radio" class="flat" name="parent" id="parentYES" value="T" /> NO:
                                            <input type="radio" class="flat" name="parent" id="parentNO" value="F" checked="" required />
                                        </p>
                                        </div>
                                        <div id="parent">
                                        <!-- HERE to show the Icons of parent menu -->
                                            
                                        </div>
                                        <div id="subParent">
                                        <!--here to show the Parent Menu -->

                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" class="form-control" id="inputSuccess3" placeholder="Last Name">
                                            <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Email">
                                            <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" class="form-control" id="inputSuccess5" placeholder="Phone">
                                            <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Default Input</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" class="form-control" placeholder="Default Input">
                                            </div>
                                            <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                                                
                    <script type="text/javascript">
                        $(document).ready(function () {
                            $('#birthday').daterangepicker({
                                singleDatePicker: true,
                                changeYear:true,
                                calender_style: "picker_1"
                            }, function (start, end, label) {
                                console.log(start.toISOString(), end.toISOString(), label);
                            });
                        });
                        </script>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Read-Only Input</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" class="form-control" readonly="readonly" placeholder="Read-Only Input">
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-primary">Cancel</button>
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                                <script>
                                $(function () {
                                    var subList = new Array();
                                    $('.flat').click(function(){
                                        $('#parent').html(" ");
                                        var parentValue ="<div class='col-md-6 col-sm-6 col-xs-12 form-group has-feedback'>"+
                                                "<input type='text' name='icon' onclick='loadIcon()' readonly='' class='iconBtn form-control has-feedback-left' id='inputSuccess2' placeholder='Menu Icon'>"+
                                                "<span class='fa fa-crosshairs form-control-feedback left' aria-hidden='true'></span>"+
                                            "</div>"+

                                            "<div class='col-md-6 col-sm-6 col-xs-12 form-group has-feedback'>"+
                                                "<input type='text' name='menuName' class='form-control has-feedback-left' id='' placeholder='Nama Menu'>"+
                                                "<span class='fa fa-caret-square-o-left form-control-feedback right' aria-hidden='true'></span>"+
                                            "</div>"+

                                            "<div class='col-md-6 col-sm-6 col-xs-12 form-group has-feedback'>"+
                                                "<input type='text' name='controller' class='form-control has-feedback-left' id='' placeholder='Controller'>"+
                                                "<span class='fa fa-th-large form-control-feedback left' aria-hidden='true'></span>"+
                                            "</div>"+
                                            "<div class='col-md-6 col-sm-6 col-xs-12 form-group has-feedback'>"+
                                                "<input type='text' name='index' class='form-control has-feedback-left' id='' placeholder='Menu Index'>"+
                                                "<span class='fa fa-caret-square-o-left form-control-feedback right' aria-hidden='true'></span>"+
                                            "</div>";
                                        
                                        $("#parent").append(parentValue);
                                    });
                                    
                                    //Get Nasabah Modal
                                    $(".iconBtn").click(function () {
                                        $.ajax({
                                            url: "<?php echo base_url("menu/listIcons") ?>",
                                            dataType: "HTML",
                                        type: "GET",
                                        success: function (data) {
                                            $(".2ndmodal-body").html(data);
                                            $(".scModal").modal('show');
                                        }
                                    });
                                    });
                                    
                                });
                                function loadParent(){
                                    $.ajax({
                                            url: "<?php echo base_url("menu/listParentMenu") ?>",
                                            dataType: "HTML",
                                        type: "GET",
                                        success: function (data) {
                                            $(".2ndmodal-body").html(data);
                                            $(".scModal").modal('show');
                                        }
                                    });
                                }
                                function loadIcon(){
                                    $.ajax({
                                            url: "<?php echo base_url("menu/listIcons") ?>",
                                            dataType: "HTML",
                                        type: "GET",
                                        success: function (data) {
                                            $(".2ndmodal-body").html(data);
                                            $(".scModal").modal('show');
                                        }
                                    });
                                }
                                </script>