$( document ).ready(function() {

    $('#rail_type').on('change',function(){
        var railTypeId = $('#rail_type').val();
        if(railTypeId){
            $.ajax({
                url: "getPanelPosition.php",
                type : 'post',
                dataType : 'json',
                data : {railTypeId:railTypeId},
                success : function(data){
                    $('#panel_position').empty();
                    if(data.panelPosition) {
                        $('#panel_position').append('<option value="">Please Select Panel Position</option>');
                        $.each(data.panelPosition, function (key, value) {
                            $('#panel_position').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                        
                        $('#rail_type').css('border-color','#0277bd');
                        $('#panel_position').removeAttr('disabled');
                        $('#panel_position').prop('selectedIndex',0);
                    }

                    if(data.railType) {
                        addComponent(data.railType);
                    };
                    
                }
            });
        }else{
            alert('Please Select Rail Type');
        }   
        $('#panel_position').prop('disabled',true);
        $('#panel_position').prop('selectedIndex',0);
        $('#roof_type').prop('disabled',true);
        $('#roof_type').prop('selectedIndex',0);
        $('#height').prop('selectedIndex',0);
        $('#height').prop('disabled',true);
    });

    $('#panel_position').on('change',function(){
        var railTypeId = $('#rail_type').val();
        var panelPositionId = $('#panel_position').val();
        if(panelPositionId && railTypeId){
            $.ajax({
                url: "getRoofType.php",
                type : 'post',
                dataType : 'json',
                data : {railTypeId:railTypeId,panelPositionId:panelPositionId},
                success : function(data){
                    $('#roof_type').empty();
                    if(data.roofType) {
                        $('#roof_type').append('<option value="">Please Select Roof Type</option>');
                        $.each(data.roofType, function (key, value) {
                            $('#roof_type').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });

                        $('#panel_position').css('border-color','#0277bd');
                        $('#roof_type').removeAttr('disabled');
                        $('#roof_type').prop('selectedIndex',0);
                    }
                    
                    if(data.panelPosition){
                        addComponent(data.panelPosition);
                    }
                }
            });
        }else{
            alert('Please Select Panel Position');
        }
        $('#height').prop('disabled',true);
    });

    $('#roof_type').on('change',function(){
        var roofTypeId = $('#roof_type').val();
        var railTypeId = $('#rail_type').val();
        var panelPositionId = $('#panel_position').val();
        if(roofTypeId){
            $.ajax({
                url: "getHeight.php",
                type : 'post',
                dataType : 'json',
                data : {roofTypeId:roofTypeId,railTypeId:railTypeId,panelPositionId:panelPositionId},
                success : function(data){
                    $('#height').empty();
                    $('#height').append('<option value="">Please Select Height</option>');
                    if(data.height){
                        $.each(data.height, function (key, value) {
                            
                            $('#height').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    }
                    
                    if(data.roofType){
                        addComponent(data.roofType);    
                    }

                    $('#roof_type').css('border-color','#0277bd');
                    $('#height').removeAttr('disabled');
                    $('#height').prop('selectedIndex',0);
                }
            });
        }else{
            alert('Please Select Roof Type');
        }

    });

    $('#height').on('change',function(){
        var roofTypeId = $('#roof_type').val();
        var railTypeId = $('#rail_type').val();
        var panelPositionId = $('#panel_position').val();
        var heightId = $('#height').val();
        if(railTypeId && roofTypeId && panelPositionId && heightId){
            $.ajax({
                url: "getProducts.php",
                type : 'post',
                dataType : 'json',
                data : {roofTypeId:roofTypeId,railTypeId:railTypeId,panelPositionId:panelPositionId,heightId:heightId},
                success : function(data){
                    
                    if(data.height){
                        addComponent(data.height);
                        $('#height').css('border-color','#0277bd');
                    }
                    
                    if(data.screwFlag){
                        $('.screw-div').empty();
                        var screwInput = '<div class="col-md-2 screw-div">\n' +
                            '                    <label>Step 5</label>\n' +
                            '                    <select class="selectInput" name="screw" id="screw">\n' +
                            '                        <option value="">Please Select Screw</option>\n';

                            
                            if(data.screw){
                                $.each(data.screw, function (key, value) {
                                    screwInput += '<option value="' + value.id + '">' + value.name + '</option>';
                                });
                            }
                            
                            screwInput += '                    </select>\n' +
                            '                </div>';
                            
                            $(screwInput).insertAfter('.height-input');
                    }else{
                        if(data.product){
                            addProduct(data.product);
                        } 
                    }
                }
            });
        }else{
            alert('Please Select Height');
        }

    });

    $(document).on('change','#screw',function(){
        var roofTypeId = $('#roof_type').val();
        var railTypeId = $('#rail_type').val();
        var panelPositionId = $('#panel_position').val();
        var heightId = $('#height').val();
        var screwId = $('#screw').val();
        if(railTypeId && roofTypeId && panelPositionId && heightId && screwId){
            $.ajax({
                url: "getProducts.php",
                type : 'post',
                dataType : 'json',
                data : {roofTypeId:roofTypeId,railTypeId:railTypeId,panelPositionId:panelPositionId,heightId:heightId,screwId:screwId},
                success : function(data){

                    if(data.screw){
                        addComponent(data.screw);
                    }

                    if(data.product){
                        addProduct(data.product);
                    }

                }
            });
        }else{
            alert('Please Select Screw');
        }

    });
    
    function addComponent(data){
        var image_link = $('#image_link').val();
        $.each(data, function (key, value) {
            var html =
                '<li class="wow">' +
                '<div class="clearfix">' +
                '<div class="cbp-vm-image">' +
                '<a class="link" ></a>' +
                '<img id="product_detail_img" alt="'+value.name+'"' +
                'src="'+image_link+value.image+'"/>' +
                '<div class="cbp-image-hover">' +
                '<img src="'+image_link+value.image+'"' +
                'alt="'+value.name+'"></div>' +
                '<div class="line"></div>' +
                '<div class="ovrly"></div>' +
                '<div class="icon_box">' +
                '<div class="icon"></div>' +
                '</div>' +
                '</div>' +
                '<div class="cbp-list-center clearfix">' +
                '<div class="cbp-list-left">' +
                '<a class="cbp-title">'+value.name+'</a>' +
                '<span class="line"></span>' +
                '<div class="cbp-vm-details">'+value.short_description+'</div>' +
                '<ul class="post_blog_tag">' +
                '<p><i></i>Tags :</p>' +
                '<li><a href="#"></a></li>' +
                '</ul>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</li>';

            $('#products').append(html);
        });
    }

    function addProduct(data){
        var image_link = $('#image_link').val();
        $.each(data, function (key, value) {
            var html =
                '<li class="wow">' +
                '<div class="clearfix">' +
                '<div class="cbp-vm-image product-image">' +
                '<a class="link" href="productDetails.php?id='+value.id+'"></a>' +
                '<img id="product_detail_img" alt="'+value.title+'"' +
                'src="'+image_link+value.image+'"/>' +
                '<div class="cbp-image-hover">' +
                '<img src="'+image_link+value.image+'"' +
                'alt="'+value.title+'"></div>' +
                '<div class="line"></div>' +
                '<div class="ovrly"></div>' +
                '<div class="icon_box">' +
                '<div class="icon"></div>' +
                '</div>' +
                '</div>' +
                '<div class="cbp-list-center product-description">' +
                '<div class="cbp-list-left description-left">' +
                '<a class="cbp-title">'+value.title+'</a>' +
                '<span class="line"></span>' +
                '<div class="cbp-vm-details">'+value.short_description+'</div>' +
                '<ul class="post_blog_tag">' +
                '<p><i></i>Tags :</p>' +
                '<li><a href="productDetails.php?id='+value.id+'"></a></li>' +
                '</ul>' +
                '</div>' +
                '</div>' +
                '</div>'+
                '<div class="clearfix"></div>'+
                '<div>' +
                '<div class="col-md-3">'+
                    '<img src="http://localhost/solarkitindia.com/images/products1/BF_FTP_FR_SS.png">'+
                '</div>'+
                '<div class="col-md-3">'+
                '<img src="http://localhost/solarkitindia.com/images/products1/BF_FTP_FR_SS.png">'+
                '</div>'+
                '<div class="col-md-3">'+
                '<img src="http://localhost/solarkitindia.com/images/products1/BF_FTP_FR_SS.png">'+
                '</div>'+
                '<div class="col-md-3">'+
                '<iframe class="youtube-link" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>'+
                '</div>'+
                '</div>'
                '</div>' +
                '</li>';

            $('#products').prepend(html);
        });
    }
});