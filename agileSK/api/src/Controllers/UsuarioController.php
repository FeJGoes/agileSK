<?php
namespace Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use RedBeanPHP\Facade as R;
use Configs;

class UsuarioController {
    
    // public function __construct(string $email, string $senha){
    //     $this->email = $email;
    //     $this->senha = $senha;
    // }

    public function cadastrarNovo(Request $request, Response $response, $args){
    $post = $request->getParsedBody();
    
    R::setup('pgsql:host=localhost;dbname=agilesk','root', 'root');
    // R::setup(STRING_CONNECTION_DB_PG,USER_CONNECTION, PASSWORD_CONNECTION);
    $user = R::dispense( 'users' );
    $user->nome = $post['fullname'];
    $user->email = $post['email'];
    $user->senha = $post['senha'];
    $user->departamento = $post['departamento'];
    $idCriado = R::store( $user );
    R::close();

    $infoResponse['error'] = FALSE;
    $infoResponse['message'] = 'usuario criado com sucesso, ID: '.$idCriado;
   
    $response->getBody()->write(json_encode($infoResponse));
    return $response
                 ->withHeader('Content-Type', 'application/json');  
    }
}

?>