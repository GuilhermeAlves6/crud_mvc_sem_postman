
```markdown
# API RESTful MVC com PHP e Firebird 🚀

Este projeto é uma **API RESTful** desenvolvida do zero utilizando o padrão de arquitetura **MVC** (Model-View-Controller). A aplicação realiza o gerenciamento de usuários conectando-se a um banco de dados **Firebird**, focando em código limpo e rotas amigáveis.

## 🚀 Tecnologias Utilizadas

*   **PHP 8.x**
*   **Firebird SQL 3.0+**
*   **PDO** (PHP Data Objects) para conexão com banco.
*   **Composer** (Autoloading PSR-4).
*   **Apache** (via XAMPP).

## 🛠️ Estrutura do Projeto

```text
Mvc/
├── app/
│   ├── Controllers/  # Lógica de controle das requisições
│   ├── Models/       # Interação com o banco de dados
│   └── Views/        # Interfaces (HTML/PHP)
├── core/             # Núcleo da aplicação (Roteamento)
├── public/           # Ponto de entrada (index.php e .htaccess)
└── vendor/           # Dependências do Composer
```

## 📋 Pré-requisitos

1. **XAMPP** instalado.
2. **Firebird SQL** instalado e rodando na porta **3050**.
3. Extensão **pdo_firebird** habilitada no seu `php.ini`.
4. Arquivo **fbclient.dll** copiado para a pasta `C:\xampp\php`.

## 🔧 Configuração do Banco de Dados

Para que o sistema gere os IDs automaticamente, execute o script abaixo no seu terminal SQL (ou FlameRobin):

```sql
CREATE TABLE USER_MVC ( 
    ID INTEGER NOT NULL PRIMARY KEY, 
    NOME VARCHAR(100), 
    EMAIL VARCHAR(100) 
);

CREATE GENERATOR GEN_USER_ID; 
SET GENERATOR GEN_USER_ID TO 0;

SET TERM ^ ; 
CREATE TRIGGER TR_USER_ID FOR USER_MVC 
ACTIVE BEFORE INSERT POSITION 0 
AS 
BEGIN 
    IF (NEW.ID IS NULL) THEN 
        NEW.ID = GEN_ID(GEN_USER_ID, 1); 
END^ 
SET TERM ; ^
```

## 🚀 Como Executar

1. Clone o repositório para `C:\xampp\htdocs\Mvc`.
2. Abra o terminal na pasta do projeto e execute:
   ```bash
   composer install
   ```
3. Inicie o Apache no painel do XAMPP.
4. Acesse no navegador: [http://localhost/Mvc/public/user](http://localhost/Mvc/public/user)

## 📡 Endpoints da API (Postman)

Você pode testar a API enviando requisições JSON para os seguintes endereços:

| Método | Endpoint | Descrição |
| :--- | :--- | :--- |
| **GET** | `/user` | Lista todos os usuários |
| **POST** | `/user/store` | Cria um novo usuário |
| **GET** | `/user/show/{id}` | Exibe detalhes de um usuário |
| **POST** | `/user/update/{id}` | Atualiza um usuário |
| **GET** | `/user/delete/{id}` | Remove um usuário |

```json
// Exemplo de Body para POST/UPDATE
{
    "NOME": "João Silva",
    "EMAIL": "joao@email.com"
}
```

```

---

### Como atualizar no GitHub agora:
Como você já fez o primeiro commit, agora basta enviar a correção:

1. Salve o arquivo `README.md` com o código acima.
2. No terminal, digite:
   ```bash
   git add README.md
   git commit -m "docs: corrigindo formatação do readme"
   git push origin main
   ```

**Dica do Gemini:** O segredo são os "crases" ( \` \` \` ). Eles indicam ao GitHub onde começa e termina um bloco de código, mantendo o desenho da pasta `Mvc/` e o SQL organizados!
```
