<?php $this->load->view('Home/js'); ?>
<?php $this->load->view('Home/Navbar'); ?>
<?php $this->load->view('Home/Sidebar'); ?>
</div>
 <!-- Page -->
  <div class="page">
    <div class="page-header">
      <h1 class="page-title">DataTables</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0)">Tables</a></li>
        <li class="breadcrumb-item active">DataTables</li>
      </ol>
    </div>

    <div class="page-content">
      <!-- Panel Basic -->
      <div class="col-lg-12">
        <form class="form-inline" action="" method="post" >
            <input class="form-control" type="search" placeholder="Search" name="search_obat_admin" aria-label="Search" >
            <button style="margin-left: 8px" class="btn btn-success my-2 my-sm-0" name="cariobat" type="submit"><i class="nav-link icon md-search" ></i> </button>
        </form>
      </div>
      <br>
      <br>
      <!-- Panel Table Add Row -->
      <div class="panel">
        <header class="panel-heading">
          <h3 class="panel-title">Add Row</h3>
        </header>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-6">
              <div class="mb-15">
                <button id="addToTable" class="btn btn-primary" type="button">
                  <i class="icon md-plus" aria-hidden="true"></i> Add row
                </button>
              </div>
            </div>
          </div>
          <div class="table-responsive"></div>
		    <table class="table table-bordered" width="100%" cellspacing="0">
		      <thead class="bg-light">
			      <tr>
			        <th>No.</th>
			        <th>Kategori</th>
			        <th width="115px">Action</th>
			      </tr>
		    </thead>
            <tbody>
              <tr class="gradeA">
                <td>Trident</td>
                <td>Internet Explorer 5.5</td>
                <td class="actions">
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon md-wrench" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                    data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon md-close" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                    data-toggle="tooltip" data-original-title="Edit"><i class="icon md-edit" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                    data-toggle="tooltip" data-original-title="Remove"><i class="icon md-delete" aria-hidden="true"></i></a>
                </td>
              </tr>
              <tr class="gradeA">
                <td>Trident</td>
                <td>Internet Explorer 6</td>
                <td class="actions">
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon md-wrench" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                    data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon md-close" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                    data-toggle="tooltip" data-original-title="Edit"><i class="icon md-edit" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                    data-toggle="tooltip" data-original-title="Remove"><i class="icon md-delete" aria-hidden="true"></i></a>
                </td>
              </tr>
              <tr class="gradeA">
                <td>Trident</td>
                <td>AOL browser (AOL desktop)</td>
                <td class="actions">
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon md-wrench" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                    data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon md-close" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                    data-toggle="tooltip" data-original-title="Edit"><i class="icon md-edit" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                    data-toggle="tooltip" data-original-title="Remove"><i class="icon md-delete" aria-hidden="true"></i></a>
                </td>
              </tr>
              <tr class="gradeA">
                <td>Gecko</td>
                <td>Firefox 1.0</td>
                <td class="actions">
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon md-wrench" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                    data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon md-close" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                    data-toggle="tooltip" data-original-title="Edit"><i class="icon md-edit" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                    data-toggle="tooltip" data-original-title="Remove"><i class="icon md-delete" aria-hidden="true"></i></a>
                </td>
              </tr>
              <tr class="gradeA">
                <td>Trident</td>
                <td>Camino 1.0</td>
                <td class="actions">
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon md-wrench" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                    data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon md-close" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                    data-toggle="tooltip" data-original-title="Edit"><i class="icon md-edit" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                    data-toggle="tooltip" data-original-title="Remove"><i class="icon md-delete" aria-hidden="true"></i></a>
                </td>
              </tr>
              <tr class="gradeA">
                <td>Trident</td>
                <td>Netscape 7.2</td>
                <td class="actions">
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon md-wrench" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                    data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon md-close" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                    data-toggle="tooltip" data-original-title="Edit"><i class="icon md-edit" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                    data-toggle="tooltip" data-original-title="Remove"><i class="icon md-delete" aria-hidden="true"></i></a>
                </td>
              </tr>
              <tr class="gradeA">
                <td>Trident</td>
                <td>Internet Explorer 5.5</td>
                <td class="actions">
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon md-wrench" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                    data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon md-close" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                    data-toggle="tooltip" data-original-title="Edit"><i class="icon md-edit" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                    data-toggle="tooltip" data-original-title="Remove"><i class="icon md-delete" aria-hidden="true"></i></a>
                </td>
              </tr>
              <tr class="gradeA">
                <td>Trident</td>
                <td>Internet Explorer 6</td>
                <td class="actions">
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon md-wrench" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                    data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon md-close" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                    data-toggle="tooltip" data-original-title="Edit"><i class="icon md-edit" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                    data-toggle="tooltip" data-original-title="Remove"><i class="icon md-delete" aria-hidden="true"></i></a>
                </td>
              </tr>
              <tr class="gradeA">
                <td>Trident</td>
                <td>AOL browser (AOL desktop)</td>
                <td class="actions">
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon md-wrench" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                    data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon md-close" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                    data-toggle="tooltip" data-original-title="Edit"><i class="icon md-edit" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                    data-toggle="tooltip" data-original-title="Remove"><i class="icon md-delete" aria-hidden="true"></i></a>
                </td>
              </tr>
              <tr class="gradeA">
                <td>Gecko</td>
                <td>Firefox 1.0</td>
                <td class="actions">
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon md-wrench" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                    data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon md-close" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                    data-toggle="tooltip" data-original-title="Edit"><i class="icon md-edit" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                    data-toggle="tooltip" data-original-title="Remove"><i class="icon md-delete" aria-hidden="true"></i></a>
                </td>
              </tr>
              <tr class="gradeA">
                <td>Trident</td>
                <td>Camino 1.0</td>
                <td class="actions">
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon md-wrench" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                    data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon md-close" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                    data-toggle="tooltip" data-original-title="Edit"><i class="icon md-edit" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                    data-toggle="tooltip" data-original-title="Remove"><i class="icon md-delete" aria-hidden="true"></i></a>
                </td>
              </tr>
              <tr class="gradeA">
                <td>Trident</td>
                <td>Netscape 7.2</td>
                <td class="actions">
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon md-wrench" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                    data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon md-close" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                    data-toggle="tooltip" data-original-title="Edit"><i class="icon md-edit" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                    data-toggle="tooltip" data-original-title="Remove"><i class="icon md-delete" aria-hidden="true"></i></a>
                </td>
              </tr>
              <tr class="gradeA">
                <td>Trident</td>
                <td>Camino 1.0</td>
                <td class="actions">
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon md-wrench" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                    data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon md-close" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                    data-toggle="tooltip" data-original-title="Edit"><i class="icon md-edit" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                    data-toggle="tooltip" data-original-title="Remove"><i class="icon md-delete" aria-hidden="true"></i></a>
                </td>
              </tr>
              <tr class="gradeA">
                <td>Trident</td>
                <td>Netscape 7.2</td>
                <td class="actions">
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon md-wrench" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                    data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon md-close" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                    data-toggle="tooltip" data-original-title="Edit"><i class="icon md-edit" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                    data-toggle="tooltip" data-original-title="Remove"><i class="icon md-delete" aria-hidden="true"></i></a>
                </td>
              </tr>
              <tr class="gradeA">
                <td>Trident</td>
                <td>Internet Explorer 5.5</td>
                <td class="actions">
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon md-wrench" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                    data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon md-close" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                    data-toggle="tooltip" data-original-title="Edit"><i class="icon md-edit" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                    data-toggle="tooltip" data-original-title="Remove"><i class="icon md-delete" aria-hidden="true"></i></a>
                </td>
              </tr>
              <tr class="gradeA">
                <td>Trident</td>
                <td>Internet Explorer 6</td>
                <td class="actions">
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon md-wrench" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                    data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon md-close" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                    data-toggle="tooltip" data-original-title="Edit"><i class="icon md-edit" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                    data-toggle="tooltip" data-original-title="Remove"><i class="icon md-delete" aria-hidden="true"></i></a>
                </td>
              </tr>
              <tr class="gradeA">
                <td>Trident</td>
                <td>AOL browser (AOL desktop)</td>
                <td class="actions">
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon md-wrench" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                    data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon md-close" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                    data-toggle="tooltip" data-original-title="Edit"><i class="icon md-edit" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                    data-toggle="tooltip" data-original-title="Remove"><i class="icon md-delete" aria-hidden="true"></i></a>
                </td>
              </tr>
              <tr class="gradeA">
                <td>Gecko</td>
                <td>Firefox 1.0</td>
                <td class="actions">
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon md-wrench" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                    data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon md-close" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                    data-toggle="tooltip" data-original-title="Edit"><i class="icon md-edit" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                    data-toggle="tooltip" data-original-title="Remove"><i class="icon md-delete" aria-hidden="true"></i></a>
                </td>
              </tr>
              <tr class="gradeA">
                <td>Trident</td>
                <td>Camino 1.0</td>
                <td class="actions">
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon md-wrench" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                    data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon md-close" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                    data-toggle="tooltip" data-original-title="Edit"><i class="icon md-edit" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                    data-toggle="tooltip" data-original-title="Remove"><i class="icon md-delete" aria-hidden="true"></i></a>
                </td>
              </tr>
              <tr class="gradeA">
                <td>Trident</td>
                <td>Netscape 7.2</td>
                <td class="actions">
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon md-wrench" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                    data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon md-close" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                    data-toggle="tooltip" data-original-title="Edit"><i class="icon md-edit" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                    data-toggle="tooltip" data-original-title="Remove"><i class="icon md-delete" aria-hidden="true"></i></a>
                </td>
              </tr>
              <tr class="gradeA">
                <td>Trident</td>
                <td>Netscape 7.2</td>
                <td class="actions">
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon md-wrench" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                    data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon md-close" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                    data-toggle="tooltip" data-original-title="Edit"><i class="icon md-edit" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                    data-toggle="tooltip" data-original-title="Remove"><i class="icon md-delete" aria-hidden="true"></i></a>
                </td>
              </tr>
              <tr class="gradeA">
                <td>Trident</td>
                <td>Internet Explorer 5.5</td>
                <td class="actions">
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon md-wrench" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                    data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon md-close" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                    data-toggle="tooltip" data-original-title="Edit"><i class="icon md-edit" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                    data-toggle="tooltip" data-original-title="Remove"><i class="icon md-delete" aria-hidden="true"></i></a>
                </td>
              </tr>
              <tr class="gradeA">
                <td>Trident</td>
                <td>Internet Explorer 6</td>
                <td class="actions">
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon md-wrench" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                    data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon md-close" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                    data-toggle="tooltip" data-original-title="Edit"><i class="icon md-edit" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                    data-toggle="tooltip" data-original-title="Remove"><i class="icon md-delete" aria-hidden="true"></i></a>
                </td>
              </tr>
              <tr class="gradeA">
                <td>Trident</td>
                <td>AOL browser (AOL desktop)</td>
                <td class="actions">
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon md-wrench" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                    data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon md-close" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                    data-toggle="tooltip" data-original-title="Edit"><i class="icon md-edit" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                    data-toggle="tooltip" data-original-title="Remove"><i class="icon md-delete" aria-hidden="true"></i></a>
                </td>
              </tr>
              <tr class="gradeA">
                <td>Gecko</td>
                <td>Firefox 1.0</td>
                <td class="actions">
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon md-wrench" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                    data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon md-close" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                    data-toggle="tooltip" data-original-title="Edit"><i class="icon md-edit" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                    data-toggle="tooltip" data-original-title="Remove"><i class="icon md-delete" aria-hidden="true"></i></a>
                </td>
              </tr>
              <tr class="gradeA">
                <td>Trident</td>
                <td>Camino 1.0</td>
                <td class="actions">
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon md-wrench" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                    data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon md-close" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                    data-toggle="tooltip" data-original-title="Edit"><i class="icon md-edit" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                    data-toggle="tooltip" data-original-title="Remove"><i class="icon md-delete" aria-hidden="true"></i></a>
                </td>
              </tr>
              <tr class="gradeA">
                <td>Trident</td>
                <td>Netscape 7.2</td>
                <td class="actions">
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon md-wrench" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                    data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon md-close" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                    data-toggle="tooltip" data-original-title="Edit"><i class="icon md-edit" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                    data-toggle="tooltip" data-original-title="Remove"><i class="icon md-delete" aria-hidden="true"></i></a>
                </td>
              </tr>
              <tr class="gradeA">
                <td>Trident</td>
                <td>Camino 1.0</td>
                <td class="actions">
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon md-wrench" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                    data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon md-close" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                    data-toggle="tooltip" data-original-title="Edit"><i class="icon md-edit" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                    data-toggle="tooltip" data-original-title="Remove"><i class="icon md-delete" aria-hidden="true"></i></a>
                </td>
              </tr>
              <tr class="gradeA">
                <td>Trident</td>
                <td>Netscape 7.2</td>
                <td class="actions">
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon md-wrench" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                    data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon md-close" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                    data-toggle="tooltip" data-original-title="Edit"><i class="icon md-edit" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                    data-toggle="tooltip" data-original-title="Remove"><i class="icon md-delete" aria-hidden="true"></i></a>
                </td>
              </tr>
              <tr class="gradeA">
                <td>Trident</td>
                <td>Internet Explorer 5.5</td>
                <td class="actions">
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon md-wrench" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                    data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon md-close" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                    data-toggle="tooltip" data-original-title="Edit"><i class="icon md-edit" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                    data-toggle="tooltip" data-original-title="Remove"><i class="icon md-delete" aria-hidden="true"></i></a>
                </td>
              </tr>
              <tr class="gradeA">
                <td>Trident</td>
                <td>Internet Explorer 6</td>
                <td class="actions">
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon md-wrench" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                    data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon md-close" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                    data-toggle="tooltip" data-original-title="Edit"><i class="icon md-edit" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                    data-toggle="tooltip" data-original-title="Remove"><i class="icon md-delete" aria-hidden="true"></i></a>
                </td>
              </tr>
              <tr class="gradeA">
                <td>Trident</td>
                <td>AOL browser (AOL desktop)</td>
                <td class="actions">
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon md-wrench" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                    data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon md-close" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                    data-toggle="tooltip" data-original-title="Edit"><i class="icon md-edit" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                    data-toggle="tooltip" data-original-title="Remove"><i class="icon md-delete" aria-hidden="true"></i></a>
                </td>
              </tr>
              <tr class="gradeA">
                <td>Gecko</td>
                <td>Firefox 1.0</td>
                <td class="actions">
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon md-wrench" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                    data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon md-close" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                    data-toggle="tooltip" data-original-title="Edit"><i class="icon md-edit" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                    data-toggle="tooltip" data-original-title="Remove"><i class="icon md-delete" aria-hidden="true"></i></a>
                </td>
              </tr>
              <tr class="gradeA">
                <td>Trident</td>
                <td>Camino 1.0</td>
                <td class="actions">
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon md-wrench" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                    data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon md-close" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                    data-toggle="tooltip" data-original-title="Edit"><i class="icon md-edit" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                    data-toggle="tooltip" data-original-title="Remove"><i class="icon md-delete" aria-hidden="true"></i></a>
                </td>
              </tr>
              <tr class="gradeA">
                <td>Trident</td>
                <td>Netscape 7.2</td>
                <td class="actions">
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon md-wrench" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                    data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon md-close" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                    data-toggle="tooltip" data-original-title="Edit"><i class="icon md-edit" aria-hidden="true"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                    data-toggle="tooltip" data-original-title="Remove"><i class="icon md-delete" aria-hidden="true"></i></a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!-- End Panel Table Add Row -->   

    </div>
  </div>
  <!-- End Page -->

<?php $this->load->view('Home/Footer'); ?>