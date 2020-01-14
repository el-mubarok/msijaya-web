<script>

  var sourcedata = {
    "results": [
      {
        "text": "active",
        "children": [
          {"id":1,"text":"bpk. darmawan"},
          {"id":2,"text":"bpk. hadi rahmat"}
        ]
      },
      {
        "text": "inactive",
        "children": [
          {"id":3,"text":"ibu uci yulianti"},
          {"id":4,"text":"bpk. sadi masnad"},
          {"id":5,"text":"yulian joni"}
        ]
      }
    ],
    "pagination":{
      "more": true
    }
  };

  // get url parameter with specific key
  var getparams = function(key){
    // it will return array data
    return window.location.href.match('[?&]'+key+'=([^&]+)')[1];
  };

  // init
  $(function () {
    $("#name_select2").val(getparams('id'));
    $("#thn_select").val(getparams('th'));

    if(getparams('id') != null){
      showdetails(sourcedata2[getparams('id')]);
      $("#carddetailres").css("display","block");
      $("#unchoosemsg").css('display','none');
    }
  });

  $("#name_select2").select2({
    data: sourcedata.results,
    placeholder: "Pilih petugas",
    allowClear: true
  });

  // select on change
  $("#name_select2").change(function(){
    var id = $(this).val();
    if(id != ''){
      history.pushState({id:id},"","?id="+id+"&th=all");
      showdetails(sourcedata2[id]);
      $("#carddetailres").css("display","block");
      $("#unchoosemsg").css('display','none');
    }else{
      $("#carddetailres").css("display","none");
      $("#unchoosemsg").css('display','block');
    }
  });
  $("#thn_select").change(function(){
    var id = getparams('id');
    var thn = $(this).val();
    history.pushState({id:id},"","?id="+id+"&th="+thn);
  });
  // end select on change

  // used when you push browser back button
  // then u can use data from previous page
  // ex. {name:name} 
  window.onpopstate = function(e){
    if(e.state){
      $("#name_select").val(e.state.name);
    }
  };

  var sourcedata2 = {
    "1": [
      {
        "date" : "12 juni 2019",
        "activities": [
          {
            "time": "13.10",
            "type": "penarikan iuran bulanan",
            "occupant": "bpk darsono"
          },
          {
            "time": "14.25",
            "type": "penarikan iuran bulanan",
            "occupant": "ibu fatmawati"
          },
          {
            "time": "20.05",
            "type": "penarikan iuran bulanan",
            "occupant": "jihan putra"
          }
        ]
      }
    ],
    "2": [
      {
        "date" : "7 juli 2019",
        "activities": [
          {
            "time": "08.09",
            "type": "penarikan iuran acara ulang tahun msi jaya",
            "occupant": "darmadji"
          },
          {
            "time": "09.56",
            "type": "penarikan iuran acara ulang tahun msi jaya",
            "occupant": "ibu rosyda"
          },
          {
            "time": "10.20",
            "type": "penarikan iuran acara ulang tahun msi jaya",
            "occupant": "ibu amelia"
          }
        ]
      }
    ]
  };

  console.log(sourcedata2['1']);

  function showdetails(data){
    // reset
    $("#detailres").html('');

    if(data !== undefined){
      for(var i=0; i<data.length; i++){
        console.log(data[i].activities);
        $("#detailres").append($detailel(data[i]));
      }
    }else{
      $("#detailres").html($("<h3>").html("No data found."));
    }
  }

  var $detailel = function(data){
    var dat = data;
    // data -> waktu, tipe, petugas
    var $parent = $("<div>").append(
      $("<i>").addClass("icon-clock3"),
      "&nbsp;"+dat.date //time
    ); // parent element
    var $childlist = $("<ul>").addClass("list-group mb-1 mt-1");
    for(var i=0;i<data.activities.length;i++){
      $childlist.append(
        $("<li>").addClass("list-group-item").html(data.activities[i].time+" - "+data.activities[i].type+" - "+data.activities[i].occupant)
      );
    }
    return $parent.append($childlist);
  };

</script>