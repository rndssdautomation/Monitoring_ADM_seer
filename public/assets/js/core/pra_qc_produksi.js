document.getElementById("Containercode").focus();

const flashData =$('.flash-data').data('flashdata');
if (flashData){
    Swal.fire({
        title: 'Cek Data',
        text: flashData + ' Data Match',
        // timer: 3000,
        icon: 'success',
        showCancelButton: true,
        cancelButtonText: "Validation Other",
        confirmButtonText: "Go to Panel QC",
        confirmButtonColor: "#3CB371",
        cancelButtonColor: "#999999"
        
        
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href="qc_produk_v";
          } else if (result.isDenied) {
            window.location.href="qc_produk"; 
            document.getElementById("Containercode").focus();
            
          }
        })
    
};

// const flashDataerror =$('.flash-datae').data('flashdatae');
// console.log(flashDataerror);
// if (flashDataerror){
//     Swal.fire({
//         title: ' Data Does Not Match',
//         text:  ' The data Is automatically reported to production SPV\n\n [Repoter '+ flashDataerror +']',
//         icon: 'error'
//     }).then(function() {
//          window.location.href="qc_produk";
//     })
// };

const flashDatanot =$('.flash-datan').data('flashdatan');
console.log(flashDatanot);
if (flashDatanot){
    Swal.fire({
        title: ' Data Does Not Found',
        text:  ' The data ['+ flashDatanot +'] not found, please recheck the batch code and code container',
        icon: 'error'
    }).then(function() {
         window.location.href="qc_produk";
         document.getElementById("Containercode").focus();

    })
};
