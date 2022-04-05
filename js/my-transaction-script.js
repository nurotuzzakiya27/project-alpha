/* Filter Tanggal Pembuatan Rule Min Tanggal Pembuatan Akhir Value */
$( "#f_tgl_pembuatan_awal" ).change(function() {
	var minDateValue = document.getElementById('f_tgl_pembuatan_awal').value;
	$('#f_tgl_pembuatan_akhir').attr('min', minDateValue);
	$('#f_tgl_pembuatan_akhir').val(null);
});
/* End of Filter Tanggal Pembuatan Rule Min Tanggal Pembuatan Akhir Value */


/* Proses Submit Transaksi Sales Orders */
$('#btn_submit_sales_orders').on('click', function(){
	swal({   
		title: "Apakah Anda Yakin?",   
		text: "Transaksi Anda akan tersimpan!",   
		type: "warning",   
		showCancelButton: true,   
		confirmButtonText: "Ya, Simpan!",
		cancelButtonText: "Tidak, Lanjutkan Transaksi!",   
	}).then(function(isConfirm){
		if (isConfirm) {     
			// swal("Deleted!", "Your imaginary file has been deleted.", "success");
			window.location.href="sales-orders.php";   
		} else {     
			// swal("Cancelled", "Your imaginary file is safe :)", "error");   
		} 
	});
});

$(document).ready(function() {
    var counter = 1;
    var t = $('#table_transaction_sales_orders').DataTable();
 
    $('#btn_tambah_sales_orders').on( 'click', function () {
        t.row.add( [
            '<tr id="line-'+ counter +'">'+
            '<td>'+ counter +'</td>',
            '<td><input type="text" id="f_item_id_'+counter+'"></td>',
            '<td>'+ counter +'.3</td>',
            '<td><input type="number" id="f_qty_item"></td>',
            '<td>'+ counter +'.4</td>',
            '<td><input type="text" id="f_harga_satuan"></td>',
            '<td>'+ counter +'.4</td>',
            '<td><button onclick="Cancel_Line_SO('+counter+')" class="btn btn-danger" id="cancel-'+ counter +'" >X</button></td>'+
            '</tr>'
        ] ).draw( false );
 		console.log('line-'+ counter);

        var data = [
            "ActionScript",
            "AppleScript",
            "ASP",
            "BASIC",
            "C",
            "C++",
            "Clojure",
            "COBOL",
            "ColdFusion",
            "Erlang",
            "Fortran",
            "Groovy",
            "Haskell",
            "Java",
            "JavaScript",
            "Lisp",
            "Perl",
            "PHP",
            "Python",
            "Ruby",
            "Scala",
            "Scheme"
        ];
        $("#f_item_id_"+counter).autocomplete({
            source: data
        });
        counter++;
    });
});

// Proses Penghapusan Line SO
function Cancel_Line_SO(ID){
    var t = $('#table_transaction_sales_orders').DataTable();

	$("#table_transaction_sales_orders").on("click", "#cancel-"+ID, function() {
	   	// t.row($(this).parents('tr') ).remove().draw();
	   	$('#line-1').remove();
	});
};



/* End of Proses Submit Transaksi Sales Orders */