$(document).ready(function () {

    $("#maker").change(function (e) {
    
        var val = $(this).val();
        // window.alert(val)
        if (val == "Honda") {
            $("#models").html(
                        "<option value=''>Choose here</option>"+
                        "<option value='Accord'>Acoord</option>"+
                        "<option value='Accord Crosstour'>Accord Crosstour</option>"+
                        "<option value='Accord Hybrid'>Accord Hybrid</option>"+
                        "<option value='Accord Hybrid'>Accord Hybrid</option>"+
                        "<option value='Civic'>Civic</option>"+
                        "<option value='Crosstour'>Crosstour</option>"+
                        "<option value='CR-V'>CR-V</option>"+
                        "<option value='CR-Z'>CR-Z</option>"+
                        "<option value='Element'>Element</option>"+
                        "<option value='Fit'>Fit</option>"+
                        "<option value='Fit EV'>Fit EV</option>"+
                        "<option value='Insight'>Insight</option>"+
                        "<option value='Odyssey'>Odyssey</option>"
                        );
        } 
        else if (val == "Toyota") {
           $("#models").html(
                        "<option value='' selected = 'selected'>Choose here</option>"+
                        "<option value='4Runner'>4Runner</option>"+
                        "<option value='Avalon'>Avalon</option>"+
                        "<option value='Avalon Hybrid'>Avalon Hybrid</option>"+
                        "<option value='Camry'>Camry</option>"+
                        "<option value='Camry Hybrid'>Camry Hybrid</option>"+
                        "<option value='Corolla'>Corolla</option>"+
                        "<option value='FJ Cruiser'>FJ Cruiser</option>"+
                        "<option value='Highlander'>Highlander</option>"+
                        "<option value='Highlander Hybrid'>Highlander Hybrid</option>"+
                        "<option value='Land Cruiser'>Land Cruiser</option>"+
                        "<option value='Matrix'>Matrix</option>"+
                        "<option value='Prius'>Prius</option>"+
                        "<option value='Prius Plug-in'>Prius Plug-in</option>"+
                        "<option value='Prius v'>Prius v</option>"+
                        "<option value='RAV4'>RAV4</option>"+
                        "<option value='RAV4 EV'>RAV4 EV</option>"+
                        "<option value='Sequoia'>Sequoia</option>"+
                        "<option value='Sienna'>Sienna</option>"+
                        "<option value='Tacoma'>Tacoma</option>"+
                        "<option value='Tundra'>Tundra</option>"+
                        "<option value='Venza'>Venza</option>"+
                        "<option value='Yaris'>Yaris</option>"
                        );
        }
        else if (val == "Audi") {
            $("#models").html(
                        "<option value='' selected ='selected' >Choose here</option>"+
                        "<option value='A3'>A3</option>"+
                        "<option value='A4'>A4</option>"+
                        "<option value='A5'>A5</option>"+
                        "<option value='A6'>A6</option>"+
                        "<option value='A7'>A5</option>"+
                        "<option value='A8'>A6</option>"+
                        "<option value='allroad'>allroad</option>"+
                        "<option value='Q3'>Q3</option>"+
                        "<option value='Q5'>Q5</option>"+
                        "<option value='Q7'>Q7</option>"+
                        "<option value='R8'>R8</option>"+
                        "<option value='RS 5'>RS 7</option>"+
                        "<option value='S3'>S3</option>"+
                        "<option value='S4'>S4</option>"+
                        "<option value='S5'>S5</option>"+
                        "<option value='S6'>S6</option>"+
                        "<option value='S7'>S7</option>"+
                        "<option value='S8'>S8</option>"+
                        "<option value='SQ5'>SQ5</option>"+
                        "<option value='TT'>TT</option>"+
                        "<option value='TTS'>TTS</option>"+
                        "<option value='TT RS'>TT RS</option>");
        } else if (val == "BMW") {
            $("#models").html(
                        "<option value='' selected ='selected' >Choose here</option>"+
                        "<option value='1 Series'>1 Series</option>"+
                        "<option value='1 Series M'>1 Series M</option>"+
                        "<option value='2 Series'>2 Series</option>"+
                        "<option value='3 Series'>3 Series</option>"+
                        "<option value='3 Series Gran Turismo'>3 Series Gran Turismo</option>"+
                        "<option value='4 Series'>4 Series</option>"+
                        "<option value='4 Series Gran Coupe'>4 Series Gran Coupe</option>"+
                        "<option value='5 Series'>5 Series</option>"+
                        "<option value='5 Series Gran Turismo'>5 Series Gran Turismo</option>"+
                        "<option value='6 Series'>6 Series</option>"+
                        "<option value='6 Series Gran Coupe'>6 Series Gran Coupe</option>"+
                        "<option value='7 Series'>7 Series</option>"+
                        "<option value='ActiveHybrid 5'>ActiveHybrid 5</option>"+
                        "<option value='ActiveHybrid 7'>ActiveHybrid 7</option>"+
                        "<option value='ActiveHybrid X6'>ActiveHybrid X6</option>"+
                        "<option value='ALPINA B6 Gran Coupe'>ALPINA B6 Gran Coupe</option>"+
                        "<option value='ALPINA B7'>ALPINA B7</option>"+
                        "<option value='i3'>i3</option>"+
                        "<option value='i8'>i8</option>"+
                        "<option value='M3'>M3</option>"+
                        "<option value='M4'>M4</option>"+
                        "<option value='M5'>M5</option>"+
                        "<option value='M6'>M6</option>"+
                        "<option value='M6 Gran Coupe'>M6 Gran Coupe</option>"+
                        "<option value='X1'>X1</option>"+
                        "<option value='X3'>X3</option>"+
                        "<option value='X4'>X4</option>"+
                        "<option value='X5'>X5</option>"+
                        "<option value='X5 M'>X5 M</option>"+
                        "<option value='X6 M'>X6 M</option>"+
                        "<option value='Z4'>Z4</option>");
        }
    });

    function input(input,data, flag) {
      var read = false;
      if (flag == 1) read = true; 
       $i = 0
       input.each(function(index, value){
              if ((index !=0) && ($i < data.length) ) {
                $(this).attr('value', data[$i]);
                $(this).attr('readonly', read);
                $i = $i+1;}});
    }
    
    $("a.edit").click(function(e) {

       $input = $("form#formuser input");    
       $cancel = $('a#cancel1');
       $button = $("form#formuser").find('#save');
       // var data = $(this).attr('data-id');
       var data = $(this).attr('data-id').split(',');
       // alert(data);
       $("input[name='key']").attr('value',data);

       if ('editmaker' == $(this).attr('id')) {
           $cancel = $('a#cancel2');
           $input = $("form#formmanu input");
           $button = $("form#formmanu").find('#save2');
       }
       else if ('editmodel' == $(this).attr('id')) {
           $cancel = $("a#cancel3");
           $input =  $("form#formmodel input");
           $button = $("form#formmodel #save3");
       }
       else if ('editstyle' == $(this).attr('id')) {
           $input = $('form#formstyle input');
           $button = $('form#formstyle  #save4');
       }
       else if ('editengine' == $(this).attr('id')) {
           $input = $('form#formengine input');
           $button = $('form#formengine #save5');

       }else if ('editdealer' == $(this).attr('id')) {
           $input = $('form#formdealer input');
           $button = $('form#formdealer #save6');
       }else if ('editprice' == $(this).attr('id')) {
           $cancel = $('#cancel2');
           $input = $('form#formprice input');
           //$("input[name='key']").attr('value',data);
           $button = $('form#formprice #save7');
       }
       $cancel.show();
       input($input,data,0)
       $button.html('Update');
       $button.attr('value','Update');
       // $("input[name='key']").attr('value',data);

       // alert($button.attr('value'));
       //window.location.href = '#top';
        $('#top')[0].scrollIntoView();
       //scrollToTop();
       e.preventDefault();
    });


   $("a.delete").click(function(e) {

      $cancel = $('#cancel1');
      $input = $("form#formuser input")
      $button = $("form#formuser").find('#save');
      var data = $(this).data('id').split(',');

      if ('deletemaker' == $(this).attr('id')) {
           $cancel = $('#cancel2');
           $input = $('form#formmanu input');
           $button = $('form#formmanu').find('#save2');
       }
       else if('deletemodel' ==  $(this).attr('id')) {
           $cancel = $("a#cancel3");
           $input =  $("form#formmodel input");
           $button = $("form#formmodel #save3");
       }
       else if ('deletestyle' == $(this).attr('id')) {
           $input = $('form#formstyle input');
           $button = $('form#formstyle #save4');
       }
       else if ('deleteengine' == $(this).attr('id')) {
           $input = $('form#formengine input');
           $button = $('form#formengine #save5');
       }else if ('deletedealer' == $(this).attr('id')) {
           $input = $('form#formdealer input');
           $button = $('form#formdealer #save6');
       }else if ('deleteprice' == $(this).attr('id')) {
           $cancel = $('#cancel2');
           $input = $('form#formprice input');
           $button = $('form#formprice #save7');
       }
      $cancel.show();
      input($input,data,1)

      // $("input[name='key']").attr('value',data);
      // alert($("input[name='key']").attr('value'));
      // $input.attr({'value':data[0],'readonly':true});
      $button.html('Delete');
      $button.attr('value','Delete');
      $('#top')[0].scrollIntoView();
      //$button.click();
      //$form.submit();
      e.preventDefault();
    });

    $('#login-form-link').click(function(e) {
    $("#login-form").delay(100).fadeIn(100);
    $("#register-form").fadeOut(100);
    $('#register-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
    });

    $('#register-form-link').click(function(e) {
    $("#register-form").delay(100).fadeIn(100);
    $("#login-form").fadeOut(100);
    $('#login-form-link').removeClass('active');
    $(this).addClass('active');
    window.location.href = '#top';
    e.preventDefault();
    });
   
   function collapse(that) {
    if (that.val() != 'Expand') {
        that.attr('value', 'Expand');
    }else{
    that.attr('value', 'Collapse');
    }
   }

   // function collapse(this) {
   //        if ($(this).val() != 'Expand') {
   //        $(this).attr('value', 'Expand');
   //        $('#table').hide();
   //        $('table#user').hide();
   //     }else{
   //        $(this).attr('value', 'Collapse');
   //        $('#table').show();
   //        $('table#user').show();
   //     }
   // }


    $('input#collapse').click(function(e) {
        //window.alert(this.id);
        collapse($('#collapse'));
        $('#table').toggle();
        $('table#user').toggle();
        $('table#styles').toggle();
        $('table#engines').toggle();
        $('table#dealers').toggle();
       //  if ($(this).val() != 'Expand') {
       //    $(this).attr('value', 'Expand');
       //    $('#table').hide();
       //    $('table#user').hide();
       // }else{
       //    $(this).attr('value', 'Collapse');
       //    $('#table').show();
       //    $('table#user').show();
       // }
    });
    $('input#collapse1').click(function(e) {
       collapse($('#collapse1'));
       $('table#dealers').toggle();
    });
    $('input#collapse2').click(function(e) {
       collapse($('#collapse2'));
       $('table#makers').toggle();
    });

    $('input#collapse3').click(function(e) {
       collapse($('#collapse3'));
       $('div#models').toggle();
    });
    $('input#collapse7').click(function(e) {
       collapse($('#collapse7'));
       $('table#price').toggle();
    });

});