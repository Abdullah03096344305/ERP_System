$(document).ready(function(){
  $('.leaveBtn').click(function(){
    const id = $(this).data('id');
    $('#employee_id').val(id);
    $('#leaveModal').modal('show');
  });

  $('#leaveForm').submit(function(e){
    e.preventDefault();
    $.ajax({
      url: '/ERP_System/modules/employee/leave_request.php',
      type: 'POST',
      data: $(this).serialize(),
      success: function(response){
        if(response.trim() === 'success'){
          alert('Leave Request Submitted!');
          $('#leaveModal').modal('hide');
        } else {
          alert('Error submitting request.');
        }
      }
    });
  });
});
$('#leaveForm').submit(function(e){
  e.preventDefault();
  $.ajax({
    url: '/ERP_System/modules/employee/leave_request.php',
    type: 'POST',
    data: $(this).serialize(),
    success: function(response){
      alert("Response from server: " + response.trim());
      if(response.trim() === 'success'){
        $('#leaveModal').modal('hide');
      }
    }
  });
});
