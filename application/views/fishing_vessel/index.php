

<div class="row" style="padding: 50px 0px;">
        <?php foreach ($vessels as $ship): ?>
            <div class="col-3">
                <div class="card" style="margin-top: 20px; height: 150px">
                    <div class="card-body">
                        <h6 class="card-title">
                            <?php echo $ship['VesselName']; ?>  
                        </h6>
                        <h6 class="card-subtitle text-muted">
                            <?php echo $ship['CountryName']; ?> 
                        </h6>
                        <?php 
                            $hidden['id'] = $ship['id'];
                            echo form_open('fishingvessel/remove','', $hidden); 
                        ?>
                            <input type="submit" name="submit" value="ลบ" class="btn btn-primary"/>
                        </form> 
                    </div>
                    <?php
                        if( !is_null($ship['imageUrl']) )
                        {
                    ?>
                    <img class="card-img-bottom" src="<?php echo $ship['imageUrl']; ?>" alt="Card image cap">
                    <?php
                        }
                    ?>
                </div>
            </div>
        <?php endforeach ?>
    
</div>