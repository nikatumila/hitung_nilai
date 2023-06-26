<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DATA MAHASISWA</title>
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
        <div class="row justify-content-center">
            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                @if ($message = Session::get('success'))
                   <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @endif               
                <div class="row">
                  <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">TABEL DATA MAHASISWA</h5>
                        <a href="{{ route('get_view_create_mahasiswa') }}" class="btn btn-success btn-sm">Tambah Data</a>
                        <a href="{{ route('get_view_chart') }}" class="btn btn-primary btn-sm">Lihat Grafik</a>
                        <!-- Table with stripped rows -->
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">NIM</th>
                              <th scope="col">Nama Mahasiswa</th>
                              <th scope="col">Nilai Quiz</th>
                              <th scope="col">Nilai Tugas</th>
                              <th scope="col">Nilai Absensi</th>
                              <th scope="col">Nilai Praktek</th>
                              <th scope="col">Nilai UAS</th>
                              <th scope="col">Rata-Rata</th>
                              <th scope="col">Grade</th>
                              <th scope="col">Aksi</th>
                            </tr>
                          </thead>
                          <tbody>                           
                            @foreach ($mhs as $no => $hasil)
                            <tr>
                                <th scope="row">{{ $no+1 }}</th>
                                <td>{{ $hasil->nim }}</td>
                                <td>{{ $hasil->name }}</td>
                                <td>{{ $hasil->quiz }}</td>
                                <td>{{ $hasil->task }}</td>
                                <td>{{ $hasil->presence }}</td>
                                <td>{{ $hasil->practice }}</td>
                                <td>{{ $hasil->final_exam }}</td>
                                <td>{{ $hasil->total }}</td>
                                <td>{{ $hasil->grade }}</td>
                                <td>
                                 <form action="{{ route('delete_mahasiswa', $hasil->id) }}" method="POST">
                                    <a href="{{ route('get_view_edit_mahasiswa', $hasil->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                      @csrf
                                      @method('delete')
                                      <button class="btn btn-danger btn-sm">Hapus</button>
                                  </form>
                                </td>
                              </tr>
                            @endforeach                     
                          </tbody>
                        </table>
                        <!-- End Table with stripped rows -->
                      </div>
                    </div>    
                 </div>
              </section>
        </div>
    </div>  
  </main><!-- End #main -->
 
  {{-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> --}}

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