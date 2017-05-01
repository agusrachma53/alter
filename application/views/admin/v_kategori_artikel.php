<?php $this->load->view('admin/header')?>
<div class="col-md-3">
  <?php if($this->uri->segment(3) == "tambah") { ?>
    <form action="<?php echo base_url('admin/aksi_kategori')?>" method="POST" >
        Kategori<br><br>

        <input type="text" name="nama_kategori" class="form-control" placeholder="Kategori" required="require"><br><br>

        <input type="submit" class="btn btn-primary" name="proses" value="input">
    </form>
    <?php }else if($this->uri->segment(3) == "edit"){ ?>
      <form action="<?php echo base_url('admin/aksi_kategori')?>" method="POST" >
          Kategori<br><br>
          <input type="hidden" name="id" value="<?php echo $edit_kategori->id_kategori?>">
          <input type="text" name="nama_kategori" class="form-control" placeholder="Kategori" VALUE="<?php echo $edit_kategori->nama_kategori?>"  required="require"><br><br>
          <input type="submit" class="btn btn-primary" name="proses" value="Edit Kategori">
      </form>
    <?php }else{}  ?>
</div>
<div class="col-md-5">
    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>Kategori</th>
            <th>Action</th>
        </tr>
        <?php
        $no = 1;
        foreach( $kategori -> result() as $field){
        ?>
        <tr>
            <td><?php echo $no?></td>
            <td><?php echo $field->nama_kategori?></td>
            <td>
              <a href="<?php echo base_url('Admin/kategori_artikel_edit/edit/'.$field->id_kategori) ?>"><button class="btn btn-primary">Edit</button></a>
              <a href="<?php echo base_url('Admin/kategori_artikel_edit/delete/'.$field->id_kategori) ?>"><button class="btn btn-danger">Delete</button></a>
            </td>
        </tr>
        <?php
            $no++; //$no = $no +1
        }?>
    </table>
</div>
