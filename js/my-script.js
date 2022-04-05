function notify(from, align, icon, type, animIn, animOut, message){
    $.growl({
        icon: icon,
        // title: ' Peringatan! ',
        message: message,
        url: ''
    },{
        element: 'body',
        type: type,
        allow_dismiss: true,
        placement: {
                from: from,
                align: align
        },
        offset: {
            x: 20,
            y: 85
        },
        spacing: 10,
        z_index: 1031,
        delay: 2500,
        timer: 1000,
        url_target: '_blank',
        mouse_over: false,
        animate: {
                enter: animIn,
                exit: animOut
        },
        icon_type: 'class',
        template: '<div data-growl="container" class="alert" role="alert">' +
                        '<button type="button" class="close" data-growl="dismiss">' +
                            '<span aria-hidden="true">&times;</span>' +
                            '<span class="sr-only">Close</span>' +
                        '</button>' +
                        '<span data-growl="icon"></span>' +
                        '<span data-growl="title"></span>' +
                        '<span data-growl="message"></span>' +
                        '<a href="#" data-growl="url"></a>' +
                    '</div>'
    });
};

/* Area Submit Company */
function SubmitFunction_Company(e){
    var request;
    var nama_company = document.getElementById('nama_perusahaan').value;
    var deskripsi_company = document.getElementById('deskripsi_perusahaan').value;
    var alamat_company = document.getElementById('alamat_perusahaan').value;
    var email_company = document.getElementById('email_perusahaan').value;
    var kontak_company = document.getElementById('kontak_perusahaan').value;
    var kontak_wa_company = document.getElementById('kontak_wa_perusahaan').value;
    var status_company = $('#status_perusahaan').find(":selected").val();

    $.post("controller/main_controller.php",
    {
        nama_company: nama_company,
        deskripsi_company: deskripsi_company,
        alamat_company: alamat_company,
        email_company: email_company,
        kontak_company: kontak_company,
        kontak_wa_company: kontak_wa_company,
        status_company: status_company,
        type: 'add-company'
    },
    function(response){
        console.log(response.status);
        if(response.status != true){

            var nFrom = 'top';
            var nAlign = 'center';
            var nIcons = $(this).attr('data-icon');
            var nType = 'danger';
            var nAnimIn = $(this).attr('data-animation-in');
            var nAnimOut = $(this).attr('data-animation-out');
            
            notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut, response.message);
        } else {

            var nFrom = 'top';
            var nAlign = 'center';
            var nIcons = $(this).attr('data-icon');
            var nType = 'success';
            var nAnimIn = $(this).attr('data-animation-in');
            var nAnimOut = $(this).attr('data-animation-out');
            
            notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut, response.message);
            setTimeout(success_wait, 4000);
            function success_wait(){
                window.location.href = "company-profile.php";
            }
        }
    }, "json");
}

/* Area Update Company */
function UpdateFunction_Company(e){
    var request;
    var id_company = document.getElementById('id_perusahaan').value;
    var nama_company = document.getElementById('nama_perusahaan').value;
    var deskripsi_company = document.getElementById('deskripsi_perusahaan').value;
    var alamat_company = document.getElementById('alamat_perusahaan').value;
    var email_company = document.getElementById('email_perusahaan').value;
    var kontak_company = document.getElementById('kontak_perusahaan').value;
    var kontak_wa_company = document.getElementById('kontak_wa_perusahaan').value;
    var status_company = $('#status_perusahaan').find(":selected").val();

    $.post("controller/main_controller.php",
    {
        id_company: id_company,
        nama_company: nama_company,
        deskripsi_company: deskripsi_company,
        alamat_company: alamat_company,
        email_company: email_company,
        kontak_company: kontak_company,
        kontak_wa_company: kontak_wa_company,
        status_company: status_company,
        type: 'update-company'
    },
    function(response){
        console.log(response.status);
        if(response.status != true){

            var nFrom = 'top';
            var nAlign = 'center';
            var nIcons = $(this).attr('data-icon');
            var nType = 'danger';
            var nAnimIn = $(this).attr('data-animation-in');
            var nAnimOut = $(this).attr('data-animation-out');
            
            notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut, response.message);
        } else {

            var nFrom = 'top';
            var nAlign = 'center';
            var nIcons = $(this).attr('data-icon');
            var nType = 'success';
            var nAnimIn = $(this).attr('data-animation-in');
            var nAnimOut = $(this).attr('data-animation-out');
            
            notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut, response.message);
            setTimeout(success_wait, 4000);
            function success_wait(){
                window.location.href = "company-profile.php";
            }
        }
    }, "json");
}

/* Area Submit Bank */
function SubmitFunction_Bank(e){
    var request;
    var perusahaan_bank = $('#nama_perusahaan').find(":selected").val();
    var jenis_bank = document.getElementById('jenis_bank').value;
    var rekening_bank = document.getElementById('rekening_bank').value;
    var atas_nama_bank = document.getElementById('atas_nama_bank').value;
    var status_bank = $('#status_bank').find(":selected").val();

    $.post("controller/main_controller.php",
    {
        perusahaan_bank: perusahaan_bank,
        jenis_bank: jenis_bank,
        rekening_bank: rekening_bank,
        atas_nama_bank: atas_nama_bank,
        status_bank: status_bank,
        type: 'add-bank'
    },
    function(response){
        console.log(response.status);
        if(response.status != true){

            var nFrom = 'top';
            var nAlign = 'center';
            var nIcons = $(this).attr('data-icon');
            var nType = 'danger';
            var nAnimIn = $(this).attr('data-animation-in');
            var nAnimOut = $(this).attr('data-animation-out');
            
            notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut, response.message);
        } else {

            var nFrom = 'top';
            var nAlign = 'center';
            var nIcons = $(this).attr('data-icon');
            var nType = 'success';
            var nAnimIn = $(this).attr('data-animation-in');
            var nAnimOut = $(this).attr('data-animation-out');
            
            notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut, response.message);
            setTimeout(success_wait, 4000);
            function success_wait(){
                window.location.href = "company-profile.php";
            }
        }
    }, "json");
}

/* Area Update Bank */
function UpdateFunction_Bank(e){
    var request;
    var id_bank = document.getElementById('id_bank').value;
    var perusahaan_bank = $('#nama_perusahaan').find(":selected").val();
    var jenis_bank = document.getElementById('jenis_bank').value;
    var rekening_bank = document.getElementById('rekening_bank').value;
    var atas_nama_bank = document.getElementById('atas_nama_bank').value;
    var status_bank = $('#status_bank').find(":selected").val();

    $.post("controller/main_controller.php",
    {
        id_bank: id_bank,
        perusahaan_bank: perusahaan_bank,
        jenis_bank: jenis_bank,
        rekening_bank: rekening_bank,
        atas_nama_bank: atas_nama_bank,
        status_bank: status_bank,
        type: 'update-bank'
    },
    function(response){
        console.log(response.status);
        if(response.status != true){

            var nFrom = 'top';
            var nAlign = 'center';
            var nIcons = $(this).attr('data-icon');
            var nType = 'danger';
            var nAnimIn = $(this).attr('data-animation-in');
            var nAnimOut = $(this).attr('data-animation-out');
            
            notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut, response.message);
        } else {

            var nFrom = 'top';
            var nAlign = 'center';
            var nIcons = $(this).attr('data-icon');
            var nType = 'success';
            var nAnimIn = $(this).attr('data-animation-in');
            var nAnimOut = $(this).attr('data-animation-out');
            
            notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut, response.message);
            setTimeout(success_wait, 4000);
            function success_wait(){
                window.location.href = "company-profile.php";
            }
        }
    }, "json");
}

/* Area Submit Customer */
function SubmitFunction_Customer(e){
    var request;
    var nama_customer = document.getElementById('nama_pelanggan').value;
    var alamat_customer = document.getElementById('alamat_pelanggan').value;
    var email_customer = document.getElementById('email_pelanggan').value;
    var kontak_customer = document.getElementById('kontak_pelanggan').value;
    var status_customer = $('#status_pelanggan').find(":selected").val();

    $.post("controller/main_controller.php",
    {
        nama_customer: nama_customer,
        alamat_customer: alamat_customer,
        email_customer: email_customer,
        kontak_customer: kontak_customer,
        status_customer: status_customer,
        type: 'add-customer'
    },
    function(response){
        console.log(response.status);
        if(response.status != true){

            var nFrom = 'top';
            var nAlign = 'center';
            var nIcons = $(this).attr('data-icon');
            var nType = 'danger';
            var nAnimIn = $(this).attr('data-animation-in');
            var nAnimOut = $(this).attr('data-animation-out');
            
            notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut, response.message);
        } else {

            var nFrom = 'top';
            var nAlign = 'center';
            var nIcons = $(this).attr('data-icon');
            var nType = 'success';
            var nAnimIn = $(this).attr('data-animation-in');
            var nAnimOut = $(this).attr('data-animation-out');
            
            notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut, response.message);
            setTimeout(success_wait, 4000);
            function success_wait(){
                window.location.href = "customer.php";
            }
        }
    }, "json");
}

/* Area Update Customer */
function UpdateFunction_Customer(e){
    var request;
    var id_customer = document.getElementById('id_pelanggan').value;
    var nama_customer = document.getElementById('nama_pelanggan').value;
    var alamat_customer = document.getElementById('alamat_pelanggan').value;
    var email_customer = document.getElementById('email_pelanggan').value;
    var kontak_customer = document.getElementById('kontak_pelanggan').value;
    var status_customer = $('#status_pelanggan').find(":selected").val();

    $.post("controller/main_controller.php",
    {
        id_customer: id_customer,
        nama_customer: nama_customer,
        alamat_customer: alamat_customer,
        email_customer: email_customer,
        kontak_customer: kontak_customer,
        status_customer: status_customer,
        type: 'update-customer'
    },
    function(response){
        console.log(response.status);
        if(response.status != true){

            var nFrom = 'top';
            var nAlign = 'center';
            var nIcons = $(this).attr('data-icon');
            var nType = 'danger';
            var nAnimIn = $(this).attr('data-animation-in');
            var nAnimOut = $(this).attr('data-animation-out');
            
            notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut, response.message);
        } else {

            var nFrom = 'top';
            var nAlign = 'center';
            var nIcons = $(this).attr('data-icon');
            var nType = 'success';
            var nAnimIn = $(this).attr('data-animation-in');
            var nAnimOut = $(this).attr('data-animation-out');
            
            notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut, response.message);
            setTimeout(success_wait, 4000);
            function success_wait(){
                window.location.href = "customer.php";
            }
        }
    }, "json");
}

/* Area Submit Employee */
function SubmitFunction_Employee(e){
    var request;
    var nama_employee = document.getElementById('nama_karyawan').value;
    var ktp_employee = document.getElementById('ktp_karyawan').value;
    var alamat_employee = document.getElementById('alamat_karyawan').value;
    var email_employee = document.getElementById('email_karyawan').value;
    var kontak_employee = document.getElementById('kontak_karyawan').value;
    var username_employee = document.getElementById('username_karyawan').value;
    var password_employee = document.getElementById('password_karyawan').value;
    var status_employee = $('#status_karyawan').find(":selected").val();

    $.post("controller/main_controller.php",
    {
        nama_employee: nama_employee,
        ktp_employee: ktp_employee,
        alamat_employee: alamat_employee,
        email_employee: email_employee,
        kontak_employee: kontak_employee,
        username_employee: username_employee,
        password_employee: password_employee,
        status_employee: status_employee,
        type: 'add-employee'
    },
    function(response){
        console.log(response.status);
        if(response.status != true){

            var nFrom = 'top';
            var nAlign = 'center';
            var nIcons = $(this).attr('data-icon');
            var nType = 'danger';
            var nAnimIn = $(this).attr('data-animation-in');
            var nAnimOut = $(this).attr('data-animation-out');
            
            notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut, response.message);
        } else {

            var nFrom = 'top';
            var nAlign = 'center';
            var nIcons = $(this).attr('data-icon');
            var nType = 'success';
            var nAnimIn = $(this).attr('data-animation-in');
            var nAnimOut = $(this).attr('data-animation-out');
            
            notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut, response.message);
            setTimeout(success_wait, 4000);
            function success_wait(){
                window.location.href = "employee.php";
            }
        }
    }, "json");
}

/* Area Update Employee */
function UpdateFunction_Employee(e){
    var request;
    var id_employee = document.getElementById('id_karyawan').value;
    var nama_employee = document.getElementById('nama_karyawan').value;
    var ktp_employee = document.getElementById('ktp_karyawan').value;
    var alamat_employee = document.getElementById('alamat_karyawan').value;
    var email_employee = document.getElementById('email_karyawan').value;
    var username_employee = document.getElementById('username_karyawan').value;
    var password_employee = document.getElementById('password_karyawan').value;
    var kontak_employee = document.getElementById('kontak_karyawan').value;
    var status_employee = $('#status_karyawan').find(":selected").val();

    $.post("controller/main_controller.php",
    {
        id_employee: id_employee,
        nama_employee: nama_employee,
        ktp_employee: ktp_employee,
        alamat_employee: alamat_employee,
        email_employee: email_employee,
        username_employee: username_employee,
        password_employee: password_employee,
        kontak_employee: kontak_employee,
        status_employee: status_employee,
        type: 'update-employee'
    },
    function(response){
        console.log(response.status);
        if(response.status != true){

            var nFrom = 'top';
            var nAlign = 'center';
            var nIcons = $(this).attr('data-icon');
            var nType = 'danger';
            var nAnimIn = $(this).attr('data-animation-in');
            var nAnimOut = $(this).attr('data-animation-out');
            
            notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut, response.message);
        } else {

            var nFrom = 'top';
            var nAlign = 'center';
            var nIcons = $(this).attr('data-icon');
            var nType = 'success';
            var nAnimIn = $(this).attr('data-animation-in');
            var nAnimOut = $(this).attr('data-animation-out');
            
            notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut, response.message);
            setTimeout(success_wait, 4000);
            function success_wait(){
                window.location.href = "employee.php";
            }
        }
    }, "json");
}

/* Area Submit Items */
function SubmitFunction_Items(e){
    var request;
    var kode_items = document.getElementById('kode_barang').value;
    var nama_items = document.getElementById('nama_barang').value;
    var satuan_items = document.getElementById('satuan_barang').value;
    var status_items = $('#status_barang').find(":selected").val();

    $.post("controller/main_controller.php",
    {
        kode_items: kode_items,
        nama_items: nama_items,
        satuan_items: satuan_items,
        status_items: status_items,
        type: 'add-items'
    },
    function(response){
        console.log(response.status);
        if(response.status != true){

            var nFrom = 'top';
            var nAlign = 'center';
            var nIcons = $(this).attr('data-icon');
            var nType = 'danger';
            var nAnimIn = $(this).attr('data-animation-in');
            var nAnimOut = $(this).attr('data-animation-out');
            
            notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut, response.message);
        } else {

            var nFrom = 'top';
            var nAlign = 'center';
            var nIcons = $(this).attr('data-icon');
            var nType = 'success';
            var nAnimIn = $(this).attr('data-animation-in');
            var nAnimOut = $(this).attr('data-animation-out');
            
            notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut, response.message);
            setTimeout(success_wait, 4000);
            function success_wait(){
                window.location.href = "items.php";
            }
        }
    }, "json");
}

/* Area Update Items */
function UpdateFunction_Items(e){
    var request;
    var id_items = document.getElementById('id_barang').value;
    var kode_items = document.getElementById('kode_barang').value;
    var nama_items = document.getElementById('nama_barang').value;
    var satuan_items = document.getElementById('satuan_barang').value;
    var status_items = $('#status_barang').find(":selected").val();

    $.post("controller/main_controller.php",
    {
        id_items: id_items,
        kode_items: kode_items,
        nama_items: nama_items,
        satuan_items: satuan_items,
        status_items: status_items,
        type: 'update-items'
    },
    function(response){
        console.log(response.status);
        if(response.status != true){

            var nFrom = 'top';
            var nAlign = 'center';
            var nIcons = $(this).attr('data-icon');
            var nType = 'danger';
            var nAnimIn = $(this).attr('data-animation-in');
            var nAnimOut = $(this).attr('data-animation-out');
            
            notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut, response.message);
        } else {

            var nFrom = 'top';
            var nAlign = 'center';
            var nIcons = $(this).attr('data-icon');
            var nType = 'success';
            var nAnimIn = $(this).attr('data-animation-in');
            var nAnimOut = $(this).attr('data-animation-out');
            
            notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut, response.message);
            setTimeout(success_wait, 4000);
            function success_wait(){
                window.location.href = "items.php";
            }
        }
    }, "json");
}