<?php $this->load->view('admin/header'); ?>
<div class="container">
  <div class="col-md-3">
    <h3>Form Input Slider</h3>
    <form action="" method="post">
      <div id="uploadFile4" class="tampil"></div>
      <div class="form-group">
        <input type="file" name="gambar" id="preview">
        <p class="help-block">Select Image Here</p>
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
  </div>
  <div class="col-md-9">
    <h3>Table Slider</h3>
    <table class="table table-striped slider-tab">
        <tr style="text-align:center;">
          <td>No</td>
          <td>Slider Name</td>
          <td>image</td>
          <td>Action</td>
        </tr>
        <?php
        $no = 1;
        foreach($slider_tampil -> result() as $field) {
        ?>
        <tr style="text-align:center;">
          <td><?php echo $no; ?></td>
          <td><?php echo $field->name_slider; ?></td>
          <td> <img class="slider" src="<?php echo base_url() . "assets/user/slider/" . $field->image_slider;  ?>" alt=""></td>
          <td><a href="#">Edit</a> / <a href="#">Delete</a></td>
        </tr>
        <?php $no ++; } ?>
    </table>
  </div>
</div>
<script type="text/javascript">
$("#preview").on("change", function()
{
  var files = !!this.files ? this.files : [];
  if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

  if (/^image/.test( files[0].type)){ // only image file
      var reader = new FileReader(); // instance of the FileReader
      reader.readAsDataURL(files[0]); // read the local file

      reader.onloadend = function(){ // set image data as background of div
          $("#imagePreview4").css("background-image", "url("+this.result+")");
      }
  }
});
</script>
