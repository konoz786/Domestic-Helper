$(document).ready(function(){
    $('.userType').change(function(){
        var userType=$(this).children("option:selected").val();

        if(userType=="employer"){
            $('.helper-form').css('display','none');
            $('.employer-form').css('display','flex');
        }

        else if(userType=="domestic helper"){

            $('.employer-form').css('display','none');

            $('.helper-form').css('display','flex');
            }
        
    });

});