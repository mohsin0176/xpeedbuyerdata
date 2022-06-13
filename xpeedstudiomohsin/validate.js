
$(document).ready(function(){

$("#submit").click(function(){
 var id = $("#id").val();
 var amount=$("#amount").val();
 var buyer=$("#buyer").val();
 var receipt_id=$("#receipt-id").val();
 var items=$("#items").val();
 var buyer_email=$("#buyer-email").val();  
 var buyer_ip=$("#buyer-ip").val();  
 var note=$("#note").val();
 var ciy=$("#city").val();
 var p_code=$("#phone-code").val();
 var p=$("#phone").val(); 
 var phone = '' + p_code + p;
 var string = encrypt(receipt_id, salt, 512);
 $("#hash-key").val(string);
 var hash_key=$("#hash-key").val();
 var entry_at=$("#entry-at").val();
 var entry_by=$("#entry-by").val();
 $.ajax({
  url:"submit.php",
  method:"POST",
  data:{
      id: id,
      amount: amount,
      buyer: buyer,
      receipt-id: receipt_id,
      items:items,
      buyer-email:buyer_email,
      buyer-ip:buyer_ip,
      note:note,
      city:city,
      phone:phone,
      hash-key:hash_key,
      entry-at:entry_at,
      entry-by:entry_by
  },
  success:function(data)
  {
    if(document.cookie = "user=mohsin") 
    {
    $("#submit").prop('disabled', true);
    }
    else
    {
    $("#submit").prop('disabled', false);
    } 
  }


 });

});

});