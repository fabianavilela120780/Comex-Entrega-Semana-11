<?php

namespace aplicativo\Http\ Controladores;

use Iluminar\Suporte\ Fachadas\Autenticação;
use Iluminar\Http\ Solicitação;

classe LoginController
{
    Índice de função pública()
    {
        visualização de retorno ('login.index');
    }

    armazenamento de função pública (solicitação $ solicitação)
    {
        if (!Auth::attempt($request->only(['e-mail', 'senha']))) {
            retorno redirecionamento()->voltar()->< a i=4>withErrors(['Usuário ou senha inválidos.']); 
        }

        retornar to_route('categorias.index');
    }
}
