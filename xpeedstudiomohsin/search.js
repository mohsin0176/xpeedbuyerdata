$(document).ready(function(){
$("#search").click(function(){
var search_by_id = $("#search-by-id").val();
var search_by_date=$("#search-by-date").val();
 $.ajax({
  url:"search.php",
  method:"POST",
  data:{
      search-by-id: search_by_id,
      search-by-date: search_by_date, 
  },
  success:function(data)
  {
  $("#table tbody").append(data);                               
  }
 });

});
});