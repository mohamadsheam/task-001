
function reloadDataFn(){


  $.ajax({
    url: BASE_URL + "Home/update_data",
    type: "POST",

    beforeSend: function(){
      console.log(1);
      // Show image container
      $("#loader").show();
     },
    success: function (data) {

      Swal.fire({
        icon: 'success',
        title: 'Data updated',
        showConfirmButton: false,
        timer: 1500
      })

    },
    complete:function(data){
      // Hide image container
      $("#loader").hide();
     },
     error: function () {
      console.log("error");
    }
  });


}
