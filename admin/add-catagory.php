<?php
include 'partials/header.php';
?>
    <!---------------------------------------------------------------------------------------------------------------------------------->

<section class="form__section">
    <div class="container form__section-container">
      <h2>Add Catagory</h2>
      <div class="alert__message error">
        <p>This is an success error</p>
      </div>
      <form action="">
        <input type="text" placeholder="Title">
        <textarea rows="4" placeholder="Discription"></textarea>
        <button type="submit" class="btn">Add Catagory</button>
      </form>
    </div>
</section>

<!--========================================= FOOTER ================================================-->

<?php
include '../partials/footer.php';
?>