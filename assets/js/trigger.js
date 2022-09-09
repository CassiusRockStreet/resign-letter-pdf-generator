$('document').ready(function(){
    document.cookie = 'username' + '=; expires=Thu, 01-Jan-70 00:00:01 GMT;';
    check_context();
    //Validation
    $($('.fname')).keyup(function(){
        check_context();
        $('.display_name').html($(".fname").val());
        if($(".lname").val() !="" && $(".fname").val() !=""){
            $('.addressa').css('display','block');
        }else{
            $('.addressa').css('display','none');
        }
    });
    $($('.lname')).keyup(function(){
        check_context();
        $('.display_surname').html($(".lname").val());
        if($(".lname").val() !="" && $(".fname").val() !=""){
            $('.addressa').css('display','block');
        }else{
            $('.addressa').css('display','none');
        }
    });
    $($('.paddress')).keyup(function(){
        check_context();
        $('.display_addressa').html($(".paddress").val());
        if($(".pzipcode").val() !="" && $(".paddress").val() !="" && $(".pcommune").val() !=""){
            $('.groupb').css('display','block');
        }else{
            $('.groupb').css('display','none');
        }
    });
    $($('.paddressAdd')).keyup(function(){
        check_context();
        if($(".paddressAdd").val() !=""){
            $('.display_addressacomple').css("display","block");
            $('.display_addressacomple').html($(".paddressAdd").val());
        }
    });
    $($('.pzipcode')).keyup(function(){
        check_context();
            var code = $('.pzipcode').val();
            var regExp = new RegExp('^[0-9]*$');
            if(regExp.test(code) == false){
                $('.errorPostCode').html("Only numerics");
                $('.errorPostCode').css("display","contents");
                $('input#pzipcode:focus').css("border-color","#ff0000");
                $('.postcode').css("color","#ff0000");
                return false;
            }else{  
                $('.errorPostCode').css("display","contents");
                $('input#pzipcode:focus').css("border-color","#ced4da");
                $('.postcode').css("color","inherit");    
            }
        if($('.pzipcode').val() < 1000){
            $('.errorPostCode').css("display","contents");
            $('input#pzipcode:focus').css("border-color","#ff0000");
            $('.postcode').css("color","#ff0000");
            $('.pdfGenerate').css("display","none");
        }else{
            $('.errorPostCode').css("display","none");
            $('input#pzipcode:focus').css("border-color","#ced4da");
            $('.postcode').css("color","inherit");
            $('.pdfGenerate').css("display","initial");
        }

        $('.display_addressacode').html($(".pzipcode").val());
        if($(".pzipcode").val() !="" && $(".paddress").val() !="" && $(".pcommune").val() !=""){
            $('.groupb').css('display','block');
        }else{
            $('.groupb').css('display','none');
        }
    });
    $($('.pcommune')).keyup(function(){
        check_context();
        $('.display_addressacommune').html($(".pcommune").val());
        if($(".pzipcode").val() !="" && $(".paddress").val() !="" && $(".pcommune").val() !=""){
            $('.groupb').css('display','block');
        }else{
            $('.groupb').css('display','none');
        }
    });
     
    $($('.emName')).keyup(function(){
        check_context();
        $('.display_employeeName').html($(".emName").val()+"<br>");
        if($(".emName").val() !=""){check_context(); $('.row.emGender').css('display','block');}else{check_context(); $('.row.emGender').css('display','none');}});
    
    $($('.emGender')).click(function(){
        var Gender = $('input[name="emGender"]:checked').val();
        
        if(Gender !="" ||Gender !=null ){
            if(Gender =="Je ne connais pas le nom du destinataire"){
                $('.row.empSer').css('display','block');
                $('.row.emp').css('display','none');
                $('.display_employeeGender').css('display','none');
                $('.display_employeeatt').css('display','none');
                $('.display_employeeposition').css('display','none');
            }else{
                $('.row.emp').css('display','block');
                $('.row.empSer').css('display','none');
                $('.display_employeeGender').css('display','contents');
                $('.display_employeeGender').html(Gender);
                //$('.display_employeeatt').css('display','contents');
                //$('.display_employeeposition').css('display','block');
                $('.display_employeeservice').css('display','none');
            }
    }});

    // $('.display_employeetitle').css("display","contents");
    //     $('.display_employeetitle').html(Gender);

    $($('.emReName')).keyup(function(){
        check_context();
        $('.display_employeeatt').html($(".emReName").val()+"<br>");
        $('.display_employeeatt').css("display","contents");
        if($(".emReName").val() !="" && $(".emRecFunc").val() !=""){
                $('.addressb').css('display','block');}else{$('.addressb').css('display','none');}});

    $($('.emRecFunc')).keyup(function(){
        check_context();
        $('.display_employeeservice').html($(".emRecFunc").val()+"<br>");
        $('.display_employeeservice').css('display','block');
        if($(".emReName").val() !="" && $(".emRecFunc").val() !=""){
            $('.addressb').css('display','block');
            $('.display_employeeservice').css('display','block');
        }else{
            $('.addressb').css('display','none');
            $('.display_employeeservice').css('display','none');
        }
    });
    $($('.emRecDep')).keyup(function(){
        check_context();
        if($(".emRecDep").val() !=""){
            $('.display_employeeatt').html($(".emRecDep").val());
            $('.addressb').css('display','block');
            $('.display_employeeatt').css('display','block');
        }else{
            $('.display_employeeatt').css('display','none');
            $('.addressb').css('display','none');
        }
    });
    $($('.emAddress')).keyup(function(){
        check_context();
        $('.display_employeeAddress').html($(".emAddress").val()+"<br>");
        if($(".emPostCode").val() !="" && $(".emAddress").val() !="" && $(".emCommune").val() !=""){
            $('.groupc').css('display','block');
        }else{
            $('.groupc').css('display','none');
        }
    });
    $($('.emPostCode')).keyup(function(){
        check_context();
        $('.display_employeeAddressCode').html($(".emPostCode").val());
        var code = $('.emPostCode').val();
        var regExp = new RegExp('^[0-9]*$');
        if(regExp.test(code) == false){
            $('.errorPostCodeEmployee').html("Only numerics");
            $('.errorPostCodeEmployee').css("display","contents");
            $('input#emPostCode:focus').css("border-color","#ff0000");
            $('.emPostCodeTxt').css("color","#ff0000");
            return false;
        }else{  
            $('.errorPostCodeEmployee').css("display","contents");
            $('input#emPostCode:focus').css("border-color","#ced4da");
            $('.emPostCodeTxt').css("color","inherit");    
        }
    if($('.emPostCode').val() < 1000){
        $('.errorPostCodeEmployee').css("display","contents");
        $('input#emPostCode:focus').css("border-color","#ff0000");
        $('.emPostCodeTxt').css("color","#ff0000");
        $('.pdfGenerate').css("display","none");
    }else{
        $('.errorPostCodeEmployee').css("display","none");
        $('input#emPostCode:focus').css("border-color","#ced4da");
        $('.emPostCodeTxt').css("color","inherit");
        $('.pdfGenerate').css("display","initial");
    }

        if($(".emPostCode").val() !="" && $(".emAddress").val() !="" && $(".emCommune").val() !=""){
            $('.groupc').css('display','block');
        }else{
            $('.groupc').css('display','none');
        }
    });
    $($('.emCommune')).keyup(function(){
        $('.display_employeeAddressCommune').html($(".emCommune").val());
        $('.display_employeeAddressCommune').css("display","contents");
        check_context();
        if($(".emPostCode").val() !="" && $(".emAddress").val() !="" && $(".emCommune").val() !=""){
            $('.groupc').css('display','block');
        }else{
            $('.groupc').css('display','none');
        }
    });

    $($('.emAdAddi')).keyup(function(){
        check_context();
        $('.display_employeeAddressAdd').html($(".emAdAddi").val());
        $('.display_employeeAddressAdd').css("display","block");
        if($(".pzipcode").val() !="" && $(".paddress").val() !="" && $(".pcommune").val() !=""){
            $('.groupb').css('display','block');
        }else{
            $('.groupb').css('display','none');
        }
    });

    $($('.ltrType')).click(function(){
        check_context();
        var Ltr = $('input[name="ltrType"]:checked').val();
        if(Ltr != "Autre"){
            $('.display_letr_type').html(Ltr);
            $('.display_letr_type').css("display","block");
        }else{
            $('.display_letr_type').html("");
            $('.display_letr_type').css("display","block");
        }
        
        if(Ltr !="" || Ltr !=null ){$('.row.colc.func').css('display','block');}else{$('.row.colc.func').css('display','block')}});
        $($('.ocFunc')).keyup(function(){
            check_context();
            $('.display_PositionHeld').html($('.ocFunc').val());
            if($(".ocFunc").val() !="" && $(".contractDate").val() !=""){
                $('.groupd').css('display','block');
            }else{$('.groupd').css('display','none');
            }
        });
    $($('.contractDate')).change(function(){
        check_context();
        var date1 = $('.contractDate').val();
        date = date1.slice(8,11);
        var month = date1.slice(5,7);
        var year = date1.slice(0,4);
        switch(month){
            case "01":
               month = "January";
            break;
            case "02":
               month = "February";
            break;
            case "03":
               month = "March";
            break;
            case "04":
               month = "April";
            break;
            case "05":
               month = "May";
            break;
            case "06":
               month = "June";
            break;
            case "07":
               month = "July";
            break;
            case "08":
               month = "August";
            break;
            case "09":
               month = "Septembre";
            break;
            case "10":
               month = "October";
            break;
            case "11":
               month = "November";
            break;
            default:
                month = "December";
            break;
        }
        $('.display_contractdate').html(date+" "+month+" "+year);
        if($(".contractDate").val() !="" && $(".ocFunc").val() !=""){
            $('.Redate').css('display','flex');
        }else{
            $('.groupc').css('display','none');
        }
    });
    $($('.contract')).click(function(){
        check_context();
        var contract = $('input[name="contract"]:checked').val();
        $('.display_contract').html(contract);
        if($(".durationCalender").val() !="" && $('input[name="youWant"]:checked').length != 0  && $('input[name="contract"]:checked').length === 0){
            $('.groupd').css('display','block');}else{$('.groupd').css('display','none');
        }
    });
    $($('.durationCalender')).keyup(function(){
        check_context();
        $('.display_contractMonth').html($('.durationCalender').val());
        if($(".durationCalender").val() !="" && $('input[name="youWant"]:checked').length != 0 && $('input[name="contract"]:checked').length != 0){
            $('.groupd').css('display','block');}else{$('.groupd').css('display','none');
        }
    });
    $($('.youWant')).click(function(){
        check_context();
        var want = $('input[name="youWant"]:checked').val();
        if($(".durationCalender").val() !="" && $('input[name="youWant"]:checked').length != 0 && $('input[name="contract"]:checked').length != 0){

            if(want =="effectuer ce préavis"){
                $('.firstParagraph').css('display','none');
                $('.secondParagraph').css('display','none');
            }else if(want =="être dispensé d'effectuer ce préavis"){
                $('.firstParagraph').css('display','block');
                $('.secondParagraph').css('display','block');
                $('.firstParagraph').html("Cependant, et par dérogation, je sollicite la possibilité de ne pas effectuer ce préavis et, par conséquent, de quitter l'entreprise à la date de réception de ma lettre de démission, mettant ainsi fin à mon contrat de travail.");
                $('.secondParagraph').html("Je vous remercie de bien vouloir me confirmer votre accord concernant la dispense de préavis.");
            }
            $('.groupd').css('display','block');}else{$('.groupd').css('display','none');
        }
    });
    
    $($('.redige')).keyup(function(){
        check_context();
        $('.display_redige').html($('.redige').val());
        if($(".redige").val() !="" && $(".contractDate2").val()){
        $('.final').css('display','block');
        $('.headerContextComplete').css('display','none');
    }else{;
        $('.final').css('display','none');
        $('.headerContextComplete').css('display','block')
    }});

    $($('.contractDate2')).change(function(){if($(".contractDate2").val() !="" && $(".redige").val() !=""){
        check_context();
        var date2 = $('.contractDate2').val();
        date = date2.slice(8,11);
        var month = date2.slice(5,7);
        var year = date2.slice(0,4);
        switch(month){
            case "01":
               month = "January";
            break;
            case "02":
               month = "February";
            break;
            case "03":
               month = "March";
            break;
            case "04":
               month = "April";
            break;
            case "05":
               month = "May";
            break;
            case "06":
               month = "June";
            break;
            case "07":
               month = "July";
            break;
            case "08":
               month = "August";
            break;
            case "09":
               month = "Septembre";
            break;
            case "10":
               month = "October";
            break;
            case "11":
               month = "November";
            break;
            default:
                month = "December";
            break;
        }
        $('.display_redige_date').html(date+" "+month+" "+year);
        $('.final').css('display','block');
        $('.headerContextComplete').css('display','none');
    }else{$('.final').css('display','none');
        $('.final').css('display','none');
        $('.headerContextComplete').css('display','block');
    }});

//    $('.copytoCLipboard').click(function(){
//         var layout = $('.layoutdisplay').val();
//         var copyBoxElement = document.getElementById('layoutdisplay');
//         copyBoxElement.contenteditable = true;
//         copyBoxElement.focus();
//         document.execCommand('selectAll');
//         document.execCommand("copy");
//         copyBoxElement.contenteditable = false;
//         alert("Text has been copied")
//    }); 
   $('.pdfGenerate').click(function(){
    
        var formData = [{
                name:$(".fname").val(),
                surname:$(".lname").val(),
                usAddress:$(".paddress").val(),
                usAddressAdd:$(".paddressAdd").val(),
                usAddressZip:$(".pzipcode").val(),
                usAddressComm:$(".pcommune").val(),
                employee:$(".emName").val(),
                empGender:$('input[name="emGender"]:checked').val(),
                emReName:$(".emReName").val(),
                emRecFunc:$(".emRecFunc").val(),
                emRecDep:$(".emRecDep").val(),
                emAddress:$(".emAddress").val(),
                emAdAddi:$(".emAdAddi").val(),
                emPostCode:$(".emPostCode").val(),
                emCommune:$(".emCommune").val(),
                ltrType:$(".ltrType").val(),
                ocFunc:$(".ocFunc").val(),
                contractDate:$('.display_contractdate').html(),
                contract:$(".contract").val(),
                durationCalender:$(".durationCalender").val(),
                youWant:$('input[name="youWant"]:checked').val(),
                redige:$(".redige").val(),
                contractDate2:$('.display_redige_date').html()
            }]; 
            var string = JSON.stringify(formData);
            setCookie("username",string,true);
            if($(".fname").val() !="" && $(".lname").val() !="" && $(".paddress").val() !="" && $(".pzipcode").val() !="" && $(".pcommune").val() !=""
            || $(".emName").val() !="" && $(".emReName").val() !="" && $(".emRecFunc").val() !="" && $(".emAddress").val() !="" &&
            $(".emPostCode").val() !="" && $(".emCommune").val() !="" && $(".ocFunc").val() !="" && $(".redige").val() !=""){
                window.location = "assets/downloadPDF.php";
            }else{
                $('.ErroSubmit').html("Please complete all fields marked with *");
            }
   });

   function setCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    let expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  }

  function check_context(){
    if($(".fname").val() =="" || $(".lname").val() =="" || $(".paddress").val() =="" || $(".pzipcode").val() =="" || $(".pcommune").val() ==""
    || $(".emName").val() =="" || $(".emReName").val() =="" || $(".emRecFunc").val() =="" || $(".emAddress").val() =="" ||
    $(".emPostCode").val() =="" || $(".emCommune").val() =="" || $(".ocFunc").val() =="" || $(".redige").val() ==""){
            $('.buttonb').addClass('disabled');
    }else{
            $('.buttonb').removeClass('disabled');

    }
  }
});
