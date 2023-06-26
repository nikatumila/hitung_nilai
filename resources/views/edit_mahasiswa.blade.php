<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>EDIT DATA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('/') }}assets/img/favicon.png" rel="icon">
  <link href="{{ asset('/') }}assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('/') }}assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('/') }}assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('/') }}assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset('/') }}assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="{{ asset('/') }}assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="{{ asset('/') }}assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{ asset('/') }}assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('/') }}assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">FORM EDIT DATA</h5>
                    <p class="text-center small">EDIT DATA MAHASISWA</p>
                  </div>

                  <form action="{{ route('post_edit_mahasiswa', $mhs->id) }}" method="POST" enctype="multipart/form-data" class="row g-3 needs-validation" novalidate>
                    @csrf
                    <div class="col-12">
                      <label class="form-label">NIM</label>
                      <input type="text" name="nim" class="form-control" value="{{ $mhs->nim }}" required>
                      <div class="invalid-feedback">Masukkan NIM!</div>
                    </div>
                    <div class="col-12">
                      <label class="form-label">Nama Mahasiswa</label>
                      <input type="text" name="name" class="form-control" value="{{ $mhs->name }}" required>
                      <div class="invalid-feedback">Masukkan nama!</div>
                    </div>
                    <div class="col-12">
                      <label class="form-label">Nilai Quiz</label>
                      <input type="number" name="quiz" class="form-control" value="{{ $mhs->quiz }}" required>
                      <div class="invalid-feedback">Masukkan nilai quiz!</div>
                    </div>
                    <div class="col-12">
                      <label class="form-label">Nilai Tugas</label>
                      <input type="number" name="task" class="form-control" value="{{ $mhs->task }}" required>
                      <div class="invalid-feedback">Masukkan nilai tugas!</div>
                    </div>
                    <div class="col-12">
                      <label class="form-label">Nilai Absensi</label>
                      <input type="number" name="presence" class="form-control" value="{{ $mhs->presence }}" required>
                      <div class="invalid-feedback">Masukkan nilai absensi!</div>
                    </div>
                    <div class="col-12">
                      <label class="form-label">Nilai Praktek</label>
                      <input type="number" name="practice" class="form-control" value="{{ $mhs->practice }}" required>
                      <div class="invalid-feedback">Masukkan nilai praktek!</div>
                    </div>
                    <div class="col-12">
                      <label class="form-label">Nilai UAS</label>
                      <input type="number" name="final_exam" class="form-control" value="{{ $mhs->final_exam }}" required>
                      <div class="invalid-feedback">Masukkan nilai UAS!</div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Simpan</button>
                    </div>
                    
                  </form>

                </div>
              </div>

              

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('/') }}assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="{{ asset('/') }}assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('/') }}assets/vendor/chart.js/chart.min.js"></script>
  <script src="{{ asset('/') }}assets/vendor/echarts/echarts.min.js"></script>
  <script src="{{ asset('/') }}assets/vendor/quill/quill.min.js"></script>
  <script src="{{ asset('/') }}assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="{{ asset('/') }}assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="{{ asset('/') }}assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('/') }}assets/js/main.js"></script>

</body>

</html>