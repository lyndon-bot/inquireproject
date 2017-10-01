$(document).ready(function(){
    $('.Compose').click(function(){
      $("#sel1 option[value="+$(this).val()+"]").prop("selected", "selected");
    })
    $('.view').click(function(){
      $.getJSON('../Functions/msgs.php?I_id='+$(this).val(),function(data){
       var msg = data;
       $('#Subject').html(msg['Subj']);
       $('#Message').html(msg['msg']);
     })
    })
})

function displayInbox(){
  $('#titlehead').html("Inbox");
  $('#inbox').show();
  $('#sentMessage').hide();
  $('#inboxstatus').addClass("active");
  $('#sentstatus').removeClass("active");
}
function displaySent(){
  $('#titlehead').html("Sent Mail");
  $('#inbox').hide();
  $('#sentMessage').show();
  $('#inboxstatus').removeClass("active");
  $('#sentstatus').addClass("active");
}


function msg(){
}