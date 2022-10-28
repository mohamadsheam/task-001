<script>
    $('#myTable').DataTable( {
        serverSide: true,
        pagingType: "full_numbers",
        pageLength: 25,
        lengthChange: true,
        searching: true,
        ordering: true,
        ajax: {
            beforeSend: function(){

              // Show image container
              $("#loader").show();
             },
            url: BASE_URL + "Home/fetch_data",
            type: "POST",
            complete:function(data){
              // Hide image container
              $("#loader").hide();
             },
            // dataFilter: function(data){
            //     console.log(data);
            //     var json = jQuery.parseJSON( data );
            //     json.recordsTotal = json.total;
            //     json.recordsFiltered = json.total;
            //     json.data = json.list;

            //     return JSON.stringify( json ); // return JSON string
            // }
        },

        columns: [
        {
            "data": "sn",
            'orderable': false
        },
        {
            "data": "name"
        },
        {
            "data": "num_code"
        },
        {
            "data": "char_code"
        },
        {
            "data": "nominal"
        },
        {
            "data": "value"
        },

      ],

    } );
</script>




</body>
</html>
