<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Venda;
use Illuminate\Support\Facades\Mail;
use App\Mail\VendasRelatorioDiario;

class RelatorioDiarioDeVendas extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'vendas:relatorio-diario';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Comando para gerar relatório diário de vendas e enviar por e-mail';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $total_vendas = Venda::whereDate('created_at', date('Y-m-d'))->sum('valor');
        Mail::to('email@example.com')->send(new VendasRelatorioDiario($total_vendas));

        return 0;
    }
}
