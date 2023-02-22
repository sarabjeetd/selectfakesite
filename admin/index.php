<?php
include("inc/header.php");

?>
        <div id="page-inner">
            <div class="row row-bm">
                <div class="col-md-12">
                 
                    <form id="add_car_make">
                        <div class="form-group">
                            <label>Select Car Years</label>
                            <select class="form-control js-basic-multiple" name="years[]" multiple="multiple" id="select_year">
                                <option></option>
                                <?php foreach($years as $year) {?>
                                    <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                                <?php }?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Add Car Make</label>
                            <input type="text" class="form-control" placeholder="Add Make" name="make"  id="year_make">

                        </div>
                        <button type="button" class="btn btn-primary add_car_make" disabled>Add Car Make</button>
                        <p class="car_make_msg"></p>
                    </form>
                </div>
            </div>
            <div class="row row-bm">
                <div class="col-md-12">
                   
                    <form id="add_car_model">
                        <div class="form-group">
                            <label>Select Car Years</label>
                            <select class="form-control js-basic-multiple select_years" name="years[]" multiple="multiple">
                                <option></option>
                                <?php foreach($years as $year) {?>
                                    <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                                <?php }?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Select Car Makes</label>
                            <select class="form-control" name="make" id="append_make" disabled>

                            </select>
                        </div>

                        <div class="form-group">
                            <label>Type Car Model</label>
                            <input type="text" class="form-control" placeholder="Type Car Model" name="model"  id="add_model" disabled>

                        </div>
                        <button type="button" class="btn btn-primary add_car_model" disabled>Add Car Model</button>
                    </form>
                    <p class="car_model_msg"></p>
                </div>
            </div>
        </div>
    
<?php

include("inc/footer.php");
?>

