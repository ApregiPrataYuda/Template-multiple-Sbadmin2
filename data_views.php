 <!-- Begin Page Content -->
 <div class="container-fluid">

   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
     <h1 class="h3 mb-2 text-gray-800"><span class="badge badge-primary"> Data SMA/K</span></h1>
     <a href="<?= site_url('Dashboard') ?>" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-tachometer-alt fa-sm text-white-50"></i> Dashboard</a>
   </div>


   <div class="row">
     <div class="col-lg-12 border-left-primary">
       <div id="flash" data-flash="<?= $this->session->flashdata('pesan') ?>">
         <div class="card shadow mb-4">
           <div class="card-header py-3">
             <a href="<?= site_url('Sma/Tambah') ?>" class="btn btn-primary"> <i class="fa fa-save"> Tambah Data</i></a>
           </div>
           <div class="card-body">

             <!-- DataTales Example -->
             <div class="card shadow mb-4">
               <div class="card-header py-3">
                 <h6 class="m-0 font-weight-bold text-primary">ALL Data SMA</h6>
               </div>
               <div class="card-body">
                 <div class="table-responsive">
                   <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                       <tr>
                         <th style="width:5%;">No#</th>
                         <th>TITLE LOKER</th>
                         <th>CONTENT LOKER</th>
                         <th>NAMA PERUSAHAAN</th>
                         <th>TANGGAL UPLOAD LOKER</th>
                         <th>TANGGAL DATELINE LOKER</th>
                         <th>SUMBER LOKER</th>
                         <th>IMAGE LOKER</th>
                         <th>EXPRIENCE</th>
                         <th>SALARY</th>
                         <th>GENDER</th>
                         <th>USER UPLOAD LOKER</th>
                         <th>KATEGORY LOKER</th>
                         <th>TYPE LOKER</th>
                         <th>DAERAH LOKER</th>
                         <th style="width:5%;">PILIHAN</th>
                       </tr>
                     </thead>
                  <?php
                          $no = 1;
                          foreach ($row->result() as $key => $data) { ?>
                       <tr>
                         <td><?= $no++ ?></td>
                         <td><?= $data->title ?></td>
                         <td><?= substr(strip_tags($data->content), 0, 50) ?>......</td>
                         <td><?= indo_date($data->tanggal) ?></td>
                         <td><?= indo_date($data->dateline) ?></td>
                         <td><?= $data->sumber ?></td>
                         <td>
                           <?php if ($data->image != null) { ?>
                             <img src="<?= site_url('assets/image/Sma/' . $data->image) ?>" style="width:100px;">
                           <?php } ?>
                         </td>
                         <td><?= $data->exprience ?></td>
                         <td><?= indo_currency($data->salary) ?></td>
                         <td><?= $data->gender ?></td>
                         <td><?= $data->name ?></td>
                         <td><?= $data->nama ?></td>
                         <td><?= $data->name_jobs ?></td>
                         <td><?= $data->name_city ?></td>
                         <td>
                           <a href="<?= site_url('Sma/edit/' . $data->sma_id); ?>" class="btn btn-warning btn-sm btn-circle"><i class="fa fas fa-edit"></i></a>
                           <a href="<?= site_url('Sma/delete/' . $data->sma_id); ?>" id="btn-hapus" class="btn btn-danger btn-sm btn-circle"><i class="fa fas fa-trash"></i></a>
                         </td>
                       </tr>
                     <?php } ?> 
                   </table>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
     <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
   </div>
