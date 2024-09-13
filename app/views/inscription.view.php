<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en" data-theme="light">
  <!-- part of header -->
  <?php $this->view('partiels/header') ?>
  <body>
  <!-- part of siadbar -->
  <?php $this->view('partiels/siadebar') ?>

<main class="dashboard-main">

   <!-- part of navbar -->
   <?php $this->view('partiels/navbar') ?>  

  <div class="dashboard-main-body">
   <!-- body of project -->
   <?php  $this->view('_flash');?>
   <div class="card">
    <div class="card-header">
    <h6 class="card-title mb-0">Formulaire d'inscription</h6>
    </div>
    <div class="card-body">
      <form action="" method="POST" id="formpost"  class="row gy-3 needs-validation" novalidate>
         <div class="row gy-4">
          <div class="col-6">
          <label class="form-label">Nom</label>
          <input type="text" name="firstName" id="firstName" class="form-control">
          </div>
          <div class="col-6">
          <label class="form-label">Prenom</label>
          <input type="text" name="lastName" id="lastName" class="form-control">
          </div>
          <div class="col-6">
          <label class="form-label">Telephone </label>
          <input type="text" name="telephone" id="telephone" class="form-control flex-grow-1" placeholder="+1 (555) 253-08515">
          </div>
          <div class="col-6">
          <label class="form-label">Email</label>
          <input type="text" name="email" id="email"  class="form-control" placeholder="info@gmail.com">
          </div>
          </div>
          <div class="col-12">
            <div class="form-group">
            <button name ="submit" type="submit" class="btn btn-primary-600 b-2 radius-8 px-20 py-11">Enregistrer</button>
            </div>
          </div>

      </div>
      </form>
    </div>
</div><!-- card end -->
  </div>

  <!-- part of navbar -->
  <?php $this->view('partiels/footer') ?>
</main>
  
   <!-- part of navbar -->
   <?php $this->view('partiels/foot') ?>

</body>
</html>