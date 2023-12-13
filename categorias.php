<?php

namespace aplicativo\Http\ Controladores;

use Aplicativo\Modelos\Usuário;
use Iluminar\Http\ Solicitação;
use Iluminar\Suporte\ Fachadas\Autenticação;
use Iluminar\Suporte\ Fachadas\Hash;

classe UsuáriosController
{
    função pública criar()
    {
        retornar visualização('usuários.criar');
    }

    armazenamento de função pública (solicitação $ solicitação)
    {
        $dados = $solicitação->validar([
            'nome' => 'string|obrigatório',
            'e-mail' => 'obrigatório|e-mail|exclusivo:usuários',
            'senha' => 'obrigatório|min:8',
        ]);

        $dados['senha'] = Hash::fazer(< a i=9>$dados['senha']);

        $usuário = Usuário::);dados$(criar

        $token = $usuário ->createToken('nome do token';plainTextToken)->

        retorno redirecionamento()->rota( 'categorias.index');
    }
}
