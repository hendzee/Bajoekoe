$(document).ready(function(){
    // ===================================
    // Spinner number
    // ===================================
    $('.quantity-spinner').each(function () {
        $(this).number();                
    });
    
    // ===================================
    // change product style color and size
    // ===================================
    $("#color-selector").change(function(){        
        const base_url = window.location.origin;
        const img_url = base_url + "/shop/assets/images/item_image/";
        const method_url = base_url + "/shop/index.php/Common/ajax_single_product";
        const color = $("#color-selector").val();
        const id_item = $("#id-selector").val();                                 
                        
        let data_combo = "";        

        $.ajax({
            url: method_url,
            type: "POST",
            dataType: "json",
            data: { id_item: id_item, color: color },

            success: function(response){
                $(".img-preview-1").attr("src", img_url + response['image'][0]['image_one']);
                $(".img-preview-2").attr("src", img_url + response['image'][0]['image_two']);
                $(".img-preview-3").attr("src", img_url + response['image'][0]['image_three']);
                $(".img-preview-4").attr("src", img_url + response['image'][0]['image_four']);                                

                $("#size-selector").empty()

                for(let counter=0; counter < response['size'].length; counter++){
                    data_combo = $('<option></option>')
                        .attr("value", response['size'][counter]['size'])
                        .text(response['size'][counter]['size']);

                    $("#size-selector").append(data_combo)
                }
                                
                $("#size-selector").trigger("chosen:updated");                
            }
        })
    });
    
    // ===================================
    // Check valid password on register
    // ===================================
    $("#form-register").submit(function(e){
        const pass = $("#password").val();
        const repeat_pass = $("#password-repeat").val();

        if(pass != repeat_pass){
            e.preventDefault();            

            alert("Password tidak sama dengan konfirmasi password");
        }        
    });
   
})