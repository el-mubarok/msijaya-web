<script>
	/*
	<p>
		<i class="fa fa-clock-o"></i>&nbsp;
		21 Juni 2019

		<ul class="list-group">
			<li class="list-group-item">08.22 - Penarikan iuran bulanan - Ibu Uci Yuliani</li>
		</ul>
	</p>
	*/

	// detail
	$(".detail").click(function(event) {
		let this_el = $(this);
		let el = $("#detail_petugas");
		let modalTitle = $("#detail_petugas .modal-title");
		let dataName = $(this).data('name');
		let res_el = "";

		$("#detail_petugas .appended").html('');
		modalTitle.text("Aktifitas - " + dataName);
		$("#detail_petugas").modal("show");

		// add loading
		el.find('#loading_wrap').show();

		$.get('<?=site_url('C_Petugas/getAktifitasPetugas')?>', 
			{id_petugas: this_el.data('id')},
			function(data) {

				let getdata = JSON.parse(data);
				let getdatakey = Object.keys(getdata);
				let res1 = "";
				let res2 = "";
				let tgl;

				if(getdatakey.length > 0){
					for(let i=0; i<getdatakey.length; i++){
						for(let j=0; j<getdata[getdatakey[i]].length; j++){
							var res2data = getdata[getdatakey[i]];
							res2 +=
								"<li class='list-group-item'>" + 
								res2data[j].jam +" - "+ res2data[j].activity +" - "+ res2data[j].warga +
								"</li>";
						}
						tgl = iddateformat(getdatakey[i]);
						res1 =
							$("<p>").append(
								$("<i>").addClass("fa fa-clock-o"),
								"&nbsp;",
								tgl.day_num + " " + tgl.month + " " + tgl.year,
								$("<ul>")
									.addClass('list-group')
									.append(res2)
							)
						;
						el.find(".modal-body .appended").append(res1);
						res2 = "";
					}
				}else{
					res1 = 
						$("<div>").addClass('well')
						.append(
							$("<p>")
								.attr({
									"style": "margin-bottom: 0px"
								})
								.addClass("text-danger")
								.text("Belum ada aktivitas.")
						);
					el.find(".modal-body .appended").append(res1);
				}

				console.log(iddateformat(getdatakey[0]));
				el.find('#loading_wrap').hide();
		});
	});
</script>