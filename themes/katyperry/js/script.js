$(document).ready(function() {

    $('#product li').hover(function(){
	
        $(this).find('.bubble').stop().animate({
            opacity:'1'
        },200);
        $(this).find('img').stop().animate({
            width: '100%'
        },200);
	
    },function(){
        $(this).find('.bubble').stop().animate({
            opacity:'0'
        },200)
        $(this).find('img').stop().animate({
            width: '90%'
        },200);
    });

    $("#bs_reg").validate({
        rules: {
            name: {
                required: true,
                minlength: 2
            },
            email: "required",
            email2: {
                required: true,
                equalTo: "#email"
            },
            phone: {
                required: true,
                number: true
            },
            id_number: {
                required: true
            },
            concert_code: "required",
            seat: "required",
            departure_group: "required",
            agree: "required"
        },
        messages: {
            name: {
                required: "Mohon masukan nama kamu.",
                minlength: "Nama minimal 2 karakter."
            },
            email:{
                required: "Mohon masukan email kamu.",
                email: "Masukan alamat email dengan benar"
            },
            email2:{
                required: "Mohon masukan email kamu.",
                email: "Masukan alamat email dengan benar",
                equalTo: "Email tidak sama"
            },
		
            phone: {
                required: "Mohon masukan nomor telepon kamu.",
                number: "Masukan nomor telepon dengan benar."
            },
            id_number: {
                required: "Mohon masukan nomor identitas kamu.",
                number: "Masukan nomor identitas dengan benar."
            },
            concert_code: {
                required: "Mohon masukan nomor booking kamu."
            },
            seat: {
                required: "Mohon masukan jumlah seat."
            },
            departure_group: {
                required: "Mohon pilih jam keberangkatan."
            },
            agree: {
                required: "Anda Harus setuju Terms Agreement Kami."
            }
        },
        success: function(label) {
            // set &nbsp; as text for IE
            label.html("&nbsp;").css('opacity', 0).addClass("checked").stop().animate({
                opacity:'1'
            },500);
        }
    });

    /*add input*/
    $('#jumlah_seat option').click(function() {
	
        $('#other .field input').remove();

        $i = $(this).val();
        $c = 1;

        if ($i > 1){
	
            $('#other').css('display','block').stop().animate({
                opacity:'1'
            },300);
		
            while ($c < $i)
            {	
                $c++;
                $('<input type="text" name="name' + $c + '" />').appendTo('#other .field');
		
            };/*end while*/
	
        } /*end if*/
	
        else {
	
            $('#other').stop().animate({
                opacity:'0'
            },300).css('display','none');
	
        }
	
        return false;

    });

    $().appendTo('#other .field');

    $('.scroll').jScrollPane();


});