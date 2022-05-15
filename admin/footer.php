

        <!-- //////////////////////////////////////////////////////////////////////////// -->

            </div>

            <!--end container-->

        </section>

        <!-- END CONTENT -->



        <!-- //////////////////////////////////////////////////////////////////////////// -->

        

        </div>

        <!-- END WRAPPER -->

      </div>

      <!-- END MAIN -->

     <div class="modal" id="modal"></div>

     <div class="modal" id="modal3"><iframe src="./fileman/index.html?integration=custom&type=files&txtFieldId=txtSelectedFile" style="width:100%;height:100%" frameborder="0"></iframe></div>

      <!-- //////////////////////////////////////////////////////////////////////////// -->

      <!-- START FOOTER -->

      <footer class="page-footer">

        <div class="footer-copyright">

          <div class="container">

            <span><?phpecho date("d.m.Y");?>

             

          </div>

        </div>

      </footer>

      

      <!-- END FOOTER -->

      <!-- ================================================

    Scripts

    ================================================ -->













   <!-- ================================================

    Scripts

    ================================================ -->

      <!-- jQuery Library -->

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

  <script src="<?phpecho $link;?>/js/jquery-ui.js"></script>

      <!--materialize js-->

  <script type="text/javascript" src="../js/bin/materialize.min.js"></script>

  <script type="text/javascript" src="<?phpecho $link;?>/js/plugins.js"></script>

      <script src='./js/tinymce/tinymce.min.js'></script>

      



    

  <style>

input.mce-textbox{

width: auto;

background: #fff;

border: 1px solid #c5c5c5;

display: inline-block;

-webkit-transition: border linear .2s, box-shadow linear .2s;transition: border linear .2s, box-shadow linear .2s;

height: 28px;

resize: none;

padding: 0 4px 0 4px;

white-space: pre-wrap;

color: #333;

}



#tinymce .mce-content-body {font-size: 14px!important;}

</style><script>







  tinymce.init({

  selector: 'textarea',

  content_css : ["http://localhost/solarkitindia.com/css/materialize.css","http://localhost/solarkitindia.com/css/FontAwesome.css","http://localhost/solarkitindia.com/css/style.css","http://localhost/solarkitindia.com/css/new_product.css?ver=1"],

  external_plugins: {

    'maths': 'http://localhost/solarkitindia.com/js/bin/materialize.min.js'

  },

  plugins: "template",

  image_class_list: [

        {title: 'Responsive', value: 'responsive-img'},

        {title: 'None', value: ''}

    ],  

    mode : "specific_textareas",

    theme: "modern",

    plugins: [

        "visualblocks imageresizing advlist autolink lists link image charmap print preview hr anchor pagebreak",

        "searchreplace wordcount visualblocks visualchars code fullscreen",

        "insertdatetime media nonbreaking save table contextmenu directionality",

        "emoticons template paste textcolor colorpicker textpattern autoresize", 

    ],

    templates: "http://localhost/solarkitindia.com/admin/js/tinymce/templates/templates.php",

     height: 200,

    extended_valid_elements: 'span[class]',

    entity_encoding: 'named',

    entities: '160,nbsp',

    convert_urls: false,

 forced_root_block: "",

 visualblocks_default_state: false, 

 force_br_newlines : true,

 force_p_newlines : false,

 code_dialog_height:'600',  

 code_dialog_width:'1000',

 file_browser_callback: RoxyFileBrowser

});





 

 function RoxyFileBrowser(field_name, url, type, win) {

  var roxyFileman = 'fileman/index.html';

  if (roxyFileman.indexOf("?") < 0) {     

    roxyFileman += "?type=" + type;   

  } else {

    roxyFileman += "&type=" + type;

  }

  roxyFileman += '&input=' + field_name + '&value=' + win.document.getElementById(field_name).value;

  if(tinyMCE.activeEditor.settings.language){

    roxyFileman += '&langCode=' + tinyMCE.activeEditor.settings.language;

  }

  tinyMCE.activeEditor.windowManager.open({

     file: roxyFileman,

     title: '',

     width: 1000, 

     height: 800,

     resizable: "yes",

     plugins: "media",

     inline: "yes",

     close_previous: "no"  

  }, {     window: win,     input: field_name    });

  return false; 

}





 function openRoxy(){

 	$('#modal').html('<iframe src="fileman/index.html?integration=custom&type=files&txtFieldId=txtSelectedFile" style="width:100%;height:100%" frameborder="0"></iframe>')

 	$('#modal').modal('open');

}

  </script>

<script src="js/tinymce/plufins/imageresiying/plugin.min.js"></script>

 

  

  </body>

</html>









