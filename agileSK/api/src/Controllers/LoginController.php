<?php
namespace Controllers;

class LoginController {
    protected $email;
    protected $senha;

    public function __construct(string $email, string $senha){
        $this->email = $email;
        $this->senha = $senha;
    }

    public function possoEntrar(){
        if ($this->email == 'teste@mail.com'){
            if($this->senha == '123456'){
                $return['error'] = FALSE;
                $return['message'] = 'Bem vindo';
            } else {
                $return['error'] = TRUE;
                $return['message'] = 'senha não corresponde ao cadastro';
            }
        } else {
            $return['error'] = TRUE;
            $return['message'] = 'email não cadastrado';
        }
        return $return;
    }
}

?>