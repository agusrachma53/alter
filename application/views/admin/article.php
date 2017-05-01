<?php $this->load->view('admin/header')?>
<div class="col-md-10 col-md-offset-1">
    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Isi</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
        <?php
        $no = 1;
        foreach( $tampil -> result() as $field){
        ?>
        <tr>
            <td><?php echo $no?></td>
            <td><?php echo $field->title?></td>
            <td><?php echo $field->isi?></td>
            <td><?php echo $field->date?></td>
            <td>
              <a href="<?php echo base_url('Admin/kategori_artikel_edit/edit/'.$field->id_article) ?>"><button class="btn btn-primary">Edit</button></a>
              <a href="<?php echo base_url('Admin/kategori_artikel_edit/delete/'.$field->id_article) ?>"><button class="btn btn-danger">Delete</button></a>
            </td>
        </tr>
        <?php
            $no++; //$no = $no +1
        }?>
    </table>
</div>
