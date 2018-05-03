

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
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    
</div>