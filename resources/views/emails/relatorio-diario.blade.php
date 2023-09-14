@component('mail::message')
# Relatório diário de vendas - {{ date('d/m/Y') }}

Confira o total de vendas diário:
<b>R$ {{ number_format($valor, 2, ',', '.') }}</b>


Atenciosamente,<br>
{{ config('app.name') }}
@endcomponent
