//
$(function(){
    $("#submit").click(function(e){
        e.preventDefault();
        var firstName = $("firstname").val();
        var lastName = $("lastname").val();
        var dob = $("dob").val();
        var gender = $("gender").val();

        /*if(firstName ==''){
            $("#firstname_err").show();
        }*/
        $.ajax(
            {
               type:"POST",
               url:"index.php",
               data:$("#user-details").serialize(),
               success:function(data){
                   alert(data);
                   var responsedata= JSON.parse(data);
                   //console.log(responsedata);
                   html_data = "<tr><td>"+responsedata.firstname+"</td>";
                   html_data += "<td>"+responsedata.lastname+"</td>";
                    $("#user_data").append(html_data);
               },
               error:function(){

               }

            }
        )
    })
    
})