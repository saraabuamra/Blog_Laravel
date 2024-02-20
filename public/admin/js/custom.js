$(document).ready(function(){

  var table = new DataTable('#poems', {
    language: {
        url: '//cdn.datatables.net/plug-ins/2.0.0/i18n/ar.json',
    },
});
var table = new DataTable('#articals', {
  language: {
      url: '//cdn.datatables.net/plug-ins/2.0.0/i18n/ar.json',
  },
});
var table = new DataTable('#channels', {
  language: {
      url: '//cdn.datatables.net/plug-ins/2.0.0/i18n/ar.json',
  },
});
var table = new DataTable('#categories', {
  language: {
      url: '//cdn.datatables.net/plug-ins/2.0.0/i18n/ar.json',
  },
});

var table = new DataTable('#courses', {
  language: {
      url: '//cdn.datatables.net/plug-ins/2.0.0/i18n/ar.json',
  },
});
var table = new DataTable('#certificates', {
  language: {
      url: '//cdn.datatables.net/plug-ins/2.0.0/i18n/ar.json',
  },
});
var table = new DataTable('#qualifications', {
  language: {
      url: '//cdn.datatables.net/plug-ins/2.0.0/i18n/ar.json',
  },
});
var table = new DataTable('#experiences', {
  language: {
      url: '//cdn.datatables.net/plug-ins/2.0.0/i18n/ar.json',
  },
});

$(function() {
  $('#enddatepicker').datepicker(
    {
      autoclose: true,
      language: 'ar',
      format: 'yyyy/mm/dd' // you can change the date format if needed
  }
  );
  $('#startdatepicker').datepicker(
    {
      autoclose: true,
      language: 'ar',
      format: 'yyyy/mm/dd' // you can change the date format if needed
  }
  );
  $('#datepicker').datepicker(
    {
      autoclose: true,
      language: 'ar',
      format: 'yyyy/mm/dd' // you can change the date format if needed
  }
  );
  $('#datepickerqualification').datepicker(
    {
      autoclose: true,
      language: 'ar',
      format: 'yyyy/mm/dd' // you can change the date format if needed
  }
  );
  $('#fromdatepicker').datepicker(
    {
      autoclose: true,
      language: 'ar',
      format: 'yyyy/mm/dd' // you can change the date format if needed
  }
  );
  $('#todatepicker').datepicker(
    {
      autoclose: true,
      language: 'ar',
      format: 'yyyy/mm/dd' // you can change the date format if needed
  }
  );
});

     //update course status
     $(document).on("click",".updateCourseStatus",function(){
      var status = $(this).children("i").attr("status");
      var course_id = $(this).attr("course_id");
          $.ajax({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              type: 'post',
              url: '/admin/update-course-status',
              data: {status:status,course_id:course_id},
              success: function(resp){
                  if(resp['status']==0){
                    Swal.fire({
                      title: 'الدورة مغلقة',
                  
                      showClass: {
                        popup: 'animate__animated animate__fadeInDown'
                      },
                      hideClass: {
                        popup: 'animate__animated animate__fadeOutUp'
                      },
                      confirmButtonText: 'تأكيد', 
                    }),
                    $("#course-"+course_id).html("<i style='font-size: 25px;color:#007DFE;' class='nav-icon fas fa-lock' status='Inactive'></i>"),
                    $("#state-"+course_id).html("<span status='Inactive'>مغلق</span>")
                  }else if(resp['status']==1){
                    Swal.fire({
                      title: 'الدورة متاحة',
                      showClass: {
                        popup: 'animate__animated animate__fadeInDown'
                      },
                      hideClass: {
                        popup: 'animate__animated animate__fadeOutUp'
                      },
                      confirmButtonText: 'تأكيد', 
                    }),
                    $("#course-"+course_id).html("<i style='font-size: 25px;color:#007DFE;' class='nav-icon fas fa-lock-open' status='Active'></i>"),
                    $("#state-"+course_id).html("<span status='Active'>متاح</span>")
                  }
              },error:function(){
                alert('Error');
              }
              
            });
      })


   
      //update image status
     $(document).on("click",".updateImageStatus",function(){
      var status = $(this).children("i").attr("status");
      var image_id = $(this).attr("image_id");
          $.ajax({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              type: 'post',
              url: '/admin/update-image-status',
              data: {status:status,image_id:image_id},
              success: function(resp){
                  if(resp['status']==0){
                    Swal.fire({
                      title: 'This image is Not Available',
                  
                      showClass: {
                        popup: 'animate__animated animate__fadeInDown'
                      },
                      hideClass: {
                        popup: 'animate__animated animate__fadeOutUp'
                      }
                    }),
                    $("#image-"+image_id).html("<i style='font-size: 25px;color:#4B49AC;' class='mdi mdi-lock' status='Inactive'></i>")
                  }else if(resp['status']==1){
                    Swal.fire({
                      title: 'This image is Available',
                      showClass: {
                        popup: 'animate__animated animate__fadeInDown'
                      },
                      hideClass: {
                        popup: 'animate__animated animate__fadeOutUp'
                      }
                    }),
                    $("#image-"+image_id).html("<i style='font-size: 25px;color:#4B49AC;' class='mdi mdi-lock-open-outline' status='Active'></i>")
                  }
              },error:function(){
                alert('Error');
              }
              
            });
      })
    
      $("document").ready(function(){
        setTimeout(function() {
          $("#message_id").fadeOut(1000, function() {
              $(this).remove();
          });
      }, 3000);
    });

    $(document).ready(function() {
      $('#summernote').summernote();
    });
    
        // When the span is clicked, trigger the file input click event
        $('#text_input_span_id').click(function () {
          $("#image").trigger('click');
      });

      // When the text input is clicked, trigger the file input click event
      $('#text_input_id').click(function () {
          $("#image").trigger('click');
      });

      // Display file name in text input when file is selected
      $("#image").change(function () {
          $('#text_input_id').val(this.files[0].name);
      });

        $(document).on("click",".confirmDelete",function(){
        var module = $(this).attr('module');
        var categ = $(this).attr('categ');
        var moduleid = $(this).attr("moduleid");
        Swal.fire({
          title: 'هل أنت متأكد من عملية الحذف ؟',
          text: "لن تتمكن من التراجع عن هذا !",
          icon: 'error',
          showCancelButton: true,
          cancelButtonText: "إغلاق",      
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'نعم، احذفه!'
        }).then((result) => {
          if (result.isConfirmed) {
            Swal.fire(
              'تم الحذف!',
              "تم حذف "+ categ+ " الخاص بك",
              'status'
            )
            window.location="/admin/delete-"+module+"/"+moduleid;
          }
        })
    });

});