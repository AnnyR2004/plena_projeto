<?php



class Arquivo {

    public function processar($anexo) {
       
        $caminhoAnexo = 'uploads/'; // Pasta onde os arquivos serão salvos

        if(count($anexo) > 0){

            $type= $anexo['type'][0];
            $tmpName = $anexo['tmp_name'][0];

            $name = $anexo['name'][0].'.pdf'; // Adicionando extensão ao nome do arquivo
            move_uploaded_file($tmpName, $caminhoAnexo.$name);

            list($largura_atual, $altura_atual) = pathinfo($caminhoAnexo.$name);
            
            $largura_nova = 800; // Largura desejada
            $altura_nova = 600; // Altura desejada
        
            return true; // Retorna true se o arquivo foi processado com sucesso
        }else {
            return false; // Retorna false se não houver arquivos para processar
        }


    }



}




?>