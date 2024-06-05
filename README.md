# Sistema de Cadastro de Cidadãos

Este projeto é uma aplicação PHP simples para cadastrar cidadãos e gerar um Número de Identificação Social (NIS) único para cada um. Também é possível pesquisar cidadãos existentes pelo NIS.

## Cenário

O NIS é um identificador único atribuído pela Caixa Econômica Federal aos cidadãos. Composto por 11 dígitos, é utilizado para realizar o pagamento de benefícios sociais, assim como chave de identificação nas Políticas Públicas, emissão de documentos, dentre outras utilidades.

## Funcionalidades

- Cadastro de cidadãos: A aplicação contém um formulário para cadastrar cidadãos. O formulário contém um único campo para informar o nome do cidadão. Ao ser cadastrado, um número NIS é gerado automaticamente, atribuído a esta pessoa e então exibido na tela junto de uma mensagem de sucesso.
- Pesquisa de cidadãos: É possível pesquisar os registros já existentes através do número NIS. Caso o NIS informado já esteja cadastrado, a aplicação exibe o nome do cidadão e seu número NIS. Caso não esteja, exibe: “Cidadão não encontrado”.

## Como executar

1. Certifique-se de que o WampServer está instalado em sua máquina.
2. Clone este repositório para a pasta `www` dentro do diretório do WampServer.
3. Inicie o WampServer.
4. Abra o navegador e acesse `http://localhost/gesuas/public/index.php` para ver a aplicação.
5. Importe o script SQL fornecido para criar o banco de dados e a tabela necessária para o cadastro de cidadãos.

## Tecnologias utilizadas

- PHP: A aplicação é escrita em PHP, seguindo o paradigma da Programação Orientada a Objetos.
- MySQL: Utilizamos MySQL como nosso banco de dados para armazenar os registros dos cidadãos. O banco de dados é acessado através do phpMyAdmin.

## Notas

- Este projeto não utiliza nenhum framework para criação de aplicações inteiras como Symfony ou Laravel.
- Este projeto não possui testes automatizados nem gerenciador de pacotes.
