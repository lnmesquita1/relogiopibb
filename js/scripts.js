    $(document).ready(function() {
                //$('[id^=detail-]').hide();
                $('.toggle').click(function() {
                    $input = $( this );
                    $target = $('#'+$input.attr('data-toggle'));
                    $target.slideToggle();
                });
                
                $('[data-toggle="tooltip"]').tooltip({
                    trigger : 'hover'
                })  
            });
            
        $("#nome").keyup(function(event) {
            if (event.keyCode === 13) {
                $("#enviar").click();
            }
        }); 
        
        $("#alert").click(function() {
            alert("Button code executed.");
          });
	function post(){
            $('#result').html('');
            
            var nome = $('#nome').val();
            
            var myCheckboxes = new Array();
            $("input:checked").each(function() {
               myCheckboxes.push($(this).val());
            });           
            if(nome !== "" && myCheckboxes.length > 0) {
                $.post('cadastra-intercessor.php',{postnome:nome,check_list:myCheckboxes},
                function(data){
                    $('#result').html(data);
                    if(data.startsWith("<div class='alert alert-d") == false) {
                        jQuery.getScript("js/scripts.js", function(data, status, jqxhr) {


                        });
                        $("#quadro").load("quadroHorarios.php");
                        $('#nome').val("");
                        
                    }
                }
                )
            } else if (nome === "" && myCheckboxes.length === 0) {
                $('#result').append(mensagemErro('nome'));
                $('#result').append(mensagemErro('horário'));                
            } else if (myCheckboxes.length === 0) {
                $('#result').append(mensagemErro('horário'));
            } else if (nome === "") {
                $('#result').append(mensagemErro('nome'));
                
            }  
                
            
        }
        
        function mensagemErro(param) {
            return "<div class='alert alert-danger fade in'><a class='close' data-dismiss='alert' aria-label='close'>&times;</a>\n\
                    <strong>Algo deu errado!</strong>" + ' Informe o ' + param + "</div>";
        }


