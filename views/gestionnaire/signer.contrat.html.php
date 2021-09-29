<?php
 if (isset($_SESSION['arrayError'])) {
  $arrayError=$_SESSION['arrayError'];
  unset($_SESSION['arrayError']);
}
require(ROUTE_DIR.'views/inc/header.html.php');
require(ROUTE_DIR.'views/inc/menu.html.php');
?>


<div class="container-fluid">
  <div class="row">
    <div class="col-md-10 mr-auto ml-auto mt-5">
      <div class="card">
        <div class="card-body">

<!-- Stepper -->
<div class="steps-form-2">
    <div class="steps-row-2 setup-panel-2 d-flex justify-content-between">
        <div class="steps-step-2">
            <a href="#step-1" type="button" class="btn btn-amber btn-circle-2 waves-effect ml-0" data-toggle="tooltip" data-placement="top" title="Basic Information"><i class="fa fa-folder-open-o" aria-hidden="true"></i></a>
        </div>
        <div class="steps-step-2">
            <a href="#step-2" type="button" class="btn btn-blue-grey btn-circle-2 waves-effect" data-toggle="tooltip" data-placement="top" title="Personal Data"><i class="fa fa-pencil" aria-hidden="true"></i></a>
        </div>
        
        <div class="steps-step-2">
            <a href="#step-4" type="button" class="btn btn-blue-grey btn-circle-2 waves-effect mr-0" data-toggle="tooltip" data-placement="top" title="Finish"><i class="fa fa-check" aria-hidden="true"></i></a>
        </div>
    </div>
</div>

<!-- First Step -->
<form role="form" action="" method="post">
    <div class="row setup-content-2" id="step-1">
        <div class="col-md-12">
            <h3 class="font-weight-bold strong pl-0 my-4"><strong>LOGEMENT</strong></h3>
            <div class="form-group md-form strong">
                <label for="yourEmail-2" data-error="wrong" data-success="right">ADRESSE</label>
                <input id="yourEmail-2" type="text" required="required" name="adresse" class=" form-control validate">
            </div>
            <div class="form-group md-form strong">
                <label for="yourUsername-2" data-error="wrong" data-success="right">SURFACE</label>
                <input id="yourUsername-2" type="text" required="required"  name="surface"  class="form-control validate">
            </div>
            
            <div class="form-group md-form mt-3 strong">
                <label for="repeatPassword-2" data-error="wrong" data-success="right">TYPE DU LOGEMENT</label>
                <input id="repeatPassword-2" type="password" required="required" name="type_logement" class="form-control validate">
            </div>
            <div class="form-group md-form mt-3 strong">
                <label for="repeatPassword-2" data-error="wrong" data-success="right">IMAGE</label>
                <input id="repeatPassword-2" type="password" required="required" name="image"  class="form-control validate">
            </div>
            <button class="btn btn-mdb-color btn-rounded nextBtn-2 float-right strong" type="button">Next</button>
        </div>
    </div>

<!-- Second Step -->



    <div class="row setup-content-2" id="step-2">
        <div class="col-md-12">
            <h3 class="font-weight-bold pl-0 my-4 strong"><strong>CONTRAT</strong></h3>
            <div class="form-group md-form strong">
                <label for="yourName-2" data-error="wrong" data-success="right">PROPRIETAIRE</label>
                <input id="yourName-2" type="text" required="required" class="form-control validate">
            </div>
            <div class="form-group md-form mt-3 strong">
                <label for="secondName-2" data-error="wrong" data-success="right">DATE DEBUT</label>
                <input id="secondName-2" type="text" required="required" class="form-control validate">
            </div>
            <div class="form-group md-form strong">
                <label for="surname-2" data-error="wrong" data-success="right">DUREE</label>
                <input id="surname-2" type="text" required="required" class="form-control validate">
            </div>
            <div class="form-group md-form strong">
                <label for="surname-2" data-error="wrong" data-success="right">MONTANT DU CONTRAT</label>
                <input id="surname-2" type="text" required="required" class="form-control validate">
            </div>
            <div class="form-group md-form strong">
                <label for="surname-2" data-error="wrong" data-success="right"></label>
                <input id="surname-2" type="text" required="required" class="form-control validate">
            </div>
            <button class="btn btn-mdb-color btn-rounded prevBtn-2 float-left" type="button">Previous</button>
            <button class="btn btn-mdb-color btn-rounded nextBtn-2 float-right" type="button">Next</button>
        </div>
    </div>


    <!-- Fourth Step -->
    <div class="row setup-content-2" id="step-4">
        <div class="col-md-12">
            <h3 class="font-weight-bold pl-0 my-4"><strong>Finish</strong></h3>
            <h2 class="text-center font-weight-bold my-4">Registration completed!</h2>
            <button class="btn btn-mdb-color btn-rounded prevBtn-2 float-left strong" type="button">Previous</button>
            <button class="btn btn-success btn-rounded float-right" type="submit strong">Submit</button>
        </div>
    </div>
</form>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

// Steppers
$(document).ready(function () {
  var navListItems = $('div.setup-panel-2 div a'),
          allWells = $('.setup-content-2'),
          allNextBtn = $('.nextBtn-2'),
          allPrevBtn = $('.prevBtn-2');

  allWells.hide();

  navListItems.click(function (e) {
      e.preventDefault();
      var $target = $($(this).attr('href')),
              $item = $(this);

      if (!$item.hasClass('disabled')) {
          navListItems.removeClass('btn-amber').addClass('btn-blue-grey');
          $item.addClass('btn-amber');
          allWells.hide();
          $target.show();
          $target.find('input:eq(0)').focus();
      }
  });

  allPrevBtn.click(function(){
      var curStep = $(this).closest(".setup-content-2"),
          curStepBtn = curStep.attr("id"),
          prevStepSteps = $('div.setup-panel-2 div a[href="#' + curStepBtn + '"]').parent().prev().children("a");

          prevStepSteps.removeAttr('disabled').trigger('click');
  });

  allNextBtn.click(function(){
      var curStep = $(this).closest(".setup-content-2"),
          curStepBtn = curStep.attr("id"),
          nextStepSteps = $('div.setup-panel-2 div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
          curInputs = curStep.find("input[type='text'],input[type='url']"),
          isValid = true;

      $(".form-group").removeClass("has-error");
      for(var i=0; i< curInputs.length; i++){
          if (!curInputs[i].validity.valid){
              isValid = false;
              $(curInputs[i]).closest(".form-group").addClass("has-error");
          }
      }

      if (isValid)
          nextStepSteps.removeAttr('disabled').trigger('click');
  });

  $('div.setup-panel-2 div a.btn-amber').trigger('click');
});
</script>
<style>
.steps-form-2 {
		display: table;
		width: 100%;
		position: relative; }
	    .steps-form-2 .steps-row-2 {
		display: table-row; }
	    .steps-form-2 .steps-row-2:before {
		top: 14px;
		bottom: 0;
		position: absolute;
		content: " ";
		width: 100%;
		height: 2px;
		background-color:  #7D5939; }
	    .steps-form-2 .steps-row-2 .steps-step-2 {
		display: table-cell;
		text-align: center;
		position: relative; }
	    .steps-form-2 .steps-row-2 .steps-step-2 p {
		margin-top: 0.5rem; }
	    .steps-form-2 .steps-row-2 .steps-step-2 button[disabled] {
		opacity: 1 !important;
		filter: alpha(opacity=100) !important; }
	    .steps-form-2 .steps-row-2 .steps-step-2 .btn-circle-2 {
		width: 70px;
		height: 70px;
		border: 2px solid #7D5939;
		background-color: white !important;
		color:  #7D5939!important;
		border-radius: 50%;
		padding: 22px 18px 15px 18px;
		margin-top: -22px; }
	    .steps-form-2 .steps-row-2 .steps-step-2 .btn-circle-2:hover {
		border: 2px solid  #7D5939;
		color:  #7D5939!important;
		background-color: white !important; }
	    .steps-form-2 .steps-row-2 .steps-step-2 .btn-circle-2 .fa {
		font-size: 1.7rem; }
</style>
<?php
require(ROUTE_DIR.'views/inc/footer.html.php');	
?>