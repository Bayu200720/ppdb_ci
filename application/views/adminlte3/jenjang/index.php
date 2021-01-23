<div class="content-wrapper" style="min-height: 478.203px;">

<title>Master Data • SiPPDB Online</title>

<div class="content-header pl-20">
<div class="container">
<div class="row">
<div class="col-sm-6">
<h4 class="text-dark">
Master Data • <span class="text-muted text-small h6">Setting Jenjang</span>
</h4>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="./">Home</a></li>
<li class="breadcrumb-item active">Master Data</li>
</ol>
</div>
</div>
</div>
</div>


<div class="content">
<div class="container pl-20">

<div class="row mt-10">
<div class="col-lg-6">
<div class="card shadow-md bg-gradient-light">
<div class="card-body">
<form method="POST" action="" class="form-horizontal">
<div class="form-group">
<label for="exampleInputEmail1">Nama Jenjang</label>
<input type="text" name="nama_jenjang" class="form-control" placeholder="Masukkan Nama Jenjang" required="required">
</div>
<div class="form-group float-right">
<button type="submit" name="btn-upload" class="btn btn-sm bg-gradient-success">Tambah</button>
</div>
</form>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="card shadow-md">
<div class="card-header bg-gradient-gray">
<div class="d-flex justify-content-between">
<h3 class="card-title">
Data Master Jenjang
</h3>
</div>
</div>
<div class="card-body p-30">
<div class="table-responsive">
<div id="DataTablesDefault2_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTablesDefault2_length"><label>Show <select name="DataTablesDefault2_length" aria-controls="DataTablesDefault2" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="DataTablesDefault2_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTablesDefault2"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="DataTablesDefault2" class="table table-striped table-hover dataTable no-footer" role="grid" aria-describedby="DataTablesDefault2_info">
<thead>
<tr role="row"><th class="bg-gradient-light sorting_asc" tabindex="0" aria-controls="DataTablesDefault2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 12px;">#</th><th class="bg-gradient-light sorting" tabindex="0" aria-controls="DataTablesDefault2" rowspan="1" colspan="1" aria-label="Nama Jenjang: activate to sort column ascending" style="width: 301px;">Nama Jenjang</th><th class="bg-gradient-light sorting" tabindex="0" aria-controls="DataTablesDefault2" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 79px;">Action</th></tr>
</thead>
<tbody>



<tr role="row" class="odd">
<td class="sorting_1">1</td>
<td>Jenjang Sekolah Dasar (SD)</td>
<td>
<a data-href="./pages/HapusDataJenjang.php?act=Hapus&amp;id_jenjang=JNJ01" data-toggle="modal" data-target="#ModalHapusDataMaster" class="btn btn-xs bg-gradient-danger text-white">Hapus</a>
<a href="#" data-toggle="modal" data-target="#ModalEditDataMaster" data-id="JNJ01" class="btn btn-xs bg-gradient-warning text-white">Edit</a>
</td>
</tr><tr role="row" class="even">
<td class="sorting_1">2</td>
<td>Jenjang Sekolah Menengah Atas (SMA/MAN)</td>
<td>
<a data-href="./pages/HapusDataJenjang.php?act=Hapus&amp;id_jenjang=JNJ03" data-toggle="modal" data-target="#ModalHapusDataMaster" class="btn btn-xs bg-gradient-danger text-white">Hapus</a>
<a href="#" data-toggle="modal" data-target="#ModalEditDataMaster" data-id="JNJ03" class="btn btn-xs bg-gradient-warning text-white">Edit</a>
</td>
</tr><tr role="row" class="odd">
<td class="sorting_1">3</td>
<td>Jenjang Sekolah Menengah Pertama (SMP/MTS)</td>
<td>
<a data-href="./pages/HapusDataJenjang.php?act=Hapus&amp;id_jenjang=JNJ02" data-toggle="modal" data-target="#ModalHapusDataMaster" class="btn btn-xs bg-gradient-danger text-white">Hapus</a>
<a href="#" data-toggle="modal" data-target="#ModalEditDataMaster" data-id="JNJ02" class="btn btn-xs bg-gradient-warning text-white">Edit</a>
</td>
</tr></tbody>
</table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="DataTablesDefault2_info" role="status" aria-live="polite">Showing 1 to 3 of 3 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTablesDefault2_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTablesDefault2_previous"><a href="#" aria-controls="DataTablesDefault2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTablesDefault2" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="DataTablesDefault2_next"><a href="#" aria-controls="DataTablesDefault2" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="modal fade" id="ModalEditDataMaster" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-md" role="document">
<div class="modal-content radius-1">
<div class="modal-header">
<h6 class="modal-title">
<span class="text-bold">Edit Data</span>
<span class="fw-light">Master Jenjang</span>
</h6>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true"><i class="fa fa-times-circle text-md"></i></span>
</button>
</div>
<div class="modal-body p-30">
<div class="fetched-data"></div>
</div>
<div class="modal-footer">
<button class="btn btn-sm bg-gradient-danger" type="button" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>

<script src="../assets/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#ModalEditDataMaster').on('show.bs.modal', function(e) {
            var rowid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type: 'post',
                url: './pages/EditDataJenjang.php',
                data: 'rowid=' + rowid,
                success: function(data) {
                    $('.fetched-data').html(data); //menampilkan data ke dalam modal
                }
            });
        });
    });
</script>

<div class="modal fade" id="ModalHapusDataMaster" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-md" role="document">
<div class="modal-content radius-1">
<div class="modal-header">
<h5 class="modal-title">
<span class="text-bold">Hapus Data</span>
<span class="fw-light">Jenjang</span>
</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true"><i class="fa fa-times-circle text-md"></i></span>
</button>
</div>
<div class="modal-body p-20">
Apakah anda yakin akan menghapus data master jenjang ? <br> Klik tombol <strong>"Lanjutkan"</strong> untuk menghapus data.
</div>
<div class="modal-footer">
<a href="#" class="btn btn-sm bg-gradient-success btn-accept">Lanjutkan</a>
<button class="btn btn-sm bg-gradient-danger" type="button" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>

<script src="../assets/js/jquery-3.3.1.min.js"></script>
<script>
    $(document).ready(function() {
        $('#ModalHapusDataMaster').on('show.bs.modal', function(e) {
            $(this).find('.btn-accept').attr('href', $(e.relatedTarget).data('href'));
        });
    });
</script>
</div>