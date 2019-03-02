
var secondDiv=document.getElementById("loremColor");
var strick =secondDiv.offsetTop;

window.onscroll=function myfunction()
{
    if (window.pageYOffset > strick)
    {
        $(".navbar").css({position:"fixed",background:"black"});
    }
    else
    {
        $(".navbar").css({position:"",background:"transparent"});
    }
}
function insertdata()
{
   
  var name=  document.getElementById('usr').value;
  var email=document.getElementById('email').value;
 var department=document.getElementById("dept").value;
 var message=document.getElementById("comment").value;
 alert(name);
 var datastring='name1='+name+'&password1='+message+'&organiz1='+department;
  if (name=='' || email=='' || department == '' || message =='' )
 {
     document.getElementById('succmessage').innerHTML="Pleace enter all data"
 }
else
{
 
 $.ajax({
     type:"POST",
     url:"http://localhost/my-transitive/php/add.php",
     data:datastring,  
     cashe:false,
     success :function(data)
     {
         document.getElementById("succmessage").innerHTML=data;

     },
     error: function (error) {
        alert('error; ' + eval(error));
     }
     
     }) 
}
 event.preventDefault();
 return false;
}