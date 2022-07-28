 <!-- Begin Page Content -->
 <div class="container-fluid">

   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
     <h1 class="h3 mb-2 text-gray-800"><span class="badge badge-primary"><?= $page ?> Data Sma</span></h1>
     <a href="<?= site_url('Sma') ?>" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-building fa-sm text-white-50"></i> Back Data SMA</a>
   </div>

   <div class="row">
     <div class="col-lg-12">
       <div class="card mb-4 py-3 border-bottom-primary  border-left-primary">
         <div class="card-body">
           <!-- gunakan form multipart ketika menggunkan upload gambar -->

           <?php echo form_open_multipart('Sma/proses') ?>
           <div class="form-group col-lg-8">
             <label for="title"><span class="badge badge-primary">TITLE LOKER**</span></label>
             <input type="hidden" value="<?= $row->sma_id ?>" name="id">
             <input type="text" class="form-control" value="<?= $row->title ?>" id="title" name="title" placeholder="Masukan Title Loker" required>
           </div>


           <div class="form-group col-lg-10">
             <label for="content"><span class="badge badge-primary">CONTENT LOKER**</span></label>
             <textarea class="form-control" name="content" id="editor1" cols="30" rows="10" required><?= $row->content ?></textarea>
           </div>

           <div class="form-group col-lg-8">
             <label for="name_company"><span class="badge badge-primary">NAMA PERUSAHAAN**</span></label>
             <input type="text" class="form-control" value="<?= $row->name_company ?>" id="name_company" name="name_company" placeholder="Masukan nama perusahaan" required>
           </div>

           <div class="form-group col-lg-3">
             <label for="tanggal"><span class="badge badge-primary">TANGGAL UPLOAD LOKER**</span></label>
             <input type="date" class="form-control" id="tanggal" value="<?= $row->tanggal ?>" name="tanggal">
           </div>

           <div class="form-group col-lg-3">
             <label for="dateline"><span class="badge badge-primary">TANGGAL DATELINE LOKER**</span></label>
             <input type="date" class="form-control" id="dateline" value="<?= $row->dateline ?>" name="dateline">
           </div>

           <div class="form-group col-lg-5">
             <label for="sumber"><span class="badge badge-primary">SUMBER LOKER**</span></label>
             <textarea class="form-control" name="sumber" id="sumber" cols="10" rows="2"><?= $row->sumber ?></textarea>
           </div>


           <div class="form-group col-lg-5">
             <label for="image">image*</label>
             <?php if ($page == 'edit') {
                if ($row->image != null) { ?>
                 <div style="margin-bottom:4px;">
                   <img src="<?= site_url('assets/image/Sma/' . $row->image) ?>" style="width:100px;">
                 </div>
             <?php
                }
              } ?>
             <input type="file" name="image" id="image" class="form-control">
             <small>(biarkan kosong jika image tidak <?= $page == 'edit' ? 'diganti' : 'ada' ?>)</small><br>
             <small style="color: red;">ukuran image max 2mb***</small>
           </div>


           <div class="form-group col-lg-5">
             <label for="exprience"><span class="badge badge-primary">EXPRIENCE**</span></label>
             <input type="text" class="form-control" value="<?= $row->exprience ?>" id="exprience" name="exprience" placeholder="Masukan exprience Loker" required>
           </div>

           <div class="form-group col-lg-5">
             <label for="salary"><span class="badge badge-primary">SALARY**</span></label>
             <input type="text" class="form-control" value="<?= $row->salary ?>" id="salary" name="salary" placeholder="Masukan salary Loker" required>
           </div>


           <div class="form-group col-lg-5">
             <label for="gender"><span class="badge badge-primary">GENDER**</span></label>
             <input type="text" class="form-control" value="<?= $row->gender ?>" id="gender" name="gender" placeholder="Masukan gender Loker" required>
           </div>


           <div class="form-group col-lg-5">
             <label for="user_id"><span class="badge badge-primary">USER UPLOAD LOKER**</span></label>
             <select name="user_id" id="user_id" class="form-control" required>
               <option value="">-PILIH-</option>
               <?php foreach ($User->result() as $key => $data) {  ?>
                 <option value="<?= $data->user_id ?>" <?= $data->user_id == $row->user_id ? "selected" : null ?>><?= $data->name ?></option>
               <?php } ?>
             </select>
           </div>


           <div class="form-group col-lg-5">
             <label for="id_category"><span class="badge badge-primary">KATEGORI LOKER**</span></label>
             <select name="id_category" id="id_category" class="form-control" required>
               <option value="">-PILIH-</option>
               <?php foreach ($Category->result() as $key => $data) {  ?>
                 <option value="<?= $data->id_category ?>" <?= $data->id_category == $row->id_category ? "selected" : null ?>><?= $data->nama ?></option>
               <?php } ?>
             </select>
           </div>

           <div class="form-group col-lg-5">
             <label for="id_jobs"><span class="badge badge-primary">TYPE LOKER**</span></label>
             <select name="id_jobs" id="id_jobs" class="form-control" required>
               <option value="">-PILIH-</option>
               <?php foreach ($Type_jobs->result() as $key => $data) {  ?>
                 <option value="<?= $data->id_jobs ?>" <?= $data->id_jobs == $row->id_jobs ? "selected" : null ?>><?= $data->name_jobs ?></option>
               <?php } ?>
             </select>
           </div>


           <div class="form-group col-lg-5">
             <label for="city_id"><span class="badge badge-primary">DAERAH LOKER**</span></label>
             <select name="city_id" id="city_id" class="form-control" required>
               <option value="">-PILIH-</option>
               <?php foreach ($City->result() as $key => $data) {  ?>
                 <option value="<?= $data->city_id ?>" <?= $data->city_id == $row->city_id ? "selected" : null ?>><?= $data->name_city ?></option>
               <?php } ?>
             </select>
           </div>



           <div class="form-group col-lg-10">
             <button type="submit" class="btn btn-primary btn-sm" name="<?= $page ?>"> <i class="fa fas fa-save"></i> <?= $page ?></button>
             <button type="reset" class="btn btn-warning btn-sm"><i class="fa fas fa-undo"></i> Reset</button>
           </div>
           <?php echo form_close() ?>
         </div>
       </div>
     </div>
   </div>
   <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
 </div>
