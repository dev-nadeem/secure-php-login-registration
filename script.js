$(document).ready(function(){
    //On click signup it will hide login form & display registration form
    $("#signup").click(function(){
        $("#loginContainer").slideUp("slow",function(){
            $("#signupContainer").slideDown("slow");
        });
    });
    //On click signin it will hide Registration form & display Login form
    
    $("#signin").click(function(){
        $("#signupContainer").slideUp("slow",function(){
            $("#loginContainer").slideDown("slow");
        });
    });
});

