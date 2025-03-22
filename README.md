# TesteMZ
---
## Como exucutar o programa
---
1. Instalar o XAMP (PHP e MySql)
2. **Definir o executável do php como uma variável de ambiente**
3. Iniciar os serviços do XAMP (PHP e MySql)
4. Abrir o phpmyadmin, digitando a url (localhost/phpmyadmin) no navegador, e em seguida criar um banco vazio com o nome que desejar
5. Configurar suas credenciais para a conexão com o banco no arquivo "bootstrap.php"
6. Abrir um terminal na pasta raiz do projeto e executar os comandos "php vendor/bin/doctrine orm:schema-tool:create" e "php vendor/bin/doctrine orm:schema-tool:create --force"
7. Abrir um terminal na pasta "Public" do projeto e executar o comando "php -S localhost:8080"
8. Por fim, execute o sistema buscando por "localhost:8080" no navegador.
