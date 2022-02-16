<div class="form-group mt-5">
    <label class="fw-600">SELECIONE ABAIXO A NOTA DESSE ASPECTO:</label>
    
    <div class="group-vote">
        <div class="d-flex flex-wrap flex-lg-nowrap justify-content-between text-center">
            
            <?php 
            $notes = ['1','1.25','1.50','1.75','2','2.25','2.50','2.75','3','3.25','3.50','3.75','4','4.25','4.50','4.75','5'];


            foreach( $notes as $note ) : ?>
            <div class="input-radio-vote item d-flex align-items-center justify-content-center">
                
                <label><?= str_replace(".",",",$note) ?></label>
                <input type="radio" name="note" value="<?= $note ?>" class="" required>
            </div>
            <?php endforeach; ?>
            
        </div>
    </div>

    <div class="legend-votes d-none d-lg-flex justify-content-between mt-3">
        <span class="fs-13">Pontuação mais baixa</span>
        <span class="fs-13">Pontuação mais alta</span>
    </div>

</div>