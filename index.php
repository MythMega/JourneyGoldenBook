<?php include'./file/php/head.php'; ?>

<div class="content">
    <form action="traitement.php" method="POST">
        <h3 class="txtColored">Journey's GoldenBook</h3>
        <label for="inputName" class="txtColored"><strong>Your name</strong></label>
        <input class="form-control form-control-lg" type="text" placeholder="Ed'" aria-label=".form-control-lg example" id="inputName" name="inputName">
        <label for="inputName" class="txtColored"><strong>Your message</strong></label>
          <label for="" class="form-label"></label>
          <textarea class="form-control  form-control-lg" name="" id="" rows="3" placeholder="I loved it because..." aria-label=".form-control-lg example" id="inputMsg" name="inputMsg"></textarea>
        <button type="submit" class="btn btn-primary mb-3 formButton">Send</button>
    </form>
</div>


<?php include'./file/php/foot.php'; ?>