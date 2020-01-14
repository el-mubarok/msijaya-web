  <div id="kuitansi_print">
    <link href="https://fonts.googleapis.com/css?family=Old+Standard+TT:400,400i,700" rel="stylesheet">
    <style>
      table {
        margin-bottom: 30px;
      }

      #terbilang, #penerima, #tanggal{
        text-transform: capitalize;
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
        background-image: url('<?= base_url('app-assets/images/bg-kwitansi.jpg')?>');
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
      <!-- <img src="<?= base_url('app-assets/images/bg-kwitansi.jpg')?>" alt=""> -->
      <div style="position: relative; z-index: 10; overflow: hidden;">
        <!-- 
          #penerima,
          #terbilang,
          #kegiatan,
          #nominal,
          #tanggal
         -->
        <p>No. 1578627277</p>
        <p>
        </p>
        <table>
          <tbody>
            <tr>
              <td>Telah terima dari</td>
              <td id="penerima">...</td>
            </tr>
            <tr>
              <td>Uang sejumlah</td>
              <td>
                <b><i id="terbilang">...</i></b>
              </td>
            </tr>
            <tr>
              <td>Untuk pembayaran</td>
              <td>Donasi Kegiatan <span id="kegiatan">...</span></td>
            </tr>
          </tbody>
        </table>
        <div class="float-xs-left bottom-part">
          Rp <span id="nominal">...</span>
        </div>
        <div class="float-xs-right bottom-part">
          <p>Malang, <span id="tanggal">...</span></p>
          <p>Bendahara,</p><br>
          <p>Imam Taufik</p>
        </div>
        <div style="clear: both;"></div>

      </div>
    </div>
  </div>