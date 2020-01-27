<?php
namespace Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class LoginController {
    protected $email;
    protected $senha;
    protected $status; 

    public function possoEntrar(Request $request, Response $response, $args){
        $post = $request->getParsedBody();
        $this->email = $post['email'];
        $this->senha = $post['senha'];
        
     
        if ($this->email == 'teste@mail.com'){
            if($this->senha == '123456'){
                if($this->status == 'ativo') {
                    $result['error'] = FALSE;
                    $result['message'] = 'Bem vindo';
                } else {
                    $result['error'] = TRUE;
                    $result['message'] = 'usuário ainda não foi confirmado';
                }
            } else {
                $result['error'] = TRUE;
                $result['message'] = 'senha não corresponde ao cadastro';
            }
        } else {
            $result['error'] = TRUE;
            $result['message'] = 'email não cadastrado';
        }
        
        $response->getBody()->write(json_encode($result));
        return $response
                 ->withHeader('Content-Type', 'application/json');
    }
}

?>