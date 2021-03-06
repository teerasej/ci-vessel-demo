<div class="row" style="padding-top: 100px;">
    <div class="col-4"></div>
    <div class="card col-4">
        <div class="card-body">
            <h5 class="card-title">ข้อมูลเรือประมง</h5>

            <?php echo validation_errors(); ?>

            <?php 
                if(isset($error_upload))
                {
                    echo $error_upload['error']; 
                }
            ?>

            <?php echo form_open_multipart('fishingvessel/create'); ?>
                <div class="form-group">
                    <label for="vesselName">ชื่อ</label>
                    <input class="form-control" name="vesselName" type="text" >
                </div>
                <div class="form-group">
                    <label for="country">ประเทศ:</label>
                    <select class="form-control" id="selectCountry" name="country">
                        <?php foreach ($countries as $country):?>
                            <option value="<?php echo $country['id']; ?>">
                                <?php echo $country['Name'] ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="vesselImage">ภาพ:</label>
                    <input type="file" name="vesselImage" id="vesselImage"/>
                    <!-- <label class="btn btn-primary">
                        Browse <input type="file" name="vesselImage" hidden>
                    </label> -->
                </div>
                <input type="submit" name="submit" value="เพิ่ม" class="btn btn-primary btn-lg"/>
                <button class="btn btn-secondary btn-lg">ล้าง</button>
            </form>
        </div>
    </div>
    <div class="col-4"></div>
</div>