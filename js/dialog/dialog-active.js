(function ($) {
 "use strict";
 
	/*----------------------
		Dialogs
	 -----------------------*/

	//Basic
	$('#sa-basic').on('click', function(){
		swal("Here's a message!");
	});

	//A title with a text under
	$('#sa-title').on('click', function(){
		swal("Here's a message!", "Lorem ipsum dolor cry sit amet, consectetur adipiscing elit. Sed lorem erat, tincidunt vitae ipsum et, Spensaduran pellentesque maximus eniman. Mauriseleifend ex semper, lobortis purus.")
	});

	//Success Message
	$('#sa-success').on('click', function(){
		swal("Good job!", "Lorem ipsum dolor cry sit amet, consectetur adipiscing elit. Sed lorem erat, tincidunt vitae ipsum et, Spensaduran pellentesque maximus eniman. Mauriseleifend ex semper, lobortis purus.", "success")
	});

	//Warning Message
	$('#sa-warning').on('click', function(){
		swal({   
			title: "Are you sure?",   
			text: "You will not be able to recover this imaginary file!",   
			type: "warning",   
			showCancelButton: true,   
			confirmButtonText: "Yes, delete it!",
		}).then(function(){
			swal("Deleted!", "Your imaginary file has been deleted.", "success"); 
		});
	});
	
	//Parameter
	$('#sa-params').on('click', function(){
		swal({   
			title: "Are you sure?",   
			text: "You will not be able to recover this imaginary file!",   
			type: "warning",   
			showCancelButton: true,   
			confirmButtonText: "Yes, delete it!",
			cancelButtonText: "No, cancel plx!",   
		}).then(function(isConfirm){
			if (isConfirm) {     
				swal("Deleted!", "Your imaginary file has been deleted.", "success");   
			} else {     
				swal("Cancelled", "Your imaginary file is safe :)", "error");   
			} 
		});
	});

	$('#btn_cancel_company').on('click', function(){
		swal({   
			title: "Apakah Anda Yakin?",   
			text: "Transaksi Anda tidak akan tersimpan!",   
			type: "warning",   
			showCancelButton: true,   
			confirmButtonText: "Ya, Kembali!",
			cancelButtonText: "Tidak, Lanjutkan Transaksi!",   
		}).then(function(isConfirm){
			if (isConfirm) {     
				// swal("Deleted!", "Your imaginary file has been deleted.", "success");
				window.location.href="company-profile.php";   
			} else {     
				// swal("Cancelled", "Your imaginary file is safe :)", "error");   
			} 
		});
	});

	$('#btn_cancel_bank').on('click', function(){
		swal({   
			title: "Apakah Anda Yakin?",   
			text: "Transaksi Anda tidak akan tersimpan!",   
			type: "warning",   
			showCancelButton: true,   
			confirmButtonText: "Ya, Kembali!",
			cancelButtonText: "Tidak, Lanjutkan Transaksi!",   
		}).then(function(isConfirm){
			if (isConfirm) {     
				// swal("Deleted!", "Your imaginary file has been deleted.", "success");
				window.location.href="company-profile.php";   
			} else {     
				// swal("Cancelled", "Your imaginary file is safe :)", "error");   
			} 
		});
	});

	$('#btn_cancel_employee').on('click', function(){
		swal({   
			title: "Apakah Anda Yakin?",   
			text: "Transaksi Anda tidak akan tersimpan!",   
			type: "warning",   
			showCancelButton: true,   
			confirmButtonText: "Ya, Kembali!",
			cancelButtonText: "Tidak, Lanjutkan Transaksi!",   
		}).then(function(isConfirm){
			if (isConfirm) {     
				// swal("Deleted!", "Your imaginary file has been deleted.", "success");
				window.location.href="employee.php";   
			} else {     
				// swal("Cancelled", "Your imaginary file is safe :)", "error");   
			} 
		});
	});

	$('#btn_cancel_customer').on('click', function(){
		swal({   
			title: "Apakah Anda Yakin?",   
			text: "Transaksi Anda tidak akan tersimpan!",   
			type: "warning",   
			showCancelButton: true,   
			confirmButtonText: "Ya, Kembali!",
			cancelButtonText: "Tidak, Lanjutkan Transaksi!",   
		}).then(function(isConfirm){
			if (isConfirm) {     
				// swal("Deleted!", "Your imaginary file has been deleted.", "success");
				window.location.href="customer.php";   
			} else {     
				// swal("Cancelled", "Your imaginary file is safe :)", "error");   
			} 
		});
	});

	$('#btn_cancel_items').on('click', function(){
		swal({   
			title: "Apakah Anda Yakin?",   
			text: "Transaksi Anda tidak akan tersimpan!",   
			type: "warning",   
			showCancelButton: true,   
			confirmButtonText: "Ya, Kembali!",
			cancelButtonText: "Tidak, Lanjutkan Transaksi!",   
		}).then(function(isConfirm){
			if (isConfirm) {     
				// swal("Deleted!", "Your imaginary file has been deleted.", "success");
				window.location.href="items.php";   
			} else {     
				// swal("Cancelled", "Your imaginary file is safe :)", "error");   
			} 
		});
	});

	$('#btn_cancel_sales_orders').on('click', function(){
		swal({   
			title: "Apakah Anda Yakin?",   
			text: "Transaksi Anda tidak akan tersimpan!",   
			type: "warning",   
			showCancelButton: true,   
			confirmButtonText: "Ya, Kembali!",
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

	//Custom Image
	$('#sa-image').on('click', function(){
		swal({   
			title: "Sweet!",   
			text: "Here's a custom image.",   
			imageUrl: "img/dialog/like.png" 
		});
	});

	//Auto Close Timer
	$('#sa-close').on('click', function(){
		 swal({   
			title: "Auto close alert!",   
			text: "I will close in 2 seconds.",   
			timer: 2000
		});
	});

 
})(jQuery); 