function htmlEncode(text)
{
  return String(text).replace(/[^\w. ]/gi, function(c){
   return '&#'+c.charCodeAt(0)+';';
    });
}
function TriggerModal(id)
{
  $.ajax({
    url: "/contact/"+id,
    method : "get",
    data:{},
    success:function(result)
    {
      //console.log(result);
      var obj=JSON.parse(result);
      var message=htmlEncode(obj[0].message);
      $('#_MessageModal').html(message);
      $('#myModal').modal();

    }

});
}
