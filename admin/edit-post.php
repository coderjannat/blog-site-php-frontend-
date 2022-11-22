<?php
include 'partials/header.php';
?>
    <!---------------------------------------------------------------------------------------------------------------------------------->

<section class="form__section">
    <div class="container form__section-container">
      <h2>Edit Post</h2>
      <form action="" enctype="multipart/form-data">
        <input type="text" placeholder="Title">
        <select>
            <option value="1">Travel</option>
            <option value="1">Wild Life</option>
            <option value="1">Science</option>
            <option value="1">Art</option>
            <option value="1">Science</option>
            <option value="1">Science</option>
        </select>
        <textarea rows="10" placeholder="Body"></textarea>
        <div class="form__control inline">
            <input type="checkbox" id="is_featured" checked>
            <label for="is_featured" >Featured</label>
        </div>
        <div class="form__control">
            <input type="file" id="thumbnail">
            <label for="thumbnail">Change Thumbnail</label>
        </div>
        <button type="submit" class="btn">Update Post</button>
      </form>
    </div>
</section>

<!--========================================= FOOTER ================================================-->


   
<?php
include '../partials/footer.php';
?>