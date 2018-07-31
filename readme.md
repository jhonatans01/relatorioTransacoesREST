<p align="center">
<a target="_blank" href="https://travis-ci.org/jhonatans01/relatorioTransacoesREST"><img src="https://travis-ci.org/jhonatans01/relatorioTransacoesREST.svg" alt="Build Status"></a>
</p>

# API Relatório de Transações

Esta API foi desenvolvida utilizando a linguagem PHP (7.1), com o auxílio do framerwork Laravel 5.6.

## Execução

Para executar o projeto, basta inserir os arquivos do projeto em um servidor apache (local ou online). Os mais conhecidos são: XAMPP (Windows), LAMP (Linux) e MAMP (macOS).

O SGBD utilizado foi o MySQL. Pode ser alterado, porém não há garantia que o gatilho incluso no código irá funcionar, pois foi desenvolvido no MySQL. O arquivo de criação do gatilho está em `/database/migrations/`, caso haja necessidade de exclusão/modificação.

Antes de rodar o script do banco, deve-se criar um banco de dados chamado 'tef'. Foi utilizado como o usuário 'root' e sem senha, porém isso pode ser alterado pelo arquivo `.env`, presente na pasta raiz do projeto.

Após criar o banco no SGBD, deve-se criar e popular as tabelas a partir do seguinte código:

```
php artisan migrate:refresh --seed
```

## Rotas

Basicamente, as rotas definidas são:

```
GET /api/nomeEntidade
GET /api/nomeEntidade/id
POST /api/nomeEntidade
PUT /api/nomeEntidade/edit/id
DELETE /api/nomeEntidade/delete/id
```

Porém, há casos de rotas mais específicas, tal como a busca de transações por cnpj do lojista, data, bandeira ou adquirente. Para tanto, recomenda-se verificar o arquivo `/routes/api.php`, que contém todas as rotas disponíveis.

Atenção:

> Copiar também, para a pasta do servidor, o arquivo `.htaccess` presente na pasta raiz do projeto. Caso contrário, deve ser adicionado, no início das rotas, a pasta 'public', ficando da seguinte forma: `public/api/nomeEntidade`

## Estrutura das Requisições

### CardBrand ou Acquirer
```
{
"name" : ""
}
```

### AcquirerCard
```
{
"acquirer" : "",
"card_brand" : ""
}
```
- "acquirer" = acquirers.id
- "card_brand" = "card_brands.id"

### PaymentMethod
```
{
"type" : ""
}
```

### CardPayment
```
{
"card_brand" : "",
"payment_method" : ""
}
```

- "card_brand" = "card_brands.id"
- "payment_method" = payment_methods.id


### Status
```
{
"statusText" : "",
"statusInfo" : ""
}
```

### Merchant
```
{
"cnpj" : "",
"companyName" : ""
}
```

### Transaction
```
{
"checkoutCode" : "",
"merchant" : "",
"cipheredCardNumber" : "",
"amountInCent" : "",
"installments" : "",
"acquirer" : "",
"status" : "",
"card_brand" : "",
"payment_method" : "",
"acquirerAuthorizationDateTime" : ""
}
```
Atenção:
>  Uma transação é inserida no banco de dados apenas se o metódo de pagamento estiver cadastrado como disponível para a bandeira, conforme "api/cardPayments", e se a bandeira for aceita pelo adquirente, conforme "api/acquirerCards".
 
## Busca dos relatórios

A busca mais simples é por 'id', ficando da seguinte forma:
 
```
/api/transactions/id
```

Para busca mais elaborada, deve ser criado um JSON e adicionado à rota com o nome do parâmetro "data", da seguinte forma:
```
/api/transactions?data={"merchants": ... }
```

O JSON deve ser estruturado da seguinte forma:
```
{
"merchants" : [{"cnpj":"", "companyName":""}, {"cnpj":"", ...} ...],
"acquirers" : [{"id": "", "name": ""}, {"id": "", ...} ...],
"card_brands" : [{"id": "", "name": ""}, {"id": "", ...} ...],
"payment_methods" : [{"id": "type": ""}, {"id": "", ...} ...]
"dates": ["", ""]
}
```

- "dates" corresponde à data inicial e data final da busca (timestamps). Se apenas uma data for adicionada no vetor, a busca vai retornar somente as transações dessa data.
- os atributos devem estar como vetor, mesmo que só tenham 1 elemento.
- não havendo necessidade de refinar a busca por todos os 5 atributos, basta omitir os desnecessários na requisição.

## Testes

Foi utilizado o Travis CI devido à sua facilidade de uso tendo em vista sua integração automática com o GitHub. No log do TravisCI, é possível verificar a cobertura de testes.

No entanto, caso deseje executar os testes no ambiente local, é necessário, estando em modo terminal e também dentro da pasta raiz do projeto, rodar o PHP Unit através do seguinte comando :

```
./vendor/bin/phpunit
```

Após executar esse comando, será gerado o arquivo clover.xml, que servirá de input para o teste de cobertura de código. Para executar o teste de cobertura de código, primeramente é necessário ter instalado no computador o PHP com a extensão <a href="https://xdebug.org/">Xdebug</a> também instalada e ativada.

```
php travis/coverage-checker.php travis/clover.xml 50
```

O número 50 é a porcentagem mínima de cobertura desejada.