<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContatoEmail extends Mailable
{
    use Queueable, SerializesModels;


    public $dados;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($dados)
    {
        $this->dados = $dados;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->from(
            $this->dados->emailContato,
            $this->dados->nomeContato,
            $this->dados->assuntoContato,
            $this->dados->telContato,
            $this->dados->mensagemContato
        )
        ->subject('Contato do Formulario do site')
        ->view('site.contato.template-empresa');
    }
}
