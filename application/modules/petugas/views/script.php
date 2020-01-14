<script>

  // ready
  $(function () {
    $(".select2").select2({ width: '100%' });
  });

  // block ui override config
  $.blockUI.defaults = {
    css: {
      padding: 0,
      margin: 0,
      width: '30%',
      top: '40%',
      left: '35%',
      textAlign: 'center',
      color: '#000',
      border: '3px solid #aaa',
      backgroundColor: '#fff',
      cursor: 'wait'
    },
    // minimal style set used when themes are used 
    themedCSS: {
      width: '30%',
      top: '50%',
      left: '50%',
      transform: 'translate(-50%,-50%)'
    },
    // styles for the overlay 
    overlayCSS: {
      backgroundColor: '#000',
      opacity: 0.9,
      cursor: 'wait'
    },
    fadeIn: 200,
    fadeOut: 400,
    showOverlay: true,
  };

  $(".btn-aktifitas").click(function(e) {
    $("#maktifitas").modal('show');
    var el = $("#maktifitas").find('.modal-content');
    blockui(el);
    $.get("https://msijayarebirth.000webhostapp.com/index.php/C_Petugas/getAktifitasPetugas", 
      {id_petugas: 75},
      function(data, textStatus, jqXHR) {
        unblockui(el);
      }
    );
    // link https://msijayarebirth.000webhostapp.com/index.php/C_Petugas/getAktifitasPetugas?id_petugas=75
  });

  $(".btn-aktif").click(function (e) { 
    var el = $("#mswitch"),
        title = el.find(".mswitch-title"),
        name = el.find(".mswitch-name");
    el.modal('show');
    title.html('Aktifkan petugas');
    name.html('Bpk. Suherman Saleh');
  });

  $(".btn-nonaktif").click(function (e) { 
    var el = $("#mswitch"),
        title = el.find(".mswitch-title"),
        name = el.find(".mswitch-name");
    el.modal('show');
    title.html('Non aktifkan petugas');
    name.html('Bpk. Suherman Saleh');
  });

  $(".btn-tambah").click(function(){
    var el = $("#mtambah"),
        radioasal = el.find(".radio-asal");
    el.modal('show');

    radioasal.change(function(){
      if($(this).val() == 'luar'){
        el.find('.warga-luar').css('display','block');
        el.find('.select2').attr('disabled','disabled');
      }else{
        el.find('.warga-luar').css('display','none');
        el.find('.select2').removeAttr('disabled');
      }
    });
  });

  // block/unblock ui apply shortcut
  function blockui(el){
    el.block({
      message: '<div class="icon-spinner9 icon-spin icon-lg"></div>',
      overlayCSS: {
        backgroundColor: '#FFF',
        cursor: 'wait',
        borderRadius: '.75rem'
      },
      css: {
        border: 0,
        padding: 0,
        backgroundColor: 'none'
      },
      themedCSS: {
        left: '50%',
        top: '50%',
        transform: 'translate(-50%,-50%)'
      }
    });
  }
  function unblockui(el){ el.unblock(); }
</script>