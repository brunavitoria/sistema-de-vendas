<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VendasRelatorioDiario extends Mailable
{
    use Queueable, SerializesModels;

    public $valor;
    public $subject;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($valor)
    {
        $this->valor = $valor;
        $this->subject = 'Relatório Diário de Vendas';
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS'))
            ->subject($this->subject)
            ->markdown('emails.relatorio-diario', ['data' => $this->valor]);
    }
}
