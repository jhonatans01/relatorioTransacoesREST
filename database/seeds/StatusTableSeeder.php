<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status')->delete();

        $values= [
            ['id' => '1', 'statusText' => 'Aprovada', 'statusInfo' => 'Transação autorizada pela adquirente.'],
            ['id' => '2', 'statusText' => 'Recusada', 'statusInfo' => 'Saldo Insuficiente - O saldo do cliente ou limite de crédito não é suficiente para efetuar o pagamento solicitado.'],
            ['id' => '3', 'statusText' => 'Recusada', 'statusInfo' => 'Senha Inválida - A senha digitada pelo cliente não confere.'],
            ['id' => '4', 'statusText' => 'Recusada', 'statusInfo' => 'Instituição temporariamente fora do ar. A instituição que autoriza a transação não pode atender no momento. Banco Emissor Indisponível.'],
            ['id' => '5', 'statusText' => 'Recusada', 'statusInfo' => 'Cartão vencido - O cartão está com a data de validade vencida.'],
            ['id' => '6', 'statusText' => 'Recusada', 'statusInfo' => 'Transação Negada - não aceita pela Rede Autorizadora.'],
            ['id' => '7', 'statusText' => 'Recusada', 'statusInfo' => 'Transação Inválida - tipo de transação não permitida para esse cartão (débito, crédito, voucher, etc).'],
            ['id' => '8', 'statusText' => 'Recusada', 'statusInfo' => 'Rede Adquirente/Autorizadora não conectada - não pode autorizar transações neste momento.']
        ];

        DB::table('status')->insert($values);
    }
}
