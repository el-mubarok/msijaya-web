<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
<!-- head -->
<?= $this->load->view('../../elements/head'); ?>

<body>

  <div id="kuitansi_print" style="width: 70%;">
    <link href="https://fonts.googleapis.com/css?family=Old+Standard+TT:400,400i,700" rel="stylesheet">
    <style>
      table {
        margin-bottom: 30px;
      }

      .well {
        min-height: 20px;
        padding: 19px;
        background-color:
          #f5f5f5;
        border: 1px solid #e3e3e3;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
      }

      .kuitansi {
        font-size: 1.5rem;
        font-family: 'Old Standard TT', serif;
        color: #333;
        background-image: url('<?= base_url('app-assets/images/bg-kwitansi.jpg') ?>');
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        height: 382px;
        position: relative;
      }

      .kuitansi img {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
      }

      .page-content {
        background: transparent;
      }

      .kuitansi:after {
        content: 'Perum Muara Sarana Indah';
        font-size: 1rem;
        position: absolute;
        bottom: 10px;
        z-index: 10;
      }

      .kuitansi tr td {
        padding: 5px 10px;
        white-space: nowrap;
      }

      .kuitansi tr td:nth-child(2) {
        width: 100%;
      }

      .terbilang {
        border: none;
        padding: 5px 3px;
        background-color: rgba(0, 0, 0, .2);
      }

      .bottom-part {
        margin-top: 15px;
      }

      @media print {
        body * {
          visibility: hidden;
        }

        .kuitansi,
        .kuitansi * {
          visibility: visible;
          position: relative;
        }
      }
    </style>
    <div class="well kuitansi">
      <!-- <img src="<?= base_url('app-assets/images/bg-kwitansi.jpg') ?>" alt=""> -->
      <div style="position: relative; z-index: 10; overflow: hidden;">

        <p>No. 1578627277</p>
        <p>
        </p>
        <table>
          <tbody>
            <tr>
              <td>Telah terima dari</td>
              <td>Siti Ubaid</td>
            </tr>
            <tr>
              <td>Uang sejumlah</td>
              <td>
                <b><i>Tiga Ratus Ribu Rupiah</i></b>
              </td>
            </tr>
            <tr>
              <td>Untuk pembayaran</td>
              <td>Donasi Kegiatan Jalan Sehat</td>
            </tr>
          </tbody>
        </table>
        <div class="float-xs-left bottom-part">
          Rp 300.000 </div>
        <div class="float-xs-right bottom-part">
          <p>Malang, 20 Oktober 2018</p>
          <p>Bendahara,</p><br>
          <p>Imam Taufik</p>
        </div>
        <div style="clear: both;"></div>

      </div>
    </div>
  </div>

  <div id="res" class="mt-1">
    <img src="" alt="">
  </div>

  <?= $this->load->view('../../elements/script'); ?>
  <script src="<?= base_url('app-assets/vendors/js/miscellaneous/html2canvas.min.js') ?>"></script>
  <script>
    $(function () {
      
      var kuitansi = document.getElementById('kuitansi_print');
      html2canvas(kuitansi, {scale: 8}).then(function(canvas){
      	var base64f = canvas.toDataURL("image/png");
        // $("#res img").attr("src","url("+base64f+")");
        window.open(base64f, "_blank");
      });

    });
  </script>
</body>

</html>