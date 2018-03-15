
// function to show the pop-up products

$(document).ready(function(){


    $(document).ready(function(){
    $("#addproduct").click(function(){
        $('#showproduct').appendTo("body").modal('show');
    });
});


}); 


$(document).ready(function(){


    $(document).ready(function(){
    $("#import").click(function(){
        $('#showimport').appendTo("body").modal('show');
    });
});


}); 

// function to delete products

$(document).ready(function(){
  jQuery('#master').on('click', function(e) {
    if($(this).is(':checked',true))  
    {
      $(".sub_chk").prop('checked', true);  
    }  
    else  
    {  
      $(".sub_chk").prop('checked',false);  
    }  
  });
  jQuery('.delete_all').on('click', function(e) { 
    var allVals = [];  
    $(".sub_chk:checked").each(function() {  
      allVals.push($(this).attr('data-id'));
    });  
    //alert(allVals.length); return false;  
    if(allVals.length <=0)  
    {  
      alert("Please select row.");  
    }  
    else {  
      //$("#loading").show(); 
      WRN_PROFILE_DELETE = "Are you sure you want to delete this row?";  
      var check = confirm(WRN_PROFILE_DELETE);  
      if(check == true){  

        var join_selected_values = allVals.join(","); 
        
        $.ajax({   
          
          type: "POST",  
          url: "delete.php",  
          cache:false,  
          data: 'ids='+join_selected_values,  
          success: function(response)  
          {   
            window.setTimeout(function(){window.location.reload()}, 500);

            //referesh table
          }   
        });
        $.each(allVals, function( index, value ) {
          $('table tr').filter("[data-row-id='" + value + "']").css('background-color', '#FF3232');
          $('table tr').filter("[data-row-id='" + value + "']").fadeOut('slow');
          $.notify('Product Deleted', { close: true, color: "#fff", background: "#d44950",animationType:"drop"});

        });
      }  
    }  
  });
  jQuery('.remove-row').on('click', function(e) {
    WRN_PROFILE_DELETE = "Are you sure you want to delete this row?";  
      var check = confirm(WRN_PROFILE_DELETE);  
      if(check == true){
        $('table tr').filter("[data-row-id='" + $(this).attr('data-id') + "']").remove();

      }
  });
});


// function for pagination, tables , number of entries , export
     
$(document).ready(function() {
    $('#table').DataTable( {
        "pagingType": "full_numbers",
        "lengthMenu": [[ 10, 20, -1], [ 10, 20, "All"]],
        "columnDefs": [{
        "orderable": false,
        "targets": 0 /* 1st one, start by the right */
    }],
        order: [[0, 'DESC']], 
        dom: 'Blfrtip',
        buttons: [
            'print',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ],
       initComplete: function() {
         var $buttons = $('.dt-buttons').hide();
         $('#export').on('change', function() {
            var btnClass = $(this).find(":selected")[0].id 
               ? '.buttons-' + $(this).find(":selected")[0].id 
               : null;
            if (btnClass) $buttons.find(btnClass).click(); 
         })
       },

       buttons: [
        {
           extend: 'print',
           exportOptions: {
                columns: [1,2,3,4,5,6,7,8]
              }

       },
       {
           extend: 'excel',
           exportOptions: {
                columns: [1,2,3,4,5,6,7,8]
            }

       },
       {
           extend: 'csv',
           exportOptions: {
                columns: [1,2,3,4,5,6,7,8]
            }

       },
       {
           extend: 'pdfHtml5',
           exportOptions: {
                columns: [1,2,3,4,5,6,7,8] 
            }
       }         
    ]  
    } );
} );

// function to edit products 

function DoubleClick(element) {
  element.contentEditable = true;
  setTimeout(function() {
    if (document.activeElement !== element) {
      element.contentEditable = false;
    }
  }, 300);
}

function saveToDatabase(editableObj,column,id) {
    $(editableObj).css("background","#FFF url(ajax-loader.gif) no-repeat right");
    $.ajax({
        url: "update.php",
        type: "POST",
        data:'column='+column+'&editval='+editableObj.innerHTML+'&id='+id,
        success: function(data){
            $(editableObj).css("background","#393939");
              // $.notify('Document Updated',{close: true, color: "#fff", background: "#20D67B",animationType:"drop"})
        }      
   });
}
